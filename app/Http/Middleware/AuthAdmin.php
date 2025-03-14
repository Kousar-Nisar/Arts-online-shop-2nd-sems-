<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Carn\Carbon;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->utype === 'ADM') 
            {
                $user = Auth::user();
                Cache::put('user-is-online-' . $user->id, true, now()->addMinutes(5));
                $user->last_activity = now();
                $user->save(); 
                if ($user->utype === 'ADM')  
                return $next($request);
            } else {
                
                return redirect()->route('login');
            }
        } else {
            return redirect()->route('login');
        }
        
    }

          /**
     * Track user activity for admin dashboard.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    
}



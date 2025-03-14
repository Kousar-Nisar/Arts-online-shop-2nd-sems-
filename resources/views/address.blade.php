@extends('layouts.app')

@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Address</h2>
        <div class="row">
            <div class="col-lg-3">
                <ul class="account-nav">
                    <li><a href="{{ route('account.dashboard') }}" class="menu-link menu-link_us-s menu-link_active">Dashboard</a></li>
                    <li><a href="{{ route('account.orders') }}" class="menu-link menu-link_us-s">Orders</a></li>
                    <li><a href="{{ route('account.addresses') }}" class="menu-link menu-link_us-s">Addresses</a></li>
                    <li><a href="{{ route('account.details') }}" class="menu-link menu-link_us-s">Account Details</a></li>
                    <li><a href="{{ route('account.wishlist') }}" class="menu-link menu-link_us-s">Wishlist</a></li>
                    <li><a href="{{ route('logout') }}" class="menu-link menu-link_us-s">Logout</a></li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="page-content my-account__address">
                    <div class="row">
                        <div class="col-6">
                            <p class="notice">The following addresses will be used on the checkout page by default.</p>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('account.addresses.add') }}" class="btn btn-sm btn-info">Add New</a>
                        </div>
                    </div>
                    <div class="my-account__address-list row">
                        <h5>Shipping Address</h5>

                        @foreach($addresses as $address)
                            <div class="my-account__address-item col-md-6">
                                <div class="my-account__address-item__title">
                                    <h5>{{ $address->name }} <i class="fa fa-check-circle text-success"></i></h5>
                                    <a href="{{ route('account.addresses.edit', $address->id) }}">Edit</a>
                                </div>
                                <div class="my-account__address-item__detail">
                                    <p>{{ $address->address_line_1 }}</p>
                                    <p>{{ $address->address_line_2 }}</p>
                                    <p>{{ $address->city }}, {{ $address->state }}</p>
                                    <p>{{ $address->landmark }}</p>
                                    <p>{{ $address->postal_code }}</p>
                                    <br>
                                    <p>Mobile : {{ $address->mobile_number }}</p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
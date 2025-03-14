@extends('layouts.app');
@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
        <h2 class="page-title">Address</h2>
        <div class="row">
            <div class="col-lg-3">
                @include('user.account-nav')
            </div>
            <div class="col-lg-9">
                <div class="page-content my-account__address">
                    <div class="row">
                        <div class="col-6">
                            <p class="notice">The following addresses will be used on the checkout page by default.</p>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('user.address.add') }}" class="btn btn-sm btn-info">Add New</a>
                        </div>
                    </div>
                    <div class="my-account__address-list row">
                        <h5>Shipping Address</h5>

                        @foreach($address as $address)
                            <div class="my-account__address-item col-md-6">
                                <div class="my-account__address-item__title">
                                    <h5>{{ $address->name }} <i class="fa fa-check-circle text-success"></i></h5>
                                    <a href="{{ route('user.address.edit', $address->id) }}">Edit</a>
                                </div>
                                <div class="my-account__address-item__detail">
                                    <p>{{ $address->address_line_1 }}</p>
                                    <p>{{ $address->address_line_2 }}</p>
                                    {{-- <p>{{ $address->city }}, {{ $address->state }}</p>
                                    <p>{{ $address->landmark }}</p>
                                    <p>{{ $address->postal_code }}</p>
                                    <br>
                                    <p>Mobile : {{ $address->mobile_number }}</p> --}}
                                    <p>{{$address->landmark}}</p>
                                    <p>{{$address->city}}, {{$address->state}}, {{$address->country}}</p>
                                    <p>{{$address->zip}}</p>
                                     <br/>
                                    <p>Phone :- {{$address->phone}}</p>                                        

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
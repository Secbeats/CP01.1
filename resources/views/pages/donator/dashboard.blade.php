@extends('layouts.app')
@section('content')
    <div class="blog-cource">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>D</span>onator's
                    <span>D</span>ashboard
                </h3>
                <div class="tittle-style">

                </div>
            </div>
            <div class="blog-info">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Fund Donation</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum delectus in auctor sapien. </p>
                    <a class="button-style" href="{{ url('/donator/account-credit') }}">Donate Fund</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo blog-info-mdl">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Transaction History</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
                    <a class="button-style" href="{{ url('/donator/transaction-history') }}">Latest Transaction</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-info">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Donation Requests</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante rerum hic a sapiente delectus in auctor sapien. </p>
                    <a class="button-style" href="{{ url('/donator/donation-requests') }}">Donation Requests</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo blog-info-mdl">
                <div class="col-xs-8 blog-grid-text">
                    <h4>My Donees</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
                    <a class="button-style" href="{{ url('/donator/my-donees') }}">View My Donees</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo blog-info-mdl">
                <div class="col-xs-8 blog-grid-text">
                    <h4>My Profile</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
                    <a class="button-style" href="{{ url('/donator/my-profile') }}">Check Profile</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
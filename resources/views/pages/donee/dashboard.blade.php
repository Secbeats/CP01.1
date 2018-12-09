@extends('layouts.app')
@section('content')
    <div class="blog-cource">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>D</span>onee's
                    <span>D</span>ashboard
                </h3>
                <div class="tittle-style">

                </div>
            </div>
            <div class="blog-info">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Get Donation</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum delectus in auctor sapien. </p>
                    <a class="button-style" href="{{ url('/donee/request-donation') }}">Get Donation</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo blog-info-mdl">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Donation History</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
                    <a class="button-style" href="{{ url('/donee/transaction-history') }}">Latest Donation</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-info">
                <div class="col-xs-8 blog-grid-text">
                    <h4>My Donation Requests</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante rerum hic a sapiente delectus in auctor sapien. </p>
                    <a class="button-style" href="{{ url('/donee/donation-requests') }}">My Donation Requests</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo blog-info-mdl">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Donators List</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
                    <a class="button-style" href="{{ url('/donee/donators') }}">Donators List</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo blog-info-mdl">
                <div class="col-xs-8 blog-grid-text">
                    <h4>My Profile</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
                    <a class="button-style" href="{{ url('/donee/my-profile') }}">Check Profile</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
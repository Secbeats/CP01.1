@extends('layouts.app')
@section('content')
    <div class="blog-cource">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>A</span>dmin
                    <span>D</span>ashboard
                </h3>
                <div class="tittle-style">

                </div>
            </div>
            <div class="blog-info">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Donators List</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum delectus in auctor sapien. </p>
                    <a class="button-style" href="{{ url('/admin/donators') }}">Donators List</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo blog-info-mdl">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Donees List</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
                    <a class="button-style" href="{{ url('/admin/donees') }}">Donees List</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-info">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Approve Donation</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante rerum hic a sapiente delectus in auctor sapien. </p>
                    <a class="button-style" href="{{ url('/admin/approve-donation') }}">Approve Donation</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-info">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Total Donation</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante rerum hic a sapiente delectus in auctor sapien. </p>
                    <a class="button-style" href="{{ url('/admin/total-donation') }}">Total Donation</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog-agileinfo blog-info-mdl">
                <div class="col-xs-8 blog-grid-text">
                    <h4>Withdrawal Fund</h4>
                    <p>Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien.
                        Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus. </p>
                    <a class="button-style" href="{{ url('/admin/withdrawal') }}">Withdrawal Fund</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <!-- banner -->
    <div class="inner_page_agile">

    </div>
    <!--//banner -->
    <!-- short -->
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short_ls">
                <li>
                    <a href="index.html">Home</a>
                    <span>| |</span>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <!-- about -->
    <div class="about-sec" id="about">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>S</span>ervices
                </h3>
                <div class="tittle-style">

                </div>
            </div>
            <div class="about-sub">
                <div class="col-md-6 about_bottom_left">
                    <h4>Welcome to
                        <span>Helping Ray</span>
                    </h4>
                    <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit, Nulla viverra pharetra sem eget.</p>
                    <p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
                        pulvinar neque pharetra ac.Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla
                        viverra pharetra sem.</p>
                    <a class="button-style" href="{{ url('/register') }}">Join Now</a>
                </div>
                <!-- Stats-->
                <div class="col-md-6 about2-info">
                    <img src="images/graduate.png" alt="" />
                </div>
                <!-- //Stats -->
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
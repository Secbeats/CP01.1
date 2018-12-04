@extends('layouts.app')
@section('content')
    <!-- banner -->
    <div class="inner_page_agile">

    </div>
    <!--//banner -->
    <!-- short-->
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short_ls">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                    <span>| |</span>
                </li>
                <li>Join Us</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>R</span>egistration
                    <span>F</span>orm
                </h3>
                <div class="tittle-style">

                </div>
            </div>
            <div class="register-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="fields-grid">
                        <div class="styled-input agile-styled-input-top">
                            <select class="category2" name="role" required="">
                                <option selected disabled>Choose Your Account Type</option>
                                <option value="donator">Donator</option>
                                <option value="donee">Donee</option>
                            </select>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="name" placeholder="Your Name" required autofocus>
                        </div>
                        <div class="styled-input">
                            <input type="email" placeholder="Your E-mail" name="email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="styled-input">
                            <input type="email" placeholder="Re Enter Your E-mail" name="reemail" required>
                        </div>
                        <div class="styled-input agile-styled-input-top">
                            <select class="category2" required="">
                                <option selected disabled>Choose Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="">Other</option>
                            </select>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" placeholder="Your Password" required>
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Re Enter Your Password" name="reemail" required>
                        </div>
                        <div class="styled-input">
                            <input id="contact" type="text" placeholder="Enter Your Contact Number" name="contact" required>
                        </div>
                        <div class="styled-input">
                            <label class="header">Your Address</label>
                            <div class="">
                                <input type="text" name="address" placeholder="Address" title="Please enter your Address" required="">
                            </div>
                            <div class="">
                                <input id="country" type="text" placeholder="Country" name="country" required>
                            </div>
                            <div class="">
                                <input type="text" name="city" placeholder="City" title="Please enter your City" required="">
                            </div>
                            <div class="">
                                <input type="text" name="zip" placeholder="Zip Code" title="Please enter your Zip code" required="">
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="styled-input">
                        <input type="checkbox" id="checkbox1" name="checkbox">
                        <label class="header" for="checkbox1">I Agree to the <a href="{{ url('/') }}"> Privacy Policy</a> & <a href="{{ url('/') }}" class="sinuo-class"> Terms of Service</a>.</label>
                    </div>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
@endsection

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
                    <span>C</span>onfirmation
                    <span>P</span>age
                </h3>
                <div class="tittle-style">

                </div>
                <div class="clearfix"></div>
                @include('includes.messages')
                @if(isset($errors))
                    @foreach($errors as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <p style="text-align: center;color: #EE5864;font-size: 150%;" class="breadcrumb">Please Verify Your Account From Your Email. The Verification Link Will Expire Within 24 Hours.</p>
            </div>
        </div>
    </div>
@endsection

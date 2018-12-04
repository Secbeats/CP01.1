@extends('layouts.confirm')
@section('content')
    @if(isset($errors))
        @foreach($errors as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
                <div class="agileits-inner-banner">
                </div>
                <!-- breadcrumbs -->
                <div class="w3layouts-breadcrumbs text-center">
                    <div class="container">
                        <span class="agile-breadcrumbs"><a href="{{ url('/') }}"><i class="fa fa-home home_1"></i></a><span>Verification</span></span>
                    </div>
                </div>
                <!-- //breadcrumbs -->
                <!-- Contact-page -->
                <!--contact-->
                <div class="contact-section w3layouts-content">
                    <div class="container">
                        <h3 class="w3-head">
                            @if(isset($errors))
                                @foreach($errors as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                        </h3>
                        <div class="contact-main">
                            <div class="col-md-12">
                                <p class="sed-para">Dear Valuable User,Your Registration has been completed Successfully. Please Check your Email and verify your Identity to login within the next 24 hours.</p>
                            </div>
                            <div class="clearfix"> </div>
                            <p class="sed-para pull-right"><i class="fa fa-home"></i>Return <a style="text-decoration: none;" href="{{ url('/') }}">Home</a></p>
                        </div>
                    </div>
                </div>
                <!--//contact-->
@endsection
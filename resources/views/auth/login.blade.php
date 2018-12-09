@extends('layouts.app')
@section('content')
    <div class="inner_page_agile">
    </div>
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short_ls">
                <li>
                    <a href="{{url('/')}}">Home</a>
                    <span>| |</span>
                </li>
                <li>Login</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>L</span>ogin
                    <span>F</span>orm
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
            </div>
            <div class="login-form">
                <form  class="form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="">
                        <p>User Name </p>
                        <input type="email" name="email" placeholder="Email" required autofocus />
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="">
                        <p>Password</p>
                        <input type="password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label class="anim">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span> Remember me ?</span>
                    </label>
                    <div class="login-agileits-bottom wthree">
                        <h6>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </h6>
                    </div>
                    <input type="submit" value="Login">
                    <div class="register-forming">
                        <p>To Register New Account --
                            <a href="{{ route('register') }}">Click Here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
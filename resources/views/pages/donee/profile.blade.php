@extends('layouts.app')
@section('content')
    <div class="inner_page_agile">

    </div>
    <!--//banner -->
    <!-- short-->
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short_ls">
                <li>
                    <a href="{{ url('/') }}">Dashboard</a>
                    <span>| |</span>
                </li>
                <li>My Profile</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>M</span>y
                    <span>P</span>rofile
                </h3>
                <div class="tittle-style">
                </div>
                @include('includes.messages')
                @if(isset($errors))
                    @foreach($errors as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="register-form">
                <form action="{{ url('/donee/my-profile') }}" method="post">
                    @csrf
                    <div class="fields-grid">
                        <div class="styled-input">
                            <input type="text" name="name" value="{{ $user->name }}" required>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="email" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="styled-input">
                            <input id="contact" name="address" type="text" value="{{ $usd->address }}" required>
                        </div>
                        <div class="styled-input">
                            <input id="contact" name="contact" type="text" value="{{ $usd->contact }}" required>
                        </div>
                        <div class="styled-input">
                            <input id="contact" name="country" type="text" value="{{ $usd->country }}" required>
                        </div>
                        <div class="styled-input">
                            <input id="contact" name="city" type="text" value="{{ $usd->city }}" required>
                        </div>
                        <div class="styled-input">
                            <input id="contact" name="zip" type="text" value="{{ $usd->zip }}" required>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="gender" value="{{ $usd->gender }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="submit" value="Update">
                </form>
            </div>
        </div>
    </div>
@endsection
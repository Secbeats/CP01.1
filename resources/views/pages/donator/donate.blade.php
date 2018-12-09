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
                <li>Donate Fund</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>D</span>onate
                    <span>F</span>und
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
                <form method="post" action="{{ url('/donator/account-credit') }}">
                    @csrf
                    <div class="fields-grid">
                        <div class="styled-input agile-styled-input-top">
                            <select class="category2" name="medium" required="">
                                <option selected disabled>Select Payment Medium</option>
                                <option value="bkash">Bkash</option>
                                <option value="rocket">Rocket</option>
                            </select>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="mobile_no" placeholder="Your Mobile No" required>
                        </div>
                        <div class="styled-input">
                            <input id="contact" name="amount" type="text" placeholder="Enter Amount to donate" required>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="user_role" value="donator">
                    <input type="hidden" name="type" value="credit">
                    <input type="hidden" name="status" value="requested">
                    <input type="hidden" name="reference" value="{{ Auth::user()->id }}">
                    <input type="submit" value="Donate">
                </form>
            </div>
        </div>
    </div>
@endsection
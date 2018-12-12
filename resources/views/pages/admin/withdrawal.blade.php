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
                <li>Withdrawal Fund</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>W</span>ithdrawal
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
                <form method="post" action="{{ url('/admin/withdrawal') }}">
                    @csrf
                    <div class="fields-grid">
                        <label class="header pull-left">Total Donated Amount: {{ $total }}</label>
                        <label class="header pull-right">Available Amount: {{ $available }}</label>
                    </div>
                    <div class="styled-input agile-styled-input-top">
                        <select id ="donator" class="category2" name="donator" required="">
                            <option selected disabled>Select Donator</option>
                            @foreach($trans as $t)
                                <option value="{{ $t->user_id }}" @if($t->user_id == $user){{ 'Selected' }} @endif>{{ $t->donator_name }}</option>
                            @endforeach
                        </select>
                    </div>
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
                            <div class="styled-input agile-styled-input-top">
                                <select id="amount" class="category2" name="amount" required="">
                                    <option selected disabled>Select Amount</option>
                                    @foreach($tdon as $t)
                                        <option value="{{ $t->amount }}" id="{{ $t->id }}">{{ $t->amount }}</option>
                                    @endforeach
                                </select>
                            </div>
                        <div class="styled-input agile-styled-input-top">
                            <select class="category2" name="reference" required="">
                                <option selected disabled>Select Donne to Donate</option>
                                @foreach($data as $d)
                                    <option value="{{ $d->donee_id }}">{{ $d->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="trans_id" id="trans" value="">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="user_role" value="admin">
                    <input type="hidden" name="type" value="debit">
                    <input type="hidden" name="status" value="approved">
                    <input type="submit" value="Withdrawal">
                </form>
            </div>
        </div>
    </div>
@endsection
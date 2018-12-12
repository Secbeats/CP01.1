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
                <li>View Donees Status</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>V</span>iew
                    <span>D</span>onee
                    <span>S</span>tatus
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
            <div class="register-form" style="overflow-x:auto;">
                @if( $total >= $needed)
                    <div class="fields-grid">
                        <label class="header center-block" style="color:blue;">Donation Amount {{ $needed }} BDT Already Collected For This Donee !</label>
                    </div>
                @else
                    <div class="fields-grid">
                        <label class="header pull-left" style="color:red;">Neeeded Amount: {{ $needed }}</label>
                        <label class="header pull-right" style="color: green;">Total Donation Amount: {{ $total }}</label>
                    </div>
                @endif
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>Serial No</th>
                        <th>Donee Name</th>
                        <th>Donator</th>
                        <th>Amount Donated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $count = 0
                    @endphp
                    @if(isset($data))
                        @foreach($data as $d)
                            @php $count++ @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $d->donee }}</td>
                                <td>{{ $d->d_name }}</td>
                                <td>{{ $d->amount }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
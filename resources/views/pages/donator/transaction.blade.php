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
                <li>Transaction History</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>T</span>ransaction
                    <span>H</span>istory
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
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>Serial No</th>
                        <th>Transaction Id</th>
                        <th>Transaction Amount</th>
                        <th>Payment Medium</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $count = 0
                    @endphp
                    @if(isset($trans))
                        @foreach($trans as $t)
                            @php $count++ @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $t->transaction_id }}</td>
                                <td>{{ $t->amount }}</td>
                                <td>{{ $t->medium }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
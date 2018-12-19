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
                <li>My Donation Requests</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>D</span>onation
                    <span>R</span>equests
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
                        <th>Purpose</th>
                        <th>Amount Needed</th>
                        <th>Address</th>
                        <th>Hospital</th>
                        <th>Contact</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $count = 0; @endphp
                    @foreach($data as $d)
                        @php $count++ @endphp
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{ $d->purpose }}</td>
                            <td>{{ $d->amount }}</td>
                            <td>{{ $d->address }}</td>
                            <td>{{ $d->hospital }}</td>
                            <td>{{ $d->contact }}</td>
                            <td class="@if($d->status == 'requested'){{ 'red' }}@endif">@if($d->status == 'requested'){{ 'pending' }}@else <a href="{{ url('/donee/transaction-history') }}" class="btn btn-success">Donation Status</a> @endif</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
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
                <li>My Donees</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>M</span>y
                    <span>D</span>onees
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
                        <th>Donee Name</th>
                        <th>Purpose</th>
                        <th>Amount Needed</th>
                        <th>Address</th>
                        <th>Hospital</th>
                        <th>Donation Confirmed</th>
                        <th>Action</th>
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
                                <td>{{ $d->dr->name }}</td>
                                <td>{{ $d->dr->purpose }}</td>
                                <td>{{ $d->dr->amount }}</td>
                                <td>{{ $d->dr->address }}</td>
                                <td>{{ $d->dr->hospital }}</td>
                                <td>{{ $d->amount }}</td>
                                <td>
                                    <a href="{{ url('/donator/view-donee/?donee='.$d->dr->donee_id) }}" class="btn btn-success">Check Status</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
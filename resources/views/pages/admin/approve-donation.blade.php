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
                <li>Approve Donation</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>A</span>pprove
                    <span>D</span>onation
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
                        <th>Name</th>
                        <th>Purpose</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Hospital</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $count = 0; @endphp
                    @foreach($data as $d)
                        @php $count++ @endphp
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->purpose }}</td>
                            <td>{{ $d->address }}</td>
                            <td>{{ $d->contact }}</td>
                            <td>{{ $d->hospital }}</td>
                            <td>{{ $d->amount }}</td>
                            <td>
                                <a href="{{ url('/') }}"><button class="btn btn-success">Approve</button></a>
                                <a href="{{ url('/') }}"><button class="btn btn-primary">Details</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
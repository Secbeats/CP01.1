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
                <li>Total Donation</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>T</span>otal
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
                        <th>Country</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $count = 0; $total = 0; @endphp
                    @foreach($data as $d)
                        @php $count++ @endphp
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{ $d->user->name }}</td>
                            <td>{{ $d->usd->country }}</td>
                            <td>{{ $d->usd->address }}</td>
                            <td>{{ $d->usd->contact }}</td>
                            <td>{{ $d->amount }}</td>
                        </tr>
                        @php $total += $d->amount  @endphp
                    @endforeach
                    <tr>
                        <td colspan="4"></td>
                        <td>Total</td>
                        <td>{{ $total }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
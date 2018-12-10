@extends('layouts.app')
@section('content')
    <!-- banner -->
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
                <li>Donee Details</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <!-- Gallery -->
    <div class="gallery">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>D</span>onee
                    <span>D</span>etails
                </h3>
                <div class="tittle-style">

                </div>
            </div>
            <div class="agileinfo-gallery-row">
                @foreach($data as $d)
                <div class="col-xs-4 w3gallery-grids">
                    <a href="{{ asset('/public/uploads/donees/'.$d->user_id.'/'.$d->file_name) }}" class="imghvr-hinge-right figure">
                        <img src="{{ asset('/public/uploads/donees/'.$d->user_id.'/'.$d->file_name) }}" alt="" title="Our Library" />
                        <div class="agile-figcaption">
                            <h4>{{ $d->file_name }}</h4>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //Gallery -->
@endsection
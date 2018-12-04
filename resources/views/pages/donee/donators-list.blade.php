@extends('layouts.app')
@section('content')
<div>
    <i class="icon fa fa-lightbulb-o inner-icon" aria-hidden="true"></i>
    @include('includes.messages')
    <div id="tab2" class="tab-grid">
        <div class="login-form">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                @php $count = 0; @endphp
                @foreach($data as $d)
                    @php $count++ @endphp
                <tr>
                    <td>{{ $count }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->usd->country }}</td>
                    <td>{{ $d->usd->address }}</td>
                </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
    @endsection
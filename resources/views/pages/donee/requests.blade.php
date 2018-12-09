@extends('layouts.app')
@section('content')
<div>
    <i class="icon fa fa-connectdevelop inner-icon" aria-hidden="true"></i>
    <div id="tab2" class="tab-grid">
        <div class="login-form">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Purpose</th>
                    <th>Amount Needed</th>
                    <th>Location</th>
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
                    <td class="@if($d->status == 'requested'){{ 'red' }}@else {{ 'green' }}@endif">@if($d->status == 'requested'){{ 'pending' }}@else {{ 'Verified' }}@endif</td>
                </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
    @endsection
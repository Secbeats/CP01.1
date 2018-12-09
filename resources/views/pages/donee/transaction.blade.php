@extends('layouts.app')
@section('content')
<div>
    <i class="icon fa fa-lightbulb-o inner-icon" aria-hidden="true"></i>
    <div id="tab2" class="tab-grid">
        <div class="login-form">
            <table class="table table-bordered">
                <thead>
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
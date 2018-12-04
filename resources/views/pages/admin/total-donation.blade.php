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
                            <td>{{ $d->amount }}</td>
                        </tr>
                        @php $total += $d->amount  @endphp
                    @endforeach
                    <tr>
                        <td colspan="3"></td>
                        <td>Total</td>
                        <td>{{ $total }}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
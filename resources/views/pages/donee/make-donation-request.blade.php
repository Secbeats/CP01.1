@extends('layouts.app')
@section('content')
<div>
    <i class="icon fa fa-flask inner-icon" aria-hidden="true"></i>
    <div id="tab2" class="tab-grid">
        @include('includes.messages')
        @if(isset($errors))
            @foreach($errors as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div class="login-form">
            <form action="{{ url('/donee/request-donation') }}" method="post" id="signup">
                @csrf
                <ol>
                    <li>
                        <h4>Donation Purpose</h4>
                        <input type="text" id="customer" name="purpose" placeholder="Donation Purpose" required="required" />
                    </li>
                    <li>
                        <h4>Address</h4>
                        <input type="text" id="customer"  name="address" placeholder="Your Address">
                    </li>
                    <li>
                        <h4>Contact</h4>
                        <input type="text" id="customer"  name="contact" placeholder="Your Contact No">
                    </li>
                    <li>
                        <h4>Amount</h4>
                        <input type="number" id="customer"  name="amount" placeholder="50000">
                    </li>
                    <input type="hidden" name="donee_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="status" value="requested">
                    <li>
                        <input type="submit" class="submit" value="Make Request" />
                    </li>
                </ol>
            </form>
        </div>
    </div>
</div>
    @endsection
@extends('layouts.app')
@section('content')
    <div>
        <i class="icon fa fa-flask inner-icon" aria-hidden="true"></i>
        @include('includes.messages')
        @if(isset($errors))
            @foreach($errors as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div id="tab2" class="tab-grid">
            <div class="login-form">
                <form action="{{ url('/donee/my-profile') }}" method="post" id="signup">
                    @csrf
                    <ol>
                        <li>
                            <h4>Your Name</h4>
                            <input type="text" id="customer" name="name" value="{{ $user->name }}" placeholder="Enter Your Name" required="required" />
                        </li>
                        <li>
                            <h4>Your Email</h4>
                            <input type="text" id="customer"  name="email" value="{{ $user->email }}" placeholder="youremail@domain.com" readonly>
                        </li>
                        <li>
                            <h4>Your Country</h4>
                            <input type="text" id="customer"  name="country" value="{{ $usd->country }}" placeholder="Country Name">
                        </li>
                        <li>
                            <h4>Your Country</h4>
                            <input type="text" id="customer"  name="zip" value="{{ $usd->zip }}" placeholder="Zip Code">
                        </li>
                        <li>
                            <h4>Your Address</h4>
                            <input type="text" id="customer"  name="address" value="{{ $usd->address }}" placeholder="Address">
                        </li>
                        <li>
                            <h4>Your Contact</h4>
                            <input type="text" id="customer"  name="contact" value="{{ $usd->contact }}" placeholder="Contact">
                        </li>
                        <li>
                            <input type="hidden" name="gender" value="{{ $usd->gender }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="submit" class="submit" value="Update" />
                        </li>
                    </ol>
                </form>
            </div>
        </div>
    </div>
@endsection

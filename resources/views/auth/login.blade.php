@extends('layouts.app')
@section('content')
    <div class="modal-body">
        <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active">Donation Login Panel</li>
            </ul>
            @include('includes.messages')
            @if(count( $errors ) > 0)
                @foreach ($errors->all() as $error)
                    <h1>{{ $error }}</h1>
                @endforeach
            @endif
            @if(isset($errors))
                @foreach($errors as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
            @endforeach
            @endif
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="Login">
                    <form  class="form-horizontal" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">
                                Email</label>
                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control" id="email1" placeholder="Email" required autofocus />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                Password</label>
                            <div class="col-sm-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                                <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
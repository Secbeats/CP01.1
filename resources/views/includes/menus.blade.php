<header>
    <div class="container">
        <!--logo-->
        <div class="logo">
            <h1><a href="{{ url('/') }}">Helping Ray</a></h1>
        </div>
        <!--//logo-->
        <div class="w3layouts-login">
            <a data-toggle="modal" data-target="#myModal" href="#"><i class="glyphicon glyphicon-user"> </i>Login/Register</a>
        </div>
        <div class="clearfix"></div>
        <!--Login modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;</button>
                        <h4 class="modal-title" id="myModalLabel">
                            Helping Ray</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-left:-5px;">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                                    <li><a href="#Registration" data-toggle="tab">Register</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="Login">
                                        <form  class="form-horizontal" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">
                                                    Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" class="form-control" id="email1" placeholder="Email" required autofocus />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" name="password" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-10">
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
                                                <div class="col-sm-10">
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
                                    <div class="tab-pane" id="Registration">
                                        <form  class="form-horizontal" method="POST" action="{{ url('/sign-up') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="role" class="col-sm-3 control-label">
                                                    Sign Up As</label>
                                                <div class="col-sm-9">
                                                    <label class="radio-inline"><input type="radio" name="role" value="donator" checked> Donator</label>
                                                    <label class="radio-inline"><input type="radio" name="role" value="donee"> Donee</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-3 control-label">
                                                    Name</label>
                                                <div class="col-sm-9">
                                                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-3 control-label">
                                                    Email</label>
                                                <div class="col-sm-9">
                                                    <input id="email" type="email" class="form-control" name="email" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-3 control-label">
                                                    Re Enter Email</label>
                                                <div class="col-sm-9">
                                                    <input id="reemail" type="email" class="form-control" name="reemail" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-sm-3 control-label">
                                                    Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" name="password" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password-confirm" class="col-sm-3 control-label">
                                                    Confirm Password</label>
                                                <div class="col-sm-9">
                                                    <input id="password-confirm" type="password" class="form-control" name="repass" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class="col-sm-3 control-label">
                                                    Country</label>
                                                <div class="col-sm-9">
                                                    <input id="country" type="text" class="form-control" name="country" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="zip" class="col-sm-3 control-label">
                                                    Zip Code</label>
                                                <div class="col-sm-9">
                                                    <input id="zip" type="text" class="form-control" name="zip">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact" class="col-sm-3 control-label">
                                                    Contact No</label>
                                                <div class="col-sm-9">
                                                    <input id="contact" type="text" class="form-control" name="contact" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="col-sm-3 control-label">
                                                    Address</label>
                                                <div class="col-sm-9">
                                                    <input id="address" type="text" class="form-control" name="address" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="gender" class="col-sm-3 control-label">
                                                    Gender</label>
                                                <div class="col-sm-9">
                                                    <label class="radio-inline"><input type="radio" name="gender" value="male" checked> Male</label>
                                                    <label class="radio-inline"><input type="radio" name="gender" value="female"> Female</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="organization" class="col-sm-3 control-label">
                                                    Type</label>
                                                <div class="col-sm-9">
                                                    <label class="radio-inline"><input type="radio" name="organization" value="Individual" checked> Individual</label>
                                                    <label class="radio-inline"><input type="radio" name="organization" value="organization"> Organization</label>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-9">
                                                    <input type="checkbox" id="checkbox1" name="checkbox">
                                                    <label for="checkbox1">I Agree to the <a href="{{ url('/') }}"> Privacy Policy</a> & <a href="{{ url('/') }}" class="sinuo-class"> Terms of Service</a>.</label>
                                                </div>
                                            </div>
                                                <div class="row">
                                                <div class="col-sm-3">
                                                </div>
                                                <div class="col-sm-9">
                                                    <button type="submit" class="submit btn btn-primary btn-sm">
                                                        Save & Continue</button>
                                                    <button type="reset" class="submit btn btn-default btn-sm">
                                                        Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//Login modal-->
    </div>
</header>

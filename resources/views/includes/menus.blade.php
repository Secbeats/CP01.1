
<div class="header">
    <div class="content white">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img style="height:55px;width:200px;padding:0 !important;margin: 0 !important;" src="{{ asset('/public/assets/images/logo.png') }}" alt="Helping Ray Logo">
                    </a>
                </div>
                <!--/.navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{ url('/') }}" class="effect-3">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('/about') }}" class="effect-3">About Us</a>
                            </li>
                            <li>
                                <a href="{{ url('/portfolio') }}" class="effect-3">Portfolio</a>
                            </li>
                            <li>
                                <a href="{{ url('/privacy') }}" class="effect-3">Privacy</a>
                            </li>
                            <li>
                                <a href="{{ url('/terms') }}" class="effect-3">Terms</a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}" class="effect-3">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--/.navbar-collapse-->
                <!--/.navbar-->
            </div>
        </nav>
    </div>
</div>

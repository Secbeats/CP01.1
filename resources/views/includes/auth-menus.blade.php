<header>
    <div class="container">
        <!--logo-->
        <div class="logo">
            <h1><a href="{{ url('/') }}">Donation</a></h1>
        </div>
        <!--//logo-->
        <div class="w3layouts-login">
            <a data-toggle="modal" data-target="#logout-modal" href="#"><i class="glyphicon glyphicon-user"></i>Hello {{ Auth::user()->name }}, Logout</a>
        </div>
        <div class="clearfix"></div>
    </div>
</header>
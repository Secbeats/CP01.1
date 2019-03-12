<body>
<!-- header -->
<div class="header-top">
    <div class="container">
        <div class="bottom_header_left">
            <p>
                <span class="fa fa-map-marker" aria-hidden="true"></span>Bashundhara R/A,Dhaka-1229.
            </p>
        </div>
        <div class="bottom_header_right">
            <div class="bottom-social-icons">
                <a class="facebook" href="#">
                    <span class="fa fa-facebook"></span>
                </a>
                <a class="twitter" href="#">
                    <span class="fa fa-twitter"></span>
                </a>
                <a class="pinterest" href="#">
                    <span class="fa fa-pinterest-p"></span>
                </a>
                <a class="linkedin" href="#">
                    <span class="fa fa-linkedin"></span>
                </a>
            </div>
            <div class="header-top-righ">
                <li style="list-style-type: none;" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="badge badge-light"><i class="fa fa-bell">{{ Auth::user()->notifications->count() }}</i></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach(Auth::user()->notifications as $notification)
                            @if(Auth::user()->role == 'admin')
                                <li><a style="font-size: 14px;" href="#">{{ $notification->data['message'] }}<br/><small><i class="fa fa-clock-o">&nbsp;{{ date('d-M-y h:i A',strtotime($notification->created_at)) }}</i></small></a></li>
                            @elseif(Auth::user()->role == 'donator')
                                <li><a style="font-size: 14px;" href="@if(isset($notification->data['donator_url'])){{ $notification->data['donator_url'] }}@endif">{{ $notification->data['message'] }}{{ ' '.$notification->data['data'] }}<br/><small><i class="fa fa-clock-o">&nbsp;{{ date('d-M-y h:i A',strtotime($notification->created_at)) }}</i></small></a></li>
                            @elseif(Auth::user()->role == 'donee')
                                <li><a style="font-size: 14px;" href="{{ $notification->data['donee_url'] }}">{{ $notification->data['message'] }}<br/><small><i class="fa fa-clock-o">&nbsp;{{ date('d-M-y h:i A',strtotime($notification->created_at)) }}</i></small></a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <a data-toggle="modal" data-target="#logout-modal" href="#"><span class="fa fa-sign-out" aria-hidden="true"></span>Logout</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
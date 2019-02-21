<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/jquery.flipster.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/custom.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/jquery.easy_slides.css') }}" type="text/css">
    <title>Helping Ray</title>
</head>
<body data-spy="scroll" data-target="#navbar-example2" data-offset="10">
<div class="full-page">
    <div class="header">
        <div class="top-bar bg-lightgreen">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h4>Welcome To</h4>
                    </div>
                    <div class="col-auto">
                        <ul class="d-flex align-items-center list-unstyled mb-0">
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/sign-up') }}">Join with us</a></li>
                            <li><a href="{{ url('/sign-up') }}">Donate</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar fixed-top1 navbar-expand-lg navbar-light bg-white" id="navbar-example2">
            <div class="container"> <a class="navbar-brand" href="#"><img src="{{ asset('/public/assets/images/logo.png') }}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/') }}">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/about-us') }}">About us</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/services') }}">Services</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/portfolio') }}">Portfolios</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="home-sec1 text-center" style="background-image:url({{ asset('/public/assets/images/home-banner.jpg') }})">
        <div class="home-sec1-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="slider slider_circle_10">
                            <div><img src="{{ asset('/public/assets/images/c1.jpg') }}"></div>
                            <div><img src="{{ asset('/public/assets/images/c2.jpg') }}"></div>
                            <div><img src="{{ asset('/public/assets/images/c3.jpg') }}"></div>
                            <div><img src="{{ asset('/public/assets/images/c5.jpg') }}"></div>
                            <div><img src="{{ asset('/public/assets/images/c7.jpg') }}"></div>
                            <div class="next_button"></div>
                            <div class="prev_button"></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="ban-cont text-center">
                            <h4>Helping Ray</h4>
                            <h5>Is a crowd Funding, <br>
                                Social Welfare Organization </h5>
                            <div class="doncircle">Donate</div>
                            <h6>A Chance To Get Involve With Helping Ray.
                               A True,Transparent Social Welfare Organization</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-sec2 text-center bg-bhura">
        <div class="container">
            <p>NGO in Bangladesh directly benefitting over 600,000 children and their families every year, through more than 250<br>
                live welfare projects on education, healthcare, livelihood and women empowerment, in over 950 remote villages and slums across<br>
                64 Districts of Bangladesh</p>
        </div>
    </div>
    <div class="home-sec3" style="background-image:url({{ asset('/public/assets/images/home-3-bg.jpg') }})">
        <div class="container">
            <div class="service-container">
                <div class="serve service-even bg-gredient-blue">
                    <div class="serve-cont">
                        <h3 class="bg-blue">Our Mission</h3>
                        <p>This is to empower underprivileged children, youth and women through relevant education,
                            innovative healthcare and market-focused livelihood programmers. This is to deploy best
                            possible methodology and technology for achieving ideal SROI (social return on investment),
                            to practice and promote good governance.</p>
                        <a href="#" class="more">More >></a> </div>
                </div>
                <div class="serve service-odd bg-gredient-orange">
                    <div class="serve-cont">
                        <h3 class="bg-orange">Our Activities</h3>
                        <p>Education Programmed Income Generation Programmed Technical Training Programmed
                            Awareness Camp Campaign on Health And More... </p>
                        <a href="#" class="more">More >></a> </div>
                </div>
                <div class="serve service-even bg-gredient-rose">
                    <div class="serve-cont">
                        <h3 class="bg-rose">Publications</h3>
                        <p>Education is both the means as well as the end to a better life: the means because it empowers
                            an individual to earn his/her livelihood and the end because it increases one's awareness on a
                            range of issues – from healthcare to appropriate social behavior to understanding one's
                            rights and in the process help him/her evolve as a better citizen.</p>
                        <a href="#" class="more">More >></a> </div>
                </div>
                <div class="serve service-odd bg-gredient-green">
                    <div class="serve-cont">
                        <h3 class="bg-green">Participate</h3>
                        <p>Doubtless, education is the most powerful catalyst for social transformation. But child
                            education cannot be done in isolation. A child will go to school only if the family, particularly
                            the mother, when an elder sibling is relevantly skilled to be employable and begins earning,
                            the journey of empowerment continues beyond the present generation.</p>
                        <a href="#" class="more">More >></a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-sec4 text-center bg-bhura common-pad borde-bott" id="services">
        <div class="container">
            <h3>YOU MAY HELP THEM</h3>
            <div class="flipster">
                <ul>
                    @foreach($dnr as $d)
                        <li targ="sec{{ $d->id }}">
                            <img src="{{ asset('/public/uploads/donees/'.$d->donee_id.'/'.$d->image) }}">
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="slid-content">
                @foreach($dnr as $d)
                <div class="nit" id="divsec{{$d->id}}">
                    <h5>Details :</h5>
                    <ul>
                        <li>Name : {{ $d->name }}</li>
                        <li>Purpose : {{ $d->purpose }}</li>
                        <li>Hospital : {{ $d->hospital }}</li>
                        <li>Amount Needed : {{ $d->amount }}</li>
                    </ul>
                    <div class="cirldonr">
                        <a href="{{ url('/sign-up') }}">Donate</a>
                    </div>
                </div>
                @endforeach

            </div>





        </div>
    </div>
    <div class="home-sec5 text-center" style="background-image:url({{ asset('/public/assets/images/galley-bg.jpg') }});">
        <div class="container">
            <h3>Thanks Lot the unkonwn people who help with us</h3>
            <img src="{{ asset('/public/assets/images/gallery1.png') }}" alt="gallery"> </div>
    </div>
    <div class="home-sec6" style="background-image:url({{ asset('/public/assets/images/sec7-bg.jpg') }});">
        <div class="container">
            <div class="inner-homesec6">
                <h4>WE ARE<br>
                    READY<br>
                    WITH<br>
                    THE<br>
                    BEST<br>
                    HUMA<br>
                    NITY</h4>
                <div class="circle">
                    <div class="inner-circle">
                        <div class="circle-top-left circle-top">
                            <div>
                                <span>50+</span>Donators
                            </div>
                        </div>
                        <div class="circle-top-right circle-top">
                            <div>
                                <span>50+</span>Donators
                            </div>
                        </div>
                        <div class="circle-bottom-left circle-bottom">
                            <div>
                                <span>50+</span>Donators
                            </div>
                        </div>
                        <div class="circle-bottom-right circle-bottom">
                            <div>
                                <span>50+</span>Donators
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-footer text-center" style="background-image:url({{ asset('/public/assets/images/footer-bg.jpg') }});" id="contact">
        <div class="footer-overlay">
            <div class="footer-pad">
                <div class="container">
                    <div class="row footer">
                        <div class="col-lg-4">
                            <h4>Location:</h4>
                            <ul>
                                <li>Bashundhara R/A,</li>
                                <li>Dhaka, Bangladesh</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h4>Mail Us:</h4>
                            <ul>
                                <li>Hotline : +8801970777XYZ</li>
                                <li>Email : <a href="mailto:Email : support@helpingray.com">Email : support@helpingray.com</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h4>Opening Hours:</h4>
                            <ul>
                                <li>Working Days : 10:00 am - 6:00 pm</li>
                                <li>Friday & Saturday (Closed)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about-us') }}">About us</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/portfolio') }}">Portfolios</a></li>
                            <li><a href="{{ url('/contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-md-between">
                <div class="col-lg-auto">
                    <div class="d-sm-flex align-items-center justify-content-md-center">
                        <div class="copy mr-4"> © 2019 Helping Ray. All rights reserved | Developed by Secbeats</div>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <ul>
                        <li><a href="#" class="bg-face"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="bg-twitt"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('/public/assets/js/bootstrap.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="{{ asset('/public/assets/js/jquery.flipster.js')}}"></script>
<script src="{{ asset('/public/assets/js/custom.js')}}"></script>
<script src="{{ asset('/public/assets/js/jquery.easy_slides.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.slider_circle_10').EasySlides({
            'autoplay': true,
            'show': 13
        })
    });

</script>
</body>
</html>
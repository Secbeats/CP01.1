@extends('layouts.app')
@section('content')
    <!-- banner -->
    <div class="inner_page_agile">

    </div>
    <!--//banner -->
    <!-- short -->
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short_ls">
                <li>
                    <a href="index.html">Home</a>
                    <span>| |</span>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <!-- about -->
    <div class="about-sec" id="about">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>A</span>bout
                    <span>U</span>s
                </h3>
                <div class="tittle-style">

                </div>
            </div>
            <div class="about-sub">
                <div class="col-md-12 about_bottom_left">
                    <h4>Welcome to
                        <span>Helping Ray</span>
                    </h4>
                    <p>Helping Ray foundation is a nonprofit organization which starts their mission with helping poor people those are unable to do their treatment because of the lack of money. Every year in Bangladesh many people died for the reason of not getting proper treatment for the lack of money. Our main goal is to provide fund to the poor patients from the donors safely. Mainly our key feature is our fully transparent money transaction system. In worldwide when donors donate their funds for the welfare of poor people, they are always hesitate and being confused about the use of their given funds. After giving the fund, they usually can’t trace their fund where their funds are using. For that reason NGO not be liable for any circumstance. Only for the reason, the percentage of donation by donators decreasing day by day. Because, people looses their faiths upon any organization. So, we came here with fully organized way to deduct the confusion of donors. They can donate their fund without any hesitation and by our system they can trace or see their money that where they will be used. We are just a safe way to forward the fund from donors to donation seekers. Initially we staring our mission on the basis of our health sector. We will have different functions in our organization. But in beginning we just forward the funds from donors to donation seekers. Every day we see in Bangladesh that when a poor people or a financially unable person need fund for a major surgery or treatment they need to bring them out in road and go to the door to door. In that case general people get confuse because of the lack of trust issue. So that most of the people avoid these types of people and case. If those people get ensure about the donation seekers and can verify them, they must think to help them by their own way. With these several thinking, we are stating our journey named as Helping Ray Foundation to protect people’s trust and money both. By this foundation anyone don’t need to carry any doubt and anyone can help a poor person who need proper treatment.</p>
                    <a class="button-style" href="{{ url('/register') }}">Join Now</a>
                </div>
                <!-- Stats-->
                <div class="col-md-6 about2-info">
                    <img src="images/graduate.png" alt="" />
                </div>
                <!-- //Stats -->
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    @endsection
<!-- footer -->
<div class="mkl_footer">
    <div class="sub-footer">
        <div class="container">
            <div class="mkls_footer_grid">
                <div class="col-xs-4 mkls_footer_grid_left">
                    <h4>Location:</h4>
                    <p>Bashundhara R/A,
                        <br> Dhaka, Bangladesh</p>
                </div>
                <div class="col-xs-4 mkls_footer_grid_left">
                    <h4>Mail Us:</h4>
                    <p>
                        <span>Phone : </span>001 234 5678</p>
                    <p>
                        <span>Email : </span>
                        <a href="mailto:support@helpingray.com">support@helpingray.com</a>
                    </p>
                </div>
                <div class="col-xs-4 mkls_footer_grid_left">
                    <h4>Opening Hours:</h4>
                    <p>Working days : 10am-6pm</p>
                    <p>Friday,Saturday
                        <span>(closed)</span>
                    </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="botttom-nav-allah">
                <ul>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ url('/portfolio') }}">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{ url('/privacy') }}">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="{{ url('/terms') }}">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copy-right">
        <div class="container">
            <div class="allah-copy">
                <p>© 2019 Helping Ray. All rights reserved | Design by
                    <a href="http://www.secbeats.com/">Secbeats</a>
                </p>
            </div>
            <div class="footercopy-social">
                <ul>
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-rss"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-vk"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--/footer -->
<div class="modal fade" id="logout-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div  class="modal-dialog" role="document">
        <div class="modal-content modal-form">
            <form method="post" action="{{ url('/logout') }}">
                @csrf
                <div class="modal-body text-center modal-padding">
                    <div class="icon-delete text-center"><i class="fas fa-sign-out-alt"></i></div>
                    <p>Are you sure you want to logout?</p>
                    <button type="submit" class="btn btn-default">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- js files -->
<!-- js -->
<script src="{{ asset('/public/assets/js/jquery-2.1.4.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('/public/assets/js/bootstrap.js') }}"></script>
<!-- stats numscroller-js-file -->
<script src="{{ asset('/public/assets/js/numscroller-1.0.js') }}"></script>
<!-- //stats numscroller-js-file -->

<!-- Flexslider-js for-testimonials -->
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 1,
            animationSpeed: 1000,
            autoPlay: false,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 1
                }
            }
        });

    });
</script>
<script src="{{ asset('/public/assets/js/jquery.flexisel.js') }}"></script>
<!-- //Flexslider-js for-testimonials -->
<!-- smooth scrolling -->
<script src="{{ asset('/public/assets/js/SmoothScroll.min.js') }}"></script>
<script src="{{ asset('/public/assets/js/move-top.js') }}"></script>
<script src="{{ asset('/public/assets/js/easing.js') }}"></script>
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->
<!-- //js-files -->

</body>

</html>
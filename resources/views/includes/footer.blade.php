<!--footer-->
<footer>
    <div class="w3l-footer-bottom">
        <div class="container-fluid">
            <div class="col-md-4 w3-footer-logo">
                <h2><a href="{{ url('/') }}">Helping Ray</a></h2>
            </div>
            <div class="col-md-8 agileits-footer-class">
                <p >© 2018 Helping Ray. All Rights Reserved | Powered by  <a href="http://secbeats.com/" target="_blank">Secbeats</a> </p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</footer>
<!--//footer-->
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

<!-- for bootstrap working -->
<script src="{{ asset('/public/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('/public/assets/js/moment.js') }}"></script>
<script src="{{ asset('/public/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<!-- //for bootstrap working --><!-- Responsive-slider -->
<!-- Banner-slider -->
<script src="{{ asset('/public/assets/js/responsiveslides.min.js') }}"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!-- //Banner-slider -->
<!-- //Responsive-slider -->
<!-- Bootstrap select option script -->
<script src="{{ asset('/public/assets/js/bootstrap-select.js') }}"></script>
<script>
    $(document).ready(function () {
        var mySelect = $('#first-disabled2');

        $('#special').on('click', function () {
            mySelect.find('option:selected').prop('disabled', true);
            mySelect.selectpicker('refresh');
        });

        $('#special2').on('click', function () {
            mySelect.find('option:disabled').prop('disabled', false);
            mySelect.selectpicker('refresh');
        });

        $('#basic2').selectpicker({
            liveSearch: true,
            maxOptions: 1
        });
    });
</script>
<!-- //Bootstrap select option script -->

<!-- easy-responsive-tabs -->
<link rel="stylesheet" type="text/css" href="{{ asset('/public/assets/css/easy-responsive-tabs.css') }}" />
<script src="{{ asset('/public/assets/js/easyResponsiveTabs.js') }}"></script>
<!-- //easy-responsive-tabs -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('/public/assets/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/assets/js/easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/assets/js/custom.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->
</body>
<!-- //body -->
</html>
<!-- //html -->
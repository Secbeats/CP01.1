// JavaScript Document
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 41) {
            $('.fixed-top1').addClass("fixed-sticky");
        } else {
            $('.fixed-top1').removeClass("fixed-sticky");
        }
    });
    $(function(){
        $(".flipster").flipster({
            style: 'carousel',
            enableMousewheel: false,
            enableNavButtons: true
        });

    });
});




 
$(document).ready(function () {
    // head transform
    $(window).scroll(function () {
        var bau = $('.banner').height() + $('.head-contact').height();
        if ($(this).scrollTop() >= bau) {
            if ($('body').width() > 768) {
                $('.head-menu').addClass('fixed-menu');
            } else {
                $('.head-menu').addClass('fixed-small');
            }
        } else {
            if ($('header').width() > 768) {
                $('.head-menu').removeClass('fixed-menu');
            } else {
                $('.head-menu').removeClass('fixed-small');
            }
        }
    });
    // post-image   
    y = $('.bigImgHere').width();
    $('.bigImgHere').css('height', y * 0.7 );
    x = $('.imghere').width();
    $('.imghere').css('height', x * 0.7 );
    // owl
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        autoplay: true,
        lazyLoad: true,
        nav:false,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:2.5,
                autoplayTimeout: 3000,
                slideBy: 2,
            },
            600:{
                items:4.5,
                autoplayTimeout: 3000,
                slideBy: 4,
            }
        }
    })
    $('.imghere').mouseover(function() {
        $('.imghere').removeClass('here');
        $(this).addClass('here');
        x = $(this).attr('src');
        $('.bigImgHere').attr('src', x);
    })
});
// wow.js
new WOW().init();
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
    x = $('.thingsImage').width();
    $('.thingsImage').css('height', x * 0.7);
    x = $('.cardImage').width();
    $('.cardImage').css('height', x);
    // owl 
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});
// wow.js
new WOW().init();
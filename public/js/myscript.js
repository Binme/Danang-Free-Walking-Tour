// slide welcome
$('.carousel').carousel({
    interval: 3500,
    pause: false
});
// function carousel home-thingstodo
var owl = $('.things-carousel');
owl.owlCarousel({
    loop:true,
    margin:20,
    center:false,
    responsive:{
        0:{
            items: 2.5 ,
            center: false,
            margin:5,
        },
        600:{
            items:4.5,
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});
// news carousel
var owl2 = $('.news-carousel');
owl2.owlCarousel({
    loop:false,
    margin:50,
    center:false,
    responsive:{
        0:{
            items: 2 ,
            center: false,
            margin:5,
        },
        600:{
            items:2,
        }
    }
});
owl2.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl2.trigger('next.owl');
    } else {
        owl2.trigger('prev.owl');
    }
    e.preventDefault();
}); 
// function load img post\
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
    $('.thingsImage').css('height', x * 0.7 );
    x = $('.cardImage').width();
    $('.cardImage').css('height', x);
});
window.addEventListener("load", function(event) {
    lazyload();
});
// wow.js
new WOW().init();

// function change thingstodo - home

function thingschange(id) {
    $('.things-but').removeClass('things-but-clicked');
    $(id).addClass('things-but-clicked')
}
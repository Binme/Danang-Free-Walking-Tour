// slide welcome
$('.carousel').carousel({
    interval: 3500,
    pause: false
});
// function carousel home-thingstodo
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:20,
    center:false,
    responsive:{
        0:{
            items: 2.5 ,
            center: false
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
// function load img post\
$(document).ready(function () {
    // head transform
    $(window).scroll(function () {
        var bau = $('.banner').height() + $('.head-contact').height();
        console.log(bau);
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
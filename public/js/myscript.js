// slide welcome
$('.carousel').carousel({
    interval: 3500,
    pause: false
});
// function carousel home-thingstodo
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop: true,
    margin: 20,
    lazyLoad: true,
    responsive: {
        0: {
            items: 2.5,
            margin: 5,
            autoplay: true,
            autoplayTimeout: 3000,
            slideBy: 2,
        },
        600: {
            items: 4.5,
            autoplay: true,
            autoplayTimeout: 1000,
            slideBy: 1,
            autoplayHoverPause: true,
        }
    }
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
    $('.thingsImage').css('height', x * 0.7);
    x = $('.cardImage').width();
    $('.cardImage').css('height', x);
});
window.addEventListener("load", function (event) {
    lazyload();
});
// wow.js
new WOW().init();

// function change thingstodo - home
$('.things-but').on('click', function(){
    $('.things-but').removeClass('things-but-clicked');
    $(this).addClass('things-but-clicked');
})
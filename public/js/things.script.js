$(document).ready(function () {
    // post-image   
    x = $('.oblong-img').width();
    $('.oblong-img').css('height', x * 0.7);
    y = $('.square-img').width();
    $('.square-img').css('height', y);
    z = $('.img-recmm').width();
    $('.img-recmm').css('height', z * 0.5);
    a = $(window).width();
    if (a < 768) {
        b = ($('.avt img').height() / 2) + 28;
        $('.info-rated').css('top', b);
        c = b - 28;
        $('.name-text').css('top', c);
        $('.info-text').css('margin-top', b + 10 );
    }
    $('.toggle').click(function() {
        if ($(this).css('top') < '80%' ) {
            $(this).addClass('move-toggle');
            $('.things-catalog').addClass('move-catalog');
        }    
        else{
            $(this).removeClass('move-toggle');
            $('.things-catalog').removeClass('move-catalog');
        } 
    });
});
// wow.js
new WOW().init();
$('.menu-list').slick({
    dots: true,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    lazyLoad: 'ondemand',
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            rows: 3,
        }
    }]
});
$('.likes-list').slick({
    dots: true,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    lazyLoad: 'ondemand',
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
    }]
});
$('.carousel').carousel({
    interval: 2500,
    pause: false
});

function prevent() {
    event.preventDefault()
};

$(document).ready(function () {
    $(window).scroll(function () {
        var bau = $('.banner').height() + $('.head-contact').height();
        console.log(bau);
        if ($(this).scrollTop() > bau ) {
            if ($('body').width() > 768) {
                $('.head-menu').addClass('fixed-menu');
            } else {
                $('.head-menu').addClass('fixed-small')
            }
        } else {
            if ($('header').width() > 768) {
                $('.head-menu').removeClass('fixed-menu');
            } else {
                $('.head-menu').removeClass('fixed-small')
            }
        }
    });
});

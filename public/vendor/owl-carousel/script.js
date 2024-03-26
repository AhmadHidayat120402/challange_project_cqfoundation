// Owl Carousel
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 1000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        720: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})

// Scroll Top
$(function () {
    var shrinkHeader = 100;
    $(window).scroll(function () {
        var scroll = getCurrentScroll();
        if (scroll >= shrinkHeader) {
            $('nav').addClass('shrink');
            $('#scrolltop').addClass('show-scroll');
        } else {
            $('nav').removeClass('shrink');
            $('#scrolltop').removeClass('show-scroll');
        }
    });

    function getCurrentScroll() {
        return window.pageYOffset;
    }
});
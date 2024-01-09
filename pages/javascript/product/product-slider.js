$(document).ready(function () {
    $('.top-deals-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        dots: false,
        arrows: true,
        prevArrow: '<span class="slick-prev"><i class="feather-icon icon-chevron-left"></i></span>',
        nextArrow: '<span class="slick-next"><i class="feather-icon icon-chevron-right"></i></span>',
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 820,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            // Add more options as needed
        ]
    });
});

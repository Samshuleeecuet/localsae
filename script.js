// JavaScript source code
$(document).ready(function () {

    $(".open").click(function () {
        $(".togglesearch").toggle();
        $("input[type='text']").focus();
    });
    $(".on").click(function () {
        $(".off").show();
        $(".on").hide();
        $(".search-box").show();
    });
    $(".off").click(function () {
        $(".on").show();
        $(".off").hide();
        $(".search-box").hide();
    });


    var bg = document.querySelector('.item-bg');
    var items = document.querySelectorAll('.card');
    var item = document.querySelector('.card');

    function cLog(content) {
        console.log(content)
    }

    if ($(window).width() > 800) {
        $(document).on("mouseover", ".card", function (_event, _element) {

            var newsItem = document.querySelectorAll('.card');
            newsItem.forEach(function (element, index) {
                element.addEventListener('mouseover', function () {
                    var x = this.getBoundingClientRect().left;
                    var y = this.getBoundingClientRect().top;
                    var width = this.getBoundingClientRect().width;
                    var height = this.getBoundingClientRect().height;

                    $('.item-bg').addClass('active');
                    $('.card').removeClass('active');
                    // $('.news__item').removeClass('active');
                });

                element.addEventListener('mouseleave', function () {
                    $('.item-bg').removeClass('active');
                    $('.card').removeClass('active');
                });

            });

        });
    }


    // Slider 

    var swiper = new Swiper('.mem-slider', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        keyboard: true,
        spaceBetween: 0,
        slidesPerView: 'auto',
        speed: 300,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 3,
            slideShadows: false
        },
        breakpoints: {
            480: {
                spaceBetween: 0,
                centeredSlides: true
            }
        },
        simulateTouch: true,
        navigation: {
            nextEl: '.mem-slider-next',
            prevEl: '.mem-slider-prev'
        },
        pagination: {
            el: '.mem-slider__pagination',
            clickable: true
        },
        on: {
            init: function () {
                var activeItem = document.querySelector('.swiper-slide-active');

                var sliderItem = activeItem.querySelector('.card');

                $('.swiper-slide-active .card').addClass('active');
                $('.item-bg').addClass('active');
            }
        }
    });

    var swiper = new Swiper('.mem-slider', {
        effect: 'coverflow',
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        keyboard: true,
        spaceBetween: 0,
        slidesPerView: 'auto',
        speed: 300,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 3,
            slideShadows: false
        },
        breakpoints: {
            480: {
                spaceBetween: 0,
                centeredSlides: true
            }
        },
        simulateTouch: true,
        navigation: {
            nextEl: '.mem-slider-next',
            prevEl: '.mem-slider-prev'
        },
        pagination: {
            el: '.mem-slider__pagination',
            clickable: true
        },
        on: {
            init: function () {
                var activeItem = document.querySelector('.swiper-slide-active');

                var sliderItem = activeItem.querySelector('.card');

                $('.swiper-slide-active .card').addClass('active');


            }
        }
    });

    swiper.on('touchEnd', function () {
        $('.card').removeClass('active');
        $('.swiper-slide-active .news__item').addClass('active');
    });

    swiper.on('slideChange', function () {
        $('.card').removeClass('active');
    });

    swiper.on('slideChangeTransitionEnd', function () {
        $('.card').removeClass('active');
        var activeItem = document.querySelector('.swiper-slide-active');

        var sliderItem = activeItem.querySelector('.card');

        $('.swiper-slide-active .card').addClass('active');



    });
});
// typing text animation script
var typed = new Typed(".typing", {
    strings: ["CEO of SAE","Engineer", "Developer", "Designer", "Freelancer"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

var typed = new Typed(".typing-2", {
    strings: ["Engineer", "Developer", "Designer", "Freelancer"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

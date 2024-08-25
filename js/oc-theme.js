//menu header
$('.js-mobile').on('click', function(){
    $(this).toggleClass("js-mobile--close");
    $("html").toggleClass("js-locked");
    // $(".nav-menu").slideToggle();
    // e.preventDefault();
    $(".header-nav").fadeToggle();
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 10) {
        $("#header").addClass("js-fixed");
    }
    else {
        $("#header").removeClass("js-fixed");
    }
});


jQuery('.js-openpopup').click(function(e) {
    e.preventDefault();
    $(".popup-tel").addClass("active");
    $("html").addClass("js-locked");
});
jQuery('.js-close').click(function(e) {
    e.preventDefault();
    $(".popup-tel").removeClass("active");
    $("html").removeClass("js-locked");
});


//siider-home
$('.js-mv-slider').slick({
    dots: true,
    focusOnSelect: true,
    pauseOnHover:false,
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    cssEase: 'linear'
});

var window_type;
var $window = $(window);
if ($window.width() <= 834) {
    window_type = 'sp';
} else {
    window_type = 'pc';
}
$(window).resize(function() {
    if($window.width() <= 834){
        if( (window_type != 'sp') ){
            location.reload();
        }
    }else{
        if(window_type != 'pc'){
            location.reload();
        }
    }
});

$(document).ready(function() {
    if($(window).width()<834){
        $(".js-promise-list").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            centerMode: true,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [
                {
                    breakpoint: 640,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    }
    else{
    }
});





// $(".js-product").slick({
//   slidesToShow: item,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 2000,
// });


// $(function () {
//     objectFitImages('img');
// });


//matchHeight
jQuery(function ($) {
    $('.promise-list .promise-list__item .promise-list__box').matchHeight();
    $('.treatment-block .treatment-block__item .treatment-block__box').matchHeight();
});



//fade
$(window).on('scroll load assessFeatureHeaders', function(){
    var scrollTop = $(window).scrollTop();
    var appearenceBuffer = 60;
    var windowBottom = scrollTop + $(window).height() - appearenceBuffer;
    $('body').toggleClass('scrolled-down', scrollTop > 0);
    $('.js-scrollin:not(.active)').filter(function(){
        var offset = $(this).offset().top;
        var height = $(this).outerHeight();
        return offset + height >= scrollTop && offset <= windowBottom;
    }).addClass('active');
});


//backtop
jQuery(document).ready(function ($) {
    $(window).on("scroll", function () {
        if($(window).scrollTop()> $(".policy-block__img").offset().top ){
            $(".sticky-box").addClass("change-img");
        }
        else {
            $(".sticky-box").removeClass("change-img");
        }
    });
});
$(document).ready(function () {
    $('.wrap-each-promotionhome2').height($('.wrap-each-promotionhome2').width());
    console.log($('.swiper-keypoint .swiper-slide:first-child').width());

    //initialize swiper when document ready
    var window_w = $(window).width();
    var swiper = new Swiper('.slider-lv1', {
        slidesPerView: 5,
        paginationClickable: true,
        autoplay: 3500,
        speed: 1200,
        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev',
        autoplayDisableOnInteraction: false,
        breakpoints:{
            480:{
                slidesPerView: 2,
            }
        }
    });
    var mySwiperhomehorizal = new Swiper ('.slider-lv2', {
        // Optional parameters
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 15,
        centeredSlides: true,
        autoplay: 4000,
        speed: 1200,
        autoplayDisableOnInteraction: false,
        preventClicks: false
    });

    var mySwiperPromotionHome = new Swiper ('.swiper-promotionhome', {
         slidesPerView: 4,
         spaceBetween: 15,
        autoplay: 4000,
        speed: 1000,

    })

    var mySwiperTestimonialHome = new Swiper('.testimonial-slide-home',{
        slidesPerView: 1,
        spaceBetween: 15,
        autoplay: 3500,
        speed: 1200,
        preventClicks: false,
        breakpoints:{
            769:{
                // direction: 'vertical',
                // slidesPerView: 3,
                // height: 660,
                // spaceBetween: 5,
                // autoplay: false
                spaceBetween: 0,
            },
            481:{
                // autoHeight: true
                spaceBetween: 0,
            }
        }
    })
    if(window_w <= 768){
        mySwiperTestimonialHome.destroy();
    }


    $('.wrap-content-country').hover(function(){
        mySwiperhomehorizal.stopAutoplay();
    },function(){
        mySwiperhomehorizal.startAutoplay();
    })

    var mySwiper = new Swiper ('.slider-lv3', {
        // Optional parameters
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 4000,
        speed: 800,
        autoplayDisableOnInteraction: false
    });

    var sliderTestimonialDetail = new Swiper ('.slider-testimonial-detail',{
        spaceBetween: 5,
        centeredSlides: true,
        autoplay: 4000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        slidesPerView: 1,
    });

    

});
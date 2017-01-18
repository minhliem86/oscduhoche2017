$(document).ready(function () {
    //initialize swiper when document ready  
    var swiper = new Swiper('.slider-lv1', {
        slidesPerView: 5,
        paginationClickable: true,
        spaceBetween: 15,
        autoplay: 5500,
        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev',
        autoplayDisableOnInteraction: false
    });
    var mySwiper = new Swiper ('.slider-lv2', {
        // Optional parameters
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 15,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });      
    var mySwiper = new Swiper ('.slider-lv3', {
        // Optional parameters
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    var mySwiper = new Swiper ('.slider-lv4', {
        // Optional parameters
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: false,
        autoplayDisableOnInteraction: false
    });
});
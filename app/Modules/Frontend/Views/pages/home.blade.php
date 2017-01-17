@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
    <script src="{!!asset('public/assets/frontend')!!}/js/jquery.md5.js"></script>
	<script>
        $(document).ready(function () {
            //initialize swiper when document ready
            var swiper = new Swiper('.slider-lv1', {
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 30,
                autoplay: 2500,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                autoplayDisableOnInteraction: false
            });
            var mySwiper = new Swiper ('.slider-lv2', {
                // Optional parameters
                pagination: '.swiper-pagination',
                paginationClickable: true,
                spaceBetween: 30,
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
      });
    </script>
    <script src="{!!asset('public/assets/frontend')!!}/js/common.js"></script>
@stop

@section('content')
<!-- **************** Wellcome ****************-->
<section class="wellcome clearfix">
    <div class="container">
        <center>
            <h2>CHÀO MỪNG ĐẾN VỚI <br>CHƯƠNG TRÌNH DU HỌC HÈ 2017</h2>
            <hr class="hr">
            <p class="title-sub">Cras rutrum nulla a bibendum feugiat <br>Ut aliquam dolor a neque dictum elementum</p>
        </center>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="swiper-container slider-lv1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{!!asset('public/assets/frontend')!!}/images/icon-earth.png" alt="">
                            <hr class="hr">
                            <p class="title-slider">Mở rộng tầm nhìn<br>tự lập</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="{!!asset('public/assets/frontend')!!}/images/icon-feather.png" alt="">
                            <hr class="hr">
                            <p class="title-slider">Rèn luyện tính<br>ra thế giới</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="{!!asset('public/assets/frontend')!!}/images/icon-user.png" alt="">
                            <hr class="hr">
                            <p class="title-slider">Gặp gỡ và giao lưu<br>bạn bè quốc tế </p>
                        </div>
                        <div class="swiper-slide">
                            <img src="{!!asset('public/assets/frontend')!!}/images/icon-earth.png" alt="">
                            <hr class="hr">
                            <p class="title-slider">Mở rộng tầm nhìn<br>tự lập</p>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- **************** /Wellcome ****************-->
@include('Frontend::layouts.listCountries')
<!-- **************** Pro - Testi ****************-->
<section class="pro-test container clearfix">
    <div class="col-xs-12 col-sm-6">
        <div class="pro-text">
            <h2>PROMOTIONS</h2>
            <hr class="hr">
            <h4>Ho Chi Minh</h4>
            <p class="text-red">15/01 - <span>Lorem ipsum dolor sit amet, cons ectetur </span></p>
            <h4>Da Nang</h4>
            <p>15/01 - <span>Lorem ipsum dolor sit amet, cons ectetur </span></p>
            <h4>Ha Noi</h4>
            <p>15/01 - <span>Lorem ipsum dolor sit amet, cons ectetur </span></p>
        </div>
        <div class="img-box">
            <img src="{!!asset('public/assets/frontend')!!}/images/img-pro-01.png" alt="">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="pro-text">
            <h2>TESTIMONIAL</h2>
            <hr class="hr">
            <h4>Mr.A</h4>
            <p>Cras rutrum nulla a bibendum feugiat. Ut aliquam dolor a neque dictum elementum. Ut ipsum diam, sagittis malesuada turpis ut, suscipit iaculis ligula</p>
            <button class="btn btn-read">Read more</button>
        </div>
        <div class="img-box">
            <div class="swiper-container slider-lv3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{!!asset('public/assets/frontend')!!}/images/img-pro-02.png" alt=""></div>
                    <div class="swiper-slide"><img src="{!!asset('public/assets/frontend')!!}/images/img-pro-02.png" alt=""></div>
                    <div class="swiper-slide"><img src="{!!asset('public/assets/frontend')!!}/images/img-pro-02.png" alt=""></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<!-- **************** /Pro - Testi ****************-->
<!-- **************** Video ****************-->
<section class="video container clearfix">
   <center>
       <h2>Video Title</h2>
       <div class="col-xs-12 video-box">
           <img src="{!!asset('public/assets/frontend')!!}/images/img-video-01-04.png" alt="">
       </div>
   </center>
</section>
<!-- **************** /Video ****************-->
<!-- **************** Register ****************-->
<section class="reg clearfix">
    <div class="container">
        <center>
            <h2>ĐĂNG KÝ & TƯ VẤN</h2>
            <hr class="hr">
        </center>
        @include('Frontend::layouts.formRegister')
    </div>
</section>
<!-- **************** /Register ****************-->
@stop
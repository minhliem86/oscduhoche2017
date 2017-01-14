@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
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
<!-- **************** Discover ****************-->
<section class="discover container-fluid">
    <center>
        <h2>KHÁM PHÁ ĐIỂM ĐẾN</h2>
        <hr class="hr">
        <ul class="to-local nopadding inline-list">
            <li class="active-bold"><a href="#">MỸ</a></li>
            <li><a href="#">CANADA</a></li>
            <li><a href="#">ANH</a></li>
            <li><a href="#">PHÁP</a></li>
            <li><a href="#">ÚC</a></li>
            <li><a href="#">SINGAPORE</a></li>
            <li><a href="#">MALAYSIA</a></li>
        </ul>
    </center>
    <div class="container">
        <div class="top-box">
            <div class="col-xs12 col-sm-7 nopadding">
                <div class="swiper-container slider-lv2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{!!asset('public/assets/frontend')!!}/images/bannerlv2.png"></div>
                        <div class="swiper-slide"><img src="{!!asset('public/assets/frontend')!!}/images/bannerlv2.png"></div>
                        <div class="swiper-slide"><img src="{!!asset('public/assets/frontend')!!}/images/bannerlv2.png"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 nopadding">
                <div class="col-xs-6 nopadding">
                    <div class="overlay-img">
                        <img src="{!!asset('public/assets/frontend')!!}/images/img-well-02.png" alt="">
                    </div>
                    <p class="title-country">ANH</p>
                    <button class="btn btn-dis">ĐĂNG KÝ</button>
                </div>
                <div class="col-xs-6 nopadding">
                    <div class="overlay-img">
                        <img src="{!!asset('public/assets/frontend')!!}/images/img-well-02.png" alt="">
                    </div>
                    <p class="title-country">SINGAPORE</p>
                    <button class="btn btn-dis">ĐĂNG KÝ</button>
                </div>
                <div class="col-xs-6 nopadding">
                    <div class="overlay-img">
                        <img src="{!!asset('public/assets/frontend')!!}/images/img-well-02.png" alt="">
                    </div>
                    <p class="title-country">ANH</p>
                    <button class="btn btn-dis">ĐĂNG KÝ</button>
                </div>
                <div class="col-xs-6 nopadding">
                    <div class="overlay-img">
                        <img src="{!!asset('public/assets/frontend')!!}/images/img-well-02.png" alt="">
                    </div>
                    <p class="title-country">MALAYSIA</p>
                    <button class="btn btn-dis">ĐĂNG KÝ</button>
                </div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="col-xs12 col-sm-4 nopadding">
               <div class="overlay-img">
                    <img src="{!!asset('public/assets/frontend')!!}/images/img-well-02.png" alt="">
                </div>
                <div class="box-text">
                    <h2>LOREM IPSU<br>DOLOR SIT AMET</h2>
                    <ul>
                        <li><a href="#">MALAYSIA + SINGAPORE</a></li>
                        <li><a href="#">MỸ + CANADA</a></li>
                        <li class="active-bold"><a href="#">LOREM 1 + LOREM 2</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs12 col-sm-4 nopadding">
                <div class="overlay-img">
                    <img src="{!!asset('public/assets/frontend')!!}/images/img-well-02.png" alt="">
                </div>
                <p class="title-country">MALAYSIA + SINGAPORE</p>
                <button class="btn btn-dis">ĐĂNG KÝ</button>
            </div>
            <div class="col-xs12 col-sm-4 nopadding">
                <div class="overlay-img">
                    <img src="{!!asset('public/assets/frontend')!!}/images/img-well-02.png" alt="">
                </div>
                <p class="title-country">MỸ + CANADA</p>
                <button class="btn btn-dis">ĐĂNG KÝ</button>
            </div>
        </div>
    </div>
</section>
<!-- **************** /Discover ****************-->
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
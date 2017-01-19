@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
    <script src="{!!asset('public/assets/frontend')!!}/js/jquery.md5.js"></script>
    <script src="{!!asset('public/assets/frontend')!!}/js/common.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.same-height').matchHeight({});
            var swiper_promotion = new Swiper('.swiper-promotion',{
                speed: 600,
                autoplay: 3000,
                direction: 'vertical',
                slidesPerView: 3,
            })
        })
    </script>
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
                            <div class="wrap-keypoint">
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-earth.png" alt="">
                                <hr class="hr">
                                <p class="title-slider">Mở rộng tầm nhìn<br>tự lập</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wrap-keypoint">
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-feather.png" alt="">
                                <hr class="hr">
                                <p class="title-slider">Rèn luyện tính<br>ra thế giới</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wrap-keypoint">
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-user.png" alt="">
                                <hr class="hr">
                                <p class="title-slider">Gặp gỡ và giao lưu<br>bạn bè quốc tế </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wrap-keypoint">
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-earth.png" alt="">
                                <hr class="hr">
                                <p class="title-slider">Thử nghiệm hành trình<br>du học</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wrap-keypoint">
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-earth.png" alt="">
                                <hr class="hr">
                                <p class="title-slider">Trải nghiệm thực tế cuộc sống tại nhà bản xứ hoặc ký túc xá</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                   <!--  <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
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
        </div>
        @if($promotion)
        <div class="wrap-slider-promotion same-height">
            <div class="swiper-container swiper-promotion">
                <div class="swiper-wrapper">
                    @foreach($promotion as $item_promotion)
                    <div class="swiper-slide">
                        <div class="each-promo">
                            <h4 class="title-each-promo">{!!$item_promotion->name!!}</h4>
                            <p>{!!$item_promotion->description!!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @else
            <p>Chúng tôi đang cập nhật thêm các chương trình khuyến mãi.</p>
        @endif
        <div class="img-box">
            <img src="{!!asset('public/assets/frontend')!!}/images/img-pro-01.png" alt="">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="pro-text">
            <h2>TESTIMONIAL</h2>
            <hr class="hr">
        </div>
        @if($testimonial)
        <div class="img-box">
            <div class="swiper-container slider-lv3">
                <div class="swiper-wrapper promo-testi">
                    @foreach($testimonial as $item_testimonial)
                    <div class="swiper-slide">
                        <div class="wrap-each-testimotion">
                            <div class="wrap-top-testi same-height">
                                <h4>{!!$item_testimonial->author!!}</h4>
                                <p>{!!$item_testimonial->description!!}</p>
                                <a href="{!!route('trainghiem.detail',$item_testimonial->slug)!!}" class="btn btn-readmore">ĐỌC THÊM</a>
                            </div>
                            <img src="{!!$item_testimonial->img_slides!!}" class="img-responsive img-each-testi" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- **************** /Pro - Testi ****************-->
<!-- **************** Video ****************-->
<section class="video container clearfix">
   <center>
       <h2>Video Title</h2>
       <div class="col-xs-12 video-box">
           <iframe width="560" height="315" src="https://www.youtube.com/embed/yX7MCwUKNcw" frameborder="0" allowfullscreen></iframe>
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
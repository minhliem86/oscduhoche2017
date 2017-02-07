@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
    <script src="{!!asset('public/assets/frontend')!!}/js/jquery.md5.js"></script>
    <script src="{!!asset('public/assets/frontend')!!}/js/common.js"></script>
    <!-- VIDEO -->
    <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/video/plyr.css">
    <script src="{!!asset('public/assets/frontend')!!}/js/video/plyr.js"></script>
    <!-- END -->
    <script src="{!!asset('public/assets/frontend/')!!}/js/customScript.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var swiper_promotion = new Swiper('.swiper-promotion',{
                speed: 800,
                autoplay: 3000,
                slidesPerView: 1,
            })

            var swiper_testi_desktop = new Swiper('.slider-testi-desk',{
                speed: 1000,
                autoplay: 6500,
                slidesPerView: 1,
                preventClicks: false,
                pagination: '.swiper-pagination-testihome',
                paginationClickable: true,
            })

            /*VIDEO*/
            plyr.setup();
        })
    </script>
@stop

@section('content')
<!-- **************** Wellcome ****************-->
<section class="wellcome">
    <div class="container">
        <div class="row">
            <div class="inner-section">
                <center>
                    <h2>CHÀO MỪNG ĐẾN VỚI <br>CHƯƠNG TRÌNH DU HỌC HÈ 2017</h2>
                    <hr class="hr">
                    <p class="title-sub">ILA Du Học giới thiệu chương trình Du Học Hè 2017 với 4 giá trị cốt lõi:<br/>  Phiêu Lưu, Trải Nghiệm, Tự Lập và Trưởng Thành.</p>
                </center>
            </div>
        </div>
    </div>
</section>
<!-- **************** /Wellcome ****************-->
@include('Frontend::layouts.listCountries')
<!-- **************** Pro - Testi ****************-->
@if($testimonial)
<section class="testimonial-desktop visible-md visible-lg hidden">
    <div class="container">
        <div class="row">
            <div class="inner-section">
                <div class="container-fluid">
                    <div class="inner-testi-desktop">
                        <div class="pro-text">
                            <h2>Chia sẻ trải nghiệm Du Học Hè</h2>
                            <hr class="hr">
                        </div>
                        <div class="wrap-slider-testi-desktop">
                            <div class="swiper-container slider-testi-desk">
                                <div class="swiper-wrapper">
                                    @foreach($testimonial as $item_testi_desk)
                                    <div class="swiper-slide">
                                        <div class="left-img">
                                            <img src="{!!$item_testi_desk->img_slides!!}" alt="" class="img-responsive">
                                        </div>
                                        <div class="right-img">
                                            <h4 class="name">{!!$item_testi_desk->author!!}</h4>
                                            <p class="description">{!!Str::words($item_testi_desk->content,80)!!}</p>
                                            <a href="{!!route('trainghiem.detail',$item_testi_desk->slug)!!}" class="btn btn-test-dk">Đọc thêm</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!--Add Pagination -->
                            <div class="swiper-pagination swiper-pagination-testihome"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<section class="pro-test visible-sm visible-xs">
    <div class="container">
        <div class="row">
            <div class="inner-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="pro-text">
                                <h2>Chương trình khuyến mãi</h2>
                            </div>
                            @if($promotion)
                            <div class="promotionhome-area clearfix">
                                @foreach($promotion as $item_promotion)
                                <div class="wrap-each-promotionhome2">
                                    <div class="wrap-inner-img">
                                        <div class="wrap-img">
                                            <img src="{!!$item_promotion->img_icon!!}" alt="" class="img-circle img-responsive">
                                        </div>
                                        <div class="table-cell">
                                            <h4>{!!$item_promotion->name!!}</h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="wrap-btn">
                                <a href="{!!route('contact')!!}" class="btn btn-readmore">ĐĂNG KÝ</a>
                            </div>
                            <!-- <div class="promotion-box-home ">
                                <div class="swiper-container swiper-promotionhome">
                                    <div class="swiper-wrapper">
                                        <?php $i = 1; ?>
                                        @foreach($promotion as $item_promotion)
                                        <div class="swiper-slide">
                                            <div class="wrap-each-promotionhome">
                                                <img src="{!!$item_promotion->img_avatar!!}" alt="" class="img-circle img-responsive">
                                                <hr class="line-promo">
                                                <h4>{!!$item_promotion->name!!}</h4>
                                            </div>
                                        </div>
                                        <?php $i++; ?>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="wrap-btn">
                                    <a href="{!!route('contact')!!}" class="btn btn-readmore">ĐĂNG KÝ</a>
                                </div>
                            </div> -->
                            @endif
                            <!-- @if($promotion)
                            <div class="wrap-slider-promotion ">
                                <div class="swiper-container swiper-promotion">
                                    <div class="swiper-wrapper">
                                        @foreach($promotion as $item_promotion)
                                        <div class="swiper-slide">
                                            <div class="wrap-each-promo">
                                                <div class="each-promo same-height">
                                                    <h4 class="title-each-promo">{!!$item_promotion->name!!}</h4>
                                                    <p>{!!Str::words($item_promotion->description,25)!!}</p>
                                                    <a href="{!!route('contact')!!}" class="btn btn-readmore">ĐĂNG KÝ NGAY</a>
                                                </div>
                                                <img src="{!!$item_promotion->img_avatar!!}" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @else
                                <p>Chúng tôi đang cập nhật thêm các chương trình khuyến mãi.</p>
                            @endif -->

                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="pro-text">
                                <h2>Chia Sẻ Trải nghiệm du học hè</h2>
                            </div>
                            @if($testimonial)
                            <div class="img-box">
                                <div class="swiper-container testimonial-slide-home">
                                    <div class="swiper-wrapper">
                                        @foreach($testimonial as $item_testimonial)
                                        <div class="swiper-slide">
                                            <div class="wrap-each-testimotion clearfix">
                                                <div class="left-testi">
                                                    <img src="{!!$item_testimonial->img_avatar!!}" class="img-responsive img-circle" alt="">
                                                </div>
                                                <div class="right-testi">
                                                    <h4><span>{!!$item_testimonial->author!!}</span><a href="{!!route('trainghiem.detail',$item_testimonial->slug)!!}" class="xemthem">Đọc thêm</a></h4>
                                                    <p>{!!Str::words($item_testimonial->description,35)!!}</p>
                                                    <a href="{!!route('trainghiem.detail',$item_testimonial->slug)!!}" class="btn btn-readmore">ĐỌC THÊM</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- Add Pagination -->
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- **************** /Pro - Testi ****************-->
<!-- **************** Video ****************-->
<section class="video">
    <div class="container">
        <div class="row">
            <div class="inner-section">
                <center>
                    <h2>Ila Du Học Hè 2016<br/>Bước chân nhỏ - Khám phá thế giới lớn</h2>
                    <div class="container-fluid">
                        <div class="video-box">
                            <div data-type="youtube" data-video-id="pRrfNtJpwzs"></div>
                       </div>
                    </div>
               </center>
            </div>
        </div>
    </div>
</section>
<!-- **************** /Video ****************-->
<section class="key-point">
    <div class="container">
        <div class="row">
            <div class="inner-section bg-yellow">
                <div class="container-fluid">
                    <h2 class="title">Tại sao nên chọn ILA?</h2>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="swiper-container slider-lv1 swiper-keypoint">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="wrap-keypoint" id="first-key">
                                            <div class="wrap-inner-key">
                                                <img src="{!!asset('public/assets/frontend')!!}/images/keypoint/morong-ic.jpg" class="keypoint-img" alt="Mở rộng tầm nhìn ra thế giới">
                                                <p class="title-slider">Mở rộng tầm nhìn<br>ra thế giới </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrap-keypoint">
                                            <div class="wrap-inner-key">
                                                <div class="wrap-img-key">
                                                    <img src="{!!asset('public/assets/frontend')!!}/images/keypoint/renluyen-ic.jpg" class="keypoint-img" alt="Rèn luyện tính tự lập">
                                                </div>
                                                <div class="table-cell">
                                                    <p class="title-slider">Rèn luyện tính<br>tự lập </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrap-keypoint">
                                            <div class="wrap-inner-key">
                                                <div class="wrap-img-key">
                                                   <img src="{!!asset('public/assets/frontend')!!}/images/keypoint/gapgo-ic.jpg" class="keypoint-img" alt="Gặp gỡ và giao lưu bạn bé quốc tế">
                                                </div>
                                                <div class="table-cell">
                                                    <p class="title-slider">Gặp gỡ và giao lưu<br>bạn bè quốc tế </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrap-keypoint">
                                            <div class="wrap-inner-key">
                                                <div class="wrap-img-key">
                                                   <img src="{!!asset('public/assets/frontend')!!}/images/keypoint/thunghiem-ic.jpg" class="keypoint-img" alt="Thử nghiệm hành trình du học">
                                                </div>
                                                <div class="table-cell">
                                                    <p class="title-slider">Thử nghiệm hành trình<br>du học</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrap-keypoint">
                                            <div class="wrap-inner-key">
                                                <div class="wrap-img-key">
                                                   <img src="{!!asset('public/assets/frontend')!!}/images/keypoint/trainghiem-ic.jpg" class="keypoint-img" alt="Trải nghiệm thực tế cuộc sống tại nhà bản xứ hoặc ký túc xá">
                                                </div>
                                                <div class="table-cell">
                                                    <p class="title-slider">Trải nghiệm thực tế cuộc sống tại nhà bản xứ hoặc ký túc xá</p>
                                                </div>
                                            </div>
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
            </div>
        </div>
    </div>
</section>
<!-- **************** Register ****************-->
<section class="reg">
    <div class="container">
        <div class="row">
            <div class="inner-section inner-reg">
                <center>
                    <h2>ĐĂNG KÝ & TƯ VẤN</h2>
                    <hr class="hr">
                </center>
                @include('Frontend::layouts.formRegister')
            </div>
        </div>

    </div>
</section>
<!-- **************** /Register ****************-->
@stop
@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
	<script src="{!!asset('public/assets/frontend')!!}/js/customScript.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.testimonial-slide-same-height').matchHeight({})

             var mySwiper = new Swiper ('.testimonial-slider-ver', {
                // Optional parameters
                direction: 'vertical',
                slidesPerView: 3,
                height: 440,
                autoplay: 3000,
                speed: 1000,
                preventClicks: false,
                breakpoints:{
                    480: {
                        slidesPerView: 2
                    }
                }
                // pagination: '.swiper-pagination',
            });
            var SwiperTestiHori = new Swiper ('.testimonial-slider-hori', {
                // Optional parameters
                slidesPerView: 1,
                autoplay: 3000,
                speed: 1000,
                pagination: '.swiper-pagination',
                spaceBetween: 5,
                autoplay: false,
                autoplayDisableOnInteraction: false,
                preventClicks: false
            });

            mySwiper.params.control = SwiperTestiHori;
            SwiperTestiHori.params.control = mySwiper;
        })
    </script>
@stop

@section('content')
	 <!-- **************** Testtimonial ****************-->
    <section class="testtimonial">
        <div class="container">
            <div class="row">
                <div class="inner-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="wrap-top-testimonial">
                                <div class="col-xs-12 col-sm-8 testimonial-slide-same-height">
                                    <div class="row testtimanial-slider">
                                        <div class="wrap-slider-landscape">
                                            <div class="swiper-container testimonial-slider-hori">
                                                <div class="swiper-wrapper">
                                                    @if($testimonial_list)
                                                        @foreach($testimonial_list as $item_list)
                                                            <div class="swiper-slide">
                                                                <div class="each-wrap-landscape">
                                                                    <img src="{!!$item_list->img_slides!!}" class="img-responisve" alt="">
                                                                    <div class="col-xs-11 col-sm-10 col-md-6 testtimanial-slider-item">
                                                                        <h4>{!!$item_list->title!!}</h4>
                                                                        <blockquote>{!!$item_list->description!!}</blockquote>
                                                                        <h5 class="text-yellow">{!!$item_list->author!!}</h5>
                                                                        <a href="{!!route('trainghiem.detail',$item_list->slug)!!}" class="btn btn-readmore">XEM THÊM</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        @endforeach

                                                    @endif

                                                </div>
                                                <!--Add Pagination -->
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonial-slider-ver -->
                                <div class="col-xs-12 col-sm-4 clearfix fullheight ">
                                    <div class="testimonial-list fullheight">
                                        <h4 class="title-testi">Trải Nghiệm Du Học </h4>
                                        <div class="testtimanial-avartar-slider">
                                            <div class="swiper-container testimonial-slider-ver">
                                                <div class="swiper-wrapper">
                                                    @if($testimonial_list)
                                                        @foreach($testimonial_list as $item_list_v)
                                                            <div class="swiper-slide">
                                                                <div class="testtimonial-list-item ">
                                                                    <img src="{!!$item_list_v->img_avatar!!}" class="img-circle img-avatar" width="80" height="80" alt="{!!$item_list_v->author!!}">

                                                                    <div class="wrap-content-slide-v">
                                                                        <h4>{!!$item_list_v->author!!}</h4>
                                                                        <p>{!!Str::words($item_list_v->description,19)!!}</p>
                                                                        <a href="{!!route('trainghiem.detail',$item_list_v->slug)!!}" class="btn btn-readmore">XEM THÊM</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!--Add Pagination -->
                                                <!-- <div class="swiper-pagination"></div> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************** /Testtimonial ****************-->
    <!-- **************** Discover ****************-->
   	@include('Frontend::layouts.listCountries')
    <!-- **************** /Discover ****************-->
@stop
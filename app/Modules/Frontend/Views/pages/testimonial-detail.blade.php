@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
	<script src="{!!asset('public/assets/frontend')!!}/js/customScript.js" type="text/javascript"></script>
@stop

@section('content')
	<section class="testtimonial testtimonial-detail clearfix">
        <div class="container">
            <div class="clearfix">
                <div class="col-xs-12 col-sm-8">
                    <div class="img-box">
                        <img src="{!!$testimonial_detail->img_slides!!}" class="img-responsive" alt="">
                    </div>
                    <div class="box-text">
                        <p>{!!$testimonial_detail->content!!}</p>
                    </div>
                    <div class="authorsign text-right">
                        <p>{!!$testimonial_detail->author!!}</p>
                    </div>
                    @if($tour_rec)
                    <div>
                        <p class="text-bold recommend">Các chương trình du học hấp dẫn</p>
                        <ul class="list-duhoc">
                            @foreach($tour_rec as $item_tour_rec)
                                <li><a href="">{!!$item_tour_rec->title!!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-4 clearfix testtimonial-list">
                    <div class="row testtimanial-avartar-slider">
                       <div class="swiper-container slider-lv4">
                            <div class="swiper-wrapper">
                                @if($testimonial_relate)
                                    @foreach($testimonial_relate as $item_list_v)
                                        <div class="swiper-slide">
                                            <div class="testtimonial-list-item clearfix">
                                                <div class="col-xs-12 col-sm-4 col-md-3 nopadding">
                                                    <img src="{!!$item_list_v->img_avatar!!}" class="img-circle" width="50" height="50" alt="{!!$item_list_v->author!!}">
                                                </div>
                                                <div class="col-xs-12 col-sm-8 col-md-9">
                                                    <h4>{!!$item_list_v->author!!}</h4>
                                                    <p>{!!$item_list_v->description!!}</p>
                                                    <a href="{!!route('trainghiem.detail',$item_list_v->slug)!!}" class="btn-03">READ MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h4>Các trải ngiệm khác</h4>
                                @endif
                            </div>
                            <!--Add Pagination -->
                            <!-- <div class="swiper-pagination"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************** /Testtimonial ****************-->
    <!-- **************** Promotion ****************-->
    <section class="promotion-bottom clearfix">
        <div class="container-fluid">
            <div class="col-xs-4 col-xs-offset-5 col-sm-3 col-sm-offset-6 col-md-5 col-md-offset-5 col-lg-6 col-lg-offset-4">
                <h3>{!!$promotion_rand->name!!}</h3>
                <p>{!!$promotion_rand->description!!}</p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-2 nopadding">
                <a href="{!!route('contact')!!}" class="btn btn-reg">ĐĂNG KÝ</a>
            </div>
        </div>
    </section>
    <!-- **************** /Promotion ****************-->
    <!-- **************** Discover ****************-->
    @include('Frontend::layouts.listCountries')
    <!-- **************** /Discover ****************-->
@stop
@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
	<script src="{!!asset('public/assets/frontend')!!}/js/customScript.js" type="text/javascript"></script>
@stop

@section('content')
	 <!-- **************** Testtimonial ****************-->
    <section class="testtimonial clearfix">
        <div class="container">
            <div class="clearfix">
                <div class="col-xs-12 col-sm-8">
                    <div class="row testtimanial-slider">
                       <div class="swiper-container slider-lv4">
                            <div class="swiper-wrapper">
                            	@if($testimonial_list)
                            		@foreach($testimonial_list as $item_list)
		                                <div class="swiper-slide">
		                                    <img src="{!!$item_list->img_slides!!}" alt="">
		                                    <div class="col-xs-11 col-sm-10 col-md-6 testtimanial-slider-item">
		                                        <h4>{!!$item_list->title!!}</h4>
		                                        <blockquote>{!!$item_list->description!!}</blockquote>
		                                        <h5 class="text-yellow">{!!$item_list->author!!}</h5>
		                                        <a href="{!!route('trainghiem.detail',$item_list->slug)!!}" class="btn-03">READ MORE</a>
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
                <div class="col-xs-12 col-sm-4 clearfix testtimonial-list">
                    <h4>Trải Nghiệm Du Học </h4>
                    <div class="row testtimanial-avartar-slider">
                       <div class="swiper-container slider-lv4">
                            <div class="swiper-wrapper">
                            	@if($testimonial_list)
                            		@foreach($testimonial_list as $item_list_v)
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
                                @endif
                            </div>
                            <!--Add Pagination -->
                            <!-- <div class="swiper-pagination"></div> -->
                        </div>
                    </div>
                   
                </div>
            </div>

            <div class="bottom">
                <div class="col-xs-12 col-sm-8" style="background:url('{!!$testimonial_focus->img_slides!!}'); background-size:100% 100%">
                   
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="testtimonial-list-item bg-blue clearfix">
                        <div class="col-xs-12 col-sm-4 col-md-3 nopadding">
                            <img class="img-responsive img-circle" src="{!!$testimonial_focus->img_avatar!!}" alt="{!!$testimonial_focus->author!!}">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            <h4>{!!$testimonial_focus->title!!}</h4>
                        </div>
                        <div class="col-xs-12">
                            <blockquote>{!!$testimonial_focus->description!!}</blockquote>
                            <a class="btn-03" href="{!!route('trainghiem.detail',$testimonial_focus->slug)!!}">Read More</a>
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
@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
	<script src="{!!asset('public/assets/frontend')!!}/js/customScript.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.testimonial-slide-same-height').matchHeight({})
        })
    </script>
@stop

@section('content')
	 <!-- **************** Testtimonial ****************-->
    <section class="testtimonial clearfix">
        <div class="container">
            <div class="clearfix">
                <div class="col-xs-12 col-sm-8 testimonial-slide-same-height">
                    <div class="row testtimanial-slider">
                       <div class="swiper-container testimonial-slider-hori">
                            <div class="swiper-wrapper">
                            	@if($testimonial_list)
                            		@foreach($testimonial_list as $item_list)
		                                <div class="swiper-slide">
		                                    <img src="{!!$item_list->img_slides!!}" alt="">
		                                    <div class="col-xs-11 col-sm-10 col-md-6 testtimanial-slider-item">
		                                        <h4>{!!$item_list->title!!}</h4>
		                                        <blockquote>{!!$item_list->description!!}</blockquote>
		                                        <h5 class="text-yellow">{!!$item_list->author!!}</h5>
		                                        <a href="{!!route('trainghiem.detail',$item_list->slug)!!}" class="btn btn-readmore">READ MORE</a>
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
                <!-- testimonial-slider-ver -->
                <div class="col-xs-12 col-sm-4 clearfix testtimonial-list ">
                    <h4 class="title-testi">Trải Nghiệm Du Học </h4>
                    <div class="row testtimanial-avartar-slider">
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
                                                    <a href="{!!route('trainghiem.detail',$item_list_v->slug)!!}" class="btn btn-readmore">READ MORE</a>
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
                    <div class="testtimonial-list-item testtimonial-focus bg-blue clearfix">
                        <div class="col-xs-12 col-sm-4 col-md-3 nopadding">
                            <img class="img-responsive img-circle img-focus" src="{!!$testimonial_focus->img_avatar!!}" width="80" height="80" alt="{!!$testimonial_focus->author!!}">
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            <h4>{!!$testimonial_focus->author!!}</h4>
                            <blockquote>{!!$testimonial_focus->description!!}</blockquote>
                            <div class="wrap-btn">
                                <a class="btn-03 btn-readmore" href="{!!route('trainghiem.detail',$testimonial_focus->slug)!!}">READ MORE</a>
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
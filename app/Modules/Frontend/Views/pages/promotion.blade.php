@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')

@stop

@section('content')
 <section class="promotion-content clearfix">
        <div class="container">
            <div class="row">
            	@if($promotion_list)
            		@foreach($promotion_list as $promotion_item)
	                <div class="col-xs-12 col-sm-6">
	                    <div class="img-box">
	                        <img src="{!!asset('public/assets/frontend')!!}/images/img-promotion-01.png" alt="">
	                    </div>
	                    <div class="promotion-box clearfix">
	                       <center>
	                            <h3>{!!$promotion_item->name!!}</h3>
	                        </center>
	                        <div class="col-xs-12">
	                            <!-- <h4 class="text-red-02">PROMOTION 1</h4> -->
	                            <p>{!!$promotion_item->description!!}</p>
	                            <hr>
	                        </div>
	                        <!-- <div class="col-xs-12">
	                            <h4 class="text-red-02">PROMOTION 1</h4>
	                            <p>Cras rutrum nulla a bibendum lorem ipsum bibendum </p>
	                            <p>Cras rutrum nulla a bibendum lorem ipsum bibendum </p>
	                        </div> -->
	                    </div>
	                </div>
                	@endforeach
                @endif
            </div>
        </div>
    </section>
	
	@if($promotion_rand)
    <section class="promotion-bottom clearfix">
        <div class="container-fluid">
            <div class="col-xs-4 col-xs-offset-5 col-sm-3 col-sm-offset-6 col-md-5 col-md-offset-5 col-lg-6 col-lg-offset-4">
                <h3>{!!$promotion_rand->name!!}</h3>
                <p>{!!$promotion_rand->description!!}</p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-2 nopadding">
                <a href="{!!route('contact')!!}" class="btn btn-reg">Đăng ký</a>
            </div>
        </div>
    </section>
    @endif
    <!-- **************** /Promotion ****************-->
    @include('Frontend::layouts.listCountries')
@stop


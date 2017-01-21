@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')

@stop

@section('content')
 <section class="promotion-content">
        <div class="container">
            <div class="row">
                <div class="inner-section">
                    <div class="container-fluid">
                        <div class="row">
                            @if($promotion_list)
                                @foreach($promotion_list as $promotion_item)
                                <div class="col-xs-12 col-sm-6">
                                    <div class="wrap-promotion">
                                        <div class="img-box">
                                            <img src="{!!asset('public/assets/frontend')!!}/images/img-promotion-01.png" alt="">
                                        </div>
                                        <div class="promotion-box clearfix">
                                           <center>
                                                <h3>{!!$promotion_item->name!!}</h3>
                                            </center>
                                            <div class="col-xs-12">
                                                <p class="text-promotion">{!!$promotion_item->description!!}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	@if($promotion_rand)
    <section>
        <div class="container">
            <div class="row">
                <div class="promotion-bottom">
                    <div class="wrap-promo-bottom">
                        <div class="left-promo-inner">
                            <h3>{!!$promotion_rand->name!!}</h3>
                                <p>{!!$promotion_rand->description!!}</p>
                        </div>
                        <div class="right-promo-inner">
                            <a href="{!!route('contact')!!}" class="btn btn-register">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- **************** /Promotion ****************-->
    @include('Frontend::layouts.listCountries')
@stop


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

	
    <section>
        <div class="container">
            <div class="row">
                <div class="promotion-bottom">
                    <div class="wrap-promo-bottom">
                        <div class="left-promo-inner">
                            <h3>Đăng Ký Sớm</h3>
                            <p>Để nhận ngay ưu đãi lên đến <b>12.500.000đ </b></p>
                        </div>
                        <div class="right-promo-inner">
                            <a href="{!!route('contact')!!}" class="btn btn-register">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************** /Promotion ****************-->
    @include('Frontend::layouts.listCountries')
@stop


@extends('Frontend::layouts.layout')

@section('meta')
    <meta name="keywords" content="du học hè, du học hè 2017, ila du học hè, khuyến mãi du học hè">
    <meta name="description" content="Các chương trình khuyến mãi hấp dẫn của chuông trình Du Học Hè 2017 của ILA Du Học">
@stop

@section('title','Chương Trình Khuyến Mãi - ILA Du Học')

@section('script')
    <script src="{!!asset('public/assets/frontend/')!!}/js/customScript.js" type="text/javascript"></script>
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
                                        <div class="banner-box">
                                            <img src="{!!$promotion_item->img_avatar!!}" class="img-responsive" alt="">
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

	
    <section class="promotion-bar hidden-xs hidden-sm">
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


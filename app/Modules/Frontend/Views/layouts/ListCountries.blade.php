<section class="discover container-fluid {!!Request::segment(1) == '' ? 'bg-yellow' : ''!!}">
    <center>
        <h2>KHÁM PHÁ ĐIỂM ĐẾN</h2>
        <hr class="hr">
        @if($countries)
            <ul class="to-local nopadding inline-list">
                @foreach($countries as $country)
                <li><a href="{!!route('quocgia',$country->slug)!!}">{!!$country->name!!}</a></li>
                @endforeach
            </ul>
        @endif

    </center>
    <div class="container">
        <div class="top-box">
            <div class="col-xs12 col-sm-7 nopadding">
                <div class="wrap-content-country">
                    <div class="swiper-container slider-lv2">
                        <div class="swiper-wrapper">
                            @if($countries)
                            @foreach($countries as $item_country)
                            <div class="swiper-slide">
                                <div class="wrap-slider-country">
                                    <a href="{!!route('quocgia',$item_country->id)!!}"><img src="{!!$item_country->img_slide!!}"></a>
                                    <h3 class="title-country">{!!$item_country->name!!}</h3>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                
            </div>
            <div class="col-xs-12 col-sm-5 nopadding">
                @if($list_a_country)
                    @foreach($list_a_country as $country_item)
                        <div class="col-xs-6 nopadding">
                            <div class="overlay-img">
                                <img src="{!!$country_item->img_avatar!!}" class="img-responsive" alt="">
                            </div>
                            <p class="title-country">{!!$country_item->name!!}</p>
                            <button class="btn btn-dis">ĐĂNG KÝ</button><a href="{!!route('quocgia',$country_item->slug)!!}" class="btn btn-dis">ĐĂNG KÝ</a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="bottom-box">
            @if(!$list_multi_country->isEmpty())
                @foreach($list_multi_country as $multi_item)
                <div class="col-xs-12 col-sm-4 nopadding">
                    <div class="wrap-multi-country">
                        <div class="overlay-img">
                            <img src="{!!$multi_item->img_avatar!!}" class="img-responsive" alt="">
                        </div>
                        <p class="title-country">{!!$multi_item->name!!}</p>
                        <a href="{!!route('quocgia',$multi_item->slug)!!}" class="btn btn-dis">ĐĂNG KÝ</a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

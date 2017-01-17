<!-- **************** Discover ****************-->
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
                <div class="swiper-container slider-lv2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{!!asset('public/assets/frontend')!!}/images/bannerlv2.png"></div>
                        <div class="swiper-slide"><img src="{!!asset('public/assets/frontend')!!}/images/bannerlv2.png"></div>
                        <div class="swiper-slide"><img src="{!!asset('public/assets/frontend')!!}/images/bannerlv2.png"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
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
            <div class="col-xs12 col-sm-4 nopadding">
               <div class="overlay-img">
                    <img src="{!!asset('public/assets/frontend')!!}/images/img-well-02.png" alt="">
                </div>
                <div class="box-text">
                    <h2>Du học kết hợp hai quốc gia</h2>
                    @if(!$ul_list->isEmpty())
                    <ul>
                        @foreach($ul_list as $item_list)
                            <li><a href="{!!route('quocgia',$item_list->slug)!!}">{!!$item_list->name!!}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            @if(!$list_multi_country->isEmpty())
                @foreach($list_multi_country as $multi_item)
                <div class="col-xs12 col-sm-4 nopadding">
                    <div class="overlay-img">
                        <img src="{!!$multi_item->img_avatar!!}" class="img-responsive" alt="">
                    </div>
                    <p class="title-country">{!!$multi_item->name!!}</p>
                    <a href="{!!route('quocgia',$multi_item->slug)!!}" class="btn btn-dis">ĐĂNG KÝ</a>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- **************** /Discover ****************-->
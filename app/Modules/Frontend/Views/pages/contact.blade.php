@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
    <script src="{!!asset('public/assets/frontend')!!}/js/jquery.md5.js"></script>
    <script src="{!!asset('public/assets/frontend')!!}/js/common.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var swiper_promotion = new Swiper('.swiper-promotion',{
                speed: 800,
                autoplay: 3000,
                slidesPerView: 1,
            })
        })
    </script>
@stop

@section('content')
	<section class="contact-footer">
       <div class="container">
            <div class="row">
                <div class="inner-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 contact-left">
                                <div class="wrap-promotion-contact">
                                    <div class="pro-text">
                                        <h2>Chương trình khuyến mãi</h2>
                                        <hr class="hr">
                                    </div>
                                    @if($promotion)
                                    <div class="wrap-slider-promotion ">
                                        <div class="swiper-container swiper-promotion">
                                            <div class="swiper-wrapper">
                                                @foreach($promotion as $item_promotion)
                                                <div class="swiper-slide">
                                                    <div class="wrap-each-promo">
                                                        <div class="each-promo same-height">
                                                            <h4 class="title-each-promo">{!!$item_promotion->name!!}</h4>
                                                            <p>{!!Str::words($item_promotion->description,25)!!}</p>
                                                            <a href="{!!route('contact')!!}" class="btn btn-readmore">ĐĂNG KÝ NGAY</a>
                                                        </div>
                                                        <img src="{!!$item_promotion->img_avatar!!}" class="img-responsive" alt="">
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                        <p>Chúng tôi đang cập nhật thêm các chương trình khuyến mãi.</p>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 contact-right">
                                <h4>ĐĂNG KÝ ĐỂ ĐƯỢC TƯ VẤN</h4>
                                <form class="reg-box" accept-charset="true" method="POST" action="{!!route('contact.postRegister')!!}" id="formOSC">
                                    {!!Form::token()!!}
                                    <input type="hidden" name="content_type" value="osc@du-hoc-he"/>
                                    <input type="hidden" name="id_program" value="21" />
                                    <input type="hidden" name="id_center" id="id_center" />
                                    <input type="hidden" name="inquiry" value="Du Hoc He 2017" />
                                    <input type="hidden" name="id_hash"  />

                                    <div class="form-group">
                                        <input class="form-control" value="{!!old('name')!!}" name="name" required title="Ho Ten" type="text" placeholder="Họ và Tên">
                                    </div>
                                    <div class="form-group">
                                         <input class="form-control" value="{!!old('email')!!}" name="email" required title="Email" type="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                         <input class="form-control" value="{!!old('phone')!!}" name="phone" required title="So dien thoai" type="tel" placeholder="Số điện thoại">
                                    </div>
                                    @if($location_list)
                                    <div class="form-group">
                                        {!!Form::select('id_city',[''=>'Chọn Thành Phố']+$location_list,old('id_city'),['class'=>'form-control','id'=>'id_city'])!!}
                                    </div>
                                    @endif
                                    @if($country_list)
                                    <div class="form-group">
                                        {!!Form::select('country',[''=>'Quốc gia']+$country_list,old('country'),['class'=>'form-control'])!!}
                                    </div>
                                    @endif
                                    <!-- <div class="col-xs-12">
                                       <textarea name="message" rows="3" class="form-control" placeholder="Ý kiến của bạn"></textarea>
                                    </div> -->
                                    <div class="form-group text-center">
                                         {!!Form::submit('ĐĂNG KÝ',['class' => 'btn btn-reg btn-lp'])!!}
                                    </div>
                                    @if(Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {!!Session::get('success')!!}
                                        </div>
                                    @endif

                                    @include('Admin::errors.listerror')
                                    <script type="text/javascript" src="{!!asset('public/assets/backend')!!}/js/dms-analytics.js"></script>
                                    <script type="text/javascript">
                                        _swga.base_url_post = 'http://marketingtool.ilavietnam.edu.vn';
                                        _swga.init('SW-000019', "formOSC", "manual");
                                        _swga.loadForm({
                                            fullname: 'name',
                                            phone: 'phone',
                                            email: 'email',
                                            address: '',
                                            id_city: 'id_city',
                                            id_center: 'id_center',
                                            note: 'message',
                                            id_hash: 'id_hash',
                                            content_type: 'content_type',
                                        });
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>
@stop
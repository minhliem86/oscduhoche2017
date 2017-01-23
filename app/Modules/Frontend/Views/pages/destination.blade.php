@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
    <script>
        $(document).ready(function(){
            $('.box-destination-content').hide();
            $('.box-destination').hover(function(){
                $(this).find('.box-destination-content').slideDown('fast');
                $(this).find('.content-destination').css({'background':'#ffcb05'});
            },function(){
                $(this).find('.box-destination-content').slideUp('fast');
                $(this).find('.content-destination').css({'background':'white'});
            })
        })
    </script>
@stop

@section('content')
<!-- **************** Wellcome ****************-->
<section>
    <div class="container">
        <div class="row">
            <div class="inner-section destination-main">
                <center>
                    <h2>ILA DU HỌC {!!$country_data->name!!}</h2>
                    <hr class="hr">
                    <p class="title-sub">{!!$country_data->description!!}</p>
                </center>
                <div class="container-fluid">
                    <div class="row">
                        @if($country_data->tour()->get())
                            @foreach($country_data->tour()->get() as $tour)

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="box-destination ">
                                        <div class="content-destination">
                                            <a href="{!!route('quocgia.detail',[$country_data->slug,$tour->slug])!!}">
                                                <div class="box-destination-header">
                                                    <h4>{!!$tour->title!!}</h4>
                                                    <p><b>Dành cho độ tuổi:</b> {!!$tour->age!!}</p>
                                                    <p><b>Khởi hành:</b> {!!$tour->start!!}</p>
                                                    <hr class="hr">
                                                </div>
                                            </a>
                                            <div class="box-destination-content">
                                                <p>{!!Str::words($tour->description,30)!!}</p>
                                                <div class="box-destination-footer">
                                                    <a class="btn btn-read" href="{!!route('quocgia.detail',[$country_data->slug,$tour->slug])!!}">XEM THÊM</a>
                                                    <a class="btn btn-reg-02" href="{!!route('contact')!!}">ĐĂNG KÝ</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-destination">
                                            <a href="{!!route('quocgia.detail',[$country_data->slug,$tour->slug])!!}"><img src="{!!$tour->img_avatar!!}" class="img-responsive" alt=""></a>
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
<!-- **************** /Wellcome ****************-->

<!-- **************** Register ****************-->
<section class="reg clearfix">
    <div class="container">
        <div class="row">
            <div class="inner-section inner-reg">
                <center>
                    <h2>ĐĂNG KÝ & TƯ VẤN</h2>
                    <hr class="hr">
                </center>
                @include('Frontend::layouts.formRegister')
            </div>
        </div>

    </div>
</section>
<!-- **************** /Register ****************-->
@stop
@extends('Frontend::layouts.layout')

@section('meta')
    <meta name="keywords" content=" du học hè {!!$country_data->name!!}, du học hè, du học hè 2017, ila du học hè">
    <meta name="description" content="Trải nghiệm chương trình du học hè {!!$country_data->name!!} với môi trường sống và học tập của một du học sinh {!!$country_data->name!!} thực thụ.">
@stop

@section('title')
    Chương Trình Du Học Hè {!!$country_data->name!!} - ILA Du Học
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
                                                <div class="box-destination-header">
                                                    <h4>{!!$tour->title!!}</h4>
                                                    <p><b>Dành cho độ tuổi:</b> {!!$tour->age!!}</p>
                                                    <p><b>Khởi hành:</b> {!!$tour->start!!}</p>
                                                    <hr class="hr">
                                                </div>
                                            </a>
                                            <div class="box-destination-content">
                                                <p>{!!$tour->description!!}</p>
                                                <div class="box-destination-footer">
                                                    <a class="btn btn-reg-02" href="{!!route('contact')!!}">ĐĂNG KÝ</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-destination">
                                            <img src="{!!$tour->img_avatar!!}" class="img-responsive" alt="">
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
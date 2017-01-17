@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
<script defer>
    $(document).ready(function(){
        $('#id_city').on('change',function(){
            var id_city = $(this).val();
            var token = $('input[name="_token"]').val();
            console.log(token);
            $.ajax({
                url: '{!!route("contact.postAjaxCenter")!!}',
                data: {'_token':token, 'data':id_city},
                type: "POST",
                success:function(data){
                    $('#id_center').val(data.rs);
                },
            })
        });

        $('#formOSC').validate({
            errorElement: "span",
            rules: {
                name: "required",
                email: "required",
                phone: {required: true, digits: true, minlength: 10, maxlength: 11},
                id_city: "required",
                country: "required"
            },
            messages: {
                name: "Vui lòng nhập họ tên",
                phone: {
                    required: "Vui lòng nhập số điện thoại di động",
                    digits: "Vui lòng nhập số điện thoại di động",
                    minlength: "Vui lòng nhập số điện thoại di động",
                },
                email: "Vui lòng nhập email",
                id_city: "Vui lòng chọn Thành Phố bạn đăng ký",
                country: "Vui lòng chọn quốc gia bạn muốn du học"
            },
            submitHandler:function(data){
                var strRandom = Math.random().toString(36);
                var d = new Date();
                strRandom += d.toLocaleString();
                $("input[name='id_hash']").val($.md5(strRandom));
                _swga.postLead();
            },
        })
    })
    
</script>
@stop

@section('content')
<!-- **************** Wellcome ****************-->
<section class="destination-main clearfix">
    <div class="container">
        <center>
            <h2>ILA DU HOC {!!$country_data->name!!}</h2>
            <hr class="hr">
            <p class="title-sub">{!!$country_data->description!!}</p>
        </center>
        <div class="row">
            @if($country_data->tour()->get())
				@foreach($country_data->tour()->get() as $tour)

					<div class="col-xs-12 col-sm-6 col-md-4">
		                <div class="box-destination ">
		                    <div class="col-xs-12 content-destination">
		                        <div class="box-destination-header">
		                            <h4>{!!$tour->title!!}</h4>
		                            <a href="#">{!!$tour->age!!}</a>
		                            <a href="#">Lịch chương trình: {!!$tour->start!!} – {!!$tour->end!!}</a>
		                        </div>
		                        <div class="box-destination-content">
		                            <hr class="hr">
		                            <p>{!!$tour->description!!}</p>
		                            <div class="box-destination-footer">
		                                <a class="btn btn-read" href="{!!route('quocgia',[$country_data->slug,$tour->slug])!!}">Read more</a>
		                                <a class="btn btn-reg-02" href="{!!route('contact')!!}">Register</a>
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
</section>
<!-- **************** /Wellcome ****************-->

<!-- **************** Register ****************-->
<section class="reg clearfix">
    <div class="container">
        <center>
            <h2>ĐĂNG KÝ & TƯ VẤN</h2>
            <hr class="hr">
        </center>
        @include('Frontend::layouts.formRegister')
    </div>
</section>
<!-- **************** /Register ****************-->
@stop
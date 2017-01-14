@extends('Frontend::layouts.layout')

@section('meta')

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
		                <div class="box-destination box-active">
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
		                                <a class="btn btn-read" href="">Read more</a>
		                                <a class="btn btn-reg-02" href="">Register</a>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="bg-destination">
		                        <img src="images/img-destination-01.png" alt="">
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
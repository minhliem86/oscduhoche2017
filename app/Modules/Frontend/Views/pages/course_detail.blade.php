@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
	<script src="{!!asset('public/assets/frontend')!!}/js/customScript.js" type="text/javascript"></script>
@stop

@section('content')
<!-- **************** Course Deltail ****************-->
<section class="container-fluid course-detail-main bg-yellow clearfix">
    <div class="container">
        <center>
            <h2>{!! $tour_detail->title!!}</h2>
            <hr class="hr">
            <p class="title-sub">{!!$tour_detail->description!!}</p>
        </center>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <!-- <h4>LOREM IPSUM DOLOR CONSE <br>CTETUR ADIPISCING ELIT SIT AMET</h4> -->
                <p>{!!$tour_detail->content!!}</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h4>THỜI GIAN</h4>
                <div class="clearfix">
                    <div class="col-xs-2">
                        <img src="{!!asset('public/assets/frontend')!!}/images/icon-clock.png" alt="">
                    </div>
                    <div class="col-xs-10">Từ {!!$tour_detail->start!!} đến {!!$tour_detail->end!!}</div>
                </div>
                <br>
                <!-- <div class="clearfix">
                    <div class="col-xs-2">
                        <img src="images/icon-local.png" alt="">
                    </div>
                    <div class="col-xs-10">Nulla faucibus sem ipsum,sed solli citudin eros maximus</div>
                </div> -->
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="img-box">
                    <img src="{!!$tour_detail->img_avatar!!}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ********************************-->
<section class="container course-detail-footer clearfix">
    <center>
        <h2>Lịch Trình Học</h2>
        <hr class="hr">
        <!-- <p class="title-sub">{!!$tour_detail->description!!}</p> -->
    </center>
    
    <div class="course-detail-box clearfix">
        <div class="col-xs-12 col-sm-6">
            <div class="course-detail-item clearfix">
                <div class="img-box">
                    <img src="images/img-course-detail-01.png" alt="">
                </div>
                <div class="col-xs-12">
                    <a class="text-blue" href="#">Weeks 1: 01/05/ - 08/01/2017</a>
                    <button class="btn-02 pull-right">Read more</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="course-detail-item clearfix">
                <div class="img-box">
                    <img src="images/img-course-detail-01.png" alt="">
                </div>
                <div class="col-xs-12">
                    <a class="text-blue" href="#">Weeks 1: 01/05/ - 08/01/2017</a>
                    <button class="btn-02 pull-right">Read more</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="course-detail-item clearfix">
                <div class="img-box">
                    <img src="images/img-course-detail-01.png" alt="">
                </div>
                <div class="col-xs-12">
                    <a class="text-blue" href="#">Weeks 1: 01/05/ - 08/01/2017</a>
                    <button class="btn-02 pull-right">Read more</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="course-detail-item clearfix">
                <div class="img-box">
                    <img src="images/img-course-detail-01.png" alt="">
                </div>
                <div class="col-xs-12">
                    <a class="text-blue" href="#">Weeks 1: 01/05/ - 08/01/2017</a>
                    <button class="btn-02 pull-right">Read more</button>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- **************** /Course Deltail ****************-->
<!-- **************** Discover ****************-->
@include('Frontend::layouts.listCountries')
@stop
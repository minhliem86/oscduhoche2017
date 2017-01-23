@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('script')
	<script src="{!!asset('public/assets/frontend')!!}/js/customScript.js" type="text/javascript"></script>
@stop

@section('content')
<!-- **************** Course Deltail ****************-->
<section>
    <div class="container">
        <div class="row">
            <div class="inner-section bg-yellow course-detail-main">
                <center>
                    <h2>{!! $tour_detail->title!!}</h2>
                    <hr class="hr">
                    <p class="title-sub">{!!$tour_detail->description!!}</p>
                </center>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-7  ">
                            <!-- <h4>LOREM IPSUM DOLOR CONSE <br>CTETUR ADIPISCING ELIT SIT AMET</h4> -->
                            <p>{!!$tour_detail->content!!}</p>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-4 col-md-4">
                            <h4>THỜI GIAN</h4>
                            <div class="clearfix">
                                <div class="col-xs-2">
                                    <img src="{!!asset('public/assets/frontend')!!}/images/icon-clock.png" alt="">
                                </div>
                                <div class="col-xs-10">Từ {!!$tour_detail->start!!} đến {!!$tour_detail->end!!}</div>
                            </div>
                        </div> -->
                        <div class="col-xs-12 col-sm-5">
                            <div class="img-box">
                                <img src="{!!$tour_detail->img_avatar!!}" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</section>
<!-- **************** Discover ****************-->
@include('Frontend::layouts.listCountries')
@stop
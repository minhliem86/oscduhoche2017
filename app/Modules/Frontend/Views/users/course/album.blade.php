@extends('Frontend::layouts.layout')

@section('title', 'ILA Du Học Hè 2017 - Thư viện hình ảnh')
@section('css')
  <link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/css/customer.min.css">
@stop
@section('content')
  <section class="banner container visible-md visible-lg clearfix">
      <div class="row">
          <div class="banner-destination">
              <div class="tp-banner-container">
                  <div class="tp-banner" >
                      <ul>
                          <li data-transition="boxslide" data-slotamount="7" data-masterspeed="500" data-link="{!!route('contact')!!}">
                              <!-- MAIN IMAGE  -->
                             <img src="{!!$img_banner!!}"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                             <div class="tp-caption sft medium_text"  data-x="400" data-y="100" data-speed="700" data-start="1700" data-easing="easeOutBack">KICKSTART YOUR WEBSITE</div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>  <!-- banner-destination-->
      </div>
  </section>
  <!-- **************** Wellcome ****************-->
  <section class="wellcome">
      <div class="container">
          <div class="row">
              <div class="inner-section">
                  <center>
                      <h2>CHÀO MỪNG ĐẾN VỚI <br>CHƯƠNG TRÌNH DU HỌC HÈ 2017</h2>
                      <hr class="hr">
                      <p class="title-sub">ILA Du Học giới thiệu chương trình Du Học Hè 2017 với 4 giá trị cốt lõi:<br/>  Phiêu Lưu, Trải Nghiệm, Tự Lập và Trưởng Thành.</p>
                  </center>
              </div>
          </div>
      </div>
  </section>
  <!-- **************** /Wellcome ****************-->
  @if(!$lastest_album->isEmpty())
  <section class="lastest-album section-show">
    <div class="container">
      <div class="row">
        <div class="inner-section bg-yellow">
          <h2 class="title-page">Những hình ảnh mới nhất</h2>
          <div class="container-fluid">
            <div class="row">
              @foreach($lastest_album as $item_lastest)
              <div class="col-sm-6">
                <div class="each-lastest each">
                  <a href="{!!route('f.photo', $item_lastest->slug)!!}">
                    <img src="{!!$item_lastest->img_url!!}" class="img-responsive" alt="">
                    <div class="overlay"></div>
                    <h3 class="title-album">{!!$item_lastest->title!!}</h3>
                  </a>
                </div>  <!-- each lastest -->
              </div>
            @endforeach
            </div>
          </div>
        </div>  <!-- end inner-section -->
      </div>
    </div>
  </section>   <!-- end lastes album -->
@endif

@if(!$all_album->isEmpty())
  <section class="all-album section-show">
    <div class="container">
      <div class="row">
        <div class="inner-section">
          <h2 class="title-page">Tất cả hình ảnh</h2>
          <div class="container-fluid">
            <div class="row">
              @foreach($all_album as $item_all)
              <div class="col-sm-4">
                <div class="each-all each">
                  <a href="{!!route('f.photo', $item_all->slug)!!}">
                    <img src="{!!$item_all->img_url!!}" class="img-responsive" alt="">
                    <div class="overlay"></div>
                    <h3 class="title-album">{!!$item_all->title!!}</h3>
                  </a>
                </div>  <!--end each all -->
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  <!-- end all-album -->
  @endif
@stop

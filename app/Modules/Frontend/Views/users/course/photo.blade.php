@extends('Frontend::layouts.layout')

@section('title', 'ILA Du Học Hè 2017 - Thư viện hình ảnh')
@section('script')
  <script src="{!!asset('public/assets/frontend/')!!}/js/swiper.min.js"></script>
  {{-- REMODAL --}}
  <link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/js/remodal/remodal.css">
  <link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/js/remodal/remodal-default-theme.css">
  <script src="{!!asset('public/assets/frontend/')!!}/js/remodal/remodal.min.js"></script>

  <script>
    $(document).ready(function(){
      const inst =  $('[data-remodal-id=modal]').remodal();

      const photoSwiper = new Swiper('#photo-swiper', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
      })

      // LOAD PHOTO
      $('body').on('click','.each-all a',function(e){
        e.preventDefault();
        const index = $(this).data('index');
        inst.open();
        photoSwiper.update(true);
        photoSwiper.slideTo(index);
      });

      // PAGINATION
      $('body').on('click' , '.pagination a', function(e){
        e.preventDefault();
        const url = $(this).attr('href');
        loadPaginate(url);
        window.history.pushState("", "", url);
      })
    })

    function loadPaginate(url){
      $.ajax({
        url:url,
        type: 'GET',
        success:function(data){
          $('.load-photo').html(data);
        }
      })
    }
  </script>
@stop
@section('content')
  
  <!-- **************** Wellcome ****************-->
  <section class="wellcome">
      <div class="container">
          <div class="row">
              <div class="inner-section">
                  <center>
                      <h2>{!!$title_album!!}</h2>
                      <hr class="hr">
                  </center>
              </div>
          </div>
      </div>
  </section>
  <!-- **************** /Wellcome ****************-->

  <section class="all-album">
    <div class="container">
      <div class="row">
        @if(!$image->isEmpty())
        <div class="inner-section">
          <div class="load-photo">
            @include('Frontend::ajax.paginatePhoto')
          </div>
        </div>
        @endif
      </div>
    </div>
  </section>  <!-- end all-album -->

  @include('Frontend::users.course.loadPopup')
@stop

@extends('Frontend::layouts.layout')

@section('title', 'ILA Du Học Hè 2017 - Thư viện hình ảnh')
@section('script')
  <script src="{!!asset('public/assets/frontend/')!!}/js/swiper.min.js"></script>
  {{-- REMODAL --}}
  <link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/js/remodal/remodal.css">
  <script src="{!!asset('public/assets/frontend/')!!}/js/remodal/remodal.min.js"></script>

  <script>
    $(document).ready(function(){
    const inst =  $('[data-remodal-id=modal]').remodal();

    inst.open();



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
  @include('Frontend::layouts.banner')
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
@if(!$image->isEmpty())
  <section class="all-album">
    <div class="container">
      <div class="row">
        <div class="inner-section">
          <div class="load-photo">
            @include('Frontend::ajax.paginatePhoto')
          </div>
        </div>
      </div>
    </div>
  </section>  <!-- end all-album -->
  @endif

@stop

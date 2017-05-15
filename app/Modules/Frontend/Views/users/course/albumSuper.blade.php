@extends('Frontend::layouts.layout')

@section('title', 'ILA Du Học Hè 2017 - Thư viện hình ảnh')
@section('css')
  <link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/css/customer.min.css">
@stop
@section('script')
  <script src="{!!asset('public/assets/frontend/')!!}/js/swiper.min.js"></script>
  {{-- REMODAL --}}
  <link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/js/remodal/remodal.css">
  <link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/js/remodal/remodal-default-theme.css">
  <script src="{!!asset('public/assets/frontend/')!!}/js/remodal/remodal.min.js"></script>

  <script>
    $(document).ready(function(){
      // SEARCH
      $('#btn-search').click(function(){
        const id = $('select[name="tour_id"]').val();
        console.log(id);
        $.ajax({
          url : '{!!route('f.ajaxLoadAlbum')!!}',
          type: 'GET',
          data: {id: id, _token: $('meta[name="csrf-token"]').attr('content') },
          success: function(data){
            if(data.error){
              $('.load-photo').html('<p class="note">'+data.msg+'</p>');
              $('.title-album').text(data.title);
            }else{
                $('.title-album').text(data.title);
                $('.load-photo').html(data.msg)
            }
          },
          error: function(jqXHR , status, err){
            console.log(jqXHR);
          }
        })
      })
    })
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
                      <h2 class="title-album"></h2>
                  </center>
              </div>
          </div>
      </div>
  </section>
  <!-- **************** /Wellcome ****************-->
<section class="wrap-searchtour">
  <div class="container">
    <div class="row">
      <div class="inner-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-4">
                {!!Form::select('tour_id', ['' => 'Chọn chương trình để xem hình ảnh'] + $list_tour , old('tour_id'), ['class' => 'form-control'] )!!}
            </div>
            <div class="col-sm-2">
                <div class="wrap-button">
                  <button type="button"  id="btn-search" >Xem ảnh</button>
                </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
  <section class="all-album">
    <div class="container">
      <div class="row">
        <div class="inner-section">
          <div class="load-photo">
              <p class="note">Vui lòng chọn Album để xem hình ảnh</p>
          </div>
        </div>
      </div>
    </div>
  </section>  <!-- end all-album -->

@stop

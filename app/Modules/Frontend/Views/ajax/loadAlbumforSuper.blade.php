@if(!$album->isEmpty())
<div class="container-fluid">
  <div class="row">
    @foreach($album as $k => $item_album)
    <div class="col-sm-4">
      <div class="each-all">
        <a href="{!!route('f.superAlbumPhoto', [$item_album->id,$item_album->slug])!!}">
          <img src="{!!$item_album->img_url!!}" class="img-responsive" alt="">
          <div class="overlay"></div>
          <h3 class="title-album">{!!$item_album->title!!}</h3>
        </a>
      </div>  <!--end each all -->
    </div>
  @endforeach
  </div>
</div>
@else
<p class="note"> Hiện chưa có Album ảnh.</p>
@endif

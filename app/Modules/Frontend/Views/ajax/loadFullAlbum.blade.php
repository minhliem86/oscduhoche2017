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

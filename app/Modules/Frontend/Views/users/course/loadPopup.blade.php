@if(!$image->isEmpty())
<div class="remodal" data-remodal-id="modal">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="remodal-body">
    <div class="wrap-swiper">
      <div class="swiper-container" id="photo-swiper">
        <div class="swiper-wrapper">
          @foreach($image as $item)
          <div class="swiper-slide">
            <div class="wrap-photo">
              <img src="{!!$item->img_url!!}" class="img-responsive" alt="">
              <p class="caption">{!!$item->title!!}</p>
            </div>
          </div>
          @endforeach
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div>
    </div>  <!-- end wrap-swiper-->
  </div>
</div>
@endif

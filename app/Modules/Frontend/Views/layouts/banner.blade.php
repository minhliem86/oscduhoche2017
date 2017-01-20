<section class="banner container clearfix">
    <div class="row">
        <div class="img-box">

        	@if($banner)
        		@foreach($banner as $item)
					<img src="{!!$item->img_url!!}" alt="">
				@endforeach
        	@endif
            <img src="{!!asset('public/assets/frontend')!!}/images/banner.png" class="img-responsive" alt="">
        </div>
    </div>
</section>
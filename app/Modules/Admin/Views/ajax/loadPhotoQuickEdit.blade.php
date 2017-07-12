@if(!$photo->isEmpty())
    @foreach ($photo->chunk(4) as $item_chunk)
        <div class="row">
            @foreach ($item_chunk as $value)
                <div class="col-sm-3">
                    <div class="each-img">
                        <img src="{!!$value->img_url!!}" class="img-responsive" alt="">
                        {!!Form::textarea('title',$value->title, ['class' =>'form-control', 'rows' => 3])!!}
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endif

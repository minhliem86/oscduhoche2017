@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Modify Image</h1>
</section>
<section class="content">
	<div class="box">
		<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        {!!Form::select('album_id', ['' => 'Select an Album'] + $album, '', ['class' =>'form-control'])!!}
                    </div>
                </div>
                <div class="wrap-photo clearfix">

                </div>    <!-- end wrap-photo -->

		</div>
	</div>
</section>
@stop

@section('script')
<script>
    $(document).ready(function(){
        $('select[name="album_id"]').change(function(){
            var album_id = $(this).val();
            $.ajax({
                url: "{!!route('admin.photo.postAjaxGetPhoto')!!}",
                type: "POST",
                data: {data : album_id, _token:$('meta[name="csrf-token"]').attr('content') },
                success: function(rs){
                    $('.wrap-photo').html(rs.msg);
                }

            })
        })
    });
</script>
@stop

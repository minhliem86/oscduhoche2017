@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Modify Tour</h1>
</section>
<section class="content">
	<div class="box">
		<div class="container-fluid">
			{!!Form::model($tour,array('route'=>array('admin.tour.update',$tour->id),'method'=>'PUT' ,'class'=>'formAdmin form-horizontal','files'=>true))!!}
				<div class="form-group">
					<label for="">Tên Tour</label>
					{!!Form::text('title',old('title'),array('class'=>'form-control'))!!}
				</div>
				<div class="form-group">
					<label for="">Quốc gia du học</label>
					{!!Form::select('country_id',$country,$tour->country_id,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="">Quốc gia du học</label>
					{!!Form::select('location_id',$location,'',['class'=>'form-control'])!!}
				</div>
				di
				<div class="form-group">
					<label for="">Mô tả</label>
					{!!Form::textarea('description',old('description'),array('class'=>'form-control','rows'=>3))!!}
				</div>
				<div class="form-group">
					<label for="" >Nội dung</label>
					{!!Form::textarea('content',old('content'),array('class'=>'form-control ckeditor'))!!}
				</div>
				<div class="form-group">
					<label for=""></label>
				</div>
				<div class="form-group">
					<label for="">Đối tác</label>
					{!!Form::text('partner',old('partner'),array('class'=>'form-control'))!!}
				</div>
				<div class="form-group">
					<label for="">Chổ ổ</label>
					{!!Form::text('stay',old('stay'),array('class'=>'form-control'))!!}
				</div>
				<div class="form-group">
					<label for="">Thời gian dự kiến</label>
					{!!Form::text('week',old('week'),array('class'=>'form-control'))!!}
				</div>
				<div class="form-group">
					<label for="">Thời gian bắt đầu</label>
					{!!Form::text('start',old('start'),array('class'=>'form-control date'))!!}
				</div>
				<div class="form-group">
					<label for="">Thời gian kết thúc</label>
					{!!Form::text('end',old('end'),array('class'=>'form-control date'))!!}
				</div>
				<div class="form-group">
					<label for="">Giá</label>
					{!!Form::text('price',old('price'),array('class'=>'form-control'))!!}
				</div>
				<div class="form-group">
					<label for="">Độ tuổi</label>
					{!!Form::text('age',old('age'),array('class'=>'form-control'))!!}
				</div>
				<div class="form-group">
					<label for="" >Thứ tự</label>
					{!!Form::text('order',old('order'),array('class'=>'form-control'))!!}
				</div>

				<div class="form-group">
					<label for="" >Hình đại diện</label>
					<p>
						<img src="{!!$tour->img_avatar!!}" width="150" alt="">
						{!!Form::hidden('img-bk',$tour->img_avatar)!!}
					</p>
					{!!Form::file('img')!!}
				</div>
				<div class="form-group">
					<span class="inline-radio"><input type="radio" name="status" value="1" {!!$tour->status == 1 ? 'checked' : ''!!}> <b>Active</b> </span>
					<span class="inline-radio"><input type="radio" name="status" value="0" {!!$tour->status == 0 ? 'checked' : ''!!}> <b>Deactive</b> </span>
				</div>

				<div class="form-group">
					{!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
				</div>
			{!!Form::close()!!}
		</div>
	</div>
</section>
@stop

@section('script')
<script>
	$(document).ready(function(){
		$('.date').datepicker({
			'dateFormat': 'dd-mm-yy'
		});
	})

</script>
@stop
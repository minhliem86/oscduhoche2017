@extends('Admin::layouts.layout')

@section('content')

<section class="content-header">
  <h1>Country</h1>
</section>
<section class="content">
	<div class="box">
		<div class="container-fluid">
			{!!Form::model($country,array('route'=>array('admin.country.update',$country->id),'method'=>'PUT' ,'class'=>'formAdmin form-horizontal','files'=>true))!!}
				<div class="form-group">
					<label for="">Quốc gia</label>
					{!!Form::text('name',old('name'),array('class'=>'form-control'))!!}
				</div>
				<div class="form-group">
					<label for="">Mô tả</label>
					{!!Form::textarea('description',old('description'),array('class'=>'form-control'))!!}
				</div>
				
				<div class="form-group">
					<label for="" >Sắp xếp</label>
					{!!Form::text('order',old('order'),array('class'=>'form-control'))!!}
				</div>

				<div class="form-group">
					<label for="" >Hình đại diện</label>
					<p>
						<img src="{!!$country->img_avatar!!}" width="150" alt="">
						{!!Form::hidden('img-bk',$country->img_avatar)!!}
					</p>
					{!!Form::file('img')!!}
				</div>
				<div class="form-group">
					<label for="">Kết hợp nhiều quốc gia</label>
					<div>
						<span class="inline-radio"><input type="radio" name="multi_countries" value="1" {!!$country->multi_countries == 1 ? 'checked' : ''!!}> <b>Có</b> </span>
						<span class="inline-radio"><input type="radio" name="multi_countries" value="0" {!!$country->multi_countries == 0 ? 'checked' : ''!!}> <b>Không</b> </span>
					</div>
					
				</div>
				<div class="form-group">
					<label for="">Hiển thị theo lựa chọn</label>
					<div>
						<span class="inline-radio"><input type="radio" name="home_show" value="1" {!!$country->home_show == 1 ? 'checked' : ''!!}> <b>Có</b> </span>
						<span class="inline-radio"><input type="radio" name="home_show" value="0" {!!$country->home_show == 0 ? 'checked' : ''!!}> <b>Không</b> </span>
					</div>
					
				</div>
				<div class="form-group">
					<span class="inline-radio"><input type="radio" name="status" value="1" {!!$country->status == 1 ? 'checked' : ''!!}> <b>Active</b> </span>
					<span class="inline-radio"><input type="radio" name="status" value="0" {!!$country->status == 0 ? 'checked' : ''!!}> <b>Deactive</b> </span>
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

</script>
@stop

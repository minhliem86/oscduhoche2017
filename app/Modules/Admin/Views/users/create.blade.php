@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Create User</h1>
</section>
<section class="content">

	<div class="box">
		<div class="container-fluid">
      {!! Form::open(array('route'=>'admin.postRegister', 'class'=>'form-register')) !!}
				<div class="form-group has-feedback">
					{!!Form::text('name',old('name'), array('class'=>'form-control', 'placeholder'=>'Fullname'))!!}
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="email" class="form-control" placeholder="Email (*)" name="email" value="{!!old('email')!!}">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password (*)" name="password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Retype password (*)" name="password_confirmation">
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="checkbox icheck">
							<label>
								<input type="radio" name="role" value="admin"> Administrator
							</label>

							<label>
								<input type="radio" name="role" value="mod"> Moderator
							</label>
						</div>
					</div>
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
					</div>
					<!-- /.col -->
				</div>
			{!! Form::close()!!}
		</div>
	</div>
</section>
@stop

@section('script')
<script>

</script>
@stop

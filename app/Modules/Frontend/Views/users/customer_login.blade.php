@extends('Frontend::users.layout-customer')

@section('content')
  <div class="fullwidth bg-login">
    <div class="wrap-panel">
      <div class="wrap-table-cell">
        <div class="logo">
          <a href="#" class="logo-href">
            <img src="{!!asset('public/assets/frontend/')!!}/images/customers/logo-login.png" alt="">
          </a>
        </div> <!-- end logo -->
        <h2 class="title">Chào mừng đến với <span>Chương trình Du học hè 2017</span></h2>
        <div class="wrap-form">
          {!!Form::open(['route'=>['f.postLoginCustomer'],'class'=>'form' , 'id'=>'form-login'])!!}
            <div class="form-group has-feedback">
              <i class="form-control-feedback right-feedback glyphicon glyphicon-user"></i>
              <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group has-feedback">
              <i class="form-control-feedback right-feedback glyphicon glyphicon-lock"></i>
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group text-center">
              <input type="submit" class="btn-submit-login" value="Đăng Nhập">
              <a href="#" class="back">Trang chủ</a>
            </div>
          {!!Form::close()!!}
        </div>

      </div>  <!-- end table - cell -->
    </div>  <!-- content- login -->
  </div>
@stop

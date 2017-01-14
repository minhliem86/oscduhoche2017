<form class="reg-box" accept-charset="true" method="POST" action="{!!route('contact.postRegister')!!}">
    {!!Form::token()!!}
    <div class="col-xs-12">
        <input class="form-control" value="{!!old('name')!!}" name="name" required title="Ho Ten" type="text" placeholder="Họ và Tên">
    </div>
    <div class="col-xs-12 col-sm-6">
         <input class="form-control" value="{!!old('email')!!}" name="email" required title="Email" type="email" placeholder="Email">
    </div>
    <div class="col-xs-12 col-sm-6">
         <input class="form-control" value="{!!old('phone')!!}" name="phone" required title="So dien thoai" type="tel" placeholder="Số điện thoại">
    </div>
    @if(isset($location))
    <div class="col-xs-12 col-sm-6">
        {!!Form::select('id_city',[''=>'Chọn Thành Phố']+$location,old('id_city'),['class'=>'form-control'])!!}
    </div>
    @endif
    @if(isset($country))
    <div class="col-xs-12 col-sm-6">
        {!!Form::select('country',[''=>'Quốc gia bạn muốn Du Học']+$country,old('country'),['class'=>'form-control'])!!}
    </div>
    @endif
    <div class="form-group text-center">
         {!!Form::submit('Đăng ký',['class' => 'btn btn-reg'])!!}
    </div>
    @include('Admin::errors.listerror')
</form>
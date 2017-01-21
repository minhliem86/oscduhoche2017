@extends('Frontend::layouts.layout')

@section('meta')

@stop

@section('content')
	<section class="contact-footer">
       <div class="container">
            <div class="row">
                <div class="inner-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 row contact-left">
                                <h4 class="col-xs-12">TRUNG TÂM TƯ VẤN ILA DU HỌC</h4>
                                <h4 class="col-xs-12 text-red-02">Hồ Chí Minh - 2 Trung tâm <a href="#" class="drop-down"></a></h4>
                                <div class="col-xs-12 col-sm-6">
                                    <h4>Hồ Chí Minh 01</h4>
                                    <p>146 Nguyễn Đình Chiểu, Q.3</p>
                                    <p>0903 891 511 - 0909 976 636</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <h4>Hồ Chí Minh 01</h4>
                                    <p>146 Nguyễn Đình Chiểu, Q.3</p>
                                    <p>0903 891 511 - 0909 976 636</p>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <h4>Đà Nẵng 01</h4>
                                    <p>146 Nguyễn Đình Chiểu, Q.3</p>
                                    <p>0903 891 511 - 0909 976 636</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <h4>Đà Nẵng 01</h4>
                                    <p>146 Nguyễn Đình Chiểu, Q.3</p>
                                    <p>0903 891 511 - 0909 976 636</p>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <h4>Hải Phòng 01</h4>
                                    <p>146 Nguyễn Đình Chiểu, Q.3</p>
                                    <p>0903 891 511 - 0909 976 636</p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <h4>Hải Phòng 01</h4>
                                    <p>146 Nguyễn Đình Chiểu, Q.3</p>
                                    <p>0903 891 511 - 0909 976 636</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 contact-right">
                                <div class="row">
                                    <h4>ĐĂNG KÝ ĐỂ ĐƯỢC TƯ VẤN</h4>
                                    @include('Frontend::layouts.formRegister')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>
@stop
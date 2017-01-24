<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{!!csrf_token()!!}">
    @yield('meta')
    <title>@yield('title','ILA Du Học Hè 2017')</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <!-- Custom Css -->
    <link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/css/swiper.css">
    <link href="{!!asset('public/assets/frontend/')!!}/css/style.css" rel="stylesheet">
    <link href="{!!asset('public/assets/frontend/')!!}/css/reponsive.css" rel="stylesheet">
    <link href="{!!asset('public/assets/frontend/')!!}/css/custom-lp.css" rel="stylesheet">

    <!-- Custom JS -->
    <!-- <script src="{!!asset('public/assets/frontend/')!!}js/scrip.js"></script> -->

</head>

<body>
    <div class="osc-summer">
        <div class="container-fluid">
            <div class="row">
                <!--====================== Heade ======================-->
                @include('Frontend::layouts.header')
                <!--====================== / Header ======================-->

                <!--====================== Content ======================-->
                <article class="container-fluid">
                    <div class="row {!!Route::getCurrentRoute()->getActionName() == 'App\Modules\Frontend\Controllers\DestinationController@getCountry' ? 'destination' : ''!!} {!!Request::segment(1) == '' ? 'home' : ''!!} {!!Request::segment(1) == 'lien-he' ? 'contact' : ''!!} {!!Route::getCurrentRoute()->getActionName() == 'App\Modules\Frontend\Controllers\DestinationController@getTour' ? 'course-detail' : ''!!} {!!Request::segment(1) == 'khuyen-mai' ? 'promotion' : ''!!} {!!Request::segment(1) == 'trai-nghiem-du-hoc' ? 'testtimonial-box' : ''!!} ">
                        <!-- **************** Banner ****************-->
                        @include('Frontend::layouts.banner')
                        <!-- **************** /Banner ****************-->
                        @yield('content')
                    </div>
                </article>
                <!--====================== /Content ======================-->

                <!--====================== Footer ======================-->
                @include('Frontend::layouts.footer')
                <!--====================== /Footer ======================-->
            </div>
        </div>
    </div>
    <script src="{!!asset('public/assets/frontend/')!!}/js/jquery-2.1.1.js" type="text/javascript"></script>
    <script src="{!!asset('public/assets/frontend/')!!}/js/bootstrap.min.js" type="text/javascript"></script>
     <script src="{!!asset('public/assets/frontend')!!}/js/jquery.validate.min.js"></script>
    <script src="{!!asset('public/assets/frontend/')!!}/js/swiper.min.js"></script>
    <script src="{!!asset('public/assets/frontend/')!!}/js/jquery.matchHeight.js"></script>
    <script src="{!!asset('public/assets/frontend/')!!}/js/jquery.md5.js"></script>
    <!-- REVOLUTION -->
    <script type="text/javascript" src="{!!asset('public/assets/frontend/')!!}/js/revolution/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="{!!asset('public/assets/frontend/')!!}/js/revolution/jquery.themepunch.revolution.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{!!asset('public/assets/frontend/')!!}/js/revolution/css/settings.css">
    <!-- END -->
    <script src="{!!asset('public/assets/frontend/')!!}/js/customScript.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('.wrap-multi-country').matchHeight({})

            // $('.main-banner').revolution(
            // {
            //     delay:9000,
            //     startwidth:1170,
            //     startheight:350,
            //     hideThumbs:10

            // });

            $('#id_city').on('change',function(){
                var id_city = $(this).val();
                var token = $('input[name="_token"]').val();
                console.log(token);
                $.ajax({
                    url: "{!!route('contact.postAjaxCenter')!!}",
                    data: {'_token':token, 'data':id_city},
                    type: "POST",
                    success:function(data){
                        $('#id_center').val(data.rs);
                        console.log(data.rs);
                    },
                })
            });
        });

    </script>
    @yield('script')

</body>

</html>
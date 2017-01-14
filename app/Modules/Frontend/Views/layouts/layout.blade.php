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
    <!-- Custom JS -->
    <script src="js/scrip.js"></script>
    
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
                    <div class="row {!!Request::segment(1) == '' ? 'home' : ''!!} {!!Request::segment(1) == 'quoc-gia' ? 'destination' : ''!!}">
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
    <script src="{!!asset('public/assets/frontend/')!!}/js/swiper.min.js"></script>
    @yield('script')
    <script>
        $(document).ready(function () {
            //initialize swiper when document ready  
            var swiper = new Swiper('.slider-lv1', {
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 30,
                autoplay: 2500,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                autoplayDisableOnInteraction: false
            });
            var mySwiper = new Swiper ('.slider-lv2', {
                // Optional parameters
                pagination: '.swiper-pagination',
                paginationClickable: true,
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: 2500,
                autoplayDisableOnInteraction: false
            });      
            var mySwiper = new Swiper ('.slider-lv3', {
                // Optional parameters
                pagination: '.swiper-pagination',
                paginationClickable: true,
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: 2500,
                autoplayDisableOnInteraction: false
            });
      });
    </script>
</body>

</html>
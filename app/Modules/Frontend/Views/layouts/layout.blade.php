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

    <!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '336676026456595'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=336676026456595&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

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
    <link rel="stylesheet" href="{!!asset('public/assets/frontend/')!!}/js/revolution/css/settings.css">
    <script src="{!!asset('public/assets/frontend/')!!}/js/revolution/jquery.themepunch.plugins.min.js"></script>
    <script src="{!!asset('public/assets/frontend/')!!}/js/revolution/jquery.themepunch.revolution.min.js"></script>
    <!-- END -->
    <script>
        $(document).ready(function () {
            $('.wrap-multi-country').matchHeight({})
            $('#id_city').on('change',function(){
                var id_city = $(this).val();
                var token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{!!route('contact.postAjaxCenter')!!}",
                    data: {'_token':token, 'data':id_city},
                    type: "POST",
                    success:function(data){
                        $('#id_center').val(data.rs);
                    },
                })
            });
        });
    </script>
     <script>
        $(document).ready(function(){
            $('.tp-banner').revolution({
                delay:5000,
                startwidth:1170,
                startheight:350,
                hideThumbs:10,
                navigationType:'none'
            })
        })
    </script>
    @yield('script')


    <!-- Google Code for Remarketing Tag -->
    <!--
    Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
    -->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 934827352;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/934827352/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    <!-- END -->

</body>

</html>
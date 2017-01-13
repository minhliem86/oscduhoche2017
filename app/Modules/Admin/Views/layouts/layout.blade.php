<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<title>AdminLTE 2 | Starter</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="csrf-token" content="{!! csrf_token() !!}">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	
	{!!Html::style('public/assets/backend/bootstrap/css/bootstrap.min.css')!!}

		 <!-- Font Awesome -->
	{!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')!!}

	<!-- Ionicons -->
	{!!Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')!!}
	<!-- Theme style -->
	{!!Html::style('public/assets/backend/css/AdminLTE.min.css')!!}

	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
	        page. However, you can choose any other skin. Make sure you
	        apply the skin class to the body tag so the changes take effect.
	  -->
	 {!!Html::style('public/assets/backend/css/skins/skin-blue.min.css')!!}

	 <!-- CUSTOMIZE -->
	 {!!Html::style('public/assets/backend/css/style.css')!!}

	<!-- Date Picker -->
	{!!Html::style('public/assets/backend/plugins/datepicker/datepicker3.css')!!}

	<!-- Html5 Shiv and Respond.js for IE8 support of Html5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--
	BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
</head>
<body class="skin-blue sidebar-mini">
	<div class="wrapper">
		<div class="wrap-loading" style="position:fixed; left:50%; -webkit-transform:translateX(-50%)">
			<img src="{!!asset('public/assets/backend/img/loading.gif')!!}" alt="">
		</div>
		@include('Admin::layouts.header')
		@include('Admin::layouts.sidebar')
			<div class="content-wrapper">
				@yield('content')
			</div> <!-- end content-wrapper-->

		@include('Admin::layouts.footer')
	</div>	<!-- end wrapper-->

	{!!Html::script('public/assets/backend/js/jquery-1.12.4.min.js')!!}
	 <!-- CORE JQUERY SCRIPTS -->
	{!!Html::script('public/assets/backend/bootstrap/js/bootstrap.min.js')!!}

	<!-- datepicker -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- APP -->
	<!-- {!!Html::script('public/assets/backend/js/app.js')!!} -->

	<!-- CKEDITOR + ALERT -->
	{!!Html::script('public/assets/backend/js/ckeditor/ckeditor.js')!!}
	{!!Html::script('public/assets/backend/js/alert/alertify.js')!!}
	{!!Html::style('public/assets/backend/js/alert/alertify.css')!!}
	{!!Html::style('public/assets/backend/js/alert/semantic.min.css')!!}
	
	@yield('script')
</body>
</html>
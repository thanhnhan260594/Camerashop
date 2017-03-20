<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camera Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{url('public/user/bootshop/bootstrap.min.css')}}" media="screen"/>
    <link href="{{url('public/user/css/base.css')}}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="{{url('public/user/css/bootstrap-responsive.min.css')}}" rel="stylesheet"/>
	<link href="{{url('public/user/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="{{url('public/user/js/google-code-prettify/prettify.css')}}" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="public/user/images/ico/camera.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('public/user/images/ico/camera-144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('public/user/images/ico/camera-114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('public/user/images/ico/camera-72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{url('public/user/images/ico/camera-57.png')}}">
	<style type="text/css" id="enject"></style>

</head>
<body>
<!--HEADER-->
	@include('user.blocks.header')
<!--END HEADER -->

	<!-- CONTENT -->
		@yield('content')
	<!-- END CONTENT -->

<!--FOOTER-->
	@include('user.blocks.footer')
<!--END FOOTER-->

	<script src="{{url('public/user/js/jquery.js') }}" type="text/javascript"></script>
	<script src="{{url('public/user/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{url('public/user/js/google-code-prettify/prettify.js') }}"></script>	
	<script src="{{url('public/user/js/bootshop.js') }}"></script>
    <script src="{{url('public/user/js/jquery.lightbox-0.5.js') }}"></script>
    <script src="{{url('public/user/js/app.js') }}"></script>	
	<!-- public/user switcher section ============================================================================================= -->
</div>
</body>
</html>
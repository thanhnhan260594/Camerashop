<!DOCTYPE HTML>
<html lang="en">

	<head>
		<title>CameraShop | Trang quản lý website trực tuyến</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- CSS -->
		<link rel="stylesheet" href="{{url ('public/admin/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{url ('public/admin/css/vendor/icon-sets.css')}}">
		<link rel="stylesheet" href="{{url ('public/admin/css/main.min.css')}}">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
		<link rel="stylesheet" href="{{url ('public/admin/css/demo.css')}}">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="{{url ('public/admin/img/apple-icon.png')}}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{url ('public/admin/img/favicon.png')}}">


		<!--CKeditor && CKfinder-->
		<script src="{{url('public/admin/js/ckeditor/ckeditor.js') }}"></script>
		<script src="{{url('public/admin/js/ckfinder/ckfinder.js') }}"></script>
		<script type="text/javascript">
			var baseURL = "{!! url('/') !!}";		
		</script>
		<script src="{{url('public/admin/js/func_ckfinder.js') }}"></script>
		<!--My script-->
		<script src="{{url('public/admin/js/klorofil.min.js') }}"></script>
	</head>
	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- SIDEBAR -->
			@include('admin.blocks.menu')
			<!-- END SIDEBAR -->
			<!-- MAIN -->
			<div class="main">
			<!-- NAVBAR -->			
				@include('admin.blocks.navbar')			
				<!-- END NAVBAR -->
				
				<!--Nơi chứa nội dung-->			
				@yield('content')
				<!-- END MAIN CONTENT -->

				<!-- FOOTER -->
				@include('admin.blocks.footer')
				<!-- END FOOTER -->
			</div>
			<!-- END MAIN -->
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="{{url('public/admin/js/myapp.js') }}"></script>
		<script src="{{url('public/admin/js/jquery/jquery-2.1.0.min.js') }}"></script>
		<script src="{{url('public/admin/js/bootstrap/bootstrap.min.js') }}"></script>
		<script src="{{url('public/admin/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
		<script src="{{url('public/admin/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{url('public/admin/js/plugins/chartist/chartist.min.js') }}"></script>	
	</body>

</html>

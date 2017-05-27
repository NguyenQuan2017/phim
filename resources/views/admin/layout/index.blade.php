<!DOCTYPE HTML>
<html>
<head>
	<title>ADMIN|PHIM MỚI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<!-- Bootstrap Core CSS -->
<link href="{{ asset('public/admin/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('public/admin/css/style.css') }}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{ asset('public/admin/css/font-awesome.css') }}" rel="stylesheet"> 
<link rel="stylesheet" href="{{ asset('public/admin/css/icon-font.min.css') }}" type='text/css' />
    <link rel="stylesheet" href="{!! url('public/movies/css/font-awesome.css') !!}">

<link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap.css') }}" type='text/css' />
<link rel="stylesheet" href="{{ asset('public/admin/css/jquery.dataTables.min.css') }}" type='text/css' />

<link href="{{ asset('public/admin/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">	
<link href="{{ asset('public/admin/css/scoll.css') }}" rel="stylesheet" type="text/css" media="all">


</head> 
<body class="sticky-header left-side-collapsed" id="scoll" >
<a href="#scoll" class="go-top"><i class="fa fa-angle-up"></i></a>
	<section>
		<!-- Left-side -->
		@include('admin/layout/left-side')
		<div class="main-content main-content3">
			<div class="header-section">
				<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
				<!-- Menu-right -->
				@include('admin/layout/menu-right')			
			</div>
			<div class="col-md-12">
				@if(Session::has('thongbao'))
				<div class="alert alert-success">
					{{ Session::get('thongbao') }}
				</div>
				@endif
			</div>
			{{-- Page-wrapper --}}
			
			@yield('content')

			{{--  --}}
		</div>

	</section>
	<script src="{{ asset('public/admin/js/wow.min.js') }}"></script>
	<script>
		new WOW().init();
	</script>
	<script src="{{ asset('public/admin/js/jquery-1.10.2.min.js') }}"></script>	
	<script src="{{ asset('public/admin/js/bootstrap.min.js') }}"></script>
	<!-- <script src="{{ asset('public/admin/js/dataTables.bootstrap.min.js') }}"></script>	 -->
	<script src="{{ asset('public/admin/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('public/admin/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('public/admin/js/scripts.js') }}"></script>
	<script src="{{ asset('public/admin/js/scoll.js') }}"></script>





	<!-- Bootstrap Core JavaScript -->
	<script>
		$(document).ready(function() {
			$('#example').DataTable( {
				"scrollX": true
			} );
		} );

	</script>

	<script>
		function xacnhanxoa(msg){
			if(window.confirm(msg)){
				return true;
			}
			
			return false;
		}
	</script>
	<script>	$("div.alert").delay(1000).slideUp(); </script>   

	
{{--     <script>
	initSample();
</script> --}}

</body>
</html>
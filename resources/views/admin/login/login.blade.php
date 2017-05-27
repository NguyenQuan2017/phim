<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>ADMIN|lOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Proficient Login Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="{{ asset('public/admin/css/login.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('public/admin/css/font-awesome.css') }}" rel="stylesheet"> 


<!-- /css -->
</head>
<body>
<div class="overlay">
	<h1 class="w3layouts agileits">ADMIN</h1>
	<div class="content-w3ls agileits">
		@if($errors->has('errorLogin'))
			<p>{{ $errors->first('errorLogin') }}</p>
		@endif
		<img src="{{ url('public/admin/images/phimmoi-square.png') }}" alt="" class="user-wthree">
		<form action="" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group1-agile agile-info">
				<input type="text" name="email" value="{{ old('email') }}" placeholder="Username" >
				@if($errors->has('email'))
					<p stype="color:red">{{ $errors->first('email') }}</p>
				@endif
			</div>
			<div class="form-group2-agile agile-info">
				<input type="password" name="password" placeholder="Password" >	
					@if($errors->has('password'))
					<p stype="color:red">{{ $errors->first('password') }}</p>
				@endif
			</div>
			<div class="form-group3-agile wthree">
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Keep Me Logged In?</label>
			</div>
			<input type="submit" value="LOG IN">
		</form>
		<a href="#" class="face-link"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
		<a href="#" class="twitter-link"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
	</div>
	<div class="footer-w3ls w3-agile">
		<p class="w3-agileits">© 2017 Proficient Login Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>	
</div>
<video autoplay loop id="video-background" poster="{{url('public/admin/video/city.jpg')}}" muted>
  <source src="{{ url('public/admin/video/city.mp4') }}" type="video/mp4">
</video>	
<!-- js -->
	<script src="{{ asset('public/admin/js/modernizr.min.js') }}"></script>	
<!-- /js -->
</body>
</html>
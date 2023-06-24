<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Login </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('user/assets/img/favicon.ico')}}">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{url('user/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/css/animated-headline.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/slick.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{url('user/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('user/assets/bootstrap-icons/bootstrap-icons.css')}}">
	<style>
	.vertical-center {
  		min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  		min-height: 100vh; /* These two lines are counted as one :-)       */
  		display: flex;
  		align-items: center;
	}
	a{
		color:#09cc7f;
	}
	a:hover{
		color:#09cc7f;
		text-decoration:underline;
	}

	</style>
</head>
<body>
	<div class="container vertical-center">
	<div class="container">
	<div class="typography text-center">
			<h1>Login</h1>
			<h4>Enter your Credentials</h4>
	</div>
		<form name="login" method="POST" action="/">
			<div class="mt-10 pb-0 pt-5 pr-5 pl-5">
				<input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required class="single-input">
			</div>
			<div class="mt-10 pl-5 pr-5 pt-0">
				<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
			</div>
			<div class="mt-10 pl-5">
			<input type="checkbox" name="cb_remember"> &nbsp;Remember Me	
			</div>
			<div class="text-center">
			<button type="submit" class="button button-contactForm boxed-btn">Login</button>
			<br><br>
			
				Don't Have an Account? <a href="/register">Create an Account</a>
			</div>
	</form>
</div>
</div>
</body>
</html>
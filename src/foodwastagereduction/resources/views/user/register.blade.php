<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Registration </title>
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
			<h1>Registration Form</h1>
			<h4>Fill in the Details to become a Donor!</h4>
	</div>
		<form name="register" method="POST" action="/login">
			<div class="mt-10 pb-0 pt-5 pr-5 pl-5">
				<input type="text" name="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required class="single-input">
			</div>
			<div class="mt-10 pb-0 pr-5 pl-5">
				<input type="text" name="contact" placeholder="Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" required class="single-input">
			</div>
			<div class="mt-10 pb-0 pr-5 pl-5">
				<textarea class="single-textarea" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required></textarea>
			</div>
			<div class="mt-10 pb-0 pr-5 pl-5">
				<input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required class="single-input">
			</div>
			<div class="mt-10 pl-5 pr-5 pt-0">
				<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
			</div>
			<div class="mt-10 pl-5 pr-5 pt-0">
				<input type="password" name="confirm_password" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" required class="single-input">
			</div>
			<div class="mt-10 text-center">
				<br>
			<button type="submit" class="button button-contactForm boxed-btn">Register</button>
			<br><br>
			Already Have an Account? <a href="/login">Login Now</a>
			<br><a href="/">Back to Home</a>
			</div>
	</form>
</div>
</div>
</body>
</html>
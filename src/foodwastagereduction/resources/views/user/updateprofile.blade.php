<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Profile </title>
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
			<h1>Profile</h1>
			@if(session('status'))
					<h3 class="alert alert-success" role="alert">
						{{session('status')}}
					</h3>
					@endif
	</div>
		<form name="updateuserprofile" method="POST" action="{{ url('/update-user-profile/'.Auth::guard('web')->user()->id) }}">
			@csrf
			@method('PUT')
			<div class="mt-10 pb-0 pt-5 pr-5 pl-5">
				Name
				<input type="text" name="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'" required class="single-input" value="{{ Auth::guard('web')->user()->name }}">
			</div>
			<div class="mt-10 pb-0 pr-5 pl-5">
				Contact
				<input type="text" name="contact" placeholder="Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" required class="single-input" value="{{ Auth::guard('web')->user()->contact }}">
			</div>
			<div class="mt-10 pb-0 pr-5 pl-5">
				Address
				<textarea name="address" class="single-textarea" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required>{{ Auth::guard('web')->user()->address }}</textarea>
			</div>
			<div class="mt-10 pb-0 pr-5 pl-5">
				Email Address
				<input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required class="single-input" value="{{ Auth::guard('web')->user()->email }}">
			</div>
			<div class="mt-10 pl-5 pr-5 pt-0">
				New Password
				<input type="password" name="password" placeholder="Enter New Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter New Password'" class="single-input" value="">
			</div>
			<div class="mt-10 text-center">
				<br>
			<button type="submit" class="button button-contactForm boxed-btn">Update Profile</button>
			<br>
			<br><a href="/">Back to Home</a>
			</div>
	</form>
</div>
</div>
</body>
</html>
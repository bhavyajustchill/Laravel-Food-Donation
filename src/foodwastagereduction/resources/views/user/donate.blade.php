@extends('user.layouts.main')

@section('main-container')
<style>
	.vertical-center {
  		min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  		min-height: 100vh; /* These two lines are counted as one :-)       */
  		display: flex;
  		align-items: center;
	}
	</style>
	<div class="container vertical-center">
	<div class="container">
	<div class="typography text-center">
			<h1>Donation Form</h1>
			<h4>Fill in your Donation Details below!</h4>
	</div>
		<form name="donate" method="POST" action="/donate" enctype="multipart/form-data">
			@csrf
			<div class="mt-10 pb-0 pt-5 pr-5 pl-5">
				<input type="text" name="name" placeholder="Food Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Food Name'" required class="single-input">
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group mt-10 pb-0 pt-5 pr-5 pl-5 ml-3">
    					<label for="exampleFormControlFile1">Food Image</label>
						<br>
    					<input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
  					</div>
				</div>
				<div class="col">
					<div class="mt-10 pb-0 pt-5 pr-5 pl-5">
						<input type="text" name="qty" placeholder="Food Qty." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Food Qty.'" required class="single-input">
					</div>
				</div>
			</div>
			<div class="input-group-icon mt-10 pb-0 pt-5 pr-5 pl-5">
			<div class="icon mt-0 pb-0 pt-5 pr-5 pl-5"><i class="fa fa-globe" aria-hidden="true"></i></div>
			<div class="form-select" id="default-select"">
				<select name="slum_area_id">
					<option value="">Suggest Slum Area</option>
					@foreach ($slum_areas as $slum_area)
						<option value="{{$slum_area->id}}">{{$slum_area->name}}</option>
					@endforeach
				</select>
			</div>
			</div>
			<div class="mt-10 text-center">
				<br><button type="submit" class="button button-contactForm boxed-btn">Contribute Now</button>
			</div>
	</form>
</div>
</div>
@endsection
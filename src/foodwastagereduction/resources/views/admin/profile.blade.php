@extends('admin.layouts.main')

@section('main-container')
			<main class="content">
				<div class="container-fluid p-0">
					@if(session('status'))
					<h6 class="alert alert-success" role="alert">
						{{session('status')}}
					</h6>
					@endif
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Profile</h1>
					</div>
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body text-center">
									<img src="{{url('adminpanel/img/avatars/avatar-4.jpg')}}" alt="Bhavya Popat" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0">{{ Auth::guard('admin')->user()->name }}</h5>
									<div class="text-muted mb-2">Administrator</div>
								</div>
								<!-- <hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a href="#">Gujarat, IND</a></li>

										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a href="https://github.com/bhavyajustchill">GitHub</a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a href="#">Rajkot</a></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Social Media Links</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><a href="https://twitter.com/BhavyaJustChill">Twitter</a></li>
										<li class="mb-1"><a href="https://www.facebook.com/bhavya.popat.98/">Facebook</a></li>
										<li class="mb-1"><a href="https://www.instagram.com/bhavyajustchill/">Instagram</a></li>
									</ul>
								</div> -->
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Edit Profile</h5>
								</div>
								<div class="card-body h-100">
										<form name="edit_admin_profile" action='{{ url('/admin/update-profile/'.Auth::guard('admin')->user()->id) }}' method="POST">
											@csrf
											@method('PUT')
											<span class="text-secondary">Name:</span> <input class="form-control" name="name" type="text" value="{{ Auth::guard('admin')->user()->name }}" readonly /> <br>
											<span class="text-secondary">Email:</span> <input type="email" name="email" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" /> <br>
											<span class="text-secondary">New Password:</span> <input type="password" name="password" class="form-control" /> <br>
											<div class="d-grid gap-2">
												<button type="submit" class="btn btn-primary btn-block">Update Profile</button>	
											</div>
										</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection
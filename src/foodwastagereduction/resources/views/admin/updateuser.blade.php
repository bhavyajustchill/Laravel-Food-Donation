@extends('admin.layouts.main')

@section('main-container')
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"><h4 class="text-secondary">Update User<a href="{{ url('admin/users') }}" class="btn btn-danger float-end">Go BACK</a></h4></h5>
								</div>
								<div class="card-body">
								<form name="update_user" action="{{ url('/admin/update-user/'.$user->id) }}" method="POST">
									@csrf
									@method('PUT')
								Name
								<input name="name" type="text" class="form-control" value="{{ $user->name }}" /><br>
								Contact
								<input name="contact" type="text" class="form-control" value="{{ $user->contact }}" /><br>
								Email
								<input name="email" type="email" class="form-control" value="{{ $user->email }}" /><br>
								Address
								<textarea name="address" class="form-control" rows="2" placeholder="">{{ $user->address }}</textarea><br>
									<div class="d-grid gap-2">
										<button type="submit" class="btn btn-lg btn-success">Update User</button>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection
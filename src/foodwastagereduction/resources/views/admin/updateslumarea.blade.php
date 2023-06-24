@extends('admin.layouts.main')

@section('main-container')
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"><h4 class="text-secondary">Update Slum Area<a href="{{ url('admin/slumareas') }}" class="btn btn-danger float-end">Go BACK</a></h4></h5>
								</div>
								<div class="card-body">
								<form name="update_slumarea" action="{{ url('/admin/update-slum-area/'.$slum_area->id) }}" method="POST">
									@csrf
									@method('PUT')
									Slum Area Name
									<input name="name" type="text" class="form-control" value="{{ $slum_area->name }}" /><br>
									Address
									<textarea name="address" class="form-control" rows="2" placeholder="">{{ $slum_area->address }}</textarea><br>
									<div class="d-grid gap-2">
										{{-- <a href="/admin/slumareas" class="btn btn-lg btn-success">Update Slum Area</a> --}}
										 <button type="submit" class="btn btn-lg btn-success">Update Slum Area</button>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection
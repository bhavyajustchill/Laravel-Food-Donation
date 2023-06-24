@extends('admin.layouts.main')

@section('main-container')
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"><h4 class="text-secondary">Add Slum Area 
										<a href="{{ url('admin/slumareas') }}" class="btn btn-danger float-end">Go BACK</a></h4></h5>
								</div>
								<div class="card-body">
									<form name="add_slumarea" action="/admin/addslumarea" method="POST" enctype="multipart/form-data">
										@csrf
									Slum Area Name
									<input name="name" type="text" class="form-control" /><br>
									Address
									<textarea name="address" class="form-control" rows="2" placeholder=""></textarea><br>
									<div class="d-grid gap-2">
										{{-- <a href="/admin/slumareas" class="btn btn-lg btn-primary">Add Slum Area</a> --}}
										 <button type="submit" class="btn btn-lg btn-primary">Add Slum Area</button> 
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection
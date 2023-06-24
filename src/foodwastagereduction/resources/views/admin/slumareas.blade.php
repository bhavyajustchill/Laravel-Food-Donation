@extends('admin.layouts.main')

@section('main-container')
			<main class="content">
				<div class="container-fluid p-0">
					@if(session('status'))
					<h6 class="alert alert-success" role="alert">
						{{session('status')}}
					</h6>
					@endif
					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-header">
									<h5 class="card-title mb-0">
										<h4 class="text-secondary">Manage Slum Areas<a href="{{ url('admin/addslumarea') }}" class="btn btn-primary float-end">New Slum Area+</a></h4>
										<div class="d-grid gap-2 d-md-flex justify-content-md-end">
										{{-- <button type="button" class="btn btn-primary" onclick="window.location.href='/admin/addslumarea'">New Slum Area +</button> --}}
										</div>
									</h5>
								</div>
								<div class="card-body">
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th class="d-none d-md-table-cell">Address</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($slum_areas as $slum_area)
										<tr>
											<td>{{ $slum_area->id }}</td>
											<td>{{ $slum_area->name }}</td>
											<td class="d-none d-md-table-cell">{{ $slum_area->address }}</td>
											<td>
												<a class="btn btn-success" href="{{ url('/admin/updateslumarea/'.$slum_area->id) }}">Update</a> <a class="btn btn-danger" href="{{ url('/admin/delete-slumarea/'.$slum_area->id) }}">Delete</a>
											</td>
										</tr>
										@endforeach	
									</tbody>
								</table>

								
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection
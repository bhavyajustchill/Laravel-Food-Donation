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
									<h5 class="card-title mb-0"><h4 class="text-secondary">Manage Donations <a href="{{ url('admin/adddonation') }}" class="btn btn-primary float-end">New Donation+</a> </h4></h5>
								</div>
								<div class="card-body">
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Food Name</th>
											<th class="d-none d-xl-table-cell">Food Image</th>
											<th class="d-none d-xl-table-cell">Food Quantity</th>
											<th>Donor</th>
											<th class="d-none d-md-table-cell">Slum Area</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($donations as $donation)
										<tr>
											<td>{{ $donation->id }}</td>
											<td>{{ $donation->name }}</td>
											<td class="d-none d-xl-table-cell"><img height="50" src="{{ asset('uploads/donations/'.$donation->img) }}"></td>
											<td class="d-none d-xl-table-cell">{{ $donation->qty }}</td>
											<td>{{ $donation->user['name'] }}</td>
											<td class="d-none d-md-table-cell">{{ $donation->slum_area['name'] }}</td>
											<td>
												@if($donation->status === "Pending")
												<span class="badge bg-danger">{{ $donation->status }}</span>
												@elseif ($donation->status === "In Transit")
												<span class="badge bg-warning">{{ $donation->status }}</span>
												@else
												<span class="badge bg-success">{{ $donation->status }}</span>
												@endif
											</td>
											<td><a class="btn btn-success" href="{{ url('/admin/updatedonation/'.$donation->id) }}">Update</a> <a class="btn btn-danger" href="{{ url('/admin/delete-donation/'.$donation->id) }}">Delete</a>
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
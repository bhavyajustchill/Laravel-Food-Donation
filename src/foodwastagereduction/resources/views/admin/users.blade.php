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
									<h5 class="card-title mb-0"><h4 class="text-secondary">Manage Users</h4></h5>
								</div>
								<div class="card-body">
									<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Contact</th>
											<th class="d-none d-xl-table-cell">Email</th>
											<th class="d-none d-md-table-cell">Address</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($users as $user)
										<tr>
											<td>{{$user->id}}</td>
											<td>{{$user->name}}</td>
											<td>{{$user->contact}}</td>
											<td class="d-none d-xl-table-cell">{{$user->email}}</td>
											<td class="d-none d-md-table-cell">{{$user->address}}</td>
											<td><a class="btn btn-success" href="{{ url('/admin/updateuser/'.$user->id) }}">Update</a> <a class="btn btn-danger" href="{{ url('/admin/delete-user/'.$user->id) }}">Delete</a>
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
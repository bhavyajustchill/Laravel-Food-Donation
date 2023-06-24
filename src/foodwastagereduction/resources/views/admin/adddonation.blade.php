@extends('admin.layouts.main')

@section('main-container')
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"><h4 class="text-secondary">Add Donation<a href="/admin/donations" class="btn btn-danger float-end">Go BACK</a></h4></h5>
								</div>
								<div class="card-body">
								<form name="update_donation" action="/admin/adddonation" method="POST" enctype="multipart/form-data">
								@csrf
								Food Image
								<input name="img" type="file" class="form-control"/><br>
								Food Name
								<input name="name" type="text" class="form-control" placeholder="Enter Food Name" /><br>
								Food Quantity
								<input name="qty" type="text" class="form-control" placeholder="Enter Food Quantity" /><br>
								Donor
								{{-- <input name="user_id"class="form-control" type="text" placeholder="Enter Donor ID" /><br> --}}
                                <select name="user_id" class="form-select mb-3">
									<option value="">Choose a Donor...</option>
									@foreach ($users as $user)
									  <option value="{{ $user->id }}">{{$user->name}}</option>
								  @endforeach
							  </select>
								Slum Area
								<select name="slum_area_id" class="form-select mb-3">
          							<option selected value="">Choose a Slum Area...</option>
          							{{-- <option value="1">Shastri Nagar</option>
          							<option value="2">Raiyadhar</option>
          							<option value="3">Rajiv Nagar</option>
									<option value="3">Bajrang Vadi</option>
									<option value="5">Vinayak Vatika Society</option>
									<option value="10">Parsana Nagar</option> --}}
                                    @foreach ($slum_areas as $slum_area) 
                                    <option value="{{$slum_area->id}}">{{$slum_area->name}}</option>                          
                                    @endforeach
        						</select>
								Status
								<select name="status" class="form-select mb-3">
          							<option selected>Pending</option>
          							<option>In Transit</option>
									<option>Donated</option>
        						</select>	
								<div class="d-grid gap-2">
									{{-- <a href="{{url()->previous()}}" class="btn btn-lg btn-primary">Add Donation</a> --}}
									<button type="submit" class="btn btn-lg btn-primary">Add Donation</button>
								</div>
</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection
@extends('admin.layouts.main')

@section('main-container')
			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0"><h4 class="text-secondary">Update Donation</h4></h5>
								</div>
								<div class="card-body">
								<form name="update_donation" action="{{url('/admin/updatedonation/'.$donation->id)}}" method="POST" enctype="multipart/form-data">
									@csrf
									@method('PUT')
								<div class="text-center">
									<h3 class="text-secondary">Food Image</h3>
									<img src="{{ asset('uploads/donations/'.$donation->img) }}" alt="Bhavya Popat" class="img-fluid rounded" width="300" />
								</div>
								Update Image
								<input name="img" type="file" class="form-control"/><br>
								Food Name
								<input name="name" type="text" class="form-control" value="{{ $donation->name }}" /><br>
								Food Quantity
								<input name="qty" type="text" class="form-control" value="{{ $donation->qty }}" /><br>
								Donor
								{{-- <input name="user_id "class="form-control" type="text" value="{{ $donation->user_id }}" /><br> --}}
								<select name="user_id" class="form-select mb-3">
									<option value="">Choose a Donor...</option>
									@foreach ($users as $user)
									  @if($user->id === $donation->user_id)
									  <option value="{{ $user->id }}" selected>{{$user->name}}</option>
									  @else
									  <option value="{{ $user->id }}">{{$user->name}}</option>
									  @endif
								  @endforeach
							  </select>
								Slum Area
								<select name="slum_area_id" class="form-select mb-3">
          							<option value="">Choose a Slum Area...</option>
          							@foreach ($slum_areas as $slum_area)
										@if($slum_area->id === $donation->slum_area_id)
										<option value="{{ $slum_area->id }}" selected>{{$slum_area->name}}</option>
										@else
										<option value="{{ $slum_area->id }}">{{$slum_area->name}}</option>
										@endif
									@endforeach
        						</select>
								Status
								<select name="status" class="form-select mb-3">
									@if($donation->status==="Pending")
									<option selected>Pending</option>
          							<option>In Transit</option>
									<option>Donated</option>
									@elseif($donation->status==="In Transit")
									<option>Pending</option>
          							<option selected>In Transit</option>
									<option>Donated</option>
									@else
									<option>Pending</option>
          							<option>In Transit</option>
									<option selected>Donated</option>
									@endif
        						</select>	
								<div class="d-grid gap-2">
									{{-- <a href="{{url()->previous()}}" class="btn btn-lg btn-success">Update Donation</a> --}}
									<button type="submit" class="btn btn-lg btn-success">Update Donation</button>
								</div>
</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection
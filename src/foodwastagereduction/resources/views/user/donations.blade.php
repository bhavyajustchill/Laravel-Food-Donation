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
				@if(session('status'))
					<h2 class="alert alert-success" role="alert">
						{{session('status')}}
					</h2>
					@endif
					<h1>My Donations</h1>
			</div>
			<div class="mt-20 progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="serial">#</div>
						<div class="country">Food Name</div>
						<div class="visit">Food Image</div>
						<div class="visit">Food Qty.</div>
						<div class="visit">Slum Area Name</div>
						<div class="visit">Status</div>
						<div class="visit">Action</div>
					</div>
					@foreach ($donations as $donation)
					<div class="table-row">
						<div class="serial">{{++$key}}</div>
						<div class="country">{{$donation->name}}</div>
						<div class="visit"><img height="100" src="{{url('uploads/donations/'.$donation->img)}}"></div>
						<div class="visit">{{$donation->qty}}</div>
						<div class="visit">{{$donation->slum_area['name']}}</div>
						<div class="visit">
							@if($donation->status==="Pending")
							<span class="badge badge-danger">{{$donation->status}}</span>
							@elseif ($donation->status==="In Transit")
							<span class="badge badge-warning">{{$donation->status}}</span>
							@else
							<span class="badge badge-success">{{$donation->status}}</span>
							@endif
						</div>
						<div class="visit">
							<a class="btn-primary p-3" href="{{url('/donation-single/'.$donation->id)}}"><i class="bi bi-eye" style="font-size:20px;"></i> Details</a>  &nbsp;&nbsp; 
						</div>
					</div>
					@endforeach		
				</div>
			</div>
		</div>
	</div>
@endsection
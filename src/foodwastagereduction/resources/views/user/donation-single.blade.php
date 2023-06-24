@extends('user.layouts.main')

@section('main-container')
<style>
	.vertical-center {
  		min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  		min-height: 100vh; /* These two lines are counted as one :-)       */
  		display: flex;
  		align-items: center;
	}
	td{
		vertical-align: middle !important;
	}
	</style>
	<div class="container vertical-center">
		<div class="container">
			<div class="typography text-center">
					<h1>View Donation</h1>
			</div>
			<br>
			
			<div class="row d-flex justify-content-center">
				<div class="col-6">
			<table class="table table-success p-5">
				<tr>
					<td class="text-right"><b>Food Name</b></td>
					<td><b>:</b></td>
					<td>{{ $donation->name }}</td>
				</tr>
				<tr>
					<td class="text-right"><b>Food Image</b></td>
					<td><b>:</b></td>
					<td><img height="250" src="{{asset('uploads/donations/'.$donation->img)}}"></td>
				</tr>
				<tr>
					<td class="text-right"><b>Food Quantity</b></td>
					<td><b>:</b></td>
					<td>{{ $donation->qty }}</td>
				</tr>
				<tr>
					<td class="text-right"><b>Assigned Slum Area</b></td>
					<td><b>:</b></td>
					<td>{{ $donation->slum_area['name'] }}</td>
				</tr>
				<tr>
					<td class="text-right"><b>Donation Status</b></td>
					<td><b>:</b></td>
					<td>
						@if($donation->status === "Pending")
						<span class="badge badge-danger">{{$donation->status}}</span>
						@elseif($donation->status === "In Transit")
						<span class="badge badge-warning">{{$donation->status}}</span>
						@else
						<span class="badge badge-success">{{$donation->status}}</span>
						@endif
					</td>
				</tr>
			</table>
		</div>
		</div>
			<br>
			<center>
				<button type="button" onclick="window.location.href='/donations'" class="btn btn-success">Go Back to Donations</button> 
			</center>
		</div>
	</div>
@endsection
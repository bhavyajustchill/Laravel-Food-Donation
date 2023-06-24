@extends('admin.layouts.main')

@section('main-container')
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Admin</strong> Dashboard</h1>

					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Donations Done</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="check"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{ $donationsDoneCount }}</h1>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Donations In Transit</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{$donationsInTransitCount}}</h1>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Users</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{$userCount}}</h1>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Pending Donations</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="clock"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{$donationsPendingCount}}</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Recent Donations</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Donation Statistics</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Donated</td>
													<td class="text-end">{{$donationsDoneCount}}</td>
												</tr>
												<tr>
													<td>In Transit</td>
													<td class="text-end">{{$donationsInTransitCount}}</td>
												</tr>
												<tr>
													<td>Pending</td>
													<td class="text-end">{{$donationsPendingCount}}</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Real-Time</h5>
								</div>
								<div class="card-body px-4">
									<div id="world_map" style="height:350px;"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Latest Donations</h5>
								</div>
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
			</main>
			<script>
				document.addEventListener("DOMContentLoaded", function() {
					// Pie chart
					var data = {!! json_encode($pieChartData) !!};
					new Chart(document.getElementById("chartjs-dashboard-pie"), {
						type: "pie",
						data: {
							labels: ["Donated", "In Transit", "Pending"],
							datasets: [{
								data: data,
								backgroundColor: [
									window.theme.success,
									window.theme.warning,
									window.theme.danger
								],
								borderWidth: 5
							}]
						},
						options: {
							responsive: !window.MSInputMethodContext,
							maintainAspectRatio: false,
							legend: {
								display: false
							},
							cutoutPercentage: 75
						}
					});
				});
			</script>
@endsection
			
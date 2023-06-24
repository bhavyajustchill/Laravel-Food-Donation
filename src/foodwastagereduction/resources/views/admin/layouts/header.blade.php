<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{url('adminpanel/img/icons/icon-48x48.png')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Admin - Food Wastage Reduction | Laravel Project</title>

	<link href="{{url('adminpanel/css/app.css')}}" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<style>
		.alert {
  --bs-alert-bg: transparent;
  --bs-alert-padding-x: 1rem;
  --bs-alert-padding-y: 1rem;
  --bs-alert-margin-bottom: 1rem;
  --bs-alert-color: inherit;
  --bs-alert-border-color: transparent;
  --bs-alert-border: 1px solid var(--bs-alert-border-color);
  --bs-alert-border-radius: 0.375rem;
  position: relative;
  padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
  margin-bottom: var(--bs-alert-margin-bottom);
  color: var(--bs-alert-color);
  background-color: var(--bs-alert-bg);
  border: var(--bs-alert-border);
  border-radius: var(--bs-alert-border-radius);
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 3rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}

.alert-primary {
  --bs-alert-color: #084298;
  --bs-alert-bg: #cfe2ff;
  --bs-alert-border-color: #b6d4fe;
}
.alert-primary .alert-link {
  color: #06357a;
}

.alert-secondary {
  --bs-alert-color: #41464b;
  --bs-alert-bg: #e2e3e5;
  --bs-alert-border-color: #d3d6d8;
}
.alert-secondary .alert-link {
  color: #34383c;
}

.alert-success {
  --bs-alert-color: #0f5132;
  --bs-alert-bg: #d1e7dd;
  --bs-alert-border-color: #badbcc;
}
.alert-success .alert-link {
  color: #0c4128;
}

.alert-info {
  --bs-alert-color: #055160;
  --bs-alert-bg: #cff4fc;
  --bs-alert-border-color: #b6effb;
}
.alert-info .alert-link {
  color: #04414d;
}

.alert-warning {
  --bs-alert-color: #664d03;
  --bs-alert-bg: #fff3cd;
  --bs-alert-border-color: #ffecb5;
}
.alert-warning .alert-link {
  color: #523e02;
}

.alert-danger {
  --bs-alert-color: #842029;
  --bs-alert-bg: #f8d7da;
  --bs-alert-border-color: #f5c2c7;
}
.alert-danger .alert-link {
  color: #6a1a21;
}

.alert-light {
  --bs-alert-color: #636464;
  --bs-alert-bg: #fefefe;
  --bs-alert-border-color: #fdfdfe;
}
.alert-light .alert-link {
  color: #4f5050;
}

.alert-dark {
  --bs-alert-color: #141619;
  --bs-alert-bg: #d3d3d4;
  --bs-alert-border-color: #bcbebf;
}
.alert-dark .alert-link {
  color: #101214;
}
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand mb-10" href="/admin/">
          <span class="align-middle">
			<!-- AdminKit -->
			<img src="{{url('user/assets/img/logo/logo2_footer.png')}}" alt="AdminKit" />
		</span>
        </a>
				<ul class="sidebar-nav">
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="/admin/">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="/admin/users">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="/admin/donations">
              <i class="align-middle" data-feather="truck"></i> <span class="align-middle">Donations</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="/admin/slumareas">
              <i class="align-middle" data-feather="globe"></i> <span class="align-middle">Slum Areas</span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="/admin/profile">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('admin.logout') }}">
              <i class="align-middle" data-feather="power"></i> <span class="align-middle">Logout</span>
            </a>
					</li>

					
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>
			  @if(Auth::guard('admin')->check())
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="{{url('adminpanel/img/avatars/avatar.jpg')}}" class="avatar img-fluid rounded me-1" alt="Bhavya Popat" /> <span class="text-dark">Bhavya Popat</span>
              </a>

							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="/admin/profile"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="align-middle 1" data-feather="power"></i> {{ __('Logout') }}</a>
							</div>
							@endif
						</li>
					</ul>
				</div>
			</nav>

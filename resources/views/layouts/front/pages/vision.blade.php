<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('pageTitle') - {{ config('app.name') }}</title>

    @include('layouts.front.styles')

</head>
<body>
<!-- page header -->
<header class="only-color">
@include('layouts.front.header')
@include('layouts.front.navigation')
<div class="page-title">
			<div class="grid-row">
				<nav class="bread-crumb">
					<a href="index.html">About us</a>
					<i class="fa fa-long-arrow-right"></i>
					<a href="content-elements.html">Vision and Mission</a>
				</nav>
			</div>
		</div>
</header>
<!-- / page header -->
    <!-- page content -->
			<!-- section -->
			<section class="padding-section">
			<div class="grid-row clear-fix">
				<h2 class="center-text"></h2>
				<div class="grid-col-row">
					<div class="grid-col grid-col-6">
						<div class="community color-1" style="height:426px;">
							<h3>OUR VISION</h3>
							<div class="community-logo">
								<i class="fa fa-eye"></i>
							</div>
							<div class="info-block" >
								<h4 style="color:#00234b">Healthy people in a healthy Sri Lanka</h4>
							</div>
						</div>
					</div>
					<div class="grid-col grid-col-6">
						<div class="community">
							<h3>OUR MISSION</h3>
							<div class="community-logo">
								<i class="fa fa-bullseye" aria-hidden="true"></i>
							</div>
							<div class="info-block">
								<h4 style="color:#ff9a00">To promote health and quality of life by preventing and controlling disease, injury and disability.</h4>
							</div>
						</div>
					</div>

				</div>
			</div>

		</section>
		<!-- / section -->

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
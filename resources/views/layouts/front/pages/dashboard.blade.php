<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
          <script src="{{ asset('js/app.js') }}" ></script>
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
					<a href="content-elements.html">{{$page->title ?? 'Tittle'}}</a>
				</nav>
			</div>
		</div>
</header>
<!-- / page header -->
    <!-- page content -->
			<!-- section -->
			<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="bg-image p-3  shadow-1-strong rounded mb-5 text-white" style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
					<div class="mask pl-5 pt-5 pb-5" style="background-color: rgba(0, 0, 0, 0.5);">
					<h2 class="mb-3 h1 text-center" >Dieases Name</h2>
					<h1 class="mb-3 h2 text-center">Current week</h1>
						<div class="row justify-content-md-center">
							<div class="col-md-6">
								<h3 class="mb-3 h4">Notified cases during week "23"</i></h3>
							</div>					
							<div class="col-md-6">
								<h3 class="mb-3 h4 text-center">45</h3>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6">
								<h3 class="mb-3 h4">Total Notified from week "23" to present </h3>
							</div>					
							<div class="col-md-6">
								<h3 class="mb-3 h4 text-center">45</h3>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-6">
								<h3 class="mb-3 h4">Total Confirmed from week "23" to present </h3>
							</div>					
							<div class="col-md-6">
								<h3 class="mb-3 h4 text-center">45</h3>
							</div>
						</div>
						<div class="row justify-content-md-left">
							<div class="col-md-3">
								<h3 class="mb-3 h4">Total Recoverd</h3>
							</div>
							<div class="col-md-3">
								<h3 class="mb-3 h4">24</h3>
							</div>	
						</div>
						<div class="row justify-content-md-left">
							<div class="col-md-3">
								<h3 class="mb-3 h4">Total Deaths</h3>
							</div>
							<div class="col-md-3">
								<h3 class="mb-3 h4">24</h3>
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
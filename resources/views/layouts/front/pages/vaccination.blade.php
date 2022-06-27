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
					<i class="fa fa-long-arrow-center"></i>
					<a href="content-elements.html">{{$page->title ?? 'Tittle'}}</a>
				</nav>
			</div>
		</div>
</header>
<!-- / page header -->
    <!-- page content -->
		<!-- section -->
		@php 
		$notice=$page->notice ?? null;
		$labels = $page->notice->getData()['labels'] ?? [];
		$values = $page->notice->getData()['values'] ?? [];
		//dd($labels,$values);
		@endphp
		<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="bg-image p-3  shadow-1-strong rounded mb-5 text-white" style="background-image: url('img/vac.jpg');">
					<div class="mask rounded pl-5 pt-5 pb-5" style="background-color: rgba(0, 0, 0, 0.5);">
						<div class="col-md-12">
							<h2 class="mb-3 h1 text-center" id="title">{{$labels['title'] ?? 'Title'}}</h2>
							<div class="row justify-content-md-center">
								<div class="col-md-6">
									<h3 class="mb-3 h4 text-right" id="data1">Target Group</h3>
								</div>	
								<div class="col-md-6">
									<h3 class="mb-3 h4 text-left" id="data1">: Teens</h3>
								</div>
							</div>
							<div class="row justify-content-md-center">
								<div class="col-md-6">
									<h3 class="mb-3 h4 text-right" id="data1">Location</h3>
								</div>	
								<div class="col-md-6">
									<h3 class="mb-3 h4 text-left" id="data1">: Colombo</h3>
								</div>
							</div>
							<div class="row justify-content-md-center">
								<div class="col-md-6">
									<h3 class="mb-3 h3 text-right" id="data1">Total vaccines adminstered as at </h3>
								</div>	
								<div class="col-md-6">
									<h3 class="mb-3 h3 text-left" id="data1">2021.05.21</h3>
								</div>
							</div>
							<div class="row justify-content-md-left">
								<div class="col-md-3">
									<h3 class="mb-3 h4" id="recovered">First Dose </h3>
								</div>
								<div class="col-md-3">
									<h3 class="mb-3 h4" id="recovered">: 233</h3>
								</div>	
							</div>
							<div class="row justify-content-md-left">
								<div class="col-md-3">
									<h3 class="mb-3 h4" id="recovered">Second Dose </h3>
								</div>
								<div class="col-md-3">
									<h3 class="mb-3 h4" id="recovered">: 253</h3>
								</div>	
							</div>
							<div class="row justify-content-md-left">
								<div class="col-md-3">
									<h3 class="mb-3 h4" id="recovered">Third Dose </h3>
								</div>
								<div class="col-md-3">
									<h3 class="mb-3 h4" id="recovered">: 253</h3>
								</div>	
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
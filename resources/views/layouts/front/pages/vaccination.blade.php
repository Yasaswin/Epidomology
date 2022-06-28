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
		@endphp
		<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="bg-image p-3  shadow-1-strong rounded mb-5 text-white" style="background-image: url('img/vac.jpg');">
					<div class="mask rounded pl-5 pt-5 pb-5" style="background-color: rgba(0, 0, 0, 0.5);">
						<div class="col-md-12">
							<h2 class="mb-3 h1 text-center" id="title">{{$labels['title'] ?? 'Title'}}</h2>
							<div class="row justify-content-md-center">
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="data1">{{$labels['data1'] ?? 'data1.label'}}</h3>
								</div>
								<div class="col-md-2">
									<h3 class="mb-3 h4 text-center" id="data1">:</h3>
								</div>	
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="data1">{{$values['data1'] ?? 'data1.value'}}</h3>
								</div>
							</div>
							<div class="row justify-content-md-center">
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="data2">{{$labels['data2'] ?? 'data2.label'}}</h3>
								</div>
								<div class="col-md-2">
									<h3 class="mb-3 h4 text-center" id="data2">:</h3>
								</div>		
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="data2">{{$values['data2'] ?? 'data2.values'}}</h3>
								</div>
							</div>
							<div class="row justify-content-md-center">
								<div class="col-md-6">
									<h3 class="mb-3 h3 text-right" id="date">{{$labels['date'] ?? 'date.label'}}</h3>
								</div>	
								<div class="col-md-6">
									<h3 class="mb-3 h3 " id="date">{{$values['date'] ?? 'date.value'}}</h3>
								</div>
							</div>
							<div class="row justify-content-md-left">
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="dose1">{{$labels['dose1'] ?? 'dose1.label'}}</h3>
								</div>
								<div class="col-md-1">
									<h3 class="mb-3 h4" id="dose1">:</h3>
								</div>
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="dose1">{{$values['dose1'] ?? 'dose1.value'}}</h3>
								</div>	
							</div>
							<div class="row justify-content-md-left">
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="dose2">{{$labels['dose2'] ?? 'dose2.label'}}</h3>
								</div>
								<div class="col-md-1">
									<h3 class="mb-3 h4" id="dose2">:</h3>
								</div>
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="dose2">{{$values['dose2'] ?? 'dose2.value'}}</h3>
								</div>	
							</div>
							<div class="row justify-content-md-left">
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="dose3">{{$labels['dose3'] ?? 'dose3.label'}}</h3>
								</div>
								<div class="col-md-1">
									<h3 class="mb-3 h4" id="dose3">:</h3>
								</div>
								<div class="col-md-2">
									<h3 class="mb-3 h4" id="dose3">{{$values['dose3'] ?? 'dose3.value'}}</h3>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- / section -->

		<style>

		</style>

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
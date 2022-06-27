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
		@php 
		$notice=$page->notice ?? null;
		$labels = $page->notice->getData()['labels'] ?? [];
		$values = $page->notice->getData()['values'] ?? [];
		//dd($labels,$values);
		@endphp
		<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="bg-image p-3  shadow-1-strong rounded mb-5 text-white" style="background-image: url('img/covid.jpg');">
					<div class="mask rounded pl-5 pt-5 pb-5" style="background-color: rgba(0, 0, 0, 0.5);">
					<h2 class="mb-3 h1 text-center" id="title">{{$labels['title'] ?? 'Title'}}</h2>
					<h1 class="mb-3 h2 text-center" id="sub_title">{{$labels['sub_title'] ?? 'Sub Title'}}</h1>
						<div class="row justify-content-md-center">
							<div class="col-md-4">
								<h3 class="mb-3 h4" id="data1">{{$labels['data1'] ?? 'data1.label'}}</h3>
							</div>	
							<div class="col-md-2">
								<h3 class="mb-3 h4" id="data1">{{$values['data1'] ?? 'data1.value'}}</h3>
							</div>
							<div class="col-md-2">
								<h3 class="mb-3 h4 text-center"><i class="fa fa-arrow-right"></i></h3>
							</div>				
							<div class="col-md-4">
								<h3 class="mb-3 h4 text-center" id="notified_count">{{$values['notified_count'] ?? 'notified_count.value'}}</h3>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-4">
								<h3 class="mb-3 h4" id="data2">{{$labels['data2'] ?? 'data2.label'}}</h3>
							</div>	
							<div class="col-md-2">
								<h3 class="mb-3 h4" id="data2">{{$values['data2'] ?? 'data2.value'}}</h3>
							</div>
							<div class="col-md-2">
								<h3 class="mb-3 h4 text-center">To present</h3>
							</div>				
							<div class="col-md-4">
									<h3 class="mb-3 h4 text-center">{{$values['total_notified_count'] ?? 'total_notified_count.value'}}</h3>
							</div>
						</div>						
						<div class="row justify-content-md-center">
							<div class="col-md-4">
								<h3 class="mb-3 h4" id="data3">{{$labels['data3'] ?? 'data3.label'}}</h3>
							</div>	
							<div class="col-md-2">
								<h3 class="mb-3 h4" id="data3">{{$values['data3'] ?? 'data3.value'}}</h3>
							</div>
							<div class="col-md-2">
								<h3 class="mb-3 h4 text-center">To present</h3>
							</div>				
							<div class="col-md-4">
									<h3 class="mb-3 h4 text-center">{{$values['total_conf_count'] ?? 'total_conf_count.value'}}</h3>
							</div>
						</div>	
						@if($labels['recovered']??false)					
						<div class="row justify-content-md-left">
							<div class="col-md-3">
								<h3 class="mb-3 h4" id="recovered">{{$labels['recovered'] ?? 'recovered.label'}}</h3>
							</div>
							<div class="col-md-3">
								<h3 class="mb-3 h4" id="recovered">{{$values['recovered'] ?? 'recovered.value'}}</h3>
							</div>	
						</div>
						@endif
						@if($labels['death']??false)					
						<div class="row justify-content-md-left">
							<div class="col-md-3">
								<h3 class="mb-3 h4" id="death">{{$labels['death'] ?? 'death.label'}}</h3>
							</div>
							<div class="col-md-3">
								<h3 class="mb-3 h4" id="death">{{$values['death'] ?? 'death.value'}}</h3>
							</div>	
						</div>
						@endif
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
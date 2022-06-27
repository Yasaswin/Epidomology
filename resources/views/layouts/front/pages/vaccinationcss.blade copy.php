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
				<div class="banner" >

					<div class="columns-col columns-col-12">
						<center><h2>Dieases Name</h2></center>
					</div>
					<div class="columns-col columns-col-12">
						<center><h2>Current week</h2></center>
					</div>
					<div class="columns-col columns-col-6">
						<center><h3>Notified cases during week "23" <i class="fa fa-arrow-right"></i></h3></center>
					</div>					
					<div class="columns-col columns-col-6">
						<center><h3>45</h3></center>
					</div>
					<div class="columns-col columns-col-6">
						<center><h3>Total Notified from week "23" to present</h3></center>
					</div>					
					<div class="columns-col columns-col-6">
						<center><h3>45</h3></center>
					</div>
					<div class="columns-col columns-col-6">
						<center><h3>Total Confirmed from week "23" to present</h3></center>
					</div>					
					<div class="columns-col columns-col-6">
						<center><h3>45</h3></center>
					</div>
					<div class="columns-col columns-col-12">
						<h2>Total Recoverd</h2>
					</div>
					<div class="columns-col columns-col-12">
						<h2>Total Deaths</h2>
					</div>
				</div>
			</div>

		</section>

		<style>
			.banner{
				background-image: url("img/covid.jpg");
   height: 700px;
   width: 100%;
			}
		</style>
		<!-- / section -->

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
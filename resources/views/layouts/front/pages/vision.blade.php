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
	<div class="page-content">	
		<main>
			<div class="container">
                <center><h4>OUR VISION</h4></center>
                <blockquote><center><p>Healthy people in a healthy Sri Lanka</p></center></blockquote>                  
                <center><h4>OUR MISSION</h4></center>
                <blockquote><center><p>To promote health and quality of life by preventing and controlling disease, injury and disability</p></center></blockquote>                 
            </div>
        </main>
    </div>

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
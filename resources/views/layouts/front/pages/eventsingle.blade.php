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
					<a href="">Event</a>
					<i class="fa fa-long-arrow-right"></i>
					<a href="">Single Item</a>
				</nav>
			</div>
		</div>

</header>
<!-- / page header -->
    <!-- page content -->
    <div class="page-content container clear-fix">
		<div class="grid-col-row">
			<div class="grid-col grid-col-9">
				<main>
					<div class="blog-post"><article>
						<div class="post-info clear-fix">
							<div class="date-post"><div class="day">26</div><div class="month">Feb</div></div>
							<div class="post-info-main">
								<div class="author-post">by Admin</div>
							</div>
						</div>
						<div class="blog-media picture">
							<img src="img/4.jpg" class="columns-col-12" alt>
						</div>
						<h2>Donec mollis magna quis urna convallisquis</h2>
						<p>Ut hendrerit mattis justo at suscipit. Praesent sagittis magna nec neque viverra lobortisProin eleifend neque venenatis facilisis cursus. Cras lobortis consequat lorem a porta. Sed condimentum erat non leo euismod, non tristique lectus elementum. Donec posuere dignissim nulla. Morbi vel molestie massa, vitae scelerisque ligula. Proin euismod tortor rutrum purus porta imperdiet. Pellentesque vitae metus in lorem posuere sagittis. Fusce eu tellus ut metus imperdiet molestie. Nunc dapibus lorem eget rutrum ultricies. Nam pretium accumsan ultricies. Etiam viverra pellentesque dui a feugiat.eros</p>

					</article></div>
				</main>
			</div>
			<div class="grid-col grid-col-3 sidebar">
				<!-- widget event -->
				<aside class="widget-event">
					<h2>Upcoming Events</h2>
					<article class="clear-fix">
						<div class="date"><div class="day">22</div><div class="month">Feb</div></div>
						<div class="event-description"><span>9:00am to 1:00pm</span><p>Donec ut velit varius, sodales velit ac, aliquet purus. </p></div>
					</article>
					<article class="clear-fix">
						<div class="date"><div class="day">23</div><div class="month">Feb</div></div>
						<div class="event-description"><span>10:00am to 3:00pm</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
					</article>
					<article class="clear-fix">
						<div class="date"><div class="day">24</div><div class="month">Feb</div></div>
						<div class="event-description"><span>12:00am to 5:00pm</span><p>Suspendisse consequat eros eget consequat pulvinar</p></div>
					</article>
					<article class="clear-fix">
						<div class="date"><div class="day">25</div><div class="month">Feb</div></div>
						<div class="event-description"><span>12:00am to 5:00pm</span><p>Suspendisse consequat eros eget consequat pulvinar</p></div>
					</article>
					<article class="clear-fix">
						<div class="date"><div class="day">26</div><div class="month">Feb</div></div>
						<div class="event-description"><span>12:00am to 5:00pm</span><p>Suspendisse consequat eros eget consequat pulvinar</p></div>
					</article>

				</aside>
				<!-- / widget event -->
			</div>
		</div>
	</div>

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
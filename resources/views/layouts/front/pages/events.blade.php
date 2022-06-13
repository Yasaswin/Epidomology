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
					<a href="content-elements.html">History</a>
				</nav>
			</div>
		</div>

</header>
<!-- / page header -->
    <!-- page content -->
    <div class="page-content container clear-fix">
        <div class="grid-col-row">
                <div class="grid-col grid-col-8">
                    <!-- main content -->
                    <div class="page-content grid-row">
							<!-- widget event -->
							<aside class="widget-event">
								<h2>Upcoming Events</h2>
								<article class="clear-fix" >
                                <a href="{{ route('eventsingle') }}" >
									<div class="date"><div class="day">22</div><div class="month">Feb</div></div>
									<div class="event-description"><span>9:00am to 1:00pm</span><p>Donec ut velit varius, sodales velit ac, aliquet purus. </p></div>
                                </a>
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
									<div class="event-description"><span>9:00am to 1:00pm</span><p>Donec ut velit varius, sodales velit ac, aliquet purus. </p></div>
								</article>
								<article class="clear-fix">
									<div class="date"><div class="day">27</div><div class="month">Feb</div></div>
									<div class="event-description"><span>10:00am to 3:00pm</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
								</article>
								<article class="clear-fix">
									<div class="date"><div class="day">28</div><div class="month">Feb</div></div>
									<div class="event-description"><span>12:00am to 5:00pm</span><p>Suspendisse consequat eros eget consequat pulvinar</p></div>
								</article>
							</aside>
							<!-- / widget event -->
		            </div>
                    <!-- / main content -->
                </div>
            <!-- sidebar right content -->
            <!-- End sidebar right content -->
        </div>
    </div>

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
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
			<div class="grid-col grid-col-6">
				<div class="page-content grid-row">
					<aside class="widget-event">
						<h2>Upcoming Events</h2>
						@foreach(Post::getComingEvents() as $event)
							<article class="clear-fix" >
							<a href="{{ route('event.show',[$event->slug]) }}" >
								<div class="date"><div class="day">{{$event->event_day}}</div><div class="month">{{$event->event_month}}</div></div>
								<div class="event-description"><span>{{$event->event_start}} to {{$event->event_end}}</span><p>{{$event->title ?? 'Event Tittle'}}</p></div>
							</a>
							</article>
						@endforeach
					</aside>
				</div>
			</div>
			<div class="grid-col grid-col-6">
			<div class="page-content grid-row">
					<aside class="widget-event">
						<h2>Upcoming Events</h2>
						@foreach(Post::getPastEvents() as $event)
							<article class="clear-fix" >
							<a href="{{ route('event.show',[$event->slug]) }}" >
								<div class="date"><div class="day">{{$event->event_day}}</div><div class="month">{{$event->event_month}}</div></div>
								<div class="event-description"><span>{{$event->event_start}} to {{$event->event_end}}</span><p>{{$event->title ?? 'Event Tittle'}}</p></div>
							</a>
							</article>
						@endforeach
					</aside>
				</div>
			</div>
        </div>
    </div>

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
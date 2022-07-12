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
							<div class="date-post"><div class="day">{{$event->event_day}}</div><div class="month">{{$event->event_month}}</div></div>
							<div class="post-info-main">
								<div class="author-post">by {{$event->user->name}}</div>
							</div>
						</div>
						@foreach ($images as $image)
						<div class="blog-media picture">
							<div class="link-cont">
								<a href="{{ asset('storage/post/images/'  . $image->image) }}" class="fancy fa fa-search"></a>
							</div>
							<img src="{{ asset('storage/post/images/'  . $image->image) }}" data-at2x="{{ asset('storage/post/images/'  . $image->image) }}" alt>
						</div>
						@endforeach
						<h2>{{$event->title ?? 'Event Tittle'}}</h2>
						<p>{!! $event->body ?? 'Event Body' !!}</p>

					</article></div>
				</main>
			</div>
			<div class="grid-col grid-col-3 sidebar">
				<!-- widget event -->
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
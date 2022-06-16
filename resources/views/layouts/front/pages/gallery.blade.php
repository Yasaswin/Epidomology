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
					<a href="index.html">Gallery</a>
					<i class="fa fa-long-arrow-right"></i>
					<a href="content-elements.html">Image Gallery</a>
				</nav>
			</div>
		</div>

</header>
<!-- / page header -->
    <!-- page content -->
	<div class="page-content grid-row">
		<main>
        <div class="isotope-header clear-fix">
			<h2 class="margin-none">Image Gallery</h2>
		</div>
			<div class="portfolio-gallery">
				<div class="grid-col-row clear-fix">
					<div class="grid-col grid-col-4 item">
						<div class="picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
								<a href="img/bg-header.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-right fa fa-heart"></a>
							</div>
							<img src="img/bg-header.jpg" data-at2x="img/bg-header.jpg" alt>
						</div>
                        <h4> <a href="" class="font-weight-bold">Album 1</a></h4>
                        <a href=""  class="cws-button border-radius alt icon-right">More ... <i class="fa fa-angle-right"></i></a>

					</div>
					<div class="grid-col grid-col-4 item">
						<div class="picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
								<a href="img/bg-header.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-right fa fa-heart"></a>
							</div>
							<img src="img/bg-header.jpg" data-at2x="img/bg-header.jpg" alt>
						</div>
                        <h4> <a href="" class="font-weight-bold">Album 1</a></h4>
                        <a href=""  class="cws-button border-radius alt icon-right">More ... <i class="fa fa-angle-right"></i></a>
	
					</div>
					<div class="grid-col grid-col-4 item">
						<div class="picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
								<a href="img/bg-header.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-right fa fa-heart"></a>
							</div>
							<img src="img/bg-header.jpg" data-at2x="img/bg-header.jpg" alt>
						</div>
                        <h4> <a href="" class="font-weight-bold">Album 1</a></h4>
                        <a href=""  class="cws-button border-radius alt icon-right">More ... <i class="fa fa-angle-right"></i></a>

					</div>
					<div class="grid-col grid-col-4 item">
						<div class="picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
								<a href="img/bg-header.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-right fa fa-heart"></a>
							</div>
							<img src="img/bg-header.jpg" data-at2x="img/bg-header.jpg" alt>
						</div>
                        <h4> <a href="" class="font-weight-bold">Album 1</a></h4>
                        <a href=""  class="cws-button border-radius alt icon-right">More ... <i class="fa fa-angle-right"></i></a>

					</div>
					<div class="grid-col grid-col-4 item">
						<div class="picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
								<a href="img/bg-header.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-right fa fa-heart"></a>
							</div>
							<img src="img/bg-header.jpg" data-at2x="img/bg-header.jpg" alt>
						</div>
                        <h4> <a href="" class="font-weight-bold">Album 1</a></h4>
                        <a href=""  class="cws-button border-radius alt icon-right">More ... <i class="fa fa-angle-right"></i></a>
	
					</div>
					<div class="grid-col grid-col-4 item">
						<div class="picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
								<a href="img/bg-header.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-right fa fa-heart"></a>
							</div>
							<img src="img/bg-header.jpg" data-at2x="img/bg-header.jpg" alt>
						</div>
                        <h4> <a href="" class="font-weight-bold">Album 1</a></h4>
                        <a href=""  class="cws-button border-radius alt icon-right">More ... <i class="fa fa-angle-right"></i></a>

					</div>
					<div class="grid-col grid-col-4 item">
						<div class="picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
								<a href="img/bg-header.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-right fa fa-heart"></a>
							</div>
							<img src="img/bg-header.jpg" data-at2x="img/bg-header.jpg" alt>
						</div>
                        <h4> <a href="" class="font-weight-bold">Album 1</a></h4>
                        <a href=""  class="cws-button border-radius alt icon-right">More ... <i class="fa fa-angle-right"></i></a>

					</div>
					<div class="grid-col grid-col-4 item">
						<div class="picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
								<a href="img/bg-header.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-right fa fa-heart"></a>
							</div>
							<img src="img/bg-header.jpg" data-at2x="img/bg-header.jpg" alt>
						</div>
                        <h4> <a href="" class="font-weight-bold">Album 1</a></h4>
                        <a href=""  class="cws-button border-radius alt icon-right">More ... <i class="fa fa-angle-right"></i></a>

					</div>
					<div class="grid-col grid-col-4 item">
						<div class="picture">
							<div class="hover-effect"></div>
							<div class="link-cont">
								<a href="portfolio-single-item.html" class="cws-left fa fa-link"></a>
								<a href="img/bg-header.jpg" class="fancy fa fa-search"></a>
								<a href="#" class="cws-right fa fa-heart"></a>
							</div>
							<img src="img/bg-header.jpg" data-at2x="img/bg-header.jpg" alt>
						</div>
                        <h4> <a href="" class="font-weight-bold">Album 1</a></h4>
                        <a href=""  class="cws-button border-radius alt icon-right">More ... <i class="fa fa-angle-right"></i></a>

					</div>
				</div>
			</div>
		</main>
	</div>

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
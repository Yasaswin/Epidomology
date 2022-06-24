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
    <div class="page-content container clear-fix">
        <div class="grid-col-row">
        <div class="grid-col grid-col-9">
                <h2>{{$page->title??''}}</h2>
                    <!-- main content -->
                    <main>
						<!-- item -->
						<div class="category-item list clear-fix">
						    <div class="picture" style=" max-width: 14%;">
                                <div class="hover-effect"></div>
                                    <div class="link-cont">
                                        <a href="" class="fancy fa fa-search"></a>
                                    </div>
                                    <img src="img/2.jpg" data-at2x="img/2.jpg" alt>
                            </div>
                                    <h3><a style="text-decoration: underline;" href="" target="_blank" >Tittle</a></h3>
                            <p>Body</p>
                            <div class="tags-post">
                                <a href="#" rel="tag">2021.09.05 Admin</a>
                                <a href="" class="tag"></a>
                            </div>
						</div>
						<!-- / item -->

					</main>
                </div>

        </div>
    </div>

    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
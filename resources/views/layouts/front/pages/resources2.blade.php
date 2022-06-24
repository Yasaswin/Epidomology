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
            <a href="index.html">Resources</a>
            <i class="fa fa-long-arrow-right"></i>
            <a href="content-elements.html">{{$page->title??''}}</a>
        </nav>
    </div>
</div>
</header>
<!-- / page header -->
<!-- page content -->
<div class="page-content container clear-fix">
    <div class="grid-col-row">
        <div class="grid-col grid-col-12">
            <h2>{{$page->title??''}}</h2>
            <!-- main content -->
            @if($submenu = $page->submenu[0] ?? false)
            <div class="grid-col grid-col-12">
                <section>
                    <div class="accordions">
                        {!! $submenu->arrangeSubMenus() !!}
                    </div>
                </section>
            </div>
            @elseif($posts = $page->category->posts ?? false)

                {!! Page::products($posts) !!}

            @endif


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
<style>
    .products .product {
    position: relative;
    width: calc(14.3% - 14px);
    width: -moz-calc(14.3% - 14px);
    padding-bottom: 30px;
    padding-left: 0;
    margin-left: 30px;
    padding-top: 30px;
    border-bottom: 3px solid #ebebeb;
    transform: translate3d(0,0,0);
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    -ms-transform: translate3d(0,0,0);
    -o-transform: translate3d(0,0,0);
    -webkit-align-content: stretch;
    -ms-flex-line-pack: stretch;
    align-content: stretch;
}
.product .product-name {
    font-weight: 450;
    color: #333e4f;
    line-height: 1.6;
    text-align:center;
}
.products .product .cws-button, .owl-item .product .cws-button {
    display: block;
    width: 111px;
    margin: 3 auto;
    text-align: center;
    padding-left: 0;
    padding-right: 0;
    text-transform: capitalize;
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Merriweather';
    color: #b98282;
    clear: both;
    font-weight: 400;
    margin: 17px 0 12px;
}
</style>
</body>
</html>
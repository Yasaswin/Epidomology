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
					<a href="content-elements.html">PUBLICATIONS</a>
				</nav>
			</div>
		</div>

</header>
<!-- / page header -->
    <!-- page content -->
    <div class="page-content container clear-fix">
        <div class="grid-col-row">
                <div class="grid-col grid-col-12">
                    <!-- main content -->
                    <div class="page-content woocommerce">
		<div class="container clear-fix">
			<div class="grid-col-row">
				<div class="grid-col grid-col-9">
					<!-- Shop -->
					<div role="main">
						<div  itemscope="" itemtype="" class="product">
							<div class="images">
								<div class="picture">
									<img src="img/2.jpg" data-at2x="img/2.jpg" class="attachment-shop_single" alt="" title="">
									<div class="hover-effect"></div>
									<div class="link-cont">
										<a href="img/2.jpg" class="fancy fa fa-eye woocommerce-main-image zoom" data-fancybox-group="gallery" title="" data-rel="prettyPhoto[product-gallery]"></a>
									</div>
								</div>
							
							</div>
							<div class="summary entry-summary">
								<h2  class="product_title entry-title">NATIONAL GUIDELINES FOR SRI LANKA</h2>

								<div itemprop="description">
									<p><strong>Quick Overview:</strong><br/>Nam sit amet augue ante. Integer scelerisque dapibus odio gravida dapibus. Mauris tincidunt vitae tortor eu bibendum. Nulla ultrices eu lorem ac fermentum.</p>
								</div>	
								<div class="main-features">
									<p class="head"><strong>Main features:</strong></p>
									<div class="features">
										<div><i class="minus">—</i> Aliquam justo lorem, commodo eget tristique non sore cotoad</div>
										<div><i class="minus">—</i> Curabitur vehicula leo accumsan, varius tellus vitae mui uno </div>
										<div><i class="minus">—</i> Pellentesque imperdiet, leo ut pulvinar facilisis dorto marstro</div>
										<div><i class="minus">—</i> Curabitur ullamcorper ultricies nisi. Nam eget dui, logkosto </div>
										<div><i class="minus">—</i> Massa nec vulputate congue, dolor erat ullamcorper, joto</div>
									</div>
								</div>
								 	 <button type="submit" class="cws-button corner-radius-bottom alt"><i class="fa fa-download"></i> Download</button>
									
								<div class="product_meta">
									<span class="tagged_as">
										<a href="#" rel="tag">Resources</a><!--
									 --><a href="#" rel="tag">PDF</a>
									</span>								
								</div>
							</div>
							<hr class="divider-color">
						</div>	
					</div>
				</div>
		
			</div>
		</div>
	</div>
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
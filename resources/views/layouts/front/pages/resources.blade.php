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
                <div class="grid-col grid-col-12">
                    <!-- main content -->
                        <div class="page-content woocommerce">
                                <div class="container clear-fix">
                                    <div class="grid-col-row">
                                        <div class="grid-col grid-col-12">
                                            <h2>Some category</h2>
                                            <!-- Shop -->
                                            <div id="page-meta" class="group">
                                                <p class="woocommerce-result-count">Showing 1-9 of 23 results </p>
                                                <form class="woocommerce-ordering" method="get">
                                                    <select name="orderby" class="orderby">
                                                        <option value="menu_order">Default sorting</option>
                                                        <option value="popularity">Sort by popularity</option>
                                                        <option value="rating">Sort by average rating</option>
                                                        <option value="date">Sort by newness</option>
                                                        <option value="price">Sort by price: low to high</option>
                                                        <option value="price-desc">Sort by price: high to low</option>
                                                    </select>
                                                </form>
                                            </div>
                                            <ul class="products">
                                                <!-- product -->
                                                <li class="product">
                                                    <div class="picture" >
                                                        <div class="ribbon ribbon-blue">
                                                            <div class="banner">
                                                                <div class="text">New</div>
                                                            </div>
                                                        </div>
                                                        <img src="img/2.jpg" data-at2x="img/2.jpg" alt="">
                                                        <span class="hover-effect"></span>
                                                        <div class="link-cont">
                                                            <a href="2.jpg" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                                            <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="shop-single-product.html">NATIONAL GUIDELINES FOR </a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="short-description">
                                                            <p>Phasellus tristique diam turpis, vitae rhoncus mi ultricies vel</p>
                                                        </div>
                                                        <!-- <div class="full-description">
                                                            <p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
                                                        </div> -->
                                                    </div>
                                                    
                                                    <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                </li>
                                                <!-- product -->
                                                <!-- product -->
                                                <li class="product">
                                                    <div class="picture" >
                                                        <img src="img/2.jpg" data-at2x="img/2.jpg" alt="">
                                                        <span class="hover-effect"></span>
                                                        <div class="link-cont">
                                                            <a href="http://placehold.it/270x200" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                                            <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="shop-single-product.html">Nullam blandit lectus ac sem</a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="short-description">
                                                            <p>Phasellus tristique diam turpis, vitae rhoncus mi ultricies vel</p>
                                                        </div>
                                                        <!-- <div class="full-description">
                                                            <p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
                                                        </div> -->
                                                    </div>
                                                    
                                                    <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                </li>
                                                <!-- product -->
                                                <!-- product -->
                                                <li class="product">
                                                    <div class="picture" >
                                                        <img src="img/5.jpg" data-at2x="img/5.jpg" alt="">
                                                        <span class="hover-effect"></span>
                                                        <div class="link-cont">
                                                            <a href="http://placehold.it/270x200" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                                            <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="shop-single-product.html">Nullam blandit lectus ac sem</a>
                                                    </div>                                                    
                                                    <div class="product-description">
                                                        <div class="short-description">
                                                            <p>Phasellus tristique diam turpis, vitae rhoncus mi ultricies vel</p>
                                                        </div>
                                                        <!-- <div class="full-description">
                                                            <p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
                                                        </div> -->
                                                    </div>
                                                    
                                                    <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                </li>
                                                <!-- product -->
                                                <!-- product -->
                                                <li class="product">
                                                    <div class="picture">
                                                    <img src="img/5.jpg" data-at2x="img/5.jpg" alt="">
                                                        <span class="hover-effect"></span>
                                                        <div class="link-cont">
                                                            <a href="http://placehold.it/270x200" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                                            <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="shop-single-product.html">Nullam blandit lectus ac sem</a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="short-description">
                                                            <p>Phasellus tristique diam turpis, vitae rhoncus mi ultricies vel</p>
                                                        </div>
                                                        <!-- <div class="full-description">
                                                            <p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
                                                        </div> -->
                                                    </div>
                                                    
                                                    <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                </li>
                                                <!-- product -->
                                                <!-- product -->
                                                <li class="product">
                                                    <div class="picture">
                                                        <div class="ribbon ribbon-blue">
                                                            <div class="banner">
                                                                <div class="text">Sale</div>
                                                            </div>
                                                        </div>
                                                        <img src="img/5.jpg" data-at2x="img/5.jpg" alt="">
                                                        <span class="hover-effect"></span>
                                                        <div class="link-cont">
                                                            <a href="http://placehold.it/270x200" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                                            <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="shop-single-product.html">Nullam blandit lectus ac sem</a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="short-description">
                                                            <p>Phasellus tristique diam turpis, vitae rhoncus mi ultricies vel</p>
                                                        </div>
                                                        <!-- <div class="full-description">
                                                            <p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
                                                        </div> -->
                                                    </div>
                                                    
                                                    <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                </li>
                                                <!-- product -->
                                                <!-- product -->
                                                <li class="product">
                                                    <div class="picture">
                                                    <img src="img/5.jpg" data-at2x="img/5.jpg" alt="">
                                                        <span class="hover-effect"></span>
                                                        <div class="link-cont">
                                                            <a href="http://placehold.it/270x200" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                                            <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="shop-single-product.html">Nullam blandit lectus ac sem</a>
                                                    </div>                                                    
                                                    <div class="product-description">
                                                        <div class="short-description">
                                                            <p>Phasellus tristique diam turpis, vitae rhoncus mi ultricies vel</p>
                                                        </div>
                                                        <!-- <div class="full-description">
                                                            <p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
                                                        </div> -->
                                                    </div>
                                                    
                                                    <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                </li>
                                                <!-- product -->
                                                <!-- product -->
                                                <li class="product">
                                                    <div class="picture">
                                                    <img src="img/5.jpg" data-at2x="img/5.jpg" alt="">
                                                        <span class="hover-effect"></span>
                                                        <div class="link-cont">
                                                            <a href="http://placehold.it/270x200" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                                            <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="shop-single-product.html">Nullam blandit lectus ac sem</a>
                                                    </div>                                                    
                                                    <div class="product-description">
                                                        <div class="short-description">
                                                            <p>Phasellus tristique diam turpis, vitae rhoncus mi ultricies vel</p>
                                                        </div>
                                                        <!-- <div class="full-description">
                                                            <p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
                                                        </div> -->
                                                    </div>
                                                    
                                                    <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                </li>
                                                <!-- product -->
                                                <!-- product -->
                                                <li class="product">
                                                    <div class="picture">
                                                    <img src="img/5.jpg" data-at2x="img/5.jpg" alt="">
                                                        <span class="hover-effect"></span>
                                                        <div class="link-cont">
                                                            <a href="http://placehold.it/270x200" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                                            <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="shop-single-product.html">Nullam blandit lectus ac sem</a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="short-description">
                                                            <p>Phasellus tristique diam turpis, vitae rhoncus mi ultricies vel</p>
                                                        </div>
                                                        <!-- <div class="full-description">
                                                            <p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
                                                        </div> -->
                                                    </div>
                                                    
                                                    <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                </li>
                                                <!-- product -->
                                                <!-- product -->
                                                <li class="product">
                                                    <div class="picture">
                                                    <img src="img/5.jpg" data-at2x="img/5.jpg" alt="">
                                                        <span class="hover-effect"></span>
                                                        <div class="link-cont">
                                                            <a href="http://placehold.it/270x200" class="cws-right fancy cws-slide-left "><i class="fa fa-search"></i></a>
                                                            <a href="shop-single-product.html" class=" cws-left cws-slide-right"><i class="fa fa-link"></i></a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="shop-single-product.html">Nullam blandit lectus ac sem</a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="short-description">
                                                            <p>Phasellus tristique diam turpis, vitae rhoncus mi ultricies vel</p>
                                                        </div>
                                                        <!-- <div class="full-description">
                                                            <p>In blandit ultricies euismod.Lobortis erat, sed ullamcorper erat interdum et. Cras volutpat felis id enim vehicula, eu facilisis dui lacinia. Vivamus sollicitudin tristique tellus.</p>
                                                        </div> -->
                                                    </div>
                                                    
                                                    <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                </li>
                                                <!-- product -->
                                            </ul>
                                            <!--Shop -->
                                                                                                    
                                            <!-- pagination -->
                                            <div class="page-pagination clear-fix">
                                                <a href="#"><i class="fa fa-angle-double-left"></i></a><!--
                                                --><a href="#">1</a><!-- 
                                                --><a href="#">2</a><!-- 
                                                --><a href="#" class="active">3</a><!-- 
                                                --><a href="#"><i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                            <!--/ pagination -->
                                        </div>
                                        
                                    </div>
                                </div>
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
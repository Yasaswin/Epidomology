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
                                        <div class="grid-col grid-col-12">

                                            <section>
                                                <!-- accordions -->
                                                <div class="accordions">
                                                    <!-- content-title -->
                                                    <div class="content-title active"><h4>NIP</h4></div>
                                                    <!--/content-title -->
                                                    <!-- accordions content -->
                                                    <div class="content">
                                                        <section>
                                                            <!-- accordions -->
                                                            <div class="accordions">
                                                                <!-- content-title -->
                                                                <div class="content-title active">Immunization Programme Implementation</div>
                                                                <!--/content-title -->
                                                                <!-- accordions content -->
                                                                <div class="content">
                                                                  <!-- Shop -->

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
                                                                            <a href="{{ route('ressingle') }}">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
                                                                        </div>

                                                                        <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                                    </li>
                                                                    <!-- product -->
                                                                </ul>
                                                                <!-- pagination -->
                                                                <div class="page-pagination clear-fix">
                                                                    <a href="#"><i class="fa fa-angle-double-left"></i></a><!--
                                                                    --><a href="#">1</a><!-- 
                                                                    --><a href="#">2</a><!-- 
                                                                    --><a href="#" class="active">3</a><!-- 
                                                                    --><a href="#"><i class="fa fa-angle-double-right"></i></a>
                                                                </div>
                                                                <!--/ pagination -->
                                                                <!--Shop -->
                                                                </div>
                                                                <!--/accordions content -->
                                                                <!-- content-title -->
                                                                <div class="content-title">Cold Chain</div>
                                                                <!--/content-title -->
                                                                <!-- accordions content -->
                                                                <div class="content">
                                                                                                                <!-- Shop -->
                                  
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
                                                                            <a href="{{ route('ressingle') }}">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
                                                                        </div>

                                                                        <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                                    </li>
                                                                    <!-- product -->
                        

                                                                </ul>
                                                                <!--Shop -->
                                                                </div>
                                                                <!--/accordions content -->
                                                                <!-- content-title -->
                                                                <div class="content-title">Adverse Events Following Immunization</div>
                                                                <!--/content-title -->
                                                                <!-- accordions content -->
                                                                <div class="content">
                                                                <!-- Shop -->

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
                                                                            <a href="{{ route('ressingle') }}">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
                                                                        </div>

                                                                        <a href="shop-cart.html" rel="nofollow" data-product_id="70" data-product_sku="" class="cws-button border-radius icon-left alt"> <i class="fa fa-download"></i> Download</a>
                                                                    </li>
                                                                    <!-- product -->
                        

                                                                </ul>
                                                                <!--Shop -->
                                                                </div>
                                                                <!--/accordions content -->
                                                            </div>
                                                            <!--/accordions -->
                                                        </section>


                                                    </div>
                                                    <!--/accordions content -->
                                                    <!-- content-title -->
                                                    <div class="content-title"><h4>VPD<h4></div>
                                                    <!--/content-title -->
                                                    <!-- accordions content -->
                                                    <div class="content">
                                                                <!-- Shop -->

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
                                                                            <a href="{{ route('ressingle') }}">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                    <!--/accordions content -->
                                                    <!-- content-title -->
                                                    <div class="content-title"><h4>Disease Surveillance<h4></div>
                                                    <!--/content-title -->
                                                    <!-- accordions content -->
                                                    <div class="content">
                                                                <!-- Shop -->

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
                                                                            <a href="{{ route('ressingle') }}">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                                            <a href="shop-single-product.html">Guidelines on Corona Virus - English</a>
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
                                                    <!--/accordions content -->
                                                </div>
                                                <!--/accordions -->
                                            </section>
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
<style>
    .products .product {
    position: relative;
    width: calc(15.3% - 14px);
    width: -moz-calc(15.3% - 14px);
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
</style>
</body>
</html>
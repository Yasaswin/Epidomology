	<!-- page content -->
	<div id="home" class="page-content padding-none">
		<!-- section -->
		<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="grid-col-row">
					@foreach(Tile::getTiles() as $tile)
					@php
						$route = $tile->page ? route('viewpage',[$tile->page->slug]) : '' ; 
						$image = $tile->background_image && Storage::disk('public')->exists('tile/images/'.$tile->background_image) ? Storage::disk('public')->url('tile/images/'.$tile->background_image) : 'img/4.jpg'; 
					@endphp
					<div class="grid-col grid-col-4">
						<div class="course-item" style="margin-top:20px;">
							<a href="{{ $route }}">
								<div class="course-hover">
									<img src="{{$image}}" data-at2x="{{$image}}" alt>
								</div>
							</a>
							<div class="course-name clear-fix">
							<h3><a href="{{ $route }}">{{$tile->name ?? 'Tile Name'}}</a></h3>
								</div>
							<div class="course-date bg-color-1 clear-fix">
								<div class="description">{{$tile->description ?? 'Tile Description'}}</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<style>
			.course-item {

			box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
			transition: box-shadow 0.2s ease-in-out;
			}

			.course-item:hover {
			box-shadow: 0 5px 20px rgba(0, 0, 0, 0.8);
			}
		</style>
		<!-- / section -->
		<hr class="divider-color" />

		<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="grid-col-row">
					<div class="grid-col grid-col-6 clear-fix">
						<h2>Message To Public</h2>
						<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at susp. Vivamus orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecea accumsan, massa nec vulputate congue.</p>
						<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
						<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
						<br/>
						<br/>
						<br/>
						<br/>
						<a href="page-about-us.html" class="cws-button bt-color-3 border-radius alt icon-right float-right">Read More<i class="fa fa-angle-right"></i></a>
					</div>
					<div class="grid-col grid-col-6">
					<div class="owl-carousel full-width-slider" id="owl-slider">
							<div class="gallery-item picture">
								<img src="img/covid.jpg" data-at2x="img/covid.jpg" alt>
							</div>
							<div class="gallery-item picture">
								<img src="img/vac.jpg" data-at2x="img/vac.jpg" alt>
							</div>
							<div class="gallery-item picture">
								<img src="img/covid.jpg" data-at2x="img/covid.jpg" alt>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- section -->
		<section class="fullwidth-background padding-section">
			<div class="grid-row clear-fix">
				<div class="grid-col-row">
					<div class="grid-col grid-col-6">
						<a href="" class="service-icon"><i class="flaticon-pie"></i></a>
						<a href="" class="service-icon"><i class="flaticon-medical"></i></a>
						<a href="" class="service-icon"><i class="flaticon-restaurant"></i></a>
						<a href="" class="service-icon"><i class="flaticon-website"></i></a>
						<a href="" class="service-icon"><i class="flaticon-hotel"></i></a>
						<a href="" class="service-icon"><i class="flaticon-web-programming"></i></a>
						<a href="" class="service-icon"><i class="flaticon-camera"></i></a>
						<a href="" class="service-icon"><i class="flaticon-speech"></i></a>
					</div>
					<div class="grid-col grid-col-6 clear-fix">
						<h2>Our Services</h2>
						<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at susp. Vivamus orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecea accumsan, massa nec vulputate congue. Maecenas nec odio et ante tincidunt creptus alarimus tempus.</p>
						<a href="" class="cws-button bt-color-3 border-radius alt icon-right float-right">Learn More<i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</section>
		<!-- / section -->
		<!-- paralax section -->
		<div class="parallaxed">
			<div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
				<img src="img/vac.jpg" alt="">
			</div>
			<div class="them-mask bg-color-7"></div>
			<div class="grid-row">
				<div class="grid-col-row clear-fix">
					<div class="grid-col grid-col-3 alt">
						<div class="counter-block">
							<i class="flaticon-book1"></i>
							<div class="counter" data-count="356">0</div>
							<div class="counter-name">Publications</div>
						</div>
					</div>
					<div class="grid-col grid-col-3 alt">
						<div class="counter-block">
							<i class="flaticon-multiple"></i>
							<div class="counter" data-count="4781">0</div>
							<div class="counter-name">Circulars</div>
						</div>							
					</div>
					<div class="grid-col grid-col-3 alt">
						<div class="counter-block">
							<i class="flaticon-pencil"></i>
							<div class="counter" data-count="41">0</div>
							<div class="counter-name">Item 3</div>
						</div>
					</div>
					<div class="grid-col grid-col-3 alt">
						<div class="counter-block last">
							<i class="flaticon-calendar"></i>
							<div class="counter" data-count="120">0</div>
							<div class="counter-name">Events</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / paralax section -->
		<!-- / paralax section -->
		<hr class="divider-color" />
		<!-- paralax section -->
		<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="grid-col-row">
					<div class="grid-col grid-col-6">
						<div class="boxs-tab">
							<div class="animated fadeIn active" data-box="1">
								<img src="img/4.jpg" data-at2x="img/4.jpg" alt>
							</div>
							<div class="animated fadeIn" data-box="2">
								<img src="img/covid.jpg" data-at2x="img/covid.jpg" alt>
							</div>
							<div class="animated fadeIn" data-box="3">
								<img src="img/vac.jpg" data-at2x="img/vac.jpg" alt>
							</div>
						</div>
					</div>
					<div class="grid-col grid-col-6">
						<h2>Section</h2>
						<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit. Vivamus orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecenas accumsan, massa nec vulputate congue.<br/><br/>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
						<div class="tabs-box">
							<a href="#vd" data-boxs-tab="1" class="active">Tab 1</a>
							<a href="#dvd" data-boxs-tab="2">Tab 3</a>
							<a href="#cddv" data-boxs-tab="3">Tab 3</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- / paralax section -->
		<!-- categories courses -->
		<div class="categories-courses clear-fix">
			<!-- course item -->
			<div class="cat-courses-item">
				<div class="info-block bg-color-1">
					<div class="show">
						<h2>Medicine</h2>
						<i class="flaticon-hotel"></i>
					</div>
					<div class="hidden">
						<span>41</span>
						<p>Total Courses</p>
						<span>532</span>
						<p>Total Lessons</p>
					</div>
				</div>
				<a href="#" class="cat-course-img"><img src="img/19.jpg" data-at2x="img/19.jpg" alt=""></a>
			</div>
			<!-- / course item -->
			<!-- course item -->
			<div class="cat-courses-item">
				<div class="info-block bg-color-3">
					<div class="show">
						<h2>Vaccination</h2>
						<i class="flaticon-clipboard"></i>
					</div>
					<div class="hidden">
						<span>41</span>
						<p>Total Courses</p>
						<span>532</span>
						<p>Total Lessons</p>
					</div>
				</div>
				<a href="#" class="cat-course-img"><img src="img/18.jpg" data-at2x="img/18.jpg" alt=""></a>	
			</div>
			<!-- / course item -->
			<!-- course item -->
			<div class="cat-courses-item">
				<a href="#" class="cat-course-img"><img src="img/17.jpg" data-at2x="img/17.jpg" alt=""></a>
				<div class="info-block bg-color-2">
					<div class="show">
						<h2>Covid</h2>
						<i class="flaticon-medical"></i>
					</div>
					<div class="hidden">
						<span>41</span>
						<p>Total Courses</p>
						<span>532</span>
						<p>Total Lessons</p>
					</div>
				</div>
			</div>
			<!-- / course item -->
			<!-- course item -->
			<div class="cat-courses-item">
				<a href="#" class="cat-course-img"><img src="img/16.jpg" data-at2x="img/16.jpg" alt=""></a>
				<div class="info-block  bg-color-6">
					<div class="show">
						<h2>Treatments</h2>
						<i class="flaticon-users"></i>
					</div>
					<div class="hidden">
						<span>41</span>
						<p>Total Courses</p>
						<span>532</span>
						<p>Total Lessons</p>
					</div>
				</div>
			</div>
			<!-- / course item -->
		</div>
		<!-- / categories courses -->
		<!-- paralax section -->
		<div class="page-content grid-row">
			<!-- main content -->
			<main>
				<div class=" grid-col-row clear-fix">
				<h2 class="center-text">Latest News</h2>
					<div class="grid-col grid-col-3">
						<div class="blog-post">
							<article>
								<div class="post-info">
									<div class="date-post"><div class="day">26</div><div class="month">Feb</div></div>
									<div class="post-info-main">
										<div class="author-post">by Orkun Gusel</div>
									</div>
								</div>
								<div class="blog-media picture">
									<div class="hover-effect"></div>
									<div class="link-cont">
										<a href="blog-post.html" class="cws-left fancy fa fa-link"></a>
										<a href="img/4.jpg" class="fancy fa fa-search"></a>
									</div>
									<img src="img/4.jpg" data-at2x="img/4.jpg" class="columns-col-12" alt>
								</div>
								<h3>Donec mollis magna quis</h3>
								<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit <a href="blog-post.html"></a></p>
								<div class="tags-post">
									<a href="#" rel="tag">Materials</a><!-- 
								--><a href="#" rel="tag">Featured</a>
								</div>
							</article>
						</div>
						<hr class="divider-big" />
					</div>
					<div class="grid-col grid-col-3">
						<div class="blog-post">
							<article>
								<div class="post-info">
									<div class="date-post"><div class="day">26</div><div class="month">Feb</div></div>
									<div class="post-info-main">
										<div class="author-post">by Orkun Gusel</div>
									</div>
								</div>
								<div class="blog-media picture">
									<div class="hover-effect"></div>
									<div class="link-cont">
										<a href="blog-post.html" class="cws-left fancy fa fa-link"></a>
										<a href="img/4.jpg" class="fancy fa fa-search"></a>
									</div>
									<img src="img/4.jpg" data-at2x="img/4.jpg" class="columns-col-12" alt>
								</div>
								<h3>Donec mollis magna quis</h3>
								<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit <a href="blog-post.html"></a></p>
								<div class="tags-post">
									<a href="#" rel="tag">Materials</a><!-- 
								--><a href="#" rel="tag">Featured</a>
								</div>
							</article>
						</div>
						<hr class="divider-big" />
					</div>
					<div class="grid-col grid-col-3">
						<div class="blog-post">
							<article>
								<div class="post-info">
									<div class="date-post"><div class="day">26</div><div class="month">Feb</div></div>
									<div class="post-info-main">
										<div class="author-post">by Orkun Gusel</div>
									</div>
								</div>
								<div class="blog-media picture">
									<div class="hover-effect"></div>
									<div class="link-cont">
										<a href="blog-post.html" class="cws-left fancy fa fa-link"></a>
										<a href="img/4.jpg" class="fancy fa fa-search"></a>
									</div>
									<img src="img/4.jpg" data-at2x="img/4.jpg" class="columns-col-12" alt>
								</div>
								<h3>Donec mollis magna quis</h3>
								<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit <a href="blog-post.html"></a></p>
								<div class="tags-post">
									<a href="#" rel="tag">Materials</a><!-- 
								--><a href="#" rel="tag">Featured</a>
								</div>
							</article>
						</div>
						<hr class="divider-big" />
					</div>
					<div class="grid-col grid-col-3">
						<div class="blog-post">
							<article>
								<div class="post-info">
									<div class="date-post"><div class="day">26</div><div class="month">Feb</div></div>
									<div class="post-info-main">
										<div class="author-post">by Orkun Gusel</div>
									</div>
								</div>
								<div class="blog-media picture">
									<div class="hover-effect"></div>
									<div class="link-cont">
										<a href="blog-post.html" class="cws-left fancy fa fa-link"></a>
										<a href="img/4.jpg" class="fancy fa fa-search"></a>
									</div>
									<img src="img/4.jpg" data-at2x="img/4.jpg" class="columns-col-12" alt>
								</div>
								<h3>Donec mollis magna quis</h3>
								<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit <a href="blog-post.html"></a></p>
								<div class="tags-post">
									<a href="#" rel="tag">Materials</a><!-- 
								--><a href="#" rel="tag">Featured</a>
								</div>
							</article>
						</div>
						<hr class="divider-big" />
					</div>
				</div>
			</main>
		</div>
		<!-- paralax section -->
		<hr class="divider-color" />
		<!-- section -->
		<section class="grid-row clear-fix padding-section">
			<h2 class="center-text">Our Staff</h2>
			<div class="grid-col-row">
				<div class="grid-col grid-col-6">
					<div class="item-instructor bg-color-1">
						<a href="page-profile.html" class="instructor-avatar">
							<img src="img/1.jpg" data-at2x="img/1.jpg" alt>
						</a>
						<div class="info-box">
							<h3>Jenny Doe</h3>
							<span class="instructor-profession">Professor of Methematic</span>
							<div class="divider"></div>
							<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis.</p>
							<div class="social-link"><!-- 
								 --><a href="#" class="fa fa-facebook"></a><!-- 
								 --><a href="#" class="fa fa-google-plus"></a><!-- 
								 --><a href="#" class="fa fa-twitter"></a>
							</div>
						</div>
					</div>
					<div class="item-instructor bg-color-3">
						<a href="page-profile.html" class="instructor-avatar">
							<img src="img/1.jpg" data-at2x="img/1.jpg" alt>
						</a>
						<div class="info-box">
							<h3>John Doe</h3>
							<span class="instructor-profession">Lecturer of Design</span>
							<div class="divider"></div>
							<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis.</p>
							<div class="social-link"><!-- 
								 --><a href="#" class="fa fa-facebook"></a><!-- 
								 --><a href="#" class="fa fa-google-plus"></a><!-- 
								 --><a href="#" class="fa fa-twitter"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-col grid-col-6">
					<div class="item-instructor bg-color-2">
						<a href="page-profile.html" class="instructor-avatar">
							<img src="img/1.jpg" data-at2x="img/1.jpg" alt>
						</a>
						<div class="info-box">
							<h3>James Doe</h3>
							<span class="instructor-profession">Professor of Economics</span>
							<div class="divider"></div>
							<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis.</p>
							<div class="social-link"><!-- 
								 --><a href="#" class="fa fa-facebook"></a><!-- 
								 --><a href="#" class="fa fa-google-plus"></a><!-- 
								 --><a href="#" class="fa fa-twitter"></a>
							</div>
						</div>
					</div>
					<div class="item-instructor bg-color-6">
						<a href="page-profile.html" class="instructor-avatar">
							<img src="img/1.jpg" data-at2x="img/1.jpg" alt>
						</a>
						<div class="info-box">
							<h3>Jade Doe</h3>
							<span class="instructor-profession">Assistant</span>
							<div class="divider"></div>
							<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis.</p>
							<div class="social-link"><!-- 
								 --><a href="#" class="fa fa-facebook"></a><!-- 
								 --><a href="#" class="fa fa-google-plus"></a><!-- 
								 --><a href="#" class="fa fa-twitter"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- / section -->
		<h2 class="center-text">Latest Publications</h2>
		<!-- parallax section -->
		<div class="parallaxed">
			<div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
				<img src="img/covid.jpg" alt="">
			</div>
			<div class="them-mask bg-color-8"></div>
			<div class="grid-row center-text">
				<div class="owl-carousel testimonials-carousel"  id="owl-demo">
					<div class="gallery-item" style="margin-left: 10px;">
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
					</div>
					<div class="gallery-item" style="margin-left: 10px;">
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
					</div>
					<div class="gallery-item" style="margin-left: 10px;">
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
					</div>
					<div class="gallery-item" style="margin-left: 10px;">
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
					</div>					<div class="gallery-item" style="margin-left: 10px;">
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
					</div>					<div class="gallery-item" style="margin-left: 10px;">
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
					</div>

				</div>				
			</div>
		</div>
		<!-- parallax section -->
		<hr class="divider-color" />
		<!-- section -->
		<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="grid-col-row">
					<div class="grid-col grid-col-6">
						<div class="video-player">
							<iframe src="https://www.youtube.com/embed/rZsH88zNxRw"></iframe>
						</div>
					</div>
					<div class="grid-col grid-col-6 clear-fix">
						<h2>Learn More About Us From Video</h2>
						<p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at susp. Vivamus orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecea accumsan, massa nec vulputate congue.</p>
						<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
						<br/>
						<br/>
						<br/>
						<br/>
						<a href="page-about-us.html" class="cws-button bt-color-3 border-radius alt icon-right float-right">Watch More<i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- / page content -->
	<script>


$(document).ready(function() {

	$("#owl-demo").owlCarousel({

	items : 5,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,2],
    itemsTablet: [768,1],
    itemsMobile : [479,1],

    //Autoplay
    autoPlay : true,

     //Auto height
    autoHeight : true

	});

	$("#owl-slider").owlCarousel({

	items : 1,
	itemsDesktop : [1199,4],
	itemsDesktopSmall : [980,2],
	itemsTablet: [768,1],
	itemsMobile : [479,1],
	navigation: true,
    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],

	//Autoplay
	autoPlay : true,

	//Auto height
	autoHeight : true

	});
}); 
</script>
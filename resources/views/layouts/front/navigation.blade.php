		<!-- sticky menu -->
		<div class="sticky-wrapper">
			<div class="sticky-menu" style="">
				<div class="grid-row clear-fix">
					<!-- logo -->
					<a href="/" class="logo">
						<img src="img/log1.png"  data-at2x="img/log1.png" alt>
					</a>
					<!-- / logo -->
					<div class="header-top-panel">
						<!-- <a href="" class="fa fa-shopping-cart"></a> -->
						<a href="page-login.html" class="fa fa-user login-icon"></a>
						<!-- <div id="top_social_links_wrapper">
							<div class="share-toggle-button"><i class="share-icon fa fa-share-alt"></i></div>
							<div class="cws_social_links"><a href="https://plus.google.com/" class="cws_social_link" title="Google +"><i class="share-icon fa fa-google-plus" style="transform: matrix(0, 0, 0, 0, 0, 0);"></i></a><a href="http://twitter.com/" class="cws_social_link" title="Twitter"><i class="share-icon fa fa-twitter"></i></a><a href="http://facebook.com" class="cws_social_link" title="Facebook"><i class="share-icon fa fa-facebook"></i></a><a href="http://dribbble.com" class="cws_social_link" title="Dribbble"><i class="share-icon fa fa-dribbble"></i></a></div>
						</div> -->
						<a href="#" class="search-open"><i class="fa fa-search"></i></a>
						<form action="#" class="clear-fix">
							<input type="text" placeholder="Search" class="clear-fix">
						</form>
					</div>
					<nav class="main-nav">
						<ul class="clear-fix" >
							<li>
								<a href="/" ><i class="fa fa-home fa-lg"></i></a>
		
							</li>
							@php 
								$active_menu = Menu::firstActiveChild();
								$active = $active_menu->id ?? null;
								$open = $active_menu ? $active_menu->parent_family->pluck('id')->toArray() :[];
							@endphp
							
							@foreach(Menu::getParents() as $parent)
								<li>
									<a class="{{in_array($parent->id,$open)?' active':''}}" href="">{{$parent->name}}</a>
									{!! $parent->arrangeChildrenMenus($active,$open) !!}
								</li>
							@endforeach
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- sticky menu -->

		<style>

		</style>
		<!-- sticky menu -->
		<div class="sticky-wrapper">
			<div class="sticky-menu">
				<div class="grid-row clear-fix">
					<!-- logo -->
					<a href="/" class="logo">
						<img src="img/logo.png"  data-at2x="img/logo.png" alt>
					</a>
					<!-- / logo -->
					<nav class="main-nav">
						<ul class="clear-fix" >
						<!-- style="background-color:#601313; color:white;" -->
							<li>
								<a href="/" ><i class="fa fa-home"></i></a>
		
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
	<!-- page content -->
	<div class="page-content grid-row">
		<main>
			<div class="grid-col-row clear-fix">
				@foreach(Tile::getTiles() as $tile)
					@php
						$route = $tile->page ? route('viewpage',[$tile->page->slug]) : '' ; 
						$image = $tile->background_image && Storage::disk('public')->exists('tile/images/'.$tile->background_image) ? Storage::disk('public')->url('tile/images/'.$tile->background_image) : 'img/4.jpg'; 
					@endphp
					<div class="grid-col grid-col-4">
						<div class="portfolio-item">
						<a href="{{ $route }}"> <div class="picture">
							<div class="hover-effect"></div>
								<img src="{{$image}}" data-at2x="{{$image}}" alt>
							</div>
						</a>
							<h3>{{$tile->name ?? 'Tile Name'}}</h3> 
							<p>{{$tile->description ?? 'Tile Description'}}</p>
						</div>
					</div>
				@endforeach
			</div>
		</main>
	</div>
	<!-- / page content -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" ></script>
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
		<!-- section -->
		@php 
		$notice=$page->notice ?? null;
		$labels = $page->notice->getData()['labels'] ?? [];
		$values = $page->notice->getData()['values'] ?? [];
		$tbl1_cols= 4;
		$tbl1_rows= 10;
		$tbl2_cols= 3;
		$tbl2_rows= 10;
		@endphp
		<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="bg-image p-3  shadow-1-strong rounded mb-5 text-white" style="background-image: url('img/covid.jpg');">
					<div class="mask rounded pl-5 pt-1 pb-5" style="background-color: rgba(0, 0, 0, 0.5);">
					<h2 class="h2 text-center" id="title">{{$labels['title'] ?? 'Title'}}</h2>
					<h1 class="mb-3 h4 text-center" id="date_time">{{$labels['date_time'] ?? 'Date & Time'}}</h1>
						<div class="row justify-content">
							<div class="col-md-4">
								<h3 class="h5" id="data1">{{$labels['data1'] ?? 'data1.label'}}</h3>
							</div>	
							<div class="col-md-1">
								<h3 class="h5">:</h3>
							</div>
							<div class="col-md-1">
								<h3 class="h5" id="data1">{{$values['data1'] ?? 'data1.value'}}</h3>
							</div>
						</div>
						<div class="row justify-content">
							<div class="col-md-4">
								<h3 class=" h5" id="data2">{{$labels['data2'] ?? 'data2.label'}}</h3>
							</div>
							<div class="col-md-1">
								<h3 class="h5">:</h3>
							</div>	
							<div class="col-md-1">
								<h3 class="h5" id="data2">{{$values['data2'] ?? 'data2.value'}}</h3>
							</div>
						</div>						
						<div class="row justify-content">
							<div class="col-md-11">
								<h3 class="h5" id="data3">{{$labels['data3'] ?? 'data3.label'}}</h3>
								<table class="table  table-bordered">
									<thead>
										<tr>
										@for ($i = 1; $i <= $tbl1_cols; $i++)
											<th scope="col" class="h6">{{$labels['tbl1_h'.$i] ?? 'tbl1 heading '.$i }}</th>
										@endfor
										</tr>
									</thead>
									<tbody>
									@for ($j = 1; $j <= $tbl1_rows; $j++)
										@php 
											$tr = '<tr>';
											$has_td = false; 
											for ($i = 1; $i <= $tbl1_cols; $i++){
												$has_td = $has_td || ($labels['tbl1_r'.$j.'_c'.$i] ?? false);
												$tr = $tr.'<td>'.($labels['tbl1_r'.$j.'_c'.$i]??null).'</td>';											
											}
											$tr = $tr.'</tr>';
										@endphp
										@if ($has_td)
											{!! $tr !!}
										@endif
									@endfor
									</tbody>
								</table>
							</div>	
						</div>	
						<div class="row justify-content">
							<div class="col-md-11">
								<h3 class="h5" id="data3">{{$labels['data4'] ?? 'data4.label'}}</h3>
								<table class="table  table-bordered">
									<thead>
										<tr>
										@for ($i = 1; $i <= $tbl2_cols; $i++)
											<th scope="col" class="h6">{{$labels['tbl2_h'.$i] ?? 'tbl2 heading '.$i }}</th>
										@endfor
										</tr>
									</thead>
									<tbody>
									@for ($j = 1; $j <= $tbl2_rows; $j++)
										@php 
											$tr = '<tr>';
											$has_td = false; 
											for ($i = 1; $i <= $tbl2_cols; $i++){
												$has_td = $has_td || ($labels['tbl2_r'.$j.'_c'.$i] ?? false);
												$tr = $tr.'<td>'.($labels['tbl2_r'.$j.'_c'.$i]??null).'</td>';											
											}
											$tr = $tr.'</tr>';
										@endphp
										@if ($has_td)
											{!! $tr !!}
										@endif
									@endfor
										</tr>
									</tbody>
								</table>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- / section -->
    <!-- page content -->
    @include('layouts.front.footer')
    @include('layouts.front.scripts')
    @stack('front.scripts')

</body>
</html>
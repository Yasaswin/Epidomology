
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('pageTitle') - {{ config('app.name') }}</title>

	@include('layouts.styles')

</head>
<body>
<!-- page header -->
<header class="only-color">
	@include('layouts.header')
	@include('layouts.navigation')
</header>
<!-- / page header -->
@section('pageTitle', $post->title)
@section('content')
    <!-- page content -->
    <div class="page-content container clear-fix">
        <div class="grid-col-row">
               <!-- sidebar left content -->
                @include('layouts.sidebar_left')
              <!-- End sidebar left content -->

              @include('layouts.post')
            <!-- sidebar right content -->
            @include('layouts.sidebar_right')
            <!-- End sidebar right content -->

        </div>
    </div>

<!-- page content -->
@push('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
@endpush
@include('layouts.footer')
@include('layouts.scripts')
@include('layouts.dashboard.login.alerts')
@stack('scripts')

</body>
</html>

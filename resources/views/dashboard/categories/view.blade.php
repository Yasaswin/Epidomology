@extends('layouts.dashboard.app')

@section('content')
<div class="container-fulied">
    <nav aria-label="breadcrumb" >
        <ol class="breadcrumb @lang('theme.breadcrumb')">
            <!-- <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('breadcrumb.home')</a></li> -->
            <li class="breadcrumb-item"><a href="{{ route('hotspot.filter') }}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
        </ol>
        <ol class="breadcrumb py-0 my-0" style="@lang('theme.actionline')">
            @if (Auth::user()->can('edit', $hotspot))
                <a class="btn btn-sm @lang('theme.btn_edit') btn-x py-1 px-3 mb-2 font-weight-bolder" href="{{ route('hotspot.edit', [$hotspot]) }}">@lang('common.btn_edit')</a>
            @endif
        </ol>
    </nav>
        @includeIf('dashboard.categories.form', ['mode' => 'EDIT','editable' => false])
</div>
@endsection
















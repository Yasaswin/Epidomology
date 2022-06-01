@extends('layouts.dashboard.app')

@section('content')
<div class="container-fulied">
    <nav aria-label="breadcrumb" >
        <ol class="breadcrumb @lang('theme.breadcrumb')">
            <!-- <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('breadcrumb.home')</a></li> -->
            <li class="breadcrumb-item"><a href="{{ route('category.filter') }}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
        </ol>
        <ol class="breadcrumb py-0 my-0" style="@lang('theme.actionline')">
                <a class="btn btn-sm @lang('theme.btn_edit') btn-x py-1 px-3 mb-2 font-weight-bolder" href="{{ route('category.edit', [$category]) }}">Edit</a>
        </ol>
    </nav>
        @includeIf('dashboard.categories.form', ['mode' => 'EDIT','editable' => false])
</div>
@endsection
















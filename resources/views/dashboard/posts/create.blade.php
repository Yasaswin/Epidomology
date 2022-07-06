@extends('layouts.dashboard.app')

@section('content')
<div class="container-fulied">
    <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('post.store') }}">
        @csrf
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb @lang('theme.breadcrumb')">
                <li class="breadcrumb-item"><a href="{{ route('post.filter') }}">Posts</a></li>
                <li class="breadcrumb-item active"  aria-current="page">{{$name}}</li>
            </ol>
            <ol class="breadcrumb py-0 my-0" style="@lang('theme.actionline')">
                <button type="submit" class="btn btn-sm @lang('theme.btn_save') btn-x mb-2 px-3 py-1 font-weight-bold">@lang('common.btn_save')</button>
            </ol>
        </nav>
        @includeIf('dashboard.posts.form', ['mode' => 'CREATE','editable' => true])
    </form>
</div>
@endsection
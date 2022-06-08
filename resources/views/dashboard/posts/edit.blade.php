@extends('layouts.dashboard.app')

@section('content')
<div class="container-fulied">
    <form class="form" method="POST" action="{{ route('post.update', [$post]) }}">
        @csrf
        <nav aria-label="breadcrumb" >
            <ol class="breadcrumb @lang('theme.breadcrumb')">
                <!-- <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('breadcrumb.home')</a></li> -->
                <li class="breadcrumb-item"><a href="{{ route('post.filter') }}">Posts</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
            </ol>
            <ol class="breadcrumb py-0 my-0" style="@lang('theme.actionline')">
                    <button type="submit" class="btn btn-sm @lang('theme.btn_save') btn-x mb-2 px-3 py-1 font-weight-bold">Update</button>
            </ol>
        </nav>
        <input type="hidden" value="{{$post->updated_at}}" name="updated_at">
        @includeIf('dashboard.posts.form', ['mode' => 'EDIT', 'editable' => true])
    </form>
</div>
@endsection

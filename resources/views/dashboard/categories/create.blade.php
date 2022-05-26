@extends('layouts.dashboard.app')

@section('content')
<div class="container-fulied">
    <form class="form" method="POST" action="{{ route('category.store') }}">
        @csrf
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb @lang('theme.breadcrumb')">
                <li class="breadcrumb-item"><a href="">Categories</a></li>
                <li class="breadcrumb-item active"  aria-current="page"></li>
            </ol>
            <ol class="breadcrumb py-0 my-0" style="@lang('theme.actionline')">
                    <button type="submit" class="btn btn-sm btn-x mb-2 px-3 py-1 font-weight-bold">Save</button>
            </ol>
        </nav>
        @includeIf('dashboard.categories.form', ['mode' => 'CREATE','editable' => true])
    </form>
</div>
@endsection
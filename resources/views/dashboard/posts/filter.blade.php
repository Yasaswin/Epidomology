@extends('layouts.dashboard.app')

@section('content')
<div class="container-fulied">
    <nav aria-label="breadcrumb">  
        <ol class="breadcrumb @lang('theme.breadcrumb')" >
            <!-- <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('breadcrumb.home')</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Posts</li>
        </ol>
        <ol class="breadcrumb py-0 my-0" style="@lang('theme.actionline')">
            <div class="col pl-0"> 
                    <a href="{{ route('post.create') }}" class="btn btn-sm @lang('theme.btn_create') btn-x mb-2 px-3 py-1 font-weight-bold">Create</a>
            </div> 
        </ol>
    </nav>
    <div class="container pt-4">
        <div class="card card-shadow sharp-corners @lang('theme.card_outline_color')">
            <div class="card-body pb-1 ">
                <!-- /// -->
                <div class="container-fulied row py-3">
                    <div class="col px-4">
                        <div class="table-responsive">
                            <table id="filtertbl"  class="table table-hover table-sm">
                                <thead>
                                    <tr class = "my-table-header">
                                        <th scope="col" class="my-table-heading" style="width:20px;"></th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">Tittle</th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">Created by</th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">Category</th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">Created At</th>

                                    </tr>
                                </thead>
                                <tbody style="@lang('theme.tbl-bottom')">
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td><a class="@lang('theme.link')" href="{{ route('post.show',[$post->slug]) }}"><i class="fas fa-eye"></i></a></td>
                                            <td>{{$post->title}}</td>
                                            <td>{{ $post->user->name }}</td>
                                            <td>
                                                @foreach ($post->categories as $category)
                                                <a href="">
                                                    {{ $category->name }}
                                                </a>
                                                @if (!$loop->last), @endif
                                                @endforeach
                                            </td>
                                            <td>{{$post->created_at->format('Y/m/d')}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $posts->appends(Request::except('page'))->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



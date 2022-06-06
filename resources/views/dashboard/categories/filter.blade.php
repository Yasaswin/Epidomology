@extends('layouts.dashboard.app')

@section('content')
<div class="container-fulied">
    <nav aria-label="breadcrumb">  
        <ol class="breadcrumb @lang('theme.breadcrumb')" >
            <!-- <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('breadcrumb.home')</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
        </ol>
        <ol class="breadcrumb py-0 my-0" style="@lang('theme.actionline')">
            <div class="col pl-0"> 
                    <a href="{{ route('category.create') }}" class="btn ml-0 btn-sm btn-x mb-2 px-3 py-1 font-weight-bold">Create</a>
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
                                        <th scope="col" class="my-table-heading" style="width:150px;">Name</th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">Description</th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">Created At</th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">Updated At</th>

                                    </tr>
                                </thead>
                                <tbody style="@lang('theme.tbl-bottom')">
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td><a class="@lang('theme.link')" href="{{ route('category.show',[$category->slug]) }}"><i class="fas fa-eye"></i></a></td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->description}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <td>{{$category->updated_at}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between">
                                <div class="bd-highlight  @lang('theme.table-info')">         
                                    @if(isset($categories->info)){{$categories->info}}@endif
                                </div>
                                <div class="bd-highlight">
                                    {{$categories->appends(Request::except('page'))->links()}}
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



@extends('layouts.dashboard.app')

@section('content')
<div class="container-fulied">
    <nav aria-label="breadcrumb">  
        <ol class="breadcrumb @lang('theme.breadcrumb')" >
            <!-- <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('breadcrumb.home')</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">@lang('notice.title')</li>
        </ol>
        <ol class="breadcrumb py-0 my-0" style="@lang('theme.actionline')">
            <div class="col pl-0"> 
                    <a href="{{ route('notice.create') }}" class="btn btn-sm @lang('theme.btn_create') btn-x mb-2 px-3 py-1 font-weight-bold">@lang('common.btn_create')</a>
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
                                        <th scope="col" class="my-table-heading" style="width:150px;">@lang('notice.tbl_name')</th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">@lang('notice.tbl_page')</th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">@lang('notice.tbl_order')</th>
                                        <th scope="col" class="my-table-heading" style="width:150px;">@lang('notice.tbl_status')</th>

                                    </tr>
                                </thead>
                                <tbody style="@lang('theme.tbl-bottom')">
                                    @foreach ($notices as $notice)
                                        <tr>
                                            <td><a class="@lang('theme.link')" href="{{ route('notice.show',[$notice->id]) }}"><i class="fas fa-eye"></i></a></td>
                                            <td>{{ $notice->name }}</td>
                                            <td>{{ $notice->page->title ?? ''}}</td>
                                            <td>{{ $notice->order }}</td>
                                            <td>{{$notice->status}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $notices->appends(Request::except('page'))->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



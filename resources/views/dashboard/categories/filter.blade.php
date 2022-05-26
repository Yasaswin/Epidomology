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
                    <a href="" class="btn ml-0 btn-sm btn-x mb-2 px-3 py-1 font-weight-bold">Create</a>
            </div> 
        </ol>
    </nav>
    <div class="container pt-4">
        <div class="card card-shadow sharp-corners @lang('theme.card_outline_color')">
            <div class="card-body pb-1 ">
                <!-- /// -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tittle</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Tittle">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
                        </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function(){
        $("#reset").click(function(){
            //$("#frm_filter").trigger("reset");
            //document.getElementById('frm_filter').reset();
            $("#frm_filter").get(0).reset();
        }); 
    });

    $(function () {
        $('#filtertbl').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": false,
        });
    });
   
</script>
@endsection



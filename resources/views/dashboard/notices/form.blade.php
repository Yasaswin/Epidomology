<div class="container-fulied">
    <div class="mt-1"> 
        <div class="card-body px-4 pt-4" onload="script();">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">{{$name}}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body pad">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="name">@lang('notice.lbl_name')</label>
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="name" value="{{$errors->has('name')?old('name'):(empty(old('name'))?$notice->name:old('name'))}}" {{$editable?'':' disabled'}} >
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <div class="form-group">
                                        <label for="layouts">@lang('notice.lbl_layout')</label>
                                        <select name="layout_id" id="layout_id" class="form-control {{ $errors->has('layout_id') ? ' is-invalid' : '' }}" {{$editable?'':' disabled'}}>
                                            <option value="*" class="invisible"></option>
                                            @if (!empty($layouts))
                                                @foreach ($layouts as $layout)
                                                <option value="{{$layout->id}}" {{$layout->id == (old('layout_id')??$notice->layout_id)?' selected':''}}>{{$layout->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @if ($errors->has('layout_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('layout_id') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                @if ($editable)
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                    <div class="form-group">
                                        <label for="exampleInputFile">@lang('notice.lbl_image')</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" class="myfrm form-control" multiple="false" accept=".png, .jpg, .jpeg">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                @if ($errors->has('image'))
                                                    <span class="invalid-message">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                @endif
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <select class="form-control form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="status" {{$editable?'':' disabled'}}>
                                            @foreach (App\Models\Comm::getStatuses() as $key=>$value)
                                                <option value="{{$key}}" {{$key == (old('status')??$notice->status ) ? 'selected' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                   
            </div>
            @includeIf('dashboard.notices.layouts.disaster', ['mode' => $mode,'editable' => $editable])
        </div>
    </div>
</div>
<script>
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>


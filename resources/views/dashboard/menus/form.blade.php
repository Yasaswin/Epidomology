<div class="container-fulied">
    <div class="mt-1"> 
        <div class="card-body px-4 pt-4" onload="script();">
            <!-- <div class="row align-items-end"> -->
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- English -->
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">{{$name}}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body pad">
                            <div class="form-group">
                                <label for="name">Name English</label>
                                <input type="text" class="form-control {{ $errors->has('name_en') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="name_en" value="{{$errors->has('name_en')?old('name_en'):(empty(old('name_en'))?$menu->name_en:old('name_en'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('name_en'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_en') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name">Name Sinhala</label>
                                <input type="text" class="form-control {{ $errors->has('name_si') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="name_si" value="{{$errors->has('name_si')?old('name_si'):(empty(old('name_si'))?$menu->name_si:old('name_si'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('name_si'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_si') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name">Name Tamil</label>
                                <input type="text" class="form-control {{ $errors->has('name_ta') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="name_ta" value="{{$errors->has('name_ta')?old('name_ta'):(empty(old('name_ta'))?$menu->name_ta:old('name_ta'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('name_ta'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_ta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                        <p class="mb-4">Menu settings</p>
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <select class="form-control form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="status" {{$editable?'':' disabled'}}>
                                            @foreach (App\Models\Comm::getMenuStatuses() as $key=>$value)
                                                <option value="{{$key}}" {{$key == (old('status')??$menu->status ) ? 'selected' : ''}}>{{$value}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('status') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="name">Menu Sorting Order</label>
                                        <input type="text" class="form-control {{ $errors->has('order') ? ' is-invalid' : '' }}" placeholder="Enter Order" name="order" value="{{$errors->has('order')?old('order'):(empty(old('order'))?$menu->order:old('order'))}}" {{$editable?'':' disabled'}} >
                                        @if ($errors->has('order'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('order') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar -->
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <label for="pages" class="mb-3">Page</label>
                            <select name="page_id" id="page_id" class="form-control {{ $errors->has('page_id') ? ' is-invalid' : '' }}" {{$editable?'':' disabled'}}>
                                <option value="*" class="invisible"></option>
                                @if (!empty($pages))
                                    @foreach ($pages as $page)
                                    <option value="{{$page->id}}" {{$page->id == (old('page_id')??$menu->page_id)?' selected':''}}>{{$page->title}}</option>
                                    @endforeach
                                @endif
                            </select>
                            @if ($errors->has('page_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('page_id') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <label for="categories" class="mb-3">Category</label>
                            <select name="category_id" id="category_id" class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}" {{$editable?'':' disabled'}}>
                                <option value="*" class="invisible"></option>
                                @if (!empty($categories))
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == (old('category_id')??$menu->category_id)?' selected':''}}>{{$category->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            @if ($errors->has('category_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <label for="menus" class="mb-3">Parent Menu</label>
                            <select name="parent_id" id="parent_id" class="form-control {{ $errors->has('parent_id') ? ' is-invalid' : '' }}" {{$editable?'':' disabled'}}>
                                <option value="*" class="invisible"></option>
                                @if (!empty($menus))
                                    @foreach ($menus as $parent)
                                    <option value="{{$parent->id}}" {{$parent->id == (old('parent_id')??$menu->parent_id)?' selected':''}}>{{$parent->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            @if ($errors->has('parent_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('parent_id') }}</strong>
                            </span>
                            @endif
                            <div class="form-group">
                                <label for="name" class="mb-1 p-3">Has Sub-menus</label>
                                <!-- <input type="checkbox" name="my-checkbox" data-on-text="Yes" data-off-text="No" checked data-bootstrap-switch> -->
                                <input type="checkbox" name="has_sub_menus" value="1" data-on-text="Yes" data-off-text="No" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                            </div>
                            <div class="form-group">
                                <label for="menus" class="">Sub Menu</label>
                                <select name="parent_id" id="parent_id" class="form-control {{ $errors->has('parent_id') ? ' is-invalid' : '' }}" {{$editable?'':' disabled'}}>
                                    <option value="*" class="invisible"></option>
                                    @if (!empty($menus))
                                        @foreach ($menus as $parent)
                                        <option value="{{$parent->id}}" {{$parent->id == (old('parent_id')??$menu->parent_id)?' selected':''}}>{{$parent->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('parent_id'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('parent_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
})
</script>

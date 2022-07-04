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
                                <label for="name">Tittle English</label>
                                <input type="text" class="form-control {{ $errors->has('name_en') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="name_en" value="{{$errors->has('name_en')?old('name_en'):(empty(old('name_en'))?$tile->name_en:old('name_en'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('name_en'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_en') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="description_en">Description English</label>
                                    <textarea class="form-control{{ $errors->has('description_en') ? ' is-invalid' : '' }}" placeholder="Description" name="description_en" rows="4" {{$editable?'':' disabled'}}>{{old('description_en')??$tile->description_en}}</textarea>
                                    @if ($errors->has('description_en'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('description_en') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sinahala -->
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
                                <label for="name">Tittle Sinhala</label>
                                <input type="text" class="form-control {{ $errors->has('name_si') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="name_si" value="{{$errors->has('name_si')?old('name_si'):(empty(old('name_si'))?$tile->name_si:old('name_si'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('name_si'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_si') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="description_si">Description Sinhala</label>
                                    <textarea class="form-control{{ $errors->has('description_si') ? ' is-invalid' : '' }}" placeholder="Description" name="description_si" rows="4" {{$editable?'':' disabled'}}>{{old('description_si')??$tile->description_si}}</textarea>
                                    @if ($errors->has('description_si'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('description_si') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tamil -->
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
                                <label for="name">Tittle Tamil</label>
                                <input type="text" class="form-control {{ $errors->has('name_ta') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="name_ta" value="{{$errors->has('name_ta')?old('name_ta'):(empty(old('name_ta'))?$tile->name_ta:old('name_ta'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('name_ta'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_ta') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="description_ta">Description Tamil</label>
                                    <textarea class="form-control{{ $errors->has('description_ta') ? ' is-invalid' : '' }}" placeholder="Description" name="description_ta" rows="4" {{$editable?'':' disabled'}}>{{old('description_ta')??$tile->description_ta}}</textarea>
                                    @if ($errors->has('description_ta'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('description_ta') }}</strong>
                                        </span>
                                    @endif
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
                                    <option value="{{$page->id}}" {{$page->id == (old('page_id')??$tile->page_id)?' selected':''}}>{{$page->title}}</option>
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
                    @if ($editable)
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group hdtuto control-group lst increment-image" >
                                    <input type="file" name="background_image" class="myfrm form-control" multiple="true" accept=".png, .jpg, .jpeg" {{$editable?'':' disabled'}}>
                                </div>
                                @if ($errors->has('background_image'))
                                    <span class="invalid-message">
                                        <strong>{{ $errors->first('background_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @else
                    @endif
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <div class="form-group" class="@if ($tile->images) display-none @endif">
                                <div class="card">
                                    <div class="card-header"> Featured image
                                        <div class="card-header-actions"><a class="card-header-action" href="" target="_blank"></a></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row text-center">
                                            <div class="col-md-12 control-remove"><i class="c-icon c-icon-2xl mt-5 mb-2 cil-3d"></i>
                                                <div class="@if ($tile->background_image) display-block @else display-none @endif">
                                                    <img src="{{ asset('storage/tile/images/'  . $tile->background_image) }}" id="image_preview" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners  p-3 mb-3">
                            <p class="mb-4">Tile settings</p>
                            <div class=col-md-8>
                                <div class="form-group">
                                    <label for="name">Tile Sorting Order</label>
                                    <input type="text" class="form-control {{ $errors->has('order') ? ' is-invalid' : '' }}" placeholder="Enter Order" name="order" value="{{$errors->has('order')?old('order'):(empty(old('order'))?$tile->order:old('order'))}}" {{$editable?'':' disabled'}} >
                                    @if ($errors->has('order'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('order') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select class="form-control form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="status" {{$editable?'':' disabled'}}>
                                        @foreach (App\Models\Comm::getStatuses() as $key=>$value)
                                            <option value="{{$key}}" {{$key == (old('status')??$tile->status ) ? 'selected' : ''}}>{{$value}}</option>
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
    </div>
</div>

<script>
$(document).ready(function() {

    $('#pages').on('change', function() {
        if($(this).find(':selected').data('name') =="events" || $(this).find(':selected').data('name') == "event"){
            $("#event_start_container").show();
            $("#event_end_container").show();
            $("#event_end_datetime").prop('required',true);
            $("#event_start_datetime").prop('required',true);
        }
    });


  function countCharacters() {
    var words = $('.note-editable').text().replace(/\s+/g, ' ').trim().split(' ');
    var wordsCount = words.filter(entry => entry.trim() != '').length;
    var characters = $('.note-editable').text().length;
    var count = `${wordsCount} ${wordsCount === 1 ? 'word' : 'words'},
    ${characters} ${characters === 1 ? 'character' : 'characters'}`;
    $('#count').text(count);
  }

  $('#post-body').summernote({
    placeholder: 'Post content...',
    height: 365,
    callbacks: {
      onInit: function() {
        if ($('.note-editable').text().length) {
          countCharacters();
        }
      },
      onChange: function() {
        countCharacters();
      }
    }
  });
});
</script>
<script type="text/javascript">

    $(document).ready(function() {

        $(".btn-image").click(function(){
            var html = $(".clone_image").html();
            $(".increment-image").after(html);
        });

        $("body").on("click",".btn-remove-image",function(){
            $(this).parents(".control-group").remove();
        });

        $(".btn-document").click(function(){
            var html = $(".clone_doc").html();
            $(".increment-doc").after(html);
        });

        $("body").on("click",".btn-remove-doc",function(){
            $(this).parents(".control-group").remove();
        });

        $(".btn-video").click(function(){
            var html = $(".clone_video").html();
            $(".increment-video").after(html);
        });

        $("body").on("click",".btn-remove-video",function(){
            $(this).parents(".control-group").remove();
        });

        $("body").on("click","#remove_image_button",function(){
            $(this).parents(".control-remove").remove();
            var id = $(this).data("id");

            $.ajax(
                {
                    url: "/post/postImage/"+id,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                        },
                    success: function (){
                        console.log("it Works");
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
        });
    });

</script>
<script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
})
</script>

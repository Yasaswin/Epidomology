<div class="container-fulied">
    <div class="mt-1"> 
        <div class="card-body px-4 pt-4" onload="script();">
            <!-- <div class="row align-items-end"> -->
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">{{$name}}</h3>
                            <!-- tools box -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                            <div class="form-group">
                                <label for="name">Tittle English</label>
                                <input type="text" class="form-control {{ $errors->has('title_en') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="title_en" value="{{$errors->has('title_en')?old('title_en'):(empty(old('title_en'))?$post->title_en:old('title_en'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('title_en'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title_en') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <textarea id="post-body" class="form-control box-shadow" name="body_en" placeholder="Post content..." {{$editable?'':' disabled'}} >{{$errors->has('body_en')?old('body_en'):(empty(old('body_en'))?$post->body_en:old('body_en'))}}</textarea>
                                <div id="count" class="fs-14">0 words, 0 characters</div>
                                @if ($errors->has('body_en'))
                                <span class="invalid-message">
                                    <strong>{{ $errors->first('body_en') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group" class="@if ($post->images) display-none @endif">
                                <div class="card">
                                    <div class="card-header"> Featured images
                                        <div class="card-header-actions"><a class="card-header-action" href="" target="_blank"></a></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row text-center">
                                            @foreach ($images as $image)
                                            <div class="col-6 col-sm-4 col-md-2 control-remove"><i class="c-icon c-icon-2xl mt-5 mb-2 cil-3d"></i>
                                                <div class="@if ($image->image) display-block @else display-none @endif">

                                                    <img src="{{ asset('storage/post/images/'  . $image->image) }}" id="image_preview" class="img-fluid">
                                                    <button type="button" id="remove_image_button" data-id="{{ $image->id }}" class="btn btn-sm btn-link p-0 ">
                                                        Remove image
                                                    </button>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header"> Featured Documents
                                        <div class="card-header-actions"><a class="card-header-action" href="" target="_blank"></a></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row text-center">
                                            @foreach ($post->pdfs as $pdf)
                                                <div class="col-6 col-sm-4 col-md-2 control-remove"><i class="c-icon c-icon-2xl mt-5 mb-2 cil-3d"></i>
                                                    <div class="@if ($pdf->pdf) display-block @else display-none @endif">
                                                        <a href="{{ asset('storage/post/pdfs/'.$pdf->pdf)}}" target="_blank">
                                                            <img src="{{ asset('storage/system/document-icon.png') }}" id="image_preview" class="img-fluid">
                                                        </a>
                                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                                        <button type="button" id="remove_doc_button" data-id="{{ $pdf->id }}" class="btn btn-sm btn-link p-0">
                                                            Remove Document
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="card">
                                    <div class="card-header"> Featured Videos
                                        <div class="card-header-actions"><a class="card-header-action" href="https://coreui.io/icons/" target="_blank"></a></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row text-center">
                                            @foreach ($post->videos as $video)
                                                <div class="col-6 col-sm-4 col-md-2 control-remove"><i class="c-icon c-icon-2xl mt-5 mb-2 cil-3d"></i>
                                                    <div  class="@if ($video->video_link) display-block @else display-none @endif">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe src="https://www.youtube.com/embed/{{$video->related_id}}" title="YouTube video player" frameborder="0"  allowfullscreen></iframe>     
                                                        </div>
                                                        <button type="button" id="remove_video_button" data-id="{{ $video->id }}" class="btn btn-sm btn-link p-0">
                                                            Remove Video
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
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
                                <input type="text" class="form-control {{ $errors->has('title_si') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="title_si" value="{{$errors->has('title_si')?old('title_si'):(empty(old('title_si'))?$post->title_si:old('title_si'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('title_si'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title_si') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="body_si">Content Sinhala</label>
                                    <textarea class="form-control{{ $errors->has('body_si') ? ' is-invalid' : '' }}" placeholder="Content" name="body_si" rows="4" {{$editable?'':' disabled'}}>{{old('body_si')??$post->body_si}}</textarea>
                                    @if ($errors->has('body_si'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('body_si') }}</strong>
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
                                <input type="text" class="form-control {{ $errors->has('title_ta') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="title_ta" value="{{$errors->has('title_ta')?old('title_ta'):(empty(old('title_ta'))?$post->title_ta:old('title_ta'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('title_ta'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title_ta') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="body_ta">Content Tamil</label>
                                    <textarea class="form-control{{ $errors->has('body_ta') ? ' is-invalid' : '' }}" placeholder="Content" name="body_ta" rows="4" {{$editable?'':' disabled'}}>{{old('body_ta')??$post->body_ta}}</textarea>
                                    @if ($errors->has('body_ta'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('body_ta') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <label for="categories" class="mb-3">Categories</label>
                            <div class="select2-blue">
                                <select name="category_ids[]" id="category_ids" class="form-control select2{{ $errors->has('category_ids') ? ' is-invalid' : '' }}" multiple="multiple" {{$editable?'':' disabled'}}>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{in_array($category->id,old('category_ids')??$post->category_ids)?'selected':''}} data-name="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_ids'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('category_ids') }}</strong>
                                </span>
                                 @endif
                            </div>
                            <div class="form-group p-2" id="event_start_container" style="{{ $is_event ? '' : ' display:none;'}}">
                                <div class="box bg-white rounded box-shadow">
                                    <label for="Language" class="mb-3">Event Start Date</label>
                                    <input class="form-control" id="event_start_datetime" type="datetime-local" name="start" placeholder="date" value="{{old('start')??$post->start??null}}" ><span class="help-block">Please enter a valid date</span>
                                </div>
                            </div>
                            <div class="form-group p-1" id="event_end_container" style="{{ $is_event ? '' : ' display:none;'}}">
                                <div class="box bg-white rounded box-shadow">
                                    <label for="Language" class="mb-3">Event End Date</label>
                                    <input class="form-control" id="event_end_datetime" type="datetime-local" name="end" placeholder="date" value="{{old('end')??$post->end??null}}"><span class="help-block">Please enter a valid date</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($editable)
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <p class="mb-4">Featured images</p>
                            <div class="input-group hdtuto control-group lst increment-image" >
                                <input type="file" name="image[]" class="myfrm form-control" multiple="true" accept=".png, .jpg, .jpeg">
                                <div class="input-group-btn">
                                    <button class="btn btn-success btn-image" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add More</button>
                                </div>
                            </div>
                            <div class="clone_image " style="display: none">
                                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                    <input type="file" name="image[]" class="myfrm form-control" multiple="true" accept=".png, .jpg, .jpeg">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger btn-remove-image" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>Remove</button>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('image'))
                            <span class="invalid-message">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <p class="mb-4">Featured Documents</p>
                            <div class="input-group hdtuto control-group lst increment-doc" >
                                <input type="file" name="pdf[]" class="myfrm form-control" multiple="true" accept=".pdf, .doc, .excel">
                                <div class="input-group-btn">
                                    <button class="btn btn-success btn-document" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add More</button>
                                </div>
                            </div>
                            <div class="clone_doc" style="display: none">
                                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                    <input type="file" name="pdf[]" class="myfrm form-control" multiple="true" accept=".png, .jpg, .jpeg">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger btn-remove-doc" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>Remove</button>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('pdf'))
                                <span class="invalid-message">
                                <strong>{{ $errors->first('pdf') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <p class="mb-4">Featured Video</p>
                            <div class="input-group hdtuto control-group lst increment-video" >
                                <input type="text" name="video_link[]" class="myfrm form-control"  placeholder="video Url">
                                <div class="input-group-btn">
                                    <button class="btn btn-success btn-video" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add More</button>
                                </div>
                            </div>
                            <div class="clone_video" style="display: none">
                                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                    <input type="text" name="video_link[]" class="myfrm form-control" placeholder="video Url" >
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger btn-remove-video" type="button"><i class="fldemo glyphicon glyphicon-remove"></i>Remove</button>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('video'))
                                <span class="invalid-message">
                                <strong>{{ $errors->first('video') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    @else
                    @endif
                </div>    
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {

    $('#category_ids').on('change', function() {
        console.log($(this).find(':selected').data('name'))
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
    height: 250,
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

        $("body").on("click","#remove_doc_button",function(){
            $(this).parents(".control-remove").remove();
            var id = $(this).data("id");

            $.ajax(
                {
                    url: "/post/postPdf/"+id,
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

        $("body").on("click","#remove_video_button",function(){
            $(this).parents(".control-remove").remove();
            var id = $(this).data("id");

            $.ajax(
                {
                    url: "/post/postVideo/"+id,
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

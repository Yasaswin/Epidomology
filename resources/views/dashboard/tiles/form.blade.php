<div class="container-fulied">
    <div class="mt-1"> 
        <div class="card-body px-4 pt-4" onload="script();">
            <!-- <div class="row align-items-end"> -->
            <div class="row">
                <div class="col-12 col-lg-9">
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
                                <label for="name">Tittle</label>
                                <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="title" value="{{$errors->has('title')?old('title'):(empty(old('title'))?$post->title:old('title'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <textarea name="body" id="post-body" class="form-control box-shadow" name="body" placeholder="Post content..." {{$editable?'':' disabled'}} >{{$errors->has('body')?old('body'):(empty(old('body'))?$post->body:old('body'))}}</textarea>
                                <div id="count" class="fs-14">0 words, 0 characters</div>
                                @if ($errors->has('body'))
                                <span class="invalid-message">
                                    <strong>{{ $errors->first('body') }}</strong>
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
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners  p-3 mb-3">
                            <p class="mb-4">Post settings</p>
                            <div class="d-flex justify-content-between">
                                <button type="submit" name="draft" class="btn btn-sm btn-outline-secondary">Save draft</button>
                                <button class="btn btn-sm btn-primary" type="submit">Publish</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <label for="categories" class="mb-3">Categories</label>
                            <div class="select2-blue">
                                <select name="category_ids[]" id="category_ids" class="form-control select2{{ $errors->has('category_ids') ? ' is-invalid' : '' }}" multiple="multiple" {{$editable?'':' disabled'}}>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{in_array($category->id,old('category_ids')??$post->category_ids)?'selected':''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category_ids'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('category_ids') }}</strong>
                                </span>
                                 @endif
                            </div>
                        </div>
                    </div>
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
                                        <button class="btn btn-danger btn-remove-image" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
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
                </div>    
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {

    $('#categories').on('change', function() {
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

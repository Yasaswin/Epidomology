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
                                <input type="text" class="form-control {{ $errors->has('title_en') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="title_en" value="{{$errors->has('title_en')?old('title_en'):(empty(old('title_en'))?$page->title_en:old('title_en'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('title_en'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title_en') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="description_ta">Content English</label>
                                <textarea id="post_body_en" class="form-control box-shadow" name="body_en" placeholder="Post content..." {{$editable?'':' disabled'}} >{{$errors->has('body_en')?old('body_en'):(empty(old('body_en'))?$page->body_en:old('body_en'))}}</textarea>
                                <div id="count_post_body_en" class="fs-14">0 words, 0 characters</div>
                                @if ($errors->has('body_en'))
                                <span class="invalid-message">
                                    <strong>{{ $errors->first('body_en') }}</strong>
                                </span>
                                @endif
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
                                <input type="text" class="form-control {{ $errors->has('title_si') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="title_si" value="{{$errors->has('title_si')?old('title_si'):(empty(old('title_si'))?$page->title_si:old('title_si'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('title_si'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title_si') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                            <label for="description_ta">Content Sinahala</label>
                                <textarea id="post_body_si" class="form-control box-shadow" name="body_si" placeholder="Post content..." {{$editable?'':' disabled'}} >{{$errors->has('body_si')?old('body_si'):(empty(old('body_si'))?$page->body_si:old('body_si'))}}</textarea>
                                <div id="count_post_body_si" class="fs-14">0 words, 0 characters</div>
                                @if ($errors->has('body_si'))
                                <span class="invalid-message">
                                    <strong>{{ $errors->first('body_si') }}</strong>
                                </span>
                                @endif
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
                                <input type="text" class="form-control {{ $errors->has('title_ta') ? ' is-invalid' : '' }}" placeholder="Enter Tittle" name="title_ta" value="{{$errors->has('title_ta')?old('title_ta'):(empty(old('title_ta'))?$page->title_ta:old('title_ta'))}}" {{$editable?'':' disabled'}} >
                                @if ($errors->has('title_ta'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title_ta') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="description_ta">Content Tamil</label>
                                <textarea id="post_body_ta" class="form-control box-shadow" name="body_ta" placeholder="Post content..." {{$editable?'':' disabled'}} >{{$errors->has('body_ta')?old('body_ta'):(empty(old('body_ta'))?$page->body_ta:old('body_ta'))}}</textarea>
                                <div id="count_post_body_ta" class="fs-14">0 words, 0 characters</div>
                                @if ($errors->has('body_ta'))
                                <span class="invalid-message">
                                    <strong>{{ $errors->first('body_ta') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar -->
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <label for="categories" class="mb-3">Category</label>
                            <select name="category_id" id="category_id" class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}" {{$editable?'':' disabled'}}>
                                <option value="*" class="invisible">--Select--</option>
                                @if (!empty($categories))
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == (old('category_id')??$page->category_id)?' selected':''}}>{{$category->name}}</option>
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
                            <label for="layouts" class="mb-3">Layout</label>
                            <select name="layout_id" id="layout_id" class="form-control {{ $errors->has('layout_id') ? ' is-invalid' : '' }}" {{$editable?'':' disabled'}}>
                                <option value="*" class="invisible">--Select--</option>
                                @if (!empty($layouts))
                                    @foreach ($layouts as $layout)
                                    <option value="{{$layout->id}}" {{$layout->id == (old('layout_id')??$page->layout_id)?' selected':''}}>{{$layout->name}}</option>
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
                    <div class="form-group">
                        <div class="card card-outline card-info card-shadow sharp-corners p-3 mb-3">
                            <label for="notices" class="mb-3">Notice</label>
                            <select name="notice_id" id="notice_id" class="form-control {{ $errors->has('notice_id') ? ' is-invalid' : '' }}" {{$editable?'':' disabled'}}>
                                <option value="*" class="invisible">--Select--</option>
                                @if (!empty($notices))
                                    @foreach ($notices as $notice)
                                    <option value="{{$notice->id}}" {{$notice->id == (old('notice_id')??$page->notice_id)?' selected':''}}>{{$notice->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            @if ($errors->has('notice_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('notice_id') }}</strong>
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

    function countCharacters(note_id) {
    var words = $('#'+note_id).text().replace(/\s+/g, ' ').trim().split(' ');
    var wordsCount = words.filter(entry => entry.trim() != '').length;
    var characters = $('#'+note_id).text().length;
    var count = `${wordsCount} ${wordsCount === 1 ? 'word' : 'words'},
    ${characters} ${characters === 1 ? 'character' : 'characters'}`;
    $('#count_'+note_id).text(count);
    console.log(count);
  }

  $('#post_body_en').summernote({
    placeholder: 'Post content...',
    height: 365,
    callbacks: {
      onInit: function() {
        if ($('.note-editable').text().length) {
          countCharacters('post_body_en');
        }
      },
      onChange: function() {
        countCharacters('post_body_en');
      }
    }
  });

  $('#post_body_si').summernote({
    placeholder: 'Post content...',
    height: 365,
    callbacks: {
      onInit: function() {
        if ($('.note-editable').text().length) {
          countCharacters('post_body_si');
        }
      },
      onChange: function() {
        countCharacters('post_body_si');
      }
    }
  });
  $('#post_body_ta').summernote({
    placeholder: 'Post content...',
    height: 365,
    callbacks: {
      onInit: function() {
        if ($('.note-editable').text().length) {
          countCharacters('post_body_ta');
        }
      },
      onChange: function() {
        countCharacters('post_body_ta');
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

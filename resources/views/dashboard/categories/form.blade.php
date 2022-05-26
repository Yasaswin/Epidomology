<div class="container">
    <div class="card card-shadow sharp-corners mt-4"> 
        <div class="card-header my-form-header @lang('theme.card_outline_color')">
            <h4 class="my-form-heading" ><i class="far fa-file-alt pr-2"></i></h4>
        </div>
        <div class="card-body px-4 pt-4" onload="script();">
            <!-- <div class="row align-items-end"> -->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="form-group">
                        <label for="name">Tittle</label>
                        <input type="text" class="form-control form-control-sm{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Tittle" name="name" value="" >
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="form-group">
                        <label for="address">Description</label>
                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Description" name="description" rows="4" ></textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>  
            </div>    
        </div>
        <div class="card-footer">
            <!-- <div class="row justify-content-end"> </div> -->
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-2">
                    
                </div>
                <label class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-2 pl-2 heading-lbl"></label>
        </div>
    </div>
</div>
<script type="text/javascript">
   
</script>
   
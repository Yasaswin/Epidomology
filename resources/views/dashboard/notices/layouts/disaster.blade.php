<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card card-outline card-info">
            <div class="card-body pad">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="name">@lang('notice.lbl_title_en')</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Tittle English" name="details[title][label_en]" value="{{ $details['title']['label_en'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('label_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('label_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="name">@lang('notice.lbl_title_si')</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Tittle Sinhala" name="details[title][label_si]" value="{{ $details['title']['label_si'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('label_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('label_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <label for="name">@lang('notice.lbl_title_ta')</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Tittle Tamil" name="details[title][label_ta]" value="{{ $details['title']['label_ta'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('label_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('label_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <hr></hr>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="name">Date Time</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date English" name="details[date_time][label_en]" value="{{ $details['date_time']['label_en'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('label_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('label_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="name">Date Time</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date Sinhala" name="details[date_time][label_si]" value="{{ $details['date_time']['label_si'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('label_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('label_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="name">Date Time</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date Tamil" name="details[date_time][label_ta]" value="{{ $details['date_time']['label_ta'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('label_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('label_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <hr></hr>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="name">Data 1</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Data1 English" name="details[data1][label_en]" value="{{ $details['data1']['label_en'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Data1 Sinahala" name="details[data1][label_si]" value="{{ $details['data1']['label_si'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Data1 Tamil" name="details[data1][label_ta]" value="{{ $details['data1']['label_ta'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="name">Value 1</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter value1" name="details[data1][value]" value="{{ $details['data1']['value'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                        <label for="name">Data 2</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date Sinhala" name="details[data2][label_en]" value="{{ $details['data2']['label_en'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date Sinhala" name="details[data2][label_si]" value="{{ $details['data2']['label_si'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date Sinhala" name="details[data2][label_ta]" value="{{ $details['data2']['label_ta'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                        <label for="name">Value 2</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date Sinhala" name="details[data2][value]" value="{{ $details['data2']['value'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                        <label for="name">Data 3</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date Sinhala" name="details[data3][label_en]" value="{{ $details['data3']['label_en'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date Sinhala" name="details[data3][label_si]" value="{{ $details['data3']['label_si'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Enter Date Sinhala" name="details[data3][label_ta]" value="{{ $details['data3']['label_ta'] ?? null }}" {{$editable?'':' disabled'}} >
                            @if ($errors->has('name_en'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_en') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <table class="table table-bordered">
                            <thead class="thead-light"> 
                                <tr>
                                    @for($h=1; $h<=4; $h++)
                                        <th>
                                            @foreach(['en','si','ta'] as $k)
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="table heading{{$h}} name_{{$k}}" name="details[tbl1_h{{$h}}][label_{{$k}}]" value="{{ $details['tbl1_h'.$h]['label_'.$k]??null }}" {{$editable?'':' disabled'}} >
                                                    @if ($errors->has('name_en'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('name_en') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </th>
                                    @endfor    
                                </tr>
                            </thead>
                            <tbody>                                        
                                @for($r=1; $r<=6; $r++)
                                    <tr>
                                        @for($c=1; $c<=4; $c++)
                                            <td>
                                                @foreach(['en','si','ta'] as $k)
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-sm" placeholder="table row{{$r}} column{{$c}} name_{{$k}}" name="details[tbl1_r{{$r}}_c{{$c}}][label_{{$k}}]" value="{{ $details['tbl1_r'.$r.'_c'.$c]['label_'.$k]??null }}" {{$editable?'':' disabled'}} >
                                                        @if ($errors->has('name_en'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('name_en') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- table2 -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <label for="name">Data 4</label>
                        @foreach(['en','si','ta'] as $k)
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Enter Data4 label {{$k}}" name="details[data4][label_{{$k}}]" value="{{ $details['data4']['label_'.$k]??null }}" {{$editable?'':' disabled'}} >
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <table class="table table-bordered">
                        <table class="table table-bordered">
                            <thead class="thead-light"> 
                                <tr>
                                    @for($h=1; $h<=3; $h++)
                                        <th>
                                            @foreach(['en','si','ta'] as $k)
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" placeholder="table heading{{$h}} name_{{$k}}" name="details[tbl2_h{{$h}}][label_{{$k}}]" value="{{ $details['tbl2_h'.$h]['label_'.$k]??null }}" {{$editable?'':' disabled'}} >
                                                    @if ($errors->has('name_en'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('name_en') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </th>
                                    @endfor    
                                </tr>
                            </thead>
                            <tbody>                                        
                                @for($r=1; $r<=6; $r++)
                                    <tr>
                                        @for($c=1; $c<=3; $c++)
                                            <td>
                                                @foreach(['en','si','ta'] as $k)
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-sm" placeholder="table row{{$r}} column{{$c}} name_{{$k}}" name="details[tbl2_r{{$r}}c{{$c}}][name{{$k}}]" value="{{ $details['tbl2_r'.$r.'_c'.$c]['label_'.$k]??null }}" {{$editable?'':' disabled'}} >
                                                        @if ($errors->has('name_en'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('name_en') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
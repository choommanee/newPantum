<div class="row">
    <div class="col-md-8">
        {{ Form::select('pro_id', 'Product', $errors, $productdata, $serial, ['required' => true]) }}
        {{ Form::text('name', 'SN', $errors, $serial, ['required' => true]) }}
        {{ Form::file('name', 'SN', $errors, $serial, ['required' => true]) }}
        <input type="hidden" name="is_active" id="is_active" value="1"/>
        <input type="hidden" name="body" id="body" value="1"/>
        {{ Form::text('varunty_time', 'warranty (year)', $errors, $serial, ['required' => true]) }}
        <div class="form-group ">
        <label for="to" class="col-md-3 control-label text-left">Start Date</label>
        <div class="col-md-9">
            <input type="text" name="datevarunty_start" class="form-control datetime-picker" id="datevarunty_start" data-default-date="{{$serial->datevarunty_start}}">
        </div>
        </div>
    </div>
</div>

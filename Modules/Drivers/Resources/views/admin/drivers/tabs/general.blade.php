<div class="row">
    <div class="col-md-8">
        {{ Form::select('pro_id', 'Product', $errors, $productdata, $driver, ['required' => true]) }}
        {{ Form::text('name', 'Driver Name', $errors, $driver, ['required' => true]) }}
        {{ Form::textarea('body', 'Driver Name', $errors, $driver) }}
        {{ Form::text('driver_url', 'Driver URL', $errors, $driver, ['required' => true]) }}

<?php dd($driver);?>
        <div class="form-group ">
            <label for="driver_url" class="col-md-3 control-label text-left">Driver URL<span class="m-l-5 text-red">*</span></label>
            <div class="col-md-9">
                <select name="is_driver" class="form-control custom-select-black " id="is_driver">
                    <option value="">Please Select</option>
                    <option value="1">Driver</option>
                    <option value="2">Brochure</option>
                </select>
            </div>
        </div>
        <input type="hidden" name="is_active" id="is_active" value="1"/>

    </div>
</div>

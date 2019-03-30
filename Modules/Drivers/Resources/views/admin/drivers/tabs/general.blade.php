<div class="row">
    <div class="col-md-8">
        {{ Form::select('pro_id', 'Product', $errors, $productdata, $driver, ['required' => true]) }}
        {{ Form::text('name', 'Driver Name', $errors, $driver, ['required' => true]) }}
        {{ Form::textarea('body', 'Driver Name', $errors, $driver) }}
        {{ Form::text('driver_url', 'Driver URL', $errors, $driver, ['required' => true]) }}
        <input type="hidden" name="is_active" id="is_active" value="1"/>

    </div>
</div>

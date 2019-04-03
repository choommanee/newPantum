<div class="row">
    <div class="col-md-8">

        {{ Form::select('pro_id', 'Product', $errors, $productdata, $serial, ['required' => true]) }}

        {{ Form::file('fileserial', 'Excel Serial Name', $errors, $serial, ['required' => true]) }}

        {{ Form::text('varunty_time', 'warranty (year)', $errors, $serial, ['required' => true]) }}
        <input type="hidden" name="body" id="body" value="1"/>
        <input type="hidden" name="is_active" id="is_active" value="1"/>
        <input type="hidden" name="cus_use" id="cus_use" value="1"/>

    </div>
</div>

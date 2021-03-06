{{ Form::text('name', trans('product::attributes.name'), $errors, $product, ['labelCol' => 2, 'required' => true]) }}
{{ Form::textarea('description', trans('product::attributes.description'), $errors, $product, ['labelCol' => 2, 'required' => true]) }}

<div class="row">
    <div class="col-md-8">
        {{ Form::select('categories', trans('product::attributes.categories'), $errors, $categories, $product, ['class' => 'selectize prevent-creation', 'multiple' => true]) }}
        {{ Form::select('tax_class_id', trans('product::attributes.tax_class_id'), $errors, $taxClasses, $product) }}
        {{ Form::checkbox('is_active', trans('product::attributes.is_active'), trans('product::products.form.enable_the_product'), $errors, $product) }}
        <input type="hidden" name="selling_price" id="selling_price" value="0">
        <input type="hidden" name="price" id="price" value="0">
    </div>
</div>

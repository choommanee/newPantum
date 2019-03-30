<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::select('pro_id', 'Product', $errors, $productdata, $faq, ['required' => true])); ?>

        <?php echo e(Form::text('name', 'Faq Name', $errors, $faq, ['required' => true])); ?>

        <?php echo e(Form::textarea('body', 'Detail faq', $errors, $faq)); ?>

        <?php echo e(Form::text('driver_url', 'Other URL', $errors, $faq, ['required' => true])); ?>

        <input type="hidden" name="is_active" id="is_active" value="1"/>

    </div>
</div>

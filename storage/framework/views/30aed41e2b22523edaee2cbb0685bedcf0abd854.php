<?php $__env->startSection('title', trans('storefront::account.links.warranty_add')); ?>

<?php $__env->startSection('account_breadcrumb'); ?>
    <li class="active"><?php echo e(trans('storefront::account.links.warranty_add')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_right'); ?>
    <form method="POST" action="<?php echo e(route('account.warranty.addwarranty')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('put')); ?>


        <div class="account-details">
            <div class="account clearfix">
                <h4><?php echo e(trans('storefront::account.warranty.warranty_add')); ?> </h4>
                <?php if($errors->any()): ?>
                    <h4 style="color: red;"><?php echo e($errors->first()); ?></h4>
                <?php endif; ?>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group <?php echo e($errors->has('w_serial_no') ? 'has-error': ''); ?>">
                            <label for="first-name">
                                <?php echo e(trans('storefront::account.warranty.w_serial_no')); ?><span>*</span>
                            </label>

                            <input type="text" name="w_serial_no" id="first-name" class="form-control" value=""  placeholder=" <?php echo e(trans('storefront::account.warranty.w_serial_no')); ?>">

                            <?php echo $errors->first('w_serial_no', '<span class="error-message">:message</span>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('w_producname') ? 'has-error': ''); ?>">
                            <label for="last-name">
                                <?php echo e(trans('storefront::account.warranty.w_producname')); ?><span>*</span>
                            </label>

                            <select name="w_producname" id="w_producname">
                                <option><?php echo e(trans('storefront::account.warranty.select_product')); ?></option>
                                <?php $__currentLoopData = $product_option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                            <?php echo $errors->first('w_producname', '<span class="error-message">:message</span>'); ?>

                        </div>
                        <div class="form-group  <?php echo e($errors->has('reseller_name') ? 'has-error': ''); ?>">
                            <label for="">
                                <?php echo e(trans('storefront::account.warranty.reseller_name')); ?><span>*</span>
                            </label>

                            <input type="text" name="reseller_name" id="reseller_name" class="form-control" value="">

                            <?php echo $errors->first('reseller_name', '<span class="error-message">:message</span>'); ?>

                        </div>
                        <div class="form-group">
                            <label for="">
                                <?php echo e(trans('storefront::account.warranty.reseller_address')); ?>

                            </label>

                            <input type="text" name="reseller_address" id="reseller_address" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="">
                                <?php echo e(trans('storefront::account.warranty.reseller_phone_number')); ?>

                            </label>

                            <input type="text" name="reseller_phone_number" id="reseller_phone_number" class="form-control" value="" placeholder="<?php echo e(trans('storefront::account.warranty.reseller_phone_number')); ?>">


                        </div>
                        <div class="form-group <?php echo e($errors->has('purchase_date') ? 'has-error': ''); ?>">
                            <label for="">
                                <?php echo e(trans('storefront::account.warranty.purchase_date')); ?><span>*</span>
                            </label>

                            <input type="date" name="purchase_date" value="" class="form-control datetime-picker flatpickr-input" id="purchase_date" >
                            <?php echo $errors->first('reseller_phone_number', '<span class="error-message">:message</span>'); ?>

                        </div>

                        <div class="form-group <?php echo e($errors->has('img_product') ? 'has-error': ''); ?>" >
                            <input type="file" name="img_product" class="form-control">

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary" data-loading>
            <?php echo e(trans('storefront::account.warranty.save_changes')); ?>

        </button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.account.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
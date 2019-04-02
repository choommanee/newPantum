<div id="additional-information" class="specification tab-pane fade in" style="background-color: #f6f6f6;">
    <div class="table-responsive" style="margin-bottom: 20px;">

        <center>
            <h1>Specifications</h1>
            <table class="table" style="width: 90%;">
            <tbody>
            <?php $__currentLoopData = $product->attributeSets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeSet => $attributes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td colspan="2" style="border-bottom: 2px solid #ff000d;"><h4><?php echo e($attributeSet); ?></h4></td>
                </tr>
                <tr>
                    <td width="20px"> </td>
                    <td style="">
                        <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="information-data clearfix" style="border-bottom: 1px solid #d6d3d35c;width: 90%;margin-left: 12px;" >
                                <label class="pull-left"><?php echo e($attribute->name); ?></label>
                                <span>
                                        <?php echo e($attribute->values->implode('value', ', ')); ?>

                                    </span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php if($products->isNotEmpty()): ?>
    <!--โปรดักคอเซล-->
    <section class="product-slider-wrapper clearfix">
        <div class="section-header boxtittle">
            <h3><?php echo e($title); ?></h3>
        </div>


            <div class="separator clearfix">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 bg_product">
                        <?php echo $__env->make('public.products.partials.product_card', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

    </section>
<?php endif; ?>

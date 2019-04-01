<!--โปรดักการ์ด-->
<div class="product-image1 clearfix col-md-3">
<a href="<?php echo e(route('products.show', $product->slug)); ?>" class="product-card">
    <div class="product-card-inner">
        <div class="product-image clearfix col-md-12">
            <ul class="product-ribbon list-inline">
                <?php if($product->isOutOfStock()): ?>
                    <li><span class="ribbon bg-red"><?php echo e(trans('storefront::product_card.out_of_stock')); ?></span></li>
                <?php endif; ?>

                <?php if($product->isNew()): ?>
                    <li><span class="ribbon bg-green"><?php echo e(trans('storefront::product_card.new')); ?></span></li>
                <?php endif; ?>
            </ul>

            <?php if(! $product->base_image->exists): ?>
                <div class="image-placeholder">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                </div>
            <?php else: ?>

                <div class="image-holder"  style="height: 150px">
                    <img src="<?php echo e($product->base_image->path); ?>">
                </div>
            <?php endif; ?>

            <div class="quick-view-wrapper" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('storefront::product_card.quick_view')); ?>">
                <button type="button" class="btn btn-quick-view" data-slug="<?php echo e($product->slug); ?>">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="clearfix col-md-12" style="text-align: center">
            <div class="box_compare">
                <form method="POST" action="<?php echo e(route('compare.store')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                    <input type="hidden" name="product_img" value="<?php echo e($product->base_image->path); ?>">

                    <button onclick="addCompare(this,'<?php echo e($product->id); ?>','<?php echo e($product->slug); ?>','');return ;" type="button" id="compare" data-value="<?php echo e($product->id); ?>" class="btn btn-compare" data-toggle="tooltip" data-placement="left" title="<?php echo e(trans('storefront::product_card.add_to_compare')); ?>">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo e(trans('storefront::compare.compare')); ?>

                    </button>
                </form>
            </div>
            
            <span class="product-name" style="color: #0e0e0e;font-size: 28px;text-align: center;text-shadow: 1px 1px #ffedf0;"><?php echo e($product->name); ?></span><br/>
            <span class="product-name" style="color: #060606;font-size: 16px;text-align: center;/* text-shadow: 1px 1px #2b2829; */"><?php echo e($product->short_description); ?></span>
            <a style="margin-top: 20px;margin-left: 18px;margin-bottom: 20px;" href="<?php echo e(route('products.show', $product->slug)); ?>" class="btn btn-danger animate ">
                more
            </a>
        </div>

    </div>
</a>
</div>

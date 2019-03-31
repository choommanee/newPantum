<!--โปรดักการ์ด-->
<a href="<?php echo e(route('products.show', $product->slug)); ?>" class="product-card">
    <div class="product-card-inner">
        <div class="product-image clearfix  col-md-7">
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
                <div class="image-holder1">
                    <img src="<?php echo e($product->base_image->path); ?>">
                </div>
            <?php endif; ?>

            <div class="quick-view-wrapper" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('storefront::product_card.quick_view')); ?>">
                <button type="button" class="btn btn-quick-view" data-slug="<?php echo e($product->slug); ?>">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="clearfix col-md-5 carddetail">
            
            <span class="namedetail" ><?php echo e($product->name); ?></span><br/>
            <span class="namedetail" ><?php echo e($product->short_description); ?></span>
            <a style="margin-top: 6px;" href="<?php echo e(route('products.show', $product->slug)); ?>" class="btn btn-danger animate btnMore">
                more
            </a>
        </div>

    </div>
</a>

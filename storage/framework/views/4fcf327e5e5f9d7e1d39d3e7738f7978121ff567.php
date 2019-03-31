<?php $__env->startSection('title', trans('storefront::account.links.warranty_list')); ?>

<?php $__env->startSection('content_right'); ?>
    <div class="my-dashboard">
        <div class="recent-orders index-table">
            <h4 class="section-header">
                <?php echo e(trans('storefront::account.warranty.warranty_list')); ?>


                <?php if($recentOrders->isNotEmpty()): ?>
                    <a href="<?php echo e(route('account.orders.index')); ?>" class="pull-right">
                        <?php echo e(trans('storefront::account.dashboard.view_all')); ?>

                    </a>
                <?php endif; ?>
            </h4>

            <?php if($recentOrders->isEmpty()): ?>
                <span><?php echo e(trans('storefront::account.warranty.warranty_list')); ?></span>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><?php echo e(trans('storefront::account.warranty.w_no')); ?></th>
                            <th><?php echo e(trans('storefront::account.warranty.w_producname')); ?></th>
                            <th><?php echo e(trans('storefront::account.warranty.w_serial_no')); ?></th>
                            <th><?php echo e(trans('storefront::account.warranty.year_warranty')); ?></th>
                            <th><?php echo e(trans('storefront::account.warranty.purchase_date')); ?></th>
                            <th><?php echo e(trans('storefront::account.warranty.datevarunty_start')); ?></th>
                            <th><?php echo e(trans('storefront::account.warranty.status')); ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=1;
                        ?>
                        <?php $__currentLoopData = $recentOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>#<?php echo e($i); ?></td>
                                <td style="text-align: center;">
                                    <?php echo e($order->product->name); ?><br/>
                                     <img src="<?php echo e($order->product->base_image->path); ?>" style="width: 100px;">
                                    </td>
                                <td><?php echo e($order->name); ?></td>
                                <td style="color: #1a237e"><?php echo e($order->varunty_time); ?> <?php echo e(trans('storefront::account.warranty.year')); ?> EXP: <?php echo e($order->dateExp()); ?></td>
                                <td><?php echo e($order->PurchaseDate->format('d/m/Y')); ?></td>
                                <td><?php echo e($order->datevarunty_start->format('d/m/Y')); ?></td>
                                <td>
                                    <?php if($order->cus_use==2): ?>
                                       <span style="color: green;font-weight: 600;">
                                           <?php echo e(trans('storefront::account.warranty.activate')); ?></span>
                                        <?php else: ?>
                                        <span style="color: red;font-weight: 400;">
                                            <?php echo e(trans('storefront::account.warranty.nonactivate')); ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php
                            $i++;
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

        <div class="clearfix"></div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.account.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
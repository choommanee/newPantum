<?php $__env->startSection('breadcrumb'); ?>
    <?php if(request()->routeIs('account.dashboard.index')): ?>
        <li class="active"><?php echo e(trans('storefront::account.links.my_account')); ?></li>
    <?php else: ?>
        <li><a href="<?php echo e(route('account.dashboard.index')); ?>"><?php echo e(trans('storefront::account.links.my_account')); ?></a></li>
    <?php endif; ?>

    <?php echo $__env->yieldContent('account_breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid" style="
    margin-top: 0px;
    background: #FFFFFF;
    padding: 25px;
">
        <div class="my-account clearfix">
            <div class="col-md-3">
                <div class="sidebar-menu">
                    <ul class="list-inline">
                        <li style="text-align: center;">
                            <a href="<?php echo e(route('account.dashboard.index')); ?>" style="height: 100px;" >
                                <img src="https://save2home.com/storage/media/Person.png" style="width: 100px;"/>
                                <br/>
                                <?php echo e(trans('storefront::account.dashboard.hello')); ?> : <?php echo e($my->first_name); ?> <?php echo e($my->last_name); ?>

                            </a>
                        </li>
                        <li class="<?php echo e(request()->routeIs('account.dashboard.index') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('account.dashboard.index')); ?>">
                                <i class="fas fa-tachometer-alt"></i>
                                <?php echo e(trans('storefront::account.links.dashboard')); ?>

                            </a>
                        </li>

                        <li class="<?php echo e(request()->routeIs('account.warranty.addwarranty') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('account.warranty.addwarranty')); ?>">
                                <i class="fas fa-plus-square"></i>
                                <?php echo e(trans('storefront::account.warranty.warranty_add')); ?>

                            </a>
                        </li>


                        

                        <li class="<?php echo e(request()->routeIs('account.profile.edit') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('account.profile.edit')); ?>">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                <?php echo e(trans('storefront::account.links.my_profile')); ?>

                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('logout')); ?>">
                                <i class="fas fa-sign-out-alt"></i>
                                <?php echo e(trans('storefront::account.links.logout')); ?>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="clearfix"></div>

                <div class="content-right clearfix">
                    <?php echo $__env->yieldContent('content_right'); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
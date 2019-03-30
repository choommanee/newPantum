<nav class="navbar navbar-static-top clearfix">
    <ul class="nav navbar-nav clearfix">
        <li class="visit-store hidden-sm hidden-xs">
            <a href="<?php echo e(route('home')); ?>" target="_blank">
                <i class="fa fa-desktop"></i>
                <?php echo e(trans('admin::admin.visit_store')); ?>

            </a>
        </li>

        <li class="dropdown top-nav-menu pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user-circle-o"></i><span><?php echo e($currentUser->first_name); ?></span>
            </a>

            <ul class="dropdown-menu">
                <li><a href="<?php echo e(route('admin.profile.edit')); ?>"><?php echo e(trans('user::users.profile')); ?></a></li>
                <li><a href="<?php echo e(route('admin.logout')); ?>"><?php echo e(trans('user::auth.logout')); ?></a></li>
            </ul>
        </li>

        <?php if(count(supported_locales()) > 1): ?>
            <li class="language dropdown top-nav-menu pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span><?php echo e(strtoupper(locale())); ?></span>
                </a>

                <ul class="dropdown-menu">
                    <?php $__currentLoopData = supported_locales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php echo e($locale === locale() ? 'active' : ''); ?>">
                            <a href="<?php echo e(localized_url($locale)); ?>"><?php echo e($language['name']); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</nav>

<ul class="dropdown-menu <?php echo e($class ?? ''); ?>" style="background-color: #000000; top: 50px;">
    <?php $__currentLoopData = $subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="<?php echo e($subMenu->hasItems() ? 'dropdown-submenu' : ''); ?>">
            <a href="<?php echo e($subMenu->url()); ?>" class="<?php echo e($subMenu->hasItems() ? 'dropdown-toggle' : ''); ?>" target="<?php echo e($subMenu->target()); ?>">
                <?php echo e($subMenu->name()); ?>

            </a>

            <?php if($subMenu->hasItems()): ?>
                <?php echo $__env->make('public.partials.mega_menu.dropdown', ['subMenus' => $subMenu->items()], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<li class="<?php echo e($menu->hasSubMenus() ? 'dropdown' : ''); ?> <?php echo e($menu->isFluid() ? 'fluid-menu' : ''); ?>" id="menu_<?php echo e($menu->menu_id()); ?>">


    <?php if($menu->isFluid()): ?>
        <a href="#" class="<?php echo e($menu->hasSubMenus() ? 'dropdown-toggle' : ''); ?>" target="<?php echo e($menu->target()); ?>">
            <?php echo e($menu->name()); ?>

        </a>
        <?php echo $__env->make('public.partials.mega_menu.fluid', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <a href="<?php echo e($menu->url()); ?>" class="<?php echo e($menu->hasSubMenus() ? 'dropdown-toggle' : ''); ?>" target="<?php echo e($menu->target()); ?>">
            <?php echo e($menu->name()); ?>

        </a>
        <?php echo $__env->make('public.partials.mega_menu.dropdown', ['subMenus' => $menu->subMenus(), 'class' => 'multi-level'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</li>

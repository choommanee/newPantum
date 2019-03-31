<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.create', ['resource' => trans('serials::serials.serial')])); ?>

    <li><a href="<?php echo e(route('admin.serials.index')); ?>"><?php echo e(trans('serials::serials.serials')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.create', ['resource' => trans('serials::serials.serial')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.serials.store')); ?>" class="form-horizontal" id="serial-create-form" novalidate>
        <?php echo e(csrf_field()); ?>


        <?php echo $tabs->render(compact('serial')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('serials::admin.serials.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
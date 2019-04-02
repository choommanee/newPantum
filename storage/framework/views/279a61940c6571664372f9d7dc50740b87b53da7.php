<?php $__env->startSection('title', $page->name); ?>

<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($page->meta->meta_title); ?>">
    <meta name="keywords" content="<?php echo e(implode(',', $page->meta->meta_keywords)); ?>">
    <meta name="description" content="<?php echo e($page->meta->meta_description); ?>">
    <meta property="og:title" content="<?php echo e($page->meta->meta_title); ?>">
    <meta property="og:description" content="<?php echo e($page->meta->meta_description); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

        <section class="compare" style="background: #ffffff;margin-top: 30px;min-height: 600px;margin-bottom: 30px;">
            <div class="table-responsive">
                <div class="blogNewsTitle" style="background-color: #ffffff"><h1><?php echo e($page->name); ?></h1></div>
                <div class="blogNewsDetail"  style="background-color: #ffffff"><?php echo $page->body; ?></div>

                
            </div>
        </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
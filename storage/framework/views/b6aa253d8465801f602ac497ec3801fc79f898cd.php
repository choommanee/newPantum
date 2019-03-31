<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.edit', ['resource' => trans('product::products.product')])); ?>
    <?php $__env->slot('subtitle', $product->name); ?>

    <li><a href="<?php echo e(route('admin.products.index')); ?>"><?php echo e(trans('product::products.products')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.edit', ['resource' => trans('product::products.product')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.products.update', $product)); ?>" class="form-horizontal" id="product-edit-form" novalidate>
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('put')); ?>


        <?php echo $tabs->render(compact('product')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('product::admin.products.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">

        $('.cross_sells').hide();
        $('.up_sells').hide();
        $('.related_products').hide();

        bkLib.onDomLoaded(function (){
            new nicEditor({fullPanel : true}).panelInstance('description');
        });

    </script>

    <script>
        $('#product-edit-form').submit(function () {
            event.preventDefault();
            $('#description').val($('.nicEdit-main').html());
            //alert($('#description').html());

            var delayInMilliseconds = 1000; //1 second

            setTimeout(function() {
                //your code to be executed after 1 second
                $('#product-edit-form').submit();
            }, delayInMilliseconds);
        });
        $(document).ready(function() { /* code here */
            $('.nicEdit-main').mouseleave(function(){
                //  alert($('.nicEdit-main').html());
                $('#description').val($('.nicEdit-main').html());
            });
        });

    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
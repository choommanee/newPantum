<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.create', ['resource' => trans('faq::faqs.faq')])); ?>

    <li><a href="<?php echo e(route('admin.faqs.index')); ?>"><?php echo e(trans('faq::faqs.faqs')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.create', ['resource' => trans('faq::faqs.faq')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.faqs.store')); ?>" class="form-horizontal" id="faq-create-form" novalidate>
        <?php echo e(csrf_field()); ?>


        <?php echo $tabs->render(compact('faq')); ?>

    </form>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        bkLib.onDomLoaded(function (){
            new nicEditor({fullPanel : true}).panelInstance('body');
        });

    </script>

    <script>
        $('#faq-create-form').submit(function () {
            // event.preventDefault();
            $('#body').val($('.nicEdit-main').html());
            //alert($('#description').html());

            var delayInMilliseconds = 1000; //1 second

            setTimeout(function() {
                //your code to be executed after 1 second
                $('#faq-create-form').submit();
            }, delayInMilliseconds);
        });
        $(document).ready(function() { /* code here */
            $('.nicEdit-main').mouseleave(function(){
                //  alert($('.nicEdit-main').html());
                $('#body').val($('.nicEdit-main').html());
            });
        });

    </script>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('faq::admin.faqs.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
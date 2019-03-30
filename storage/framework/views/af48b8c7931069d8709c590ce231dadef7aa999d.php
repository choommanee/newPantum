<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('faq::faqs.faqs')); ?>

    <li class="active"><?php echo e(trans('faq::faqs.faqs')); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('admin::components.page.index_table'); ?>
    <?php $__env->slot('buttons', ['create']); ?>
    <?php $__env->slot('resource', 'faqs'); ?>
    <?php $__env->slot('name', trans('faq::faqs.faq')); ?>

    <?php $__env->startComponent('admin::components.table'); ?>
        <?php $__env->slot('thead'); ?>
            <tr>
                <?php echo $__env->make('admin::partials.table.select_all', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <th>Product Name</th>
                <th>Faq/Manual name</th>
                <th>Faq/Manual Detail</th>
                <th>Other Url</th>
                <th>Status</th>
            </tr>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        new DataTable('#faqs-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                //
                { data: 'product_name', name: 'product_name', orderable: false, defaultContent: '' },
                { data: 'name', name: 'name', searchable: false },
                { data: 'body', name: 'body' },
                { data: 'driver_url', name: 'driver_url' },
                { data: 'status', name: 'is_active' },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
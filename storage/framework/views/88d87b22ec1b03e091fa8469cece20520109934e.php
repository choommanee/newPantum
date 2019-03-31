<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('serials::serials.serials')); ?>

    <li class="active"><?php echo e(trans('serials::serials.serials')); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('admin::components.page.index_table'); ?>
    <?php $__env->slot('buttons', ['create']); ?>
    <?php $__env->slot('resource', 'serials'); ?>
    <?php $__env->slot('name', trans('serials::serials.serial')); ?>

    <?php $__env->startComponent('admin::components.table'); ?>
        <?php $__env->slot('thead'); ?>
            <tr>
                <?php echo $__env->make('admin::partials.table.select_all', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <th><?php echo e(trans('serials::serials.product_name')); ?></th>
                <th><?php echo e(trans('serials::serials.serials_number')); ?></th>
                <th><?php echo e(trans('serials::serials.date_start')); ?></th>
                <th><?php echo e(trans('serials::serials.year_warranty')); ?></th>
                <th><?php echo e(trans('serials::serials.status')); ?></th>
                <th>Activate</th>
            </tr>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        new DataTable('#serials-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                //
                { data: 'product_name', name: 'product_name', orderable: false, defaultContent: '' },
                { data: 'name', name: 'name', searchable: false },
                { data: 'datevarunty_start', name: 'datevarunty_start' },
                { data: 'varunty_time', name: 'varunty_time' },
                { data: 'status', name: 'is_active' },
                { data: 'cus_use', name: 'cus_use',
                    "render": function ( data, type, row, meta ) {
                            if(row['cus_use']=='0'){
                                return '<span style="color: red;">Not use</span>';
                            }else if(row['cus_use']=='1'){
                                return '<span style="color: orange;">Variable</span>';
                            }else if(row['cus_use']=='2'){
                                return '<span style="color: green;"><b>Activate</b></span>';
                            }else if(row['cus_use']=='3'){
                                return '<span style="color: gray;">Not Activate</span>';
                            }

                    } },
            ],
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
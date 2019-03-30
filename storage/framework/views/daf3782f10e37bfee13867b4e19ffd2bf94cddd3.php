<?php if(session()->has('success')): ?>
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

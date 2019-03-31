<div class="home-slider"
    data-autoplay="<?php echo e($slider->autoplay); ?>"
    data-autoplay-speed="<?php echo e($slider->autoplay_speed); ?>"
    data-arrows="<?php echo e($slider->arrows); ?>"
>
    <?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="slide">
            <div class="slider-image" ></div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo e($slide->file->path); ?>" alt="First slide" style="width: 100%">
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


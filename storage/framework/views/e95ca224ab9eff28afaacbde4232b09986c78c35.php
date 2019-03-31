<div class="section-header boxtittle" >

    <h3><?php echo e($slider2->name); ?></h3>
</div>

<div class="home-slider"
    data-autoplay="<?php echo e($slider2->autoplay); ?>"
    data-autoplay-speed="<?php echo e($slider2->autoplay_speed); ?>"
    data-arrows="<?php echo e($slider2->arrows); ?>"
>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
                $i=1;
            ?>
            <?php $__currentLoopData = $slider2->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item <?if($i==1){?> active<?}?>">
                <img class="d-block w-100" src="<?php echo e($slide->file->path); ?>" alt="First slide" style="width: 100%;">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
</div>

<div class="section-header boxtittle" >

    <h3><?php echo e($slider2->name); ?></h3>
</div>

<div class="home-slider"
    data-autoplay="<?php echo e($slider2->autoplay); ?>"
    data-autoplay-speed="<?php echo e($slider2->autoplay_speed); ?>"
    data-arrows="<?php echo e($slider2->arrows); ?>"
>

<?php $__currentLoopData = $slider2->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="slide">
            <div class="slider-image" style="background-image: url(<?php echo e($slide->file->path); ?>);background-size: 100% 100%"></div>

            <div class="display-table">
                <div class="display-table-cell">
                    <div class="col-md-11 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="slider-content clearfix">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <?php if (! (is_null($slide->caption_1))): ?>
                                        <div class="caption caption-md"
                                            data-delay="<?php echo e($slide->options['caption_1']['delay']); ?>ms"
                                            data-effect="<?php echo e($slide->options['caption_1']['effect']); ?>"
                                        >
                                            <?php echo e($slide->caption_1); ?>

                                        </div>
                                    <?php endif; ?>

                                    <?php if (! (is_null($slide->caption_2))): ?>
                                        <div class="caption caption-lg"
                                            data-delay="<?php echo e($slide->options['caption_2']['delay']); ?>ms"
                                            data-effect="<?php echo e($slide->options['caption_2']['effect']); ?>"
                                        >
                                            <?php echo e($slide->caption_2); ?>

                                        </div>
                                    <?php endif; ?>

                                    <?php if (! (is_null($slide->caption_3))): ?>
                                        <div class="caption caption-sm"
                                            data-delay="<?php echo e($slide->options['caption_3']['delay']); ?>ms"
                                            data-effect="<?php echo e($slide->options['caption_3']['effect']); ?>"
                                        >
                                            <?php echo e($slide->caption_3); ?>

                                        </div>
                                    <?php endif; ?>

                                    <?php if (! (is_null($slide->call_to_action_text))): ?>
                                        <a href="<?php echo e($slide->call_to_action_url); ?>"
                                            class="btn-slider btn btn-primary animate"
                                            target="<?php echo e($slide->options['call_to_action']['target'] ?? '_self'); ?>"
                                            data-delay="<?php echo e($slide->options['call_to_action']['delay']); ?>ms"
                                            data-effect="<?php echo e($slide->options['call_to_action']['effect']); ?>"
                                        >
                                            <?php echo e($slide->call_to_action_text); ?>

                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

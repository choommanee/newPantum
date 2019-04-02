<ul class="dropdown-menu" <?php if($menu->menu_id() ==7): ?> style="width: 822px;min-height: 253px;left: 209px;background-color: #000;" id="menu_specail"
                        <?php elseif($menu->menu_id() ==3): ?>
                        style="left: 100px; background-color: #000000; top: 50px;"   id="menu_normal"
    <?php else: ?>
                        style="background-color: #000000; top: 50px;"
                        id="menu_normal" <?php endif; ?>>
    <li>
        <div class="fluid-menu-content">
            <div class="row">
         <?php if($menu->menu_id() !=7): ?>
            <?php $__currentLoopData = $menu->subMenus()->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <div class="col-sm-12" id="menuMain<?php echo e($menu->menu_id()); ?>">
                    <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-12 menu_<?php echo e($subMenu->slug()); ?>">
                            <a href="<?php echo e($subMenu->url()); ?>" class="title" target="<?php echo e($subMenu->target()); ?>">
                                <?php echo e($subMenu->name()); ?>

                            </a>

                            <ul class="list-inline">
                                <?php $__currentLoopData = $subMenu->items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                   // print_r($item);
                                    ?>
                                    <li style="margin-left: 10px;" onmouseover="showMenudetail('<?php echo e($item->slug()); ?>',<?php echo e($menu->menu_id()); ?>);">
                                        <a href="<?php echo e($item->url()); ?>" title="<?php echo e($subMenu->target()); ?>">
                                            <?php echo e($item->name()); ?>

                                        </a>
                                    </li>
                                        <?php $__currentLoopData = $item->items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <li style="margin-left: 20px;width: 100%;height: 30px;" onmouseover="showMenudetail('<?php echo e($Subitem->slug()); ?>',<?php echo e($menu->menu_id()); ?>);">
                                                <a href="<?php echo e($Subitem->url()); ?>" title="<?php echo e($Subitem->target()); ?>">
 <?php echo e($Subitem->name()); ?>

                                                </a>
                                            </li>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                            <?php $__env->startPush('scripts'); ?>
                            <script>
                                //  alert('test');
                                var mainmenu = '<?php echo e($subMenu->slug()); ?>';
                              //  if(mainmenu=='printers'){
                              //      alert('test');
                              //      $('.menu_1').width(400);
                              //  }
                            </script>
                            <?php $__env->stopPush(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($menu->menu_id() ==3): ?>
                    <div class="col-sm-6 menushowdetail">

                    </div>
                    <?php endif; ?>
                <?php else: ?>

                    <div class="col-sm-12" id="specailmenu" style="width: 838px;">
                        <div class="col-sm-6">
                            <div>

                                <h3 style="color: #FFFFFF;">P5500DN</h3>
                                    <a href="https://save2home.com/public/en/products/p5500dn-ILQaXY0k" class="product-card" style="border: #ffffff 1px solid;">
                                     <img src="https://save2home.com/storage/media/boojYDwqpsfMDQK9Uc5c4xDUX7KkiHcGDj6JySA8.png" style="width: 100%;">
                                    </a>
                                 </div>
                        </div>
                        <div class="col-sm-6">
                            <div >
                                <h3 style="color: #FFFFFF;">P3500DN</h3>
                                <a href="https://save2home.com/public/en/products/p3500dn-EHg3vQEj" class="product-card" style="border: #ffffff 1px solid;">
                                    <img src="https://save2home.com/storage/media/3DDV251UH8WzVsfVF86ABIbt6f2GB9eH0b6Zc8Qi.png" style="width: 100%;">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                </div>

        </div>
    </li>
</ul>



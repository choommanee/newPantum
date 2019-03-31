<?php $__env->startSection('title', 'News'); ?>

<?php $__env->startPush('meta'); ?>
    <meta name="title" content="news from pantum">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <section class="compare" style="background: #fffcfc;margin-top: 30px;min-height: 600px;margin-bottom: 30px;">
            <div>
                <div class="row">
                <div class="blogNewsTitle"><h1><?php echo e(trans('news::news.news')); ?></h1></div>
                </div>
                <?PHP
                    $i=1;
                ?>
                <div class="row">
                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($i<4): ?>
                        <div class="col-md-4">
                            <div class="card card-new" style="" >
                                <img class="card-img-top" src="<?php echo e($new->news_image->path); ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($new->name); ?></h5>
                                    <a href="<?php echo e(route('news.show', $new->slug)); ?>" class="btn btn-primary card-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>

                        <?php if($i==4): ?>
            </div>
                            <div class="hot-news">
                        <ul class="news-post news-feature-mb">
                        <?php endif; ?>
                            <li>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-2">
                                        <a href="<?php echo e(route('news.show', $new->slug)); ?>"><img src="<?php echo e($new->news_image->path); ?>" alt="News image"></a>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-10 content">
                                        <h4><a href="#"><?php echo e($new->name); ?></a></h4>

                                        <p><?php echo str_limit($new->getPageDescAttribute(), $limit = 150, $end = '...'); ?><a href="<?php echo e(route('news.show', $new->slug)); ?>" class=""><b>..Read More..</b></a>
                                            </p>

                                    </div>
                                </div>
                            </li>

                    <?php endif; ?>

                    <?PHP
                    $i++;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                            </div>

    </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
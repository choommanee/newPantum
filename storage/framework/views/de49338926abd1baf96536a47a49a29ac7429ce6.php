<?php $__env->startSection('title', trans('faq::faqs.faqs')); ?>

<?php $__env->startPush('meta'); ?>
    <meta name="title" content="news from pantum">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .uk-container {
        box-sizing: content-box;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 15px;
        padding-right: 15px;
    }
    #myInput {
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 30%;
        font-size: 16px;
        padding: 10px 7px 12px 21px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
        float: right;
        margin-right: 30px;
    }

    .uk-margin-small-top {
        margin-top: 10px !important;
    }

    .uk-animation-slide-bottom-medium {
        animation-name: uk-fade-bottom-medium;
    }

    [class*='uk-animation-'] {
        animation-duration: 0.5s;
        animation-timing-function: ease-out;
        animation-fill-mode: both;
    }

    .form-faq{
        width: 45%;float: right;
    }

    .FaqtxtSearch{
        width: 100%;
        float: right;
        padding-left: 15px;
        margin-top: 0px;

    }

    @media (min-width: 960px){
        .uk-heading-hero {
            font-size: 5.2rem;
            line-height: 1;
        }

        .uk-container {
            padding-left: 40px;
            padding-right: 40px;
        }
    }
    @media (min-width: 640px){
        .uk-container {
            padding-left: 30px;
            padding-right: 30px;
        }

        .form-faq{
            width: 45%;float: right;
        }
        .FaqtxtSearch{
            width: 100%;
            float: right;
            padding-left: 15px;
            margin-top: 1px;

        }
    }

    @media (max-width: 560px){

        .form-faq{
            width: 100%;float: right;
        }
        .FaqtxtSearch{
            width: 100%;
            float: right;
            padding-left: 15px;
            margin-top: 30px;

        }
    }
    .uk-margin-medium-top {
        margin-top: 40px !important;
    }
    .uk-list-large {
        font-size: 20px;
    }
    .uk-list {
        padding: 0;
        list-style: none;
    }

    .uk-list a{
        color:#1a1919;
    }

    .uk-list-large > li:nth-child(n+2), .uk-list-large > li > ul {
        margin-top: 20px;
    }

    .uk-margin-xlarge-top {
        margin-top: 70px !important;
    }

    .uk-margin-medium-bottom {
        margin-bottom: 40px !important;
    }
    .uk-article-title {
        font-size: 2.2rem;
        line-height: 1.2;
        font-weight: 400;
        letter-spacing: 0;
        margin-right: 30px;
    }

    .uk-article-title .tm-totop {
        margin-right: -30px;
    }

    .uk-margin-small-top {
        margin-top: 10px !important;
    }
    [class*='uk-float-'] {
        max-width: 100%;
    }
    .uk-float-right {
        float: right;
    }
    .uk-totop {
        padding: 5px;
        color: #999;
        transition: color 0.1s ease-in-out;
    }
    .uk-icon {
        margin: 0;
        border: none;
        border-radius: 0;
        overflow: visible;
        font: inherit;
        color: inherit;
        text-transform: none;
        padding: 0;
        background-color: transparent;
        display: inline-block;
        fill: currentcolor;
        line-height: 0;
    }

    @media (min-width: 1200px) {
        .uk-margin-xlarge-top {
            margin-top: 140px !important;
        }
    }
    @media (max-width: 767px) {
        article img{width: 95% !important;}
    }
</style>

<script type="text/javascript">
    // Using jQuery.

    $(function() {
        $('form').each(function() {
            $(this).find('input').keypress(function(e) {
                // Enter pressed?
                if(e.which == 10 || e.which == 13) {
                    this.form.submit();
                }
            });

            $(this).find('input[type=submit]').hide();
        });
    });
</script>
        <section class="compare" style="background: #ffffff;margin-top: 30px;min-height: 600px;margin-bottom: 30px;">
            <div>
                <div class="blogNewsTitle">
                    <h1 style="float: left;background: #ffffff;"><?php echo e(trans('faq::faqs.faqs')); ?></h1>
                    <form method="GET" action="<?php echo e(route('faqs.index')); ?>" id="product-filter-form" class="form-faq">
                        <input type="text" class="FaqtxtSearch"   name="Search" id="Search" placeholder="Search for names.." title="Type in a name">
                    </form>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $productGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($product->hasAnyFaq()): ?>
                            <div class="col-md-2">
                                <div class="product-card-list clearfix">
                                    <a class="product-image pull-left" href="<?php echo e(route('faqs.getbycat', $product->id)); ?>" style="width: 100%;cursor: pointer;">

                                        <?php if(! $product->base_image->exists): ?>
                                            <div class="image-placeholder">
                                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                                            </div>
                                        <?php else: ?>
                                            <div class="image-holder">
                                                <img src="<?php echo e($product->base_image->path); ?>">
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                    <div class="product-content-inner" style="width: 100%;margin: 0 auto;text-align: center;">
                                        <a href="<?php echo e(route('faqs.getbycat', $product->id)); ?>" class="product-name">
                                            <h5><?php echo e($product->name); ?></h5>
                                        </a>
                                        <p><?php echo e($product->short_description); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="uk-container">
                <h1 class="uk-margin-small-top uk-heading-hero uk-scrollspy-inview uk-animation-slide-bottom-medium"
                     data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 40" style="margin: 0 auto;text-align: center;">
                    <?php echo e(trans('faq::faqs.How_can_we_help')); ?>

                </h1>
                <div class="col-md-12" style="margin: 0 auto; color: #0a0a0a;margin-bottom: 20px;" >
                <ul class="uk-list uk-list-large uk-margin-medium-top">
                    <?PHP
                        $i=1;
                        $Product="";
                    ?>
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php if($Product!=$new->product->name): ?>
                            <h1 style="margin-top: 35px;"><?php echo e($new->product->name); ?></h1>

                            <?php endif; ?>

                        <li>
                            <a href="#article-<?=$i?>" >
                                <span data-uk-icon="icon: arrow-right" class="uk-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ratio="1">
                                        <polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline> <line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line></svg></span>
                                <?php echo e($new->name); ?></a></li>
                            <?php
                            $i++;
                             $Product=$new->product->name;
                            ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                    <?PHP
                    $i=1;
                    $Product="";
                    ?>
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div id="article-<?=$i?>"></div>
                    <article class="uk-article uk-margin-xlarge-top">
                        <h2  class="uk-article-title uk-margin-medium-bottom"><?php echo e($new->product->name); ?> : <?php echo e($new->name); ?> ?<a href="#" data-uk-totop="" data-uk-scroll="duration: 400" class="tm-totop uk-float-right uk-margin-small-top uk-totop uk-icon"><svg width="18" height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg" ratio="1"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 9 9 1 17 9 "></polyline></svg></a></h2>
                        <p>

                            <?php echo $new->translation1->body; ?>

                        </p>
                    </article>
                        <?PHP
                        $i++;?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>



                </div>
                <?php echo e($pages->links()); ?>

                </div>
                </div>
            <div style="clear: both;"></div>
        </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
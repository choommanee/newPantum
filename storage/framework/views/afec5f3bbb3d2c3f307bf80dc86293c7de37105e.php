<?php $__env->startSection('title', trans('serials::serials.warranty')); ?>

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
        max-width: 1200px;
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
        width: 100%;
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
            width:100%;
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

    table.compare {
        border-collapse: collapse;
        border: 1px solid #ddd;
        margin-bottom: 20px;
    }

    table.compare th, table.compare td {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: left;
        white-space: pre-line;
    }

    table.compare th {
        border: 1px solid #ddd;
        background-color: #ee7052;
        color: white;
        vertical-align: middle;
    }

    table.compare td.compare-field {
        min-width: 120px;
    }

    table.compare td.compare-field-product {
        width: 100%;
    }

    table.compare td {
        height: 50px;
        vertical-align: middle;
    }

    table.compare tr:nth-child(even) {
        background-color: #f2f2f2
    }

    .ellipse {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .text-center {
        text-align: center!important;
    }

    .text-left {
        text-align: left!important;;
    }

    .text-right {
        text-align: right!important;;
    }
    .text-red {
        color: red;
    }
    .btn-close {
        color: white;
        background-color: red;
        border-radius: 2px;
        padding: 0 5px;
    }

    .alert-custom {
        background-color: #FFF;
        border: 1px solid #ee3733;
        padding: 20px;
        margin-bottom: 30px;
    }
    .alert-custom > i {
        height: 60px;
        width: 60px;
        line-height: 60px;
        font-size: 32px;
        text-align: center;
        float: left;
        margin-right: 20px;
        background-color: #ee3733;
        color: white;
        border-radius: 50%;
    }
    .alert-custom div {
        overflow: hidden;
        height: 100%;
    }
    .alert-custom div h3 {
        font-size: 24px;
        color: #ee3733;
        margin-bottom: 10px;
    }
    .alert-custom div p {
        margin-bottom: 0;
        color: #ee3733;
    }
    .label-member a {
        background-color: #ee3733;
        color: #FFF!important;
    }
    .call-center {
        float: left;
        margin-left: 0;
        overflow: hidden;
        height: 100%;
    }
    .call-center li,.call-center li a {
        float: left;
        list-style: none;
    }
    .call-center li a {
        height: 35px;
        width: 35px;
        font-size: 15px;
        text-align: center;
        border-right: 1px solid #eae9e9;
    }
    .call-center li:first-child a {
        border-left: 1px solid #eae9e9;

    }

    .comment-form .form-input i {
        position: absolute;
        top: 20px;
        margin-top: -5px;
        left: 10px;
        font-size: 13px;
    }

    .sections-title {
        text-align: center;
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
               

                <div class="uk-container">

                     <div class="col-md-12" >
                         <div class="sections-title">
                             <div class="sections-title-h3"><h3 style=" margin: 24px;  color: #ee3733;     padding-bottom: 20px;"><?php echo e(trans('serials::serials.warranty_title')); ?></h3></div>
                            <span class="small-font" ><?php echo e(trans('serials::serials.warranty_detail')); ?></span>
                         </div>
                         <div>
                         <form method="GET" action="<?php echo e(route('warranty.index')); ?>" id="product-filter-form" class="form-faq">


                             <div class="row">
                                 <div class="col-md-6 col-md-offset-3">
                                     <div class="form-input">

                                         <input name="Search" id="Search" type="text" placeholder="Serial Number" style="width: 100%;margin-bottom: 20px;margin-top: 20px;padding-left: 10px;">
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-md-offset-3">
                                     <input type="submit" class="button-3" value="Search" style="margin-bottom:20px;width: 100%; border: none;  font-size: 15px;  font-weight: bold;">
                                 </div>
                             </div><!-- End row -->
                         </form>
                         </div>
                        <?php if($pages!=""): ?>
                        <div class="table-responsive">
                            <table class="table compare">
                            <thead>
                            <tr >
                                <th style="color:#FFFFFF;" class="text-center"><?php echo e(trans('serials::serials.serials_number')); ?></th>
                                <th style="color:#FFFFFF;" class="text-center"><?php echo e(trans('serials::serials.product_name')); ?></th>
                                <th style="color:#FFFFFF;" class="text-center"><?php echo e(trans('serials::serials.sale_date')); ?></th>
                                <th style="color:#FFFFFF;" class="text-center"><?php echo e(trans('serials::serials.date_start')); ?></th>
                                <th style="color:#FFFFFF;" class="text-center"><?php echo e(trans('serials::serials.end_warranty')); ?></th>
                                <th style="color:#FFFFFF;" class="text-center"><?php echo e(trans('serials::serials.warranty_status')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($page->name); ?></td>
                                    <td class="text-center"><?php echo e($productGroup[0]->name); ?><br/>
                                        <img src="<?php echo e($productGroup[0]->base_image->path); ?>" style="width: 100px;"></td>
                                    <td class="text-center"><?php echo e($page->PurchaseDate); ?></td>
                                    <td class="text-center"><?php echo e($page->datevarunty_start); ?></td>
                                    <td class="text-center"><?php echo e($page->dataExp); ?></td>
                                    <td class="text-center"> <?php if($page->cus_use==2): ?>
                                            <span style="color: green;font-weight: 600;">
                                               <?php echo e(trans('storefront::account.warranty.activate')); ?></span>
                                        <?php else: ?>
                                            <span style="color: red;font-weight: 400;">
                                                <?php echo e(trans('storefront::account.warranty.nonactivate')); ?></span>
                                        <?php endif; ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                        </div>
                            <?php endif; ?>
</div>
</div>
<div style="clear: both;"></div>
</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
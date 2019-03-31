<div class="icon-chagelang">
    <a href="<?php echo e(url('en')); ?>" style="cursor: pointer"><i></i>EN</a>
</div>
<div class="icon-chagelang">
    <a href="<?php echo e(url('th')); ?>" style="cursor: pointer"><i></i>TH</a> /
</div>
<div class="search-area pull-left">
    <form action="<?php echo e(route('products.index')); ?>" method="GET" id="search-box-form">
        <div class="search-box  " style="display: none;">
            <input type="text" name="query" class="search-box-input" placeholder="<?php echo e(trans('storefront::layout.search_for_products')); ?>" value="<?php echo e(request('query')); ?>">

            <div class="search-box-button">
                <button class="search-box-btn btn btn-primary" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>

</button>

</div>
</div>

<div class="mobile-search ">

<div class="dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-search" aria-hidden="true"></i>
</div>

<div class="dropdown-menu">
<div class="search-box">
    <input type="search" name="query" class="search-box-input" placeholder="<?php echo e(trans('storefront::layout.search_for_products')); ?>">

    <div class="search-box-button">
        <button type="submit" class="search-box-btn btn btn-primary">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </div>
</div>
</div>
</div>
</div>
        <div class="top-login"><a href="<?php echo e(url('account')); ?>"><?php echo e(trans('user::auth.login')); ?> / <?php echo e(trans('user::auth.register')); ?></a></div>
</form>
</div>

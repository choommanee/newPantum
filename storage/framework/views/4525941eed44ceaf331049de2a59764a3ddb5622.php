<?php $__env->startSection('title', trans('user::auth.login')); ?>

<?php $__env->startSection('content'); ?>
    <div class="form-wrapper">
        <?php echo $__env->make('public.partials.notification', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="col-md-6 detail-login" style="padding-left: 0px;padding-right: 0px;">
            <div class="form form-page" style="padding: 0px;">
                <div class="login form-inner clearfix" style="">
                    <div class="">
                        <div class="top-image" >
                            <img src="https://save2home.com/public/storage/media/logo.png" alt="" style="width: 300px;margin: auto auto; display: block;">
                        </div>
                        <h1 class="page-title">Become an PANTUM Member</h1>

                        <div id="" class="">
                            In addition to PANTUM intermittently offering the hottest discounts, news on sales promotions, and the newest information on PANTUM, you will also enjoy having excellent technological support services to promote your experience as a user of our products.
                        </div>
                        <ul class="service-list">
                            <li class="service-item" style="list-style: none;margin-top: 20px;">

                                <div class="service-des" style="text-align: left;">
                                    <h2>Personalized Service</h2>
                                    <p style="text-align: left;">Enjoy the most complete personalized information center, after-sales service, and customer service.</p>
                                </div>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding-left: 0px;padding-right: 0px;">
        <div class="form form-page"  style="padding: 0px;">
            <form method="POST" action="<?php echo e(route('login.post')); ?>" class="login-form clearfix">
                <?php echo e(csrf_field()); ?>


                <div class="bg-blue">
                    <div class="reflection"></div>
                </div>

                <div class="login form-inner clearfix">
                    <a href="<?php echo e(route('register')); ?>" class="register" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('user::auth.register')); ?>" rel="tooltip">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </a>

                    <h3><?php echo e(trans('user::auth.login')); ?></h3>

                    <div class="form-group <?php echo e($errors->has('email') ? 'has-error': ''); ?>">
                        <label for="email"><?php echo e(trans('user::auth.email')); ?><span>*</span></label>

                        <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="email" placeholder="<?php echo e(trans('user::attributes.users.email')); ?>" autofocus>

                        <div class="input-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>

                        <?php echo $errors->first('email','<span class="error-message">:message</span>'); ?>

                    </div>

                    <div class="form-group <?php echo e($errors->has('password') ? 'has-error': ''); ?>">
                        <label for="password"><?php echo e(trans('user::auth.password')); ?><span>*</span></label>

                        <input type="password" name="password" class="form-control" id="password" placeholder="<?php echo e(trans('user::attributes.users.password')); ?>">

                        <div class="input-icon">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>

                        <?php echo $errors->first('password','<span class="error-message">:message</span>'); ?>

                    </div>

                    <div class="clearfix"></div>


                    <button type="submit" class="btn btn-primary btn-center btn-login" data-loading style="width: 275px;">
                        <?php echo e(trans('user::auth.login')); ?>

                    </button>

                    <div class="btn btn-primary btn-center btn-login" style="width: 275px;">
                        <a class="ar-bh" href="<?php echo e(url('register')); ?>" >
                            <span id="ctl00_ContentPlaceHolder1_lbJoin"><?php echo e(trans('user::auth.register')); ?></span>
                        </a>

                    </div>


                    <div class="checkbox pull-left">
                        <input type="hidden" value="0">
                        <input type="checkbox" value="1" id="remember">

                        <label for="remember"><?php echo e(trans('user::auth.remember_me')); ?></label>
                    </div>


                    <a href="<?php echo e(route('reset')); ?>" class="forgot-password pull-right">
                        <?php echo e(trans('user::auth.forgot_password')); ?>

                    </a>




                    <div class="social-login-buttons text-center">
                        <div class="social-btn-group" style="display: block;margin-top: 54px;">
                            <hr/>
                            <label>You can use the account and password below to log in directly as an PANTUM Member.</label>
                           
                            <?php if(setting('facebook_login_enabled')): ?>
                                <a href="<?php echo e(route('login.redirect', ['provider' => 'facebook'])); ?>" class="btn btn-facebook " >
                                    <?php echo e(Theme::image('public/images/facebook.png')); ?>

                                    <?php echo e(trans('user::auth.log_in_with_facebook')); ?>

                                </a>

                                
                            <?php endif; ?>

                            <?php if(setting('google_login_enabled')): ?>
                                <a href="<?php echo e(route('login.redirect', ['provider' => 'google'])); ?>" class="btn btn-google " style="width: 275px;">
                                    <?php echo e(Theme::image('public/images/google.png')); ?>

                                    <?php echo e(trans('user::auth.log_in_with_google')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </form>


        </div>


    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
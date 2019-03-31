<?php $__env->startSection('title', trans('user::auth.register')); ?>

<?php $__env->startSection('content'); ?>
    <div class="register-wrapper clearfix">
        <div class="col-lg-6 col-md-7 col-sm-10">
            <div class="row">
                <?php echo $__env->make('public.partials.notification', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <form method="POST" action="<?php echo e(route('register.post')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <div class="box-wrapper register-form">
                        <div class="box-header">
                            <h4><?php echo e(trans('user::auth.register')); ?></h4>
                        </div>

                        <div class="form-inner clearfix">
                            <div class="col-md-12">
                                <div class="form-group <?php echo e($errors->has('first_name') ? 'has-error': ''); ?>">
                                    <label for="first-name"><?php echo e(trans('user::auth.first_name')); ?><span>*</span></label>

                                    <input type="text" name="first_name" value="<?php echo e(old('first_name')); ?>" class="form-control" id="first-name" autofocus>

                                    <?php echo $errors->first('first_name','<span class="error-message">:message</span>'); ?>

                                </div>

                                <div class="form-group <?php echo e($errors->has('last_name') ? 'has-error': ''); ?>">
                                    <label for="last-name"><?php echo e(trans('user::auth.last_name')); ?><span>*</span></label>

                                    <input type="text" name="last_name" value="<?php echo e(old('last_name')); ?>" class="form-control" id="last-name">

                                    <?php echo $errors->first('last_name','<span class="error-message">:message</span>'); ?>

                                </div>

                                <div class="form-group <?php echo e($errors->has('email') ? 'has-error': ''); ?>">
                                    <label for="email"><?php echo e(trans('user::auth.email')); ?><span>*</span></label>

                                    <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="email">

                                    <?php echo $errors->first('email','<span class="error-message">:message</span>'); ?>

                                </div>
                                <div class="form-group <?php echo e($errors->has('tel') ? 'has-error': ''); ?>">
                                    <label for="email"><?php echo e(trans('user::auth.tel')); ?><span>*</span></label>

                                    <input type="text" name="tel" value="<?php echo e(old('tel')); ?>" class="form-control" id="tel">
                                    <?php echo $errors->first('email','<span class="error-message">:message</span>'); ?>

                                </div>

                                <div class="form-group <?php echo e($errors->has('password') ? 'has-error': ''); ?>">
                                    <label for="password"><?php echo e(trans('user::auth.password')); ?><span>*</span></label>

                                    <input type="password" name="password" class="form-control" id="password">

                                    <?php echo $errors->first('password','<span class="error-message">:message</span>'); ?>

                                </div>

                                <div class="form-group <?php echo e($errors->has('password_confirmation') ? 'has-error': ''); ?>">
                                    <label for="confirm-password"><?php echo e(trans('user::auth.password_confirmation')); ?><span>*</span></label>

                                    <input type="password" name="password_confirmation" class="form-control" id="confirm-password">

                                    <?php echo $errors->first('password_confirmation', '<span class="error-message">:message</span>'); ?>

                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="checkbox">
                                <input type="checkbox" name="privacy_policy" id="privacy">

                                <label for="privacy">
                                    <?php echo e(trans('user::auth.i_agree_to_the')); ?> <a href="<?php echo e($privacyPageURL); ?>"><?php echo e(trans('user::auth.privacy_policy')); ?></a>
                                </label>

                                <?php echo $errors->first('privacy_policy','<span class="error-message">:message</span>'); ?>

                            </div>

                            <button type="submit" class="btn btn-primary btn-register pull-right" data-loading>
                                <?php echo e(trans('user::auth.register')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
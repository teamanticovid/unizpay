<?php $__env->startSection('title', __('Login')); ?>

<?php $__env->startSection('form'); ?>
    <form action="<?php echo e(route('login')); ?>" method="POST" class="ajaxform_instant_reload">
        <div class="mb-20">
            <label for="email" class="col-form-label"><?php echo e(__('Email')); ?></label>
            <input type="text" class="form-control focus-input100" id="email" name="email" placeholder="Type email" required>
        </div>

        <div class="mb-40">
            <label for="password" class="col-form-label"><?php echo e(__('Password')); ?></label>
            <input type="password" class="form-control focus-input100" id="password" name="password" placeholder="Type Password" required>
        </div>

        <!-- Button -->
        <button type="submit" class="site-btn w-100 submit-btn"><?php echo e(__('Login')); ?></button>
    </form>

    <!-- Other Sign Up -->
    <div class="other-sign-up-area text-center">
        <p><a href="<?php echo e(url('/password/reset')); ?>"><?php echo e(__('Forgot Password?')); ?></a></p>
        <span><?php echo e(__('Don\'t have an account?')); ?> <a href="<?php echo e(route('register')); ?>"><?php echo e(__('Sign up')); ?></a></span>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/auth/login.blade.php ENDPATH**/ ?>
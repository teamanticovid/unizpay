<?php $__env->startSection('title', __('Reset Password')); ?>

<?php $__env->startSection('form'); ?>
    <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('password.email')); ?>">
        <?php echo csrf_field(); ?>

        <div class="input_field">
            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email Address" required />
        </div>

        <input class="button" type="submit" value=" <?php echo e(__('Send Password Reset Link')); ?>" />
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>
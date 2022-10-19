<?php $__env->startSection('title', __('Register')); ?>

<?php $__env->startSection('form'); ?>
    <form action="<?php echo e(route('register')); ?>" method="post" class="ajaxform_instant_reload">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-6 mb-20">
                <label for="business_name" class="col-form-label"><?php echo e(__('Business Name')); ?></label>
                <input type="text" class="form-control focus-input100" name="business_name" id="business_name" placeholder="<?php echo e(__('Enter your business name')); ?>" required>
            </div>
            <div class="col-md-6 mb-20">
                <label for="name" class="col-form-label"><?php echo e(__('Full Name')); ?></label>
                <input type="text" class="form-control focus-input100" name="name" id="name" placeholder="<?php echo e(__('Your full name')); ?>" required>
            </div>
            <div class="col-md-6 mb-20">
                <label for="email" class="col-form-label"><?php echo e(__('Email')); ?></label>
                <input type="email" class="form-control focus-input100" name="email" id="email" placeholder="<?php echo e(__('Your email address')); ?>" required>
            </div>
            <div class="col-md-6 mb-20">
                <label for="phone" class="col-form-label"><?php echo e(__('Phone')); ?></label>
                <input type="text" class="form-control focus-input100" name="phone" id="phone" placeholder="<?php echo e(__('Your phone number')); ?>" required>
            </div>
        </div>

        <div class="mb-40">
            <label for="country" class="col-form-label"><?php echo e(__('Country')); ?></label>
            <select class="form-control focus-input100" name="country" id="country" required>
                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($id); ?>"><?php echo e($country); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-40">
            <label for="password" class="col-form-label"><?php echo e(__('Password')); ?></label>
            <input type="password" class="form-control focus-input100" name="password" id="password" placeholder="<?php echo e(__('Type Password')); ?>" min="8" required autocomplete="new-password">
        </div>

        <div class="form-check form-check-inline mb-40">
            <input class="form-check-input" type="checkbox" name="agree" id="agree">
            <label class="form-check-label" for="agree"><?php echo __('agree_term_of_service_checkbox', ['url' => url('/terms')]); ?></label>
        </div>

        <!-- Button -->
        <button type="submit" class="site-btn w-100 submit-btn"><?php echo e(__('Create Account')); ?></button>
    </form>

    <!-- Other Sign Up -->
    <div class="other-sign-up-area text-center">
        <p><?php echo e(__('Or Sign Up Using')); ?></p>
        <span><?php echo e(__('Already have an account?')); ?> <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></span>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth.app', [
    'columnClass' => 'col-lg-8'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/auth/register.blade.php ENDPATH**/ ?>
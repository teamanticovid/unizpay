<?php $__env->startSection('body'); ?>
    <!-- Login Area -->
    <div class="login-area">
        <!-- Welcome Animation -->
        <div class="welcome-animation">

            <div class="bubble wb-two d-none d-md-block"></div>
            <div class="bubble b_three"></div>
            <div class="bubble b_four d-none d-sm-block"></div>
            <div class="square-shape1 d-none d-sm-block"></div>
            <div class="bubble b_six d-none d-sm-block"></div>

        </div>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Login form -->
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['col-lg-5' => !isset($columnClass), $columnClass ?? null]) ?>">
                    <div class="login-content">
                        <p class="login-title"><?php echo $__env->yieldContent('title'); ?></p>
                        <?php echo $__env->yieldContent('form'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.master', [
    'bodyClass' => 'bg-gray-cu-2'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/auth/app.blade.php ENDPATH**/ ?>
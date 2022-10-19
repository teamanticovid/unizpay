<?php $__env->startSection('content'); ?>

    <!-- About Us Area -->
    <div class="single-about-us-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-2-img">
                        <img src="<?php echo e(asset($about->image)); ?>" alt="">
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="about-content-text">
                        <h2><?php echo e($about->title ?? null); ?></h2>
                        <p><?php echo e($about->description); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area -->


    <?php echo $__env->make('frontend.home.feature', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.home.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/about/index.blade.php ENDPATH**/ ?>
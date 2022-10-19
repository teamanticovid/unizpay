<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('layouts.user.partials.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <?php echo $__env->make('layouts.user.partials.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.user.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page content -->
        <div class="container-fluid mt--6">
            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('layouts.user.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/user/app.blade.php ENDPATH**/ ?>
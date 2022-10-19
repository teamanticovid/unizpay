<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo e(url('/')); ?>"><?php echo e(Config::get('app.name')); ?></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo e(url('login')); ?>"><?php echo e(Str::limit(env('APP_NAME'), $limit = 1)); ?></a>
        </div>
        <ul class="sidebar-menu">
            <?php echo $__env->make('admin.adminmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>

        <div class="mt-5 mb-4 p-3 hide-sidebar-mini">
            <a href="<?php echo e(url('/')); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-external-link-alt"></i> <?php echo e(__('You Website')); ?>

            </a>
        </div>
    </aside>
</div>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/backend/partials/sidebar.blade.php ENDPATH**/ ?>
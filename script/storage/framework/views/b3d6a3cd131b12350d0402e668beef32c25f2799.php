<div class="section-header">
    <?php if(isset($prev)): ?>
        <div class="section-header-back">
            <a href="<?php echo e(url($prev)); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
    <?php endif; ?>


    <?php if (! empty(trim($__env->yieldContent('title')))): ?>
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
    <?php elseif(isset($title)): ?>
        <h1><?php echo e($title); ?></h1>
    <?php endif; ?>

    <?php if(isset($button_name)): ?>
        <div class="section-header-button">
            <a href="<?php echo e(url($button_link)); ?>" class="btn btn-primary">
                <?php if(isset($button_icon)): ?>
                    <i class="<?php echo e($button_icon); ?>"></i>
                <?php endif; ?>
                <?php echo e($button_name); ?>

            </a>
        </div>
    <?php endif; ?>
    <div class="section-header-breadcrumb">
        <?php $__currentLoopData = request()->segments(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $segment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="breadcrumb-item"><?php echo e($segment); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/backend/partials/headersection.blade.php ENDPATH**/ ?>
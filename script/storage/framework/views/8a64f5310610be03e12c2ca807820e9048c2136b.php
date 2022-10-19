<?php $__env->startSection('title', __('Blog')); ?>

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area-single">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content-text">
                        <h6><?php echo e(__('Blog Posts')); ?></h6>
                        <h3><?php echo e(__('description.blog')); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area -->


    <!-- BLog Area -->
    <div class="blog-area section-padding-100-50">
        <div class="container">
            <div class="row justify-content-center">
                <?php $__empty_1 = true; $__currentLoopData = $posts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <!-- Single Blog -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-area mb-50">
                        <div class="blog-image">
                            <img src="<?php echo e($post->preview->value ?? null); ?>" alt="">
                        </div>
                        <h4><a href="<?php echo e(route('frontend.blog.show', $post->slug)); ?>"><?php echo e(str($post->title)->words(7)); ?></a></h4>
                        <p><?php echo e(str($post->excerpt->value ?? "")->words(17)); ?></p>
                        <div class="blog-btn">
                            <a href="<?php echo e(route('frontend.blog.show', $post->slug)); ?>"><?php echo e(_('Read more')); ?> <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-area mb-50 text-center">
                            <?php echo e(__('No posts found!')); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- BLog Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/blog/index.blade.php ENDPATH**/ ?>
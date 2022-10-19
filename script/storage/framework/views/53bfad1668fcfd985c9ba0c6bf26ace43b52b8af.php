<?php $__env->startSection('title', __('Blog')); ?>

<?php $__env->startSection('content'); ?>
    <!-- BLog Area -->
    <div class="blog-details-area section-padding-100-50 ">
        <div class="container">
            <div class="row">
                <!-- Side Blog Content -->
                <div class="col-lg-3">
                    <div class="side-blog-details-area">
                        <div class="single-side-content">
                            <form action="<?php echo e(route('frontend.blog.index')); ?>" type="get">
                                <div class="input-group">
                                    <div class="form-outline">
                                        <input type="search" name="q" class="form-control" placeholder="Type &amp; hit" required="">
                                    </div>
                                    <button type="submit" class="btn btn-submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="single-side-content">
                            <h4 class="side-blog-title"><?php echo e(__('Recent post')); ?></h4>
                            <div class="recent-post-area">
                                <?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Single Post -->
                                    <div class="single-recent-post d-xl-flex align-items-center">
                                        <div class="recent-post-img">
                                            <img src="<?php echo e(asset($recentPost->preview->value ?? 'default.png')); ?>" alt="">
                                        </div>

                                        <div class="recent-post-text">
                                            <h5>
                                                <a href="<?php echo e(route('frontend.blog.show', $recentPost->slug)); ?>">
                                                    <?php echo e($recentPost->title); ?>

                                                </a>
                                            </h5>
                                            <span class="recent-post-date"><?php echo e(formatted_date($recentPost->created_at)); ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Text -->
                <div class="col-lg-9">
                    <div class="blog-details-content mb-50">
                        <div class="blog-details-image text-center">
                            <img src="<?php echo e(asset($post->preview->value ?? 'default.png')); ?>" alt="">
                        </div>

                        <!-- Post Meta -->
                        <div class="post-meta">
                            <h2><?php echo e($post->title); ?></h2>

                            <p><?php echo $post->description->value; ?></p>

                            <div class="share-post d-sm-flex justify-content-between align-items-center">
                                <span><?php echo e(__('Share Post :')); ?></span>
                                <div id="social-share">
                                </div>
                            </div>

                            <!-- Comments Area -->
                            <div class="blog-comments-area">
                                <?php echo e(disquscomment()); ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- BLog Area -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/jssocials/jssocials.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/jssocials/jssocials-theme-minima.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('plugins/jssocials/jssocials.min.js')); ?>"></script>
    <script>
        "use strict";
        $("#social-share").jsSocials({
            shares: ["twitter", "facebook", "email", "pinterest", "whatsapp"],
            url: "<?php echo e(route('frontend.blog.show', $post->slug)); ?>",
            text: "<?php echo e($post->title); ?>",
            shareIn: "popup",
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/blog/show.blade.php ENDPATH**/ ?>
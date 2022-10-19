<?php if(isset($data['headings']['heading.latest-news'])): ?>
    <?php
        $heading = $data['headings']['heading.latest-news'] ?? [];
        $posts = $data['blog'] ?? [];
    ?>
        <!-- Blog Area -->
    <div class="blog-area section-padding-0-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="heading-title text-center" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
                        <h2><span>-</span><?php echo e($heading['title'] ?? null); ?><span>-</span></h2>
                        <p><?php echo e($heading['description'] ?? null); ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <!-- Single Blog -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-blog-area mb-50">
                        <div class="blog-image">
                            <img src="<?php echo e($post->preview ? asset($post->preview->value ?? null) : asset('admin/img/img/placeholder.png')); ?>" alt="">
                        </div>
                        <h4><a href="<?php echo e(route('frontend.blog.show', $post->slug)); ?>"><?php echo e(str($post->title)->words(7, '...')); ?></a></h4>
                        <p><?php echo e(str($post->excerpt->value ?? null)->words(16, '...')); ?></p>
                        <div class="blog-btn">
                            <a href="<?php echo e(route('frontend.blog.show', $post->slug)); ?>"><?php echo e(__('Read more')); ?> <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Blog Area -->
<?php else: ?>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/home/blog.blade.php ENDPATH**/ ?>
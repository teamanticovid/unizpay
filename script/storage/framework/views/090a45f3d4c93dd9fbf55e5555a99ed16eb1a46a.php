<?php if(isset($data['headings']['heading.review'])): ?>
    <?php
        $heading = $data['headings']['heading.review'];
    ?>
    <!-- Client Area Css -->
    <div class="client-area section-padding-100 bg-gray-cu">
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
                <div class="client-slider owl-carousel">
                    <?php $__empty_1 = true; $__currentLoopData = $data['reviews'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <!-- Single Client Slider -->
                    <div class="single-clinet-slider">
                        <div class="client-text">
                            <div class="client-rating">
                                <span>"</span>
                            </div>
                            <p><?php echo e($review->comment); ?></p>

                            <!-- Client Bottom -->
                            <div class="client-bottom-area d-flex align-content-center">
                                <div class="client-img">
                                    <img src="<?php echo e(asset($review->image)); ?>" alt="">
                                </div>

                                <div class="client-info">
                                    <h6><?php echo e($review->name); ?></h6>
                                    <span><?php echo e($review->position); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Bg Shape -->
        <div class="client-bg-shape" data-aos="fade-up-right">
            <img src="<?php echo e(asset('frontend/img/bg-img/c-1.svg')); ?>" alt="">
        </div>
    </div>
    <!-- Client Area Css -->
<?php else: ?>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/home/review.blade.php ENDPATH**/ ?>
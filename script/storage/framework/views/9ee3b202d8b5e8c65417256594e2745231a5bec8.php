<?php if(isset($data['headings']['heading.security'])): ?>
    <?php
        $heading = $data['headings']['heading.security'];
    ?>
    <!-- Security Area -->
    <div class="security-area section-padding-0-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="heading-title text-center" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
                        <h2><span>-</span><?php echo e($heading['title'] ?? null); ?><span>-</span></h2>
                        <p><?php echo e($heading['title'] ?? null); ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Card -->
                <div class="col-md-6">
                    <div class="single-security-area">
                        <div class="security-icon">
                            <i class="<?php echo e($heading['security_1_icon'] ?? null); ?>"></i>
                        </div>
                        <h4><?php echo e($heading['security_1_title'] ?? null); ?></h4>
                        <p><?php echo e($heading['security_1_description'] ?? null); ?></p>

                        <div class="bg-shape-ecurity" data-aos="fade-up-right">
                            <img src="<?php echo e(asset('frontend/img/bg-img/c-1.svg')); ?>" alt="">
                        </div>
                    </div>
                </div>

                <!-- Single Card -->
                <div class="col-md-6">
                    <div class="single-security-area">
                        <div class="security-icon">
                            <i class="<?php echo e($heading['security_2_icon'] ?? null); ?>"></i>
                        </div>
                        <h4><?php echo e($heading['security_2_title'] ?? null); ?></h4>
                        <p><?php echo e($heading['security_2_description'] ?? null); ?></p>

                        <div class="bg-shape-ecurity" data-aos="fade-up-right">
                            <img src="<?php echo e(asset('frontend/img/bg-img/c-1.svg')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Security Area -->
<?php else: ?>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/home/security.blade.php ENDPATH**/ ?>
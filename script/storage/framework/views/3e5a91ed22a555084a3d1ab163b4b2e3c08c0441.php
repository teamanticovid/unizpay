<?php if(isset($data['headings']['heading.feature'])): ?>
    <?php
    $heading = $data['headings']['heading.feature'];
    ?>
    <!-- Feature Area -->
    <div class="feature-area section-padding-100-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="heading-title text-center" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
                        <h2><span>-</span> <?php echo e($heading['title'] ?? null); ?> <span>-</span></h2>
                        <p><?php echo e($heading['description'] ?? null); ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Features Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center mb-50">
                        <div class="features-icon">
                            <i class="<?php echo e($heading['feature_1_icon'] ?? null); ?>"></i>
                        </div>
                        <h4><?php echo e($heading['feature_1_text'] ?? null); ?></h4>
                        <p><?php echo e($heading['feature_1_description'] ?? null); ?></p>
                    </div>
                </div>

                <!-- Single Features Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center mb-50">
                        <div class="features-icon">
                            <i class="<?php echo e($heading['feature_2_icon'] ?? null); ?>"></i>
                        </div>
                        <h4><?php echo e($heading['feature_2_text'] ?? null); ?></h4>
                        <p><?php echo e($heading['feature_2_description'] ?? null); ?></p>
                    </div>
                </div>
                <!-- Single Features Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-area text-center mb-50">
                        <div class="features-icon">
                            <i class="<?php echo e($heading['feature_3_icon'] ?? null); ?>"></i>
                        </div>
                        <h4><?php echo e($heading['feature_3_text'] ?? null); ?></h4>
                        <p><?php echo e($heading['feature_3_description'] ?? null); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area -->
<?php else: ?>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/home/feature.blade.php ENDPATH**/ ?>
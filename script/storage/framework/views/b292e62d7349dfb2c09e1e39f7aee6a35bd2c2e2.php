<?php if(isset($data['headings']['heading.capture'])): ?>
    <?php
        $heading = $data['headings']['heading.capture'];
    ?>
    <!-- Capture Area -->
    <div class="capture-area section-padding-0-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="capture-area-text">
                        <h6><?php echo e($heading['short_title'] ?? null); ?></h6>
                        <h2><?php echo e($heading['title'] ?? null); ?></h2>
                    </div>

                    <!-- Single Card -->
                    <div class="single-capture-card">
                        <h5><?php echo e($heading['capture_1_title'] ?? null); ?></h5>
                        <p><?php echo $heading['capture_1_description'] ?? null; ?></p>
                    </div>

                    <!-- Single Card -->
                    <div class="single-capture-card">
                        <h5><?php echo e($heading['capture_2_title'] ?? null); ?></h5>
                        <p><?php echo $heading['capture_2_description'] ?? null; ?></p>
                    </div>

                    <div class="single-capture-card">
                        <h5><?php echo e($heading['capture_3_title'] ?? null); ?></h5>
                        <p><?php echo $heading['capture_3_description'] ?? null; ?></p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="capture-image mb-50" data-aos="flip-left">
                        <img src="<?php echo e(asset($heading['image'] ?? null)); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Capture Area -->
<?php else: ?>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/home/capture.blade.php ENDPATH**/ ?>
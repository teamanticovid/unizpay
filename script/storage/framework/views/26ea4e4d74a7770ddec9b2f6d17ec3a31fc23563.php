<?php if(isset($data['headings']['heading.about'])): ?>
    <?php
        $heading = $data['headings']['heading.about'];
    ?>
    <!-- About Us Area -->
    <div class="about-us-area section-padding-0-50">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Text -->
                <div class="col-lg-7 col-xl-6">
                    <div class="about-us-text mb-50">
                        <h2><span>-</span> <?php echo e($heading['title'] ?? null); ?></h2>
                        <p><?php echo e($heading['description'] ?? null); ?></p>

                        <a class="hero-btn two" href="<?php echo e($heading['button_url'] ?? null); ?>">
                            <?php echo e($heading['button_text'] ?? null); ?>

                        </a>
                    </div>
                </div>

                <!-- About Image -->
                <div class="col-lg-5 col-xl-6">
                    <div class="about-image mb-50">
                        <img src="<?php echo e(asset($heading['image'] ?? null)); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area -->
<?php else: ?>

<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/home/about.blade.php ENDPATH**/ ?>
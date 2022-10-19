<?php if(isset($data['headings']['heading.payment'])): ?>
    <?php
        $heading = $data['headings']['heading.payment'];
    ?>
    <!-- Our service Area -->
    <div class="our-service-area bg-gray-cu section-padding-100-50">
        <!-- Animation -->
        <div class="welcome-animation">
            <div class="square-shape"></div>
            <div class="bubble wb-two d-none d-md-block"></div>
            <div class="bubble b_three"></div>
            <div class="bubble b_four d-none d-sm-block"></div>
            <div class="square-shape1 d-none d-sm-block"></div>
        </div>

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
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <div class="service-icon">
                            <i class="<?php echo e($heading['payment_1_icon'] ?? null); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h4>
                                <a href="#"><?php echo e($heading['payment_1_text'] ?? null); ?></a>
                            </h4>
                            <p><?php echo e($heading['payment_1_description'] ?? null); ?></p>
                        </div>

                    </div>
                </div>

                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <div class="service-icon">
                            <i class="<?php echo e($heading['payment_2_icon'] ?? null); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h4>
                                <a href="#"><?php echo e($heading['payment_2_text'] ?? null); ?></a>
                            </h4>
                            <p><?php echo e($heading['payment_2_description'] ?? null); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <div class="service-icon">
                            <i class="<?php echo e($heading['payment_3_icon'] ?? null); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h4>
                                <a href="#"><?php echo e($heading['payment_3_text'] ?? null); ?></a>
                            </h4>
                            <p><?php echo e($heading['payment_3_description'] ?? null); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <div class="service-icon">
                            <i class="<?php echo e($heading['payment_4_icon'] ?? null); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h4>
                                <a href="#"><?php echo e($heading['payment_4_text'] ?? null); ?></a>
                            </h4>
                            <p><?php echo e($heading['payment_4_description'] ?? null); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <div class="service-icon">
                            <i class="<?php echo e($heading['payment_5_icon'] ?? null); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h4>
                                <a href="#"><?php echo e($heading['payment_5_text'] ?? null); ?></a>
                            </h4>
                            <p><?php echo e($heading['payment_5_description'] ?? null); ?></p>
                        </div>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <div class="service-icon">
                            <i class="<?php echo e($heading['payment_6_icon'] ?? null); ?>"></i>
                        </div>
                        <div class="service-text">
                            <h4>
                                <a href="#"><?php echo e($heading['payment_6_text'] ?? null); ?></a>
                            </h4>
                            <p><?php echo e($heading['payment_6_description'] ?? null); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our service Area -->
<?php else: ?>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/home/payment.blade.php ENDPATH**/ ?>
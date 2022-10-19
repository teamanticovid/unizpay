<?php $__env->startSection('title', __('Blog')); ?>

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area-single">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content-text">
                        <h6><?php echo e(__('Contact US')); ?></h6>
                        <h3><?php echo e(__('description.contact')); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area -->

    <!-- Contact Area  -->
    <div class="contact-area section-padding-100-50">
        <div class="container">
            <div class="row align-items-center justify-content-center">


                <!-- Contact Area -->
                <div class="col-lg-7">
                    <div class="contact-area-card mb-50">
                        <h4><?php echo e(__('Need a hand?')); ?></h4>
                        <form class="nft-contact-from ajaxform_reset_form" action="<?php echo e(route('frontend.contact.send')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <form action="" class="form__content">
                                    <div class="col-12 col-lg-6">
                                        <div class="form__box mb-20">
                                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="form__box mb-20">
                                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="form__box mb-20">
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form__box mb-20">
                                            <input type="number" class="form-control" name="phone" placeholder="Enter Number" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="5"
                                                  placeholder="Enter Details" required></textarea>
                                    </div>

                                </form>
                                <div class="col-12 text-center mt-30">
                                    <button class="btn hero-btn submit-button" type="submit">
                                        <?php echo e(__('Send Now')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-meta-info-area  mb-50">

                        <!-- Contact Info -->
                        <div class="contact-meta-info text-center">
                            <!-- Icon -->
                            <div class="c-meta-icon">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <h4><?php echo e(__('Phone number')); ?></h4>
                            <span><?php echo e($heading['phone'] ?? null); ?></span>
                        </div>

                        <!-- Contact Info -->
                        <div class="contact-meta-info text-center">
                            <!-- Icon -->
                            <div class="c-meta-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <h4><?php echo e(__('Email')); ?></h4>
                            <span><?php echo e($heading['email'] ?? null); ?></span>
                        </div>

                        <!-- Contact Info -->
                        <div class="contact-meta-info text-center">
                            <!-- Icon -->
                            <div class="c-meta-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h4><?php echo e(__('Our Location')); ?></h4>
                            <span><?php echo e($heading['location'] ?? null); ?></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Contact Area  -->

    <div class="map-area">
        <iframe width="100%" height="500" id="gmap_canvas"
                src="<?php echo e($heading['map_url'] ?? null); ?>"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/contact/index.blade.php ENDPATH**/ ?>
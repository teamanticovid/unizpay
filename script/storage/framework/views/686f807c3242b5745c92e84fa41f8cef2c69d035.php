<?php
    $logo = get_option('logo_setting');
    $footer = get_option('footer_setting');
    $languages = get_option('languages', false);
?>

<!-- Footer Area -->
<div class="footer-contact-area bg-gray-cu section-padding-100-50">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Footer Widget -->
            <div class="col-sm-5 col-lg-4">
                <div class="footer-single-widget left mb-50">
                    <div class="footer-logo">
                        <a href="#">
                            <img src="<?php echo e($logo['logo'] ?? null); ?>" alt="<?php echo e(config('app.name')); ?>">
                        </a>
                    </div>
                    <p><?php echo e($footer['about'] ?? null); ?></p>
                </div>
            </div>

            <div class="col-sm-7 col-lg-7">
                <div class="row">
                    <!-- Footer Widget -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-single-widget first mb-50">
                            <?php echo e(RenderMenu('footer_left_menu', 'components.menu.footer')); ?>

                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-single-widget first mb-50">
                            <?php echo e(RenderMenu('footer_right_menu', 'components.menu.footer')); ?>

                        </div>
                    </div>

                    <!-- Footer Widget -->
                    <div class="col-md-9 col-lg-6">
                        <div class="footer-single-widget second mb-50">
                            <h4><?php echo e(__('News Letter')); ?></h4>
                            <!-- News Letter Area -->
                            <div class="newsletter-form mb-4">
                                <form action="<?php echo e(route('frontend.subscribe-to-news-letter')); ?>" method="post" class="ajaxform">
                                    <?php echo csrf_field(); ?>
                                    <input class="form-control" type="email" name="email" placeholder="<?php echo e(__("Enter email")); ?>" required>
                                    <button class="btn submit-btn submit-button px-3" type="submit"><?php echo e(__("Submit")); ?></button>
                                </form>
                            </div>
                            <ul class="footer-social-area">
                                <?php $__currentLoopData = $footer['social'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($social['website_url'] ?? null); ?>"><i class="<?php echo \Illuminate\Support\Arr::toCssClasses([$social['icon_class'] ?? null]) ?>"></i></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bottom Copy Right Area -->
<div class="bootom-copy-right-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copywrite-bottom-area d-md-flex align-items-md-center justify-content-md-between">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text text-center">
                        <p class="mb-0">
                            <?php echo e($footer['copyright'] ?? null); ?>

                        </p>
                    </div>
                    <!-- Dropup -->
                    <div class="language-dropdown text-center text-lg-end">
                         <?php $__currentLoopData = $languages ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php
                         if($code ==  current_locale()){
                            $current_locale=  $language;
                         }
                         
                         ?>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <button class="copy-btn btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><?php echo e($current_locale ?? __('Language')); ?> </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <?php $__currentLoopData = $languages ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="dropdown-item" href="<?php echo e(route('frontend.set-language', $code)); ?>"><?php echo e($language); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom Copy Right Area -->
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/frontend/partials/footer.blade.php ENDPATH**/ ?>
<?php
    $logo = get_option('logo_setting');
?>

<!-- Header Area Start -->
<header class="site-header site-header--menu-right landing-1-menu site-header--absolute site-header--sticky">
    <div class="container">
        <nav class="navbar site-navbar">
            <!-- Brand Logo-->
            <div class="brand-logo">
                <a href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e($logo['logo'] ?? null); ?>" alt="<?php echo e(config('app.name')); ?>" class="dark-version-logo">
                </a>
            </div>
            <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                        <?php echo e(RenderMenu('header', 'components.menu.header')); ?>

                    </ul>
                </nav>
                <?php if(Auth::check()): ?>
                <a href="<?php echo e(Auth::user()->role == 'user' ? route('user.dashboard.index') : route('admin.dashboard.index')); ?>" class="hero-btn two d-none d-md-block">
                    <?php echo e(__('Dashboard')); ?>

                </a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="hero-btn two d-none d-md-block">
                        <?php echo e(__('Login')); ?>

                    </a>
                <?php endif; ?>
            </div>
            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger">
                <span></span>
            </div>
        </nav>
    </div>
</header>
<!-- header-end -->
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/frontend/partials/header.blade.php ENDPATH**/ ?>
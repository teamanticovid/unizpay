<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li>
                <a href="#" data-toggle="sidebar" class="nav-link collapse_btn nav-link-lg">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
        </ul>
        <div class="search-element"></div>
    </form>
    <ul class="navbar-nav navbar-right">
        <?php if(Auth::user()->role == 'admin'): ?>
            <a href="<?php echo e(route('admin.clear-cache')); ?>" class="btn btn-danger mr-3">
                <i class="fas fa-redo"></i> <?php echo e(__('Clear Cache')); ?>

            </a>
        <?php endif; ?>

        <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep">
                <i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header"><?php echo e(__('Notifications')); ?>

                    <div class="float-right">
                        <a href="javascript:void(0)" class="mark-all-as-read"><?php echo e(__('Mark All As Read')); ?></a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons notification-content overflow-auto">

                </div>
                <div class="dropdown-footer text-center">
                    <a href="javascript:void(0)" class="notification-load-more"><?php echo e(__('Load More')); ?> <i class="fas fa-chevron-down"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="<?php echo e(Auth::user()->avatar ? asset(Auth::user()->avatar) : get_gravatar(Auth::user()->email)); ?>"
                     class="rounded-circle profile-widget-picture">

                <div class="d-sm-none d-lg-inline-block"><?php echo e(Auth::user()->name); ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                    <a href="<?php echo e(route('admin.settings')); ?>" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> <?php echo e(__('Profile')); ?>

                    </a>

                <div class="dropdown-divider"></div>
                <a
                    href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger"
                >
                    <i class="fas fa-sign-out-alt"></i> <?php echo e(__('Logout')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/backend/partials/header.blade.php ENDPATH**/ ?>
<?php
    $logo = get_option('logo_setting');
?>

<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="<?php echo e(route('user.dashboard.index')); ?>">
                <img src="<?php echo e($logo['logo'] ?? null); ?>" alt="<?php echo e(config('app.name')); ?>" class="dark-version-logo">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <h3 class="mb-0"><?php echo app('translator')->get('Balance'); ?>: <b><?php echo e(currency_format(auth()->user()->wallet, currency:user_currency())); ?></b></h3>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.dashboard.index')]) ?>" href="<?php echo e(route('user.dashboard.index')); ?>">
                            <i class="fas fa-home text-primary"></i>
                            <span class="nav-link-text"><?php echo e(__('Dashbaord')); ?></span>
                        </a>
                    </li>
                </ul>
                <!-- Heading -->
                <h6 class="navbar-heading p-0 mt-3 text-muted"><?php echo e(__('YOUR BUSINESS')); ?></h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.deposits.index')]) ?>" href="<?php echo e(route('user.deposits.index')); ?>">
                            <i class="fas fa-arrow-up text-info"></i>
                            <span class="nav-link-text"><?php echo e(__('Deposit')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                            'nav-link',
                            'active' =>
                                Route::is('user.transfers.index') || Route::is('user.transfers.create'),
                        ]) ?>" href="<?php echo e(route('user.transfers.index')); ?>">
                            <i class="fas fa-random text-orange"></i>
                            <span class="nav-link-text"><?php echo e(__('Transfer Money')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.qr-payments.index')]) ?>" href="<?php echo e(route('user.qr-payments.index')); ?>">
                            <i class="fas fa-qrcode text-info"></i>
                            <span class="nav-link-text"><?php echo e(__('Qr Payments')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.supports.index')]) ?>" href="<?php echo e(route('user.supports.index')); ?>">
                            <i class="fas fa-flag-usa text-default"></i>
                            <span class="nav-link-text"><?php echo e(__('Support')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.subscribers.index')]) ?>" href="<?php echo e(route('user.subscribers.index')); ?>">
                            <i class="fa fa-user text-primary" aria-hidden="true"></i>
                            <span class="nav-link-text"><?php echo e(__('Subscribers')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.transactions.index')]) ?>" href="<?php echo e(route('user.transactions.index')); ?>">
                            <i class="fas fa-money-check-alt text-green"></i>
                            <span class="nav-link-text"><?php echo e(__('Transactions')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.payouts.index')]) ?>" href="<?php echo e(route('user.payouts.index')); ?>">
                            <i class="fas fa-arrow-circle-down text-info"></i>
                            <span class="nav-link-text"><?php echo e(__('Payouts')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.charges.index')]) ?>" href="<?php echo e(route('user.charges.index')); ?>">
                            <i class="fas fa-comment-dollar text-red"></i>
                            <span class="nav-link-text"><?php echo e(__('Charges')); ?></span>
                        </a>
                    </li>
                </ul>
                <h6 class="navbar-heading p-0 text-muted"><?php echo e(__('COLLECT PAYMENTS')); ?></h6>
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.categories.index')]) ?>" href="<?php echo e(route('user.categories.index')); ?>">
                            <i class="fas fa-sitemap text-dark"></i>
                            <span class="nav-link-text"><?php echo e(__('Categories')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.storefronts.index')]) ?>" href="<?php echo e(route('user.storefronts.index')); ?>">
                            <i class="fas fa-store-alt text-pink"></i>
                            <span class="nav-link-text"><?php echo e(__('Store front')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => request()->is('*/digital-products') || request()->is('*/physical-products')]) ?>" href="#navbar-products" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                            <i class="fas fa-shopping-bag text-gray"></i>
                            <span class="nav-link-text"><?php echo e(__('Products')); ?></span>
                        </a>
                        <div class="<?php echo e(request()->is('*/digital-products') || request()->is('*/physical-products') ? '':'collapse'); ?>" id="navbar-products">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('user.physical-products.index')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => request()->is('*/physical-products')]) ?>"><?php echo e(__('Physical products')); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('user.digital-products.index')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => request()->is('*/digital-products')]) ?>"><?php echo e(__('Digital products')); ?></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.shipping-rate.index')]) ?>" href="<?php echo e(route('user.shipping-rate.index')); ?>">
                            <i class="fas fa-street-view"></i>
                            <span class="nav-link-text"><?php echo e(__('Shippings')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.orders.index')]) ?>" href="<?php echo e(route('user.orders.index')); ?>">
                            <i class="fas fa-shopping-cart text-info"></i>
                            <span class="nav-link-text"><?php echo e(__('Orders')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.request-money.index'), ]) ?>" href="<?php echo e(route('user.request-money.index')); ?>">
                            <i class="fas fa-handshake text-success"></i>
                            <span class="nav-link-text"><?php echo e(__('Request Money')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Request::is('user/single-charges*')]) ?>" href="<?php echo e(route('user.single-charges.index')); ?>">
                            <i class="fas fa-link text-primary"></i>
                            <span class="nav-link-text"><?php echo e(__('Single Charge')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Request::is('user/donations')]) ?>" href="<?php echo e(route('user.donations.index')); ?>">
                            <i class="fas fa-gift text-default"></i>
                            <span class="nav-link-text"><?php echo e(__('Donation')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.invoices.index')]) ?>" href="<?php echo e(route('user.invoices.index')); ?>">
                            <i class="fas fa-envelope text-red"></i>
                            <span class="nav-link-text"><?php echo e(__('Invoice')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.plans.index')]) ?>" href="<?php echo e(route('user.plans.index')); ?>">
                            <i class="fas fa-layer-group text-info"></i>
                            <span class="nav-link-text"><?php echo e(__('Plan')); ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is('user.websites.index')]) ?>" href="<?php echo e(route('user.websites.index')); ?>">
                            <i class="fas fa-laptop"></i>
                            <span class="nav-link-text"><?php echo e(__('Website Integration')); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/user/partials/sidenav.blade.php ENDPATH**/ ?>
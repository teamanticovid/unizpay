<?php $__env->startSection('title', __('Transactions')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row mb-5">
        <div class="col text-center">
            <a href="<?php echo e(route('user.transactions.index')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["latter-space-0 nav-link d-inline-block", "active" => Request::is('user/transactions')]) ?>">
                <i class="fas fa-link"></i>
                <?php echo e(__("All Transactions")); ?>

            </a>
            <a href="<?php echo e(route('user.transactions.index', 'single-charge')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["latter-space-0 nav-link d-inline-block", "active" => Request::is('user/transactions/single-charge')]) ?>">
                <i class="fas fa-link"></i>
                <?php echo e(__("Single Charge")); ?>

            </a>
            <a href="<?php echo e(route('user.transactions.index', 'donation')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["latter-space-0 nav-link d-inline-block", "active" => Request::is('user/transactions/donation')]) ?>">
                <i class="fas fa-gift"></i>
                <?php echo e(__("Donation")); ?>

            </a>
            <a href="<?php echo e(route('user.transactions.index', 'qr-code')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["latter-space-0 nav-link d-inline-block", "active" => Request::is('user/transactions/qr-code')]) ?>">
                <i class="fas fa-arrow-down"></i>
                <?php echo e(__("Qr Code")); ?>

            </a>
            <a href="<?php echo e(route('user.transactions.index', 'invoice')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["latter-space-0 nav-link d-inline-block", "active" => Request::is('user/transactions/invoice')]) ?>">
                <i class="fas fa-envelope"></i>
                <?php echo e(__("Invoice")); ?>

            </a>
            <a href="<?php echo e(route('user.transactions.index', 'deposit')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["latter-space-0 nav-link d-inline-block", "active" => Request::is('user/transactions/deposit')]) ?>">
                <i class="fas fa-arrow-up"></i>
                <?php echo e(__("Deposit")); ?>

            </a>
            <a href="<?php echo e(route('user.transactions.index', 'website')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["latter-space-0 nav-link d-inline-block", "active" => Request::is('user/transactions/website')]) ?>">
                <i class="fas fa-laptop"></i>
                <?php echo e(__("Website")); ?>

            </a>
            <a href="<?php echo e(route('user.transactions.index', 'plan')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["latter-space-0 nav-link d-inline-block", "active" => Request::is('user/transactions/plan')]) ?>">
                <i class="fas fa-user"></i>
                <?php echo e(__("Your Subscriptions")); ?>

            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 total-transactions">
                                <img src="https://foodsify.xyz/uploads/loader.gif" height="20" id="loading">
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Transactions')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 credit-transactions">
                                <img src="https://foodsify.xyz/uploads/loader.gif" height="20" id="loading">
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Credit Transactions')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 debit-transactions">
                                <img src="https://foodsify.xyz/uploads/loader.gif" height="20" id="loading">
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-money-coins"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Debit Transactions')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header pb-0">
            <h4><?php echo e(__("Transactions")); ?></h4>
            <form class="card-header-form">
                <div class="input-group">
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" class="form-control" placeholder="<?php echo e(__("Search...")); ?>">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive py-3">
                <?php if(is_null($type)): ?>
                    <?php echo $__env->make('user.transactions._all', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif($type == 'single-charge'): ?>
                    <?php echo $__env->make('user.transactions._single_charge', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif($type == 'donation'): ?>
                    <?php echo $__env->make('user.transactions._donation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif($type == 'qr-code'): ?>
                    <?php echo $__env->make('user.transactions._qr_code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif($type == 'invoice'): ?>
                    <?php echo $__env->make('user.transactions._invoice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif($type == 'deposit'): ?>
                    <?php echo $__env->make('user.transactions._deposit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif($type == 'website'): ?>
                    <?php echo $__env->make('user.transactions._website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif($type == 'plan'): ?>
                    <?php echo $__env->make('user.transactions._plan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <input type="hidden" id="get-transaction-url" value="<?php echo e(route('user.get-transaction')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('admin/js/admin.js')); ?>"></script>
    <script>
        getTotalTransactions()
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/transactions/index.blade.php ENDPATH**/ ?>
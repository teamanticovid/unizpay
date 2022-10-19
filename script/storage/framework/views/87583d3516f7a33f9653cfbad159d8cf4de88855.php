<?php $__env->startSection('title', __('Deposits')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Deposits list')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#deposit_modal">
        <i class="fas fa-hand-holding-usd"></i>
        <?php echo e(__('Make deposit')); ?>

    </button>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 total-deposits">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Deposits')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 completed-deposits">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Completed Deposits')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 pending-deposits">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Pending Deposits')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 rejected-deposits">
                                <img src="https://foodsify.xyz/uploads/loader.gif" height="20" id="loading">
                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-chart-bar-32"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Rejected Deposits')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary search-table">
        <div class="card-header pb-2">
            <h4></h4>
            <form action="<?php echo e(route('user.deposits.index')); ?>" class="card-header-form">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" class="form-control" placeholder="<?php echo e(__("Trx ID")); ?>">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="table-responsive pb-5">
            <table class="table table-flush">
                <thead class="thead-light">
                    <tr>
                        <th><?php echo e(__('S/N')); ?></th>
                        <th><?php echo e(__('Trx ID')); ?></th>
                        <th><?php echo e(__('Amount')); ?></th>
                        <th><?php echo e(__('Date')); ?></th>
                        <th><?php echo e(__('Charge')); ?></th>
                        <th><?php echo e(__('Payment Method')); ?></th>
                        <th><?php echo e(__('Status')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index + 1); ?></td>
                            <td><?php echo e($deposit->trx); ?></td>
                            <td><?php echo e(currency_format($deposit->amount, currency:user_currency())); ?></td>
                            <td><?php echo e(formatted_date($deposit->created_at)); ?></td>
                            <td><?php echo e(number_format($deposit->charge, 2)); ?></td>
                            <td>
                                <div class="badge badge-success">
                                    <?php echo e($deposit->gateway->name); ?>

                                </div>
                            </td>
                            <td>
                                <?php if($deposit->status == 2): ?>
                                <span class="badge badge-warning">
                                    <?php echo e(__('Pending')); ?>

                                </span>
                                <?php elseif($deposit->status == 1): ?>
                                <span class="badge badge-success">
                                    <?php echo e(__('Completed')); ?>

                                </span>
                                <?php else: ?>
                                <span class="badge badge-danger font-weight-600">
                                    <?php echo e(__('Rejected')); ?>

                                </span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php $__env->startPush('modal'); ?>
        <div class="modal fade" id="deposit_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="mb-0 h3 font-weight-bolder"><?php echo e(__('Make Deposit')); ?></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo e(__("Close")); ?>">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(route('user.deposits.store')); ?>" method="post" class="ajaxform_instant_reload">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label for=""><?php echo e(__('Enter amount')); ?></label>
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><?php echo e(user_currency()->symbol); ?></span>
                                        </span>
                                        <input type="number" step="any" class="form-control" name="amount" required=""
                                            placeholder="0.00">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-neutral btn-block submit-btn">
                                    <i class="fas fa-hand-holding-usd"></i>
                                    <?php echo e(__('Deposits')); ?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopPush(); ?>

    <input type="hidden" id="get-deposits-url" value="<?php echo e(route('user.get-deposits')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('user/js/card-data.js')); ?>"></script>
    <script>
        getTotalDeposits()
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/deposits/index.blade.php ENDPATH**/ ?>
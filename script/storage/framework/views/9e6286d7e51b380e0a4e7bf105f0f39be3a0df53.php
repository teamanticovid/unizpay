<?php $__env->startSection('title', __('Payout')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Payout')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#modal-formx">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <?php echo e(__('Withdraw Request')); ?>

    </button>
<?php $__env->stopSection(); ?>

<?php
    $option = get_option('charges');
?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 total-payouts">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Payouts')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 completed-payouts">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Completed')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 pending-payouts">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Pending')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 rejected-payouts">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Rejected')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row search-table">
        <div class="col-md-12 text-center">
            <?php if($payouts->count() > 0 || request('search')): ?>
            <div class="card">
                <div class="card-header">
                    <h4></h4>
                    <form action="<?php echo e(route('user.payouts.index')); ?>" class="card-header-form">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input type="text" name="search" value="<?php echo e(request('search')); ?>" class="form-control" placeholder="<?php echo e(__("Trx ID")); ?>">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive p3-5">
                    <table class="table table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th><?php echo e(__('S / N')); ?></th>
                                <th><?php echo e(__('Trx ID')); ?></th>
                                <th><?php echo e(__('Amount')); ?></th>
                                <th><?php echo e(__('Charge')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__('Created At')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $payouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index+1); ?></td>
                                <td><?php echo e($payout->trx); ?></td>
                                <td><?php echo e(currency_format($payout->amount, currency:user_currency())); ?></td>
                                <td><?php echo e(currency_format($payout->charge, currency:user_currency())); ?></td>
                                <td>
                                    <?php if($payout->status == 'pending'): ?>
                                    <span class="badge badge-warning"><?php echo e(__('Pending')); ?></span>
                                    <?php elseif($payout->status == 'rejected'): ?>
                                        <span class="badge badge-danger"><?php echo e(__('Rejected')); ?></span>
                                    <?php elseif($payout->status == 'approved'): ?>
                                        <span class="badge badge-success"><?php echo e(__('Approved')); ?></span>
                                        <?php endif; ?>
                                </td>
                                <td><?php echo e(formatted_date($payout->created_at)); ?></td>
                                <td>
                                    <a href="<?php echo e(route('user.payouts.show', $payout->id)); ?>">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="card-body pb-0">
                        <?php echo e($payouts->links('vendor.pagination.bootstrap-5')); ?>

                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="row">
                <div class="col mt-5">
                    <img src="<?php echo e(asset('user/img/icons/empty.svg')); ?>" alt="">
                    <h4 class="mt-3"><?php echo e(__('No Payout Request')); ?></h4>
                    <p><?php echo e(__("We couldn't find any payout request to this account")); ?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <?php $__env->startPush('modal'); ?>
        <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="mb-0 h3 font-weight-bolder"><?php echo e(__('Create Payout Request')); ?></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(route('user.payouts.store')); ?>" method="post" class="ajaxform_instant_reload">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><?php echo e(user_currency()->symbol); ?></span>
                                        </div>
                                        <input type="number" step="any" name="amount" id="amounttransfer3" class="form-control" placeholder="0.00" required="">
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <select name="bank_id" id="bank_id" class="form-control" required>
                                            <option value="">-<?php echo e(__('Select Bank')); ?>-</option>
                                            <?php $__currentLoopData = $userbanks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userbank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($userbank->id); ?>"><?php echo e($userbank->bank->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <span class="form-text text-xs">
                                        <?php echo e(__('Withdraw charge is')); ?>

                                        <?php echo e($option['transfer_charge']['type'] == 'fixed' ? currency_format($option['transfer_charge']['rate'], currency:user_currency()) : $option['transfer_charge']['rate'].'%'); ?> +
                                        <?php echo e($option['withdraw_charge']['type'] == 'fixed' ? currency_format($option['withdraw_charge']['rate'], currency:user_currency()) : $option['withdraw_charge']['rate'].'%'); ?>

                                    </span>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-neutral btn-block submit-btn"><?php echo e(__('Request Payout')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopPush(); ?>
    <input type="hidden" id="get-payouts-url" value="<?php echo e(route('user.get-payouts')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('admin/js/admin.js')); ?>"></script>
    <script>
        getTotalPayouts()
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/payouts/index.blade.php ENDPATH**/ ?>
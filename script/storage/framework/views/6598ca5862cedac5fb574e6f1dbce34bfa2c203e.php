<?php $__env->startSection('title', __('Qr Payment')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Qr Payment List')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <a href="#" data-toggle="modal" data-target="#qr-code" class="btn btn-sm btn-neutral"><i class="fa fa-download" aria-hidden="true"></i> <?php echo e(__('Download QR')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 total">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total payments')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 amount">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total payments amount')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card search-table">
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
            <div class="table-responsive">
                <table class="table table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th><?php echo e(__('S/N')); ?></th>
                            <th><?php echo e(__('Invoice no')); ?></th>
                            <th><?php echo e(__('TRX')); ?></th>
                            <th><?php echo e(__('Amount')); ?></th>
                            <th><?php echo e(__('From')); ?></th>
                            <th><?php echo e(__("Comment")); ?></th>
                            <th><?php echo e(__('Created')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $qrPayments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index+1); ?></td>
                            <td><?php echo e($order->invoice_no); ?></td>
                            <td><?php echo e($order->trx); ?></td>
                            <td><?php echo e(currency_format($order->amount, currency: user_currency())); ?></td>
                            <td>
                                <?php echo e($order->name); ?><br>
                                <?php echo e($order->email); ?>

                            </td>
                            <td><?php echo e($order->comment); ?></td>
                            <td><?php echo e(formatted_date($order->created_at)); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="card-body pb-0">
                    <?php echo e($qrPayments->links('vendor.pagination.custom')); ?>

                </div>
            </div>
        </div>
    </div>
    <?php $__env->startPush('modal'); ?>
    <div class="modal fade" id="qr-code" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h3 class="mb-0 font-weight-bolder"><?php echo e(__('Add category')); ?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo e(__("Close")); ?>">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col text-center">
                            <div id="qrcode" class="mx-auto mb-3">

                    </div>

                    <a href="" id="download-qr" class="custom-btn d-block btn-block mt-3 py-2 download-qr" download="<?php echo e(auth()->user()->name . '.png'); ?>">
                        <i class="fas fa-download"></i> <?php echo e(__('Download')); ?>

                    </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopPush(); ?>
    <input type="hidden" id="get-products-url" value="<?php echo e(route('user.get-payments')); ?>">
    <input type="hidden" id="qrUrl" value="<?php echo e(route('frontend.qr.index', auth()->user()->qr)); ?>">
    <input type="hidden" id="username" value="<?php echo e(auth()->user()->name); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('plugins/qr2js/qrjs2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('user/js/card-data.js')); ?>"></script>
    <script>
        getTotalProducts();

       
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/qrpayments/index.blade.php ENDPATH**/ ?>
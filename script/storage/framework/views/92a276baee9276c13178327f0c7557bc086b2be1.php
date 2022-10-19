<?php $__env->startSection('title', __('Transactions Log')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4><?php echo e(__('API Documentation')); ?></h4>
                            <p class="text-base"><?php echo e(__('Our documentation contains what you need to integrate Boompay in your website.')); ?></p>
                            <a href="<?php echo e(route('user.websites.documentation')); ?>" class="mt-2 btn btn-outline-primary btn-sm"><i class="fas fa-file-alt"></i> <?php echo e(__('Go to Docs')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4><?php echo e(__('Your Keys')); ?></h4>
                            <p><?php echo e(__('Also available in')); ?> <a href="<?php echo e(url('/user/api-keys')); ?>" class="text-primary"><?php echo e(__('Settings > API Keys')); ?></a></p>

                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text rounded-0"><?php echo e(__('PUBLIC KEY')); ?></span>
                                <input type="text" class="form-control" id="public_key" value="<?php echo e(Auth::user()->public_key); ?>">
                                <button class="input-group-text rounded-0 clipboard-button" data-clipboard-target="#public_key" data-message="<?php echo e(__(':name copied to clipboard', ['name' => __('Public Key')])); ?>">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>

                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text rounded-0"><?php echo e(__('SECRET KEY')); ?></span>
                                <input type="text" class="form-control" id="secret_key" value="<?php echo e(Auth::user()->secret_key); ?>">
                                <button class="input-group-text rounded-0 clipboard-button" data-clipboard-target="#secret_key" data-message="<?php echo e(__(':name copied to clipboard', ['name' => __('Secret Key')])); ?>">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($transactions->count() > 0): ?>

            <div class="card mt-4">
                <div class="table-responsive py-3 ">
                    <table class="table table-flush" id="table">
                        <thead class="thead-light">
                            <tr>
                                <th><?php echo e(__('S/N')); ?></th>
                                <th><?php echo e(__('Amount')); ?></th>
                                <th><?php echo e(__('Charge')); ?></th>
                                <th><?php echo e(__('Date')); ?></th>
                                <th><?php echo e(__('Reason')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index+1); ?></td>
                                    <td><?php echo e($transaction->amount); ?></td>
                                    <td><?php echo e($transaction->charge); ?></td>
                                    <td><?php echo e(formatted_date($transaction->created_at)); ?></td>
                                    <td><?php echo e($transaction->reason); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="card-body pb-0">
                        <?php echo e($transactions->links('vendor.pagination.custom')); ?>

                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="row my-5">
                <div class="col text-center">
                    <img src="<?php echo e(asset('user/img/icons/empty.svg')); ?>" alt="">
                    <h4 class="mt-3"><?php echo e(__('No Earning History')); ?></h4>
                    <p><?php echo e(__("We couldn't find any earning log to this account")); ?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col text-center">
                    <div id="qrcode" class="mx-auto mb-3">

                    </div>

                    <a href="" id="download-qr" class="custom-btn d-block btn-block mt-3 py-2 download-qr" download="<?php echo e(auth()->user()->name . '.png'); ?>">
                        <i class="fas fa-download"></i> <?php echo e(__('Download')); ?>

                    </a>
                </div>
            </div>
            <hr>
            <div class="row mt-5">
                <div class="col text-center">
                    <h4 class="text-base"><i class="fas fa-cart-plus"></i> <?php echo e(__('Total Payout')); ?> </h4>
                    <h3><?php echo e(user_currency()->code ." ". number_format($payouts, 2)); ?></h3>
                    <a href="<?php echo e(route('user.profiles.index')); ?>" class="custom-btn d-block btn-block mt-3 py-2"><i class="fas fa-arrow-up"></i> <?php echo e(__('Upgrade Account')); ?> </a>
                </div>
            </div>
            <hr>
            <div class="row mt-5">
                <div class="col text-center">
                    <h4 class="text-base"><i class="fas fa-comment-dollar"></i> <?php echo e(__('Revenue')); ?> </h4>
                    <h3><?php echo e(currency_format(auth()->user()->wallet, currency:user_currency())); ?></h3>
                    <a href="<?php echo e(url('/user/payouts')); ?>" class="custom-btn d-block btn-block mt-3 py-2"><i class="fas fa-history"></i>  <?php echo e(__('All Payouts')); ?></a>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('user.dashboard.charts.debit-credit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('user.dashboard.charts.order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('user.dashboard.charts.single-charge', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('user.dashboard.charts.donation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('user.dashboard.charts.plans', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('user.dashboard.charts.qr-payments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <input type="hidden" id="get-chart-data" value="<?php echo e(route('user.dashboard.chart')); ?>">
    <input type="hidden" id="qrUrl" value="<?php echo e(route('frontend.qr.index', auth()->user()->qr)); ?>">
    <input type="hidden" id="username" value="<?php echo e(auth()->user()->name); ?>">
    <input type="hidden" id="currency" value="<?php echo e(user_currency()->symbol); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('user/js/chart/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/qr2js/qrjs2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/plugins/clipboard-js/clipboard.min.js')); ?>"></script>
    <script src="<?php echo e(asset('user/vendor/jvectormap-next/jquery-jvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('user/js/vendor/jvectormap/jquery-jvectormap-world-mill.js')); ?>"></script>
    <script src="<?php echo e(asset('user/js/chart/dashboard.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/dashboard/index.blade.php ENDPATH**/ ?>
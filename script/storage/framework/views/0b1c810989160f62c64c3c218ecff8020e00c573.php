<?php $__env->startSection('title', __('Charges')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Charges')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-9">
            <div class="card search-table">
                <div class="card-header">
                    <h4></h4>
                    <form action="<?php echo e(route('user.charges.index')); ?>" class="card-header-form">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input type="text" name="search" value="<?php echo e(request('search')); ?>" class="form-control" placeholder="<?php echo e(__("Amount / Reason")); ?>">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive pb-3">
                    <table class="table table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th><?php echo e(__('ID')); ?></th>
                                <th><?php echo e(__('Service Charge')); ?></th>
                                <th><?php echo e(__('Reason')); ?></th>
                                <th><?php echo e(__('Created')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $charges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $charge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($charge->invoice_no); ?></td>
                                    <td><?php echo e(currency_format($charge->charge, currency:user_currency())); ?></td>
                                    <td><?php echo e($charge->reason); ?></td>
                                    <td><?php echo e(formatted_date($charge->created_at)); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($charges->links('vendor.pagination.bootstrap-5')); ?>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0">
                                <?php echo e(currency_format($total_charges, currency:user_currency())); ?>

                            </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <h3 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Charges')); ?></h3>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/charges/index.blade.php ENDPATH**/ ?>
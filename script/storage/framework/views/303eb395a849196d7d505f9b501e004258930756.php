<?php $__env->startSection('title', __('Subscribers')); ?>

<?php $__env->startSection('content'); ?>
    <div class="card mt-4 subscriber-table">
        <div class="table-responsive py-3 ">
            <table class="table table-flush" id="table">
                <thead class="thead-light">
                    <tr>
                        <th><?php echo e(__('S / N')); ?></th>
                        <th><?php echo e(__('Name')); ?></th>
                        <th><?php echo e(__('Amount')); ?></th>
                        <th><?php echo e(__('Charge')); ?></th>
                        <th><?php echo e(__('Plan')); ?></th>
                        <th><?php echo e(__('Reference ID')); ?></th>
                        <th><?php echo e(__('Expiring Date')); ?></th>
                        <th><?php echo e(__('Renewal')); ?></th>
                        <th><?php echo e(__('Created')); ?></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('user/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('user/vendor/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('user/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/subscribers/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', __('Supports')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Supports')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <a href="<?php echo e(route('user.supports.create')); ?>" class="btn btn-sm btn-neutral">
        <?php echo e(__('Open Ticket')); ?>

    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if($tickets->count() > 0): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0"><?php echo e(__("Payment Links")); ?></h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th><?php echo e(__("Subject")); ?></th>
                                <th><?php echo e(__("Priority")); ?></th>
                                <th><?php echo e(__("Type")); ?></th>
                                <th><?php echo e(__('Reference')); ?></th>
                                <th><?php echo e(__('Details')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__("Created At")); ?></th>
                                <th><?php echo e(__("Action")); ?></th>
                            </tr>
                            </thead>
                            <tbody class="list" style="min-height: 200px">
                            <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($ticket->subject); ?></td>
                                    <td><?php echo e($ticket->priority); ?></td>
                                    <td><?php echo e($ticket->type); ?></td>
                                    <td><?php echo e($ticket->reference_code); ?></td>
                                    <td><?php echo e(str($ticket->details)->words(30)); ?></td>
                                    <td>
                                        <?php if($ticket->status): ?>
                                            <span class="badge badge-danger">
                                                <i class="fas fa-check"></i>
                                                <?php echo e(__('Closed')); ?>

                                            </span>
                                        <?php else: ?>
                                            <span class="badge badge-success">
                                                <i class="fas fa-spinner"></i>
                                                <?php echo e(__('Open')); ?>

                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e(formatted_date($ticket->created_at)); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('user.supports.show', $ticket->id)); ?>" class="btn btn-light btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo e($tickets->links('vendor/pagination/bootstrap-5')); ?>

                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="row my-5 py-5">
            <div class="col text-center mt-5">
                <img src="<?php echo e(asset('user/img/icons/empty.svg')); ?>" alt="">
                <h4 class="mt-3"><?php echo e(__('No Ticket Found')); ?></h4>
                <p><?php echo e(__("We couldn't find any ticket to this account")); ?></p>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/supports/index.blade.php ENDPATH**/ ?>
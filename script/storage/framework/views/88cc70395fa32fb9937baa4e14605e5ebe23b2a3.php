<?php $__env->startSection('title', __('Customers')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-clipboard"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4><?php echo e(__('Total Customers')); ?></h4>
                    </div>
                    <div class="card-body total-customers">
                        <img src="https://foodsify.xyz/uploads/loader.gif" height="20" id="loading" >
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-wallet"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4><?php echo e(__('Active Customers')); ?></h4>
                    </div>
                    <div class="card-body active-customers">
                        <img src="https://foodsify.xyz/uploads/loader.gif" height="20" id="loading" >
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-wallet"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4><?php echo e(__('Paused Customers')); ?></h4>
                    </div>
                    <div class="card-body paused-customers">
                        <img src="https://foodsify.xyz/uploads/loader.gif" height="20" id="loading">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-history"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4><?php echo e(__('Suspended Customers')); ?></h4>
                    </div>
                    <div class="card-body suspend-customers">
                        <img src="https://foodsify.xyz/uploads/loader.gif" height="20" id="loading" >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4><?php echo e(__('Customer List')); ?></h4>
                    <form action="<?php echo e(route('admin.customers.index')); ?>" class="card-header-form">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input type="text" name="search" value="<?php echo e(request('search')); ?>" class="form-control" placeholder="<?php echo e(__('Search by name / email')); ?>">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <?php if($customers->count() > 0): ?>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Email')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('Registered At')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center">
                                        <td class="text-left"><?php echo e($user->name); ?></td>
                                        <td class="text-left"><?php echo e($user->email); ?></td>
                                        <td>
                                            <?php if($user->status ==1): ?>
                                                <span class="badge badge-success"><?php echo e(__('Active')); ?></span>
                                            <?php elseif($user->status == 2): ?>
                                                <span class="badge badge-warning"><?php echo e(__('Inactive')); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php echo e(__('Banned')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e(formatted_date($user->created_at)); ?>

                                            <br>
                                            <?php echo e($user->created_at->diffForHumans()); ?>

                                        </td>
                                        <td>
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                <?php echo e(__('Action')); ?>

                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item has-icon action-confirm" href="javascript:void(0)" data-action="<?php echo e(route('admin.customer.login', $user->id)); ?>" data-icon="success" data-text="You want to login now?">
                                                    <i class="fa fa-sign"></i>
                                                    <?php echo e(__('Login')); ?>

                                                </a>

                                                <a
                                                    class="dropdown-item has-icon"
                                                    href="<?php echo e(route('admin.customers.show', $user->id)); ?>"
                                                >
                                                    <i class="fa fa-eye"></i>
                                                    <?php echo e(__('View')); ?>

                                                </a>

                                                <a
                                                    class="dropdown-item has-icon"
                                                    href="<?php echo e(route('admin.customers.edit', $user->id)); ?>"
                                                >
                                                    <i class="fa fa-edit"></i>
                                                    <?php echo e(__('Edit')); ?>

                                                </a>

                                                <a
                                                    href="javascript:void(0)"
                                                    class="dropdown-item has-icon delete-confirm"
                                                    data-action="<?php echo e(route('admin.customers.destroy', $user->id)); ?>"
                                                    data-method="DELETE"
                                                >
                                                    <i class="fa fa-trash"></i>
                                                    <?php echo e(__('Delete')); ?>

                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($customers->appends(request()->all())->links('vendor.pagination.bootstrap-5')); ?>

                        </div>
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginalfc27a545df2c395efe5f29ebf27cce136ad730ce = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DataNotFound::class, ['message' => __('Customer Not Found')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('data-not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\DataNotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['button_icon' => 'fas fa-plus']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc27a545df2c395efe5f29ebf27cce136ad730ce)): ?>
<?php $component = $__componentOriginalfc27a545df2c395efe5f29ebf27cce136ad730ce; ?>
<?php unset($__componentOriginalfc27a545df2c395efe5f29ebf27cce136ad730ce); ?>
<?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="get-customers-url" value="<?php echo e(route('admin.get-customers')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('admin/js/admin.js')); ?>"></script>
    <script>
        "use strict";
        getTotalCustomers()
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/admin/customers/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', __('Physical Products')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Physical products list')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <a href="<?php echo e(route('user.physical-products.create')); ?>" class="btn btn-sm btn-neutral"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo e(__('Add physical products')); ?></a>
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
                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total physical products')); ?></h5>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="card card-stats">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="h2 font-weight-bold mb-0 quantity">
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
                    <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total physical products quantity')); ?></h5>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row search-table">
    <div class="col-md-12">
        <?php if($products->count() > 0 || request('search')): ?>
        <div class="card">
            <div class="card-header pb-2">
                <h4></h4>
                <form action="<?php echo e(route('user.physical-products.index')); ?>" class="card-header-form">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input type="text" name="search" value="<?php echo e(request('search')); ?>" class="form-control" placeholder="Name/Price">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th><?php echo e(__('S/N')); ?></th>
                            <th><?php echo e(__('Image')); ?></th>
                            <th><?php echo e(__('Name')); ?></th>
                            <th><?php echo e(__('Price')); ?></th>
                            <th><?php echo e(__('Quantity')); ?></th>
                            <th><?php echo e(__('Created At')); ?></th>
                            <th><?php echo e(__('Action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index+1); ?></td>
                                <td><img width="40px" class="rounded-circle" src="<?php echo e(asset($product->image ?? 'https://via.placeholder.com/50')); ?>" alt=""></td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e(currency_format($product->price, currency:user_currency())); ?></td>
                                <td><?php echo e($product->quantity); ?></td>
                                <td><?php echo e(formatted_date($product->created_at)); ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo e(route('user.physical-products.edit', $product->id)); ?>"><i class="fas fa-edit mr-1"></i>  <?php echo e(__('Edit')); ?></a>

                                            <a class="dropdown-item confirm-action" href="#"
                                                data-action="<?php echo e(route('user.physical-products.destroy', $product->id)); ?>"
                                                data-method="DELETE"
                                                data-icon="fas fa-trash"
                                            >
                                                <i class="fas fa-trash mr-1"></i>
                                                <?php echo e(__("Delete")); ?>

                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="card-body pb-0">
                    <?php echo e($products->links('vendor.pagination.bootstrap-5')); ?>

                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="row mt-5 pt-5">
            <div class="col-md-12 mb-5">
                <div class="text-center">
                    <div class="mb-3">
                        <img src="<?php echo e(asset('user/img/icons/empty.svg')); ?>">
                    </div>
                    <h3 class="text-dark"><?php echo e(__('No Product Found')); ?></h3>
                    <p class="text-dark text-sm card-text"><?php echo e(__("We couldn't find any product to this account")); ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<input type="hidden" id="get-products-url" value="<?php echo e(route('user.get-physical-products')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('user/js/card-data.js')); ?>"></script>
    <script>
        getTotalProducts()
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/physical-products/index.blade.php ENDPATH**/ ?>
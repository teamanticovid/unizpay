<?php $__env->startSection('title', __('Store fronts')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Store fronts list')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <a href="<?php echo e(route('user.storefronts.create')); ?>" class="btn btn-sm btn-neutral"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo e(__('Create store fronts')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-4 col-md-6">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Stores')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 physical">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Physical Stores')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <span class="h2 font-weight-bold mb-0 digital">
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
                        <h5 class="card-title text-uppercase text-muted mb-0"><?php echo e(__('Total Digital Stores')); ?></h5>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row search-table">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-2">
                    <h4></h4>
                    <form action="<?php echo e(route('user.storefronts.index')); ?>" class="card-header-form">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input type="text" name="search" value="<?php echo e(request('search')); ?>" class="form-control" placeholder="<?php echo e(__("Store name2")); ?>">
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
                                <th><?php echo e(__('S/N')); ?></th>
                                <th><?php echo e(__('Image')); ?></th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Shopping status')); ?></th>
                                <th><?php echo e(__('Product Tyep')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__('Copy Link')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index+1); ?></td>
                                <td><img width="40px" class="rounded-circle" src="<?php echo e(asset($store->image ?? 'https://via.placeholder.com/50')); ?>" alt=""></td>
                                <td><?php echo e($store->name); ?></td>
                                <td>
                                    <?php if($store->shipping_status == 1): ?>
                                        <span class="badge badge-pill badge-success"><i class="fas fa-check"></i> <?php echo e(__('ACTIVE')); ?></span>
                                    <?php else: ?>
                                        <span class="badge badge-pill badge-danger"><i class="fa fa-times"></i> <?php echo e(__('DEACTIVATE')); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-primary"><i class="fas fa-check"></i> <?php echo e($store->product_type == 0 ? __('Physical'):__('Digital')); ?></span>
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-<?php echo e($store->status == 0 ? 'danger':'primary'); ?>"><i class="fas fa-check"></i> <?php echo e($store->status == 0 ? __('Disabled'):__('Active')); ?></span>
                                </td>
                                <td>
                                    <input type="hidden" id="clip<?php echo e($loop->index); ?>" value="<?php echo e(route('frontend.store-products', $store->id)); ?>">
                                    <span class="clipboard-button" data-clipboard-target="#clip<?php echo e($loop->index); ?>">
                                        <i class="fas fa-link cursor-pointer"></i>
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo e(route('user.store-products', $store->id)); ?>"><i class="fas fa-shopping-bag mr-1"></i>  <?php echo e(__('Products')); ?></a>

                                            <a class="dropdown-item" href="<?php echo e(route('user.orders.index', ['store' => $store->id])); ?>"><i class="fas fa-shopping-cart mr-1"></i>  <?php echo e(__('Orders')); ?></a>

                                            <a class="dropdown-item" href="<?php echo e(route('user.storefronts.edit', $store->id)); ?>"><i class="fas fa-edit mr-1"></i>  <?php echo e(__('Edit')); ?></a>

                                            <a class="dropdown-item confirm-action" href="#"
                                                data-action="<?php echo e(route('user.storefronts.destroy', $store->id)); ?>"
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
                        <?php echo e($stores->links('vendor.pagination.bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="get-stores-url" value="<?php echo e(route('user.get-stores')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('admin/js/admin.js')); ?>"></script>
    <script>
        getTotalStores()
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/storefronts/index.blade.php ENDPATH**/ ?>
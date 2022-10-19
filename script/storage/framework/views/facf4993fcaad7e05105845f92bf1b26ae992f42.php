<?php $__env->startSection('title', __('Store fronts')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Store fronts create')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <a href="<?php echo e(route('user.storefronts.index')); ?>" class="btn btn-sm btn-neutral"><i class="fas fa-list"></i> <?php echo e(__('View list')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('user.storefronts.store')); ?>" method="post" class="ajaxform_instant_reload" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><?php echo e(__('Store Name')); ?></label>
                                    <input type="text" name="name" class="form-control" placeholder="<?php echo e(__("The name of your store")); ?>" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><?php echo e(__('Shipping Status')); ?></label>
                                    <select class="form-control custom-select" name="shipping_status" required="">
                                        <option value="1"><?php echo e(__('Active')); ?></option>
                                        <option value="0"><?php echo e(__('Disabled')); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label><?php echo e(__('Store Logo')); ?> <span class="text-warning"><?php echo e(__('Recomend (150/50)')); ?></span></label>
                                <input type="file" name="image" class="form-control" required="">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><?php echo e(__('Delivery Note')); ?></label>
                                    <select class="form-control custom-select" name="note_status" required="">
                                        <option value="0"><?php echo e(__("Disabled")); ?></option>
                                        <option value="1"><?php echo e(__("Required")); ?></option>
                                        <option value="2"><?php echo e(__("Optional")); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><?php echo e(__('Product Type')); ?></label>
                                    <select class="form-control custom-select" name="product_type" required="">
                                        <option value="0"><?php echo e(__("Physical")); ?></option>
                                        <option value="1"><?php echo e(__("Digital")); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label><?php echo e(__('Store Description')); ?></label>
                                    <textarea type="text" name="description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-neutral btn-block submit-btn"><?php echo e(__('Create Store')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/storefronts/create.blade.php ENDPATH**/ ?>
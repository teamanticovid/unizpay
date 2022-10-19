<?php $__env->startSection('title', __('Create physical product')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Product create')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <a href="<?php echo e(route('user.physical-products.index', ['action' => 'products'])); ?>" class="btn btn-sm btn-neutral"><i class="fa fa-eye"
            aria-hidden="true"></i> <?php echo e(__('View list')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('user.physical-products.store')); ?>" method="post" enctype="multipart/form-data" class="ajaxform_instant_reload">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="col-sm-6 mb-4">
                                <label><?php echo e(__('Name')); ?></label>
                                <input type="text" name="name" class="form-control" placeholder="<?php echo e(__("The name of your product")); ?>" required="">
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label><?php echo e(__("Category")); ?></label>
                                <select class="form-control custom-select" name="category_id" required="">
                                    <option value=""><?php echo e(__("Select Category")); ?></option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($categoiry->id); ?>"><?php echo e($categoiry->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label><?php echo e(__('Price')); ?></label>
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><?php echo e(user_currency()->symbol); ?></span>
                                    </div>
                                    <input type="number" step="any" name="price" class="form-control pl-1" required="">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label><?php echo e(__("Quantity")); ?></label>
                                <input type="number" name="quantity" class="form-control" value="1" required="">
                            </div>
                            <div class="col-sm-12 mb-4">
                                <label><?php echo e(__("Image")); ?></label>
                                <input type="file" name="image" class="form-control" required="">
                            </div>
                            <div class="col-sm-12 mb-4">
                                <label for="store"><?php echo e(__("Select Store")); ?></label>
                                <select name="store_ids[]" id="store" data-toggle="select" multiple>
                                    <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($store->id); ?>"><?php echo e($store->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-sm-12 mb-4 summernote-css">
                                <label for="description"><?php echo e(__("Description")); ?></label>
                                <textarea rows="5" name="description" id="description" class="summernote" placeholder="<?php echo e(__("Product description")); ?>"></textarea>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-neutral btn-block submit-btn"><?php echo e(__("Create Product")); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('user/vendor/select2/dist/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('admin/plugins/summernote/summernote-bs4.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('user/vendor/select2/dist/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/summernote/summernote-bs4.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/summernote/summernote.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/physical-products/create.blade.php ENDPATH**/ ?>
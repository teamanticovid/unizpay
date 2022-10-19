<?php $__env->startSection('title', __('Categories')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard.index')); ?>"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Categories list')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('actions'); ?>
    <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-sm btn-neutral"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo e(__('Add new category')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row search-table">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-2">
                    <h4></h4>
                    <form action="<?php echo e(route('user.categories.index')); ?>" class="card-header-form">
                        <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input type="text" name="search" value="<?php echo e(request('search')); ?>" class="form-control" placeholder="<?php echo e(__("Category name")); ?>">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table table-flush">
                    <thead>
                        <tr>
                            <th><?php echo e(__('S / N')); ?></th>
                            <th><?php echo e(__('Name')); ?></th>
                            <th><?php echo e(__('Created At')); ?></th>
                            <th><?php echo e(__('Action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index+1); ?></td>
                            <td><?php echo e($category->title); ?></td>
                            <td><?php echo e(formatted_date($category->created_at)); ?></td>
                            <td>
                                <a href="javascript:void(0)" class="text-warning edit-category" data-category="<?php echo e($category); ?>"><i class="fas fa-edit mr-1"></i></a>

                                <a class="confirm-action text-danger" href="#" data-action="<?php echo e(route('user.categories.destroy', $category->id)); ?>" data-method="DELETE" data-icon="fas fa-trash" >
                                    <i class="fas fa-trash mr-1"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="card-body pb-0">
                    <?php echo e($categories->links('vendor.pagination.bootstrap-5')); ?>

                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('modal'); ?>
    <div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h3 class="mb-0 font-weight-bolder"><?php echo e(__('Add category')); ?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo e(__("Close")); ?>">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('user.categories.store')); ?>" method="post" class="ajaxform_instant_reload">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-12"><?php echo e(__('Name')); ?></label>
                            <div class="col-lg-12">
                                <input type="text" name="title" class="form-control" placeholder="<?php echo e(__("Name of Category")); ?>" required="">
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-neutral btn-block submit-btn"><?php echo e(__('Create Category')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h3 class="mb-0 font-weight-bolder"><?php echo e(__('Edit category')); ?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo e(__("Close")); ?>">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('user.categories.index')); ?>" method="post" class="ajaxform_instant_reload edit-category-form">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-12"><?php echo e(__('Name')); ?></label>
                            <div class="col-lg-12">
                                <input type="text" name="title" class="form-control category-title" placeholder="<?php echo e(__("Name of category")); ?>" required="">
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-neutral btn-block submit-btn"><?php echo e(__('Update category')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/categories/index.blade.php ENDPATH**/ ?>
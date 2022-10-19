<?php $__env->startSection('title', __('Edit SEO Settings')); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <form method="POST" action="<?php echo e(route('admin.seo.update', $data->id)); ?>"
                            class="ajaxform">
                            <?php echo method_field("PUT"); ?>
                            <?php echo csrf_field(); ?>

                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="text-md-right col-12 col-md-3 col-lg-3 required"><?php echo e(__('Site Name')); ?></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="site_name" value="<?php echo e($data->value['site_name'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class=" text-md-right col-12 col-md-3 col-lg-3 required"><?php echo e(__('Meta Tag Name')); ?></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="matatag" value="<?php echo e($data->value['matatag'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class=" text-md-right col-12 col-md-3 col-lg-3 required"><?php echo e(__('Twitter Site Title')); ?></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="twitter_site_title" value="<?php echo e($data->value['twitter_site_title'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class=" text-md-right col-12 col-md-3 col-lg-3 required"><?php echo e(__('Meta Description')); ?></label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="matadescription" id="" cols="30" rows="20" class="form-control" required><?php echo e($data->value['matadescription'] ?? ''); ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary basicbtn w-100 btn-lg" type="submit">
                                            <?php echo e(__('Update')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', [
    'prev'=> route('admin.seo.index')
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/admin/seo/edit.blade.php ENDPATH**/ ?>
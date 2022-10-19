<?php $__env->startSection('title', __('SEO Settings')); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <div class="card-header">
                    <h4><?php echo e(__('SEO Settings')); ?></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-xxs"><?php echo e(__('SL')); ?></th>
                                <th class="text-xxs"><?php echo e(__('Site Name')); ?></th>
                                <th class="text-xxs"><?php echo e(__('Twitter Site Title')); ?></th>
                                <th class=" text-xxs"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($key+1); ?>

                                    </td>
                                    <td>
                                        <?php echo e($val['site_name'] ?? null); ?>

                                    </td>

                                    <td>
                                        <?php echo e($val['twitter_site_title'] ?? null); ?>

                                    </td>
                                    <td class="align-middle">
                                        <a class="btn btn-primary text-light px-3 mb-0" href="<?php echo e(route('admin.seo.edit', $val->id)); ?>">
                                            <i class="fas fa-pencil-alt text-light mr-2"></i>
                                            <?php echo e(__('Edit')); ?>

                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/admin/seo/index.blade.php ENDPATH**/ ?>
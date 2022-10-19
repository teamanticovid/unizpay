<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php if (! empty(trim($__env->yieldContent('title')))): ?> <?php echo $__env->yieldContent('title'); ?> | <?php endif; ?><?php echo e(config('app.name')); ?></title>

    <!-- Favicon icon -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(get_option('logo_setting', true)->favicon ?? null); ?>"/>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/fontawesome-5.15.4/css/all.css')); ?>">

    <?php echo $__env->yieldContent('style'); ?>
    <?php echo $__env->yieldPushContent('css'); ?>

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/components.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/custom.css')); ?>">
</head>

<body>

<section class="section">
    <div class="container mt-5">
        <div class="page-error">
            <div class="page-inner">
                <h1><?php echo $__env->yieldContent('code'); ?></h1>
                <div class="page-description">
                    <?php echo $__env->yieldContent('message'); ?>
                </div>
                <div class="mt-3">
                    <a href="<?php echo e($button_url ?? url('/')); ?>"><?php echo e($button_text ?? __('Back to Home')); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="simple-footer mt-5">
        <?php echo e(get_option('footer_setting')['copyright'] ?? __("Copyright &copy; :name :year", ['name' => config('app.name'), 'year' => date('Y')])); ?>

    </div>
</section>
</body>
</html>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/errors/app.blade.php ENDPATH**/ ?>
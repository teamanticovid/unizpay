<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php if (! empty(trim($__env->yieldContent('title')))): ?> <?php echo $__env->yieldContent('title'); ?> | <?php endif; ?><?php echo e(config('app.name')); ?></title>

    <!-- Favicon icon -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(get_option('logo_setting', true)->favicon ?? null); ?>"/>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/fontawesome-5.15.4/css/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/selectric/selectric.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/toastifyjs/toastify.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-confirm-js/jquery-confirm.min.css')); ?>">

    <?php echo $__env->yieldContent('style'); ?>
    <?php echo $__env->yieldPushContent('css'); ?>

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/components.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/custom.css')); ?>">
</head>

<body>

<div class="main-wrapper">
    <!--- Header Section ---->
    <?php echo $__env->make('layouts.backend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--- Sidebar Section --->
    <?php echo $__env->make('layouts.backend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--- Main Content --->
    <div class="main-content  main-wrapper-1">
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
        <section class="section">
            <?php echo $__env->make('layouts.backend.partials.headersection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->yieldContent('modal'); ?>

    <!--- Footer Section --->
     <?php echo $__env->make('layouts.backend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>


<input type="hidden" class="placeholder_image" value="<?php echo e(asset('admin/img/img/placeholder.png')); ?>">

<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" id="site_url" value="<?php echo e(url('/')); ?>">

<!-- General JS Scripts -->
<script src="<?php echo e(asset('admin/plugins/jquery/jquery-3.6.0.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugins/popperjs/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/bootstrap/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/jqueryvalidation/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery-confirm-js/jquery-confirm.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/selectric/jquery.selectric.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/select2/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/toastifyjs/toastify.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/custom/Notify.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/clipboard-js/clipboard.min.js')); ?>"></script>


<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldPushContent('script'); ?>

<!-- Template JS File -->
<script src="<?php echo e(asset('admin/js/scripts.js')); ?>"></script>

<script src="<?php echo e(asset('admin/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('admin/custom/form.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/custom/custom.js')); ?>"></script>

<?php if(Session::has('success')): ?>
    <script>
        Sweet('success', '<?php echo e(Session::get('success')); ?>');
    </script>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
    <script>
        Sweet('warning', '<?php echo e(Session::get('warning')); ?>');
    </script>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <script>
        Sweet('error', '<?php echo e(Session::get('error')); ?>');
    </script>
<?php endif; ?>

<?php if(Request::has('trigger')): ?>
    <script>
        $('#<?php echo e(Request::get('trigger')); ?>').trigger('click');
    </script>
<?php endif; ?>

</body>
</html>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/backend/app.blade.php ENDPATH**/ ?>
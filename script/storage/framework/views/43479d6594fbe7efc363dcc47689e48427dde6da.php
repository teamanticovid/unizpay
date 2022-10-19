<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php echo SEOMeta::generate(); ?>

    <?php echo OpenGraph::generate(); ?>

    <?php echo Twitter::generate(); ?>

    <?php echo JsonLd::generate(); ?>

   
    


    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(get_option('logo_setting', true)->favicon ?? null); ?>"/>

    <!-- Import css File -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/aos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/menu.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('plugins/toastify-js/src/toastify.css')); ?>">

    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldPushContent('css'); ?>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/custom.css')); ?>">

</head>

<body class="<?php echo \Illuminate\Support\Arr::toCssClasses([$bodyClass ?? null]) ?>">

<?php echo $__env->yieldContent('body'); ?>

<!-- **** All JS Files ***** -->
<script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
<!-- Custom Js -->
<script src="<?php echo e(asset('frontend/js/aos.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/main-menu.js')); ?>"></script>

<!-- Active -->
<script src="<?php echo e(asset('frontend/js/default-assets/active.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/toastify-js/src/toastify.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldPushContent('script'); ?>

<script src="<?php echo e(asset('plugins/custom/custom.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/custom/form.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/custom/Notify.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/custom.js')); ?>"></script>

</body>

</html>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/frontend/master.blade.php ENDPATH**/ ?>
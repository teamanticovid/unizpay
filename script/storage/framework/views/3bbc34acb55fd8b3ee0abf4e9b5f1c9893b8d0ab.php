<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e(__('Installer')); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('uploads/favicon.ico')); ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    < <link rel="stylesheet" href="<?php echo e(asset('installer/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('installer/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('installer/css/font.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('installer/css/default.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('installer/css/style.css')); ?>">
</head>
<body class="install">
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    
    <!-- requirments-section-start -->
    <section class="pt-50 pb-50">
        <div class="requirments-section">
            <div class="content-requirments d-flex justify-content-center">
                <div class="requirments-main-content">
                    <div class="installer-header text-center">
                        <h2><?php echo e(__('Purchase Code')); ?></h2>
                        <p><?php echo e(__('Please enter your Purchase Code')); ?></p>
                    </div>
                 <div class="alert" role="alert">
                        <?php if(Session::has('msg')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('msg')); ?>

                        </div>
                        <?php endif; ?>
                 </div>
                 <form action="<?php echo e(url('/install/purchase_check')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="custom-form install-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="purchase_code"><?php echo e(__('Purchase code')); ?></label>
                                    <input type="text" class="form-control" id="purchase_code" name="purchase_code" required placeholder="Enter Your Purchase code">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary install-btn f-right"><?php echo e(__('Verify')); ?></button>
                </form>
                </div>
            </div>
        </div>
    </section>
    <!-- requirments-section-end -->
    <script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('installer/js/install.js')); ?>"></script>
</body>
</html>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/installer/purchase.blade.php ENDPATH**/ ?>
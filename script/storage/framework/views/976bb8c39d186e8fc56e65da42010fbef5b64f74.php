<!-- Core -->
<script src="<?php echo e(asset('user/vendor/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('user/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('user/vendor/js-cookie/js.cookie.js')); ?>"></script>
<script src="<?php echo e(asset('user/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('user/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/toastify-js/src/toastify.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery-validation/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery-confirm-js/jquery-confirm.min.js')); ?>"></script>
<script src="<?php echo e(asset('user/vendor/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('user/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/clipboard-js/clipboard.min.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldPushContent('script'); ?>

<!-- Argon JS -->
<script src="<?php echo e(asset('user/js/argon.min.js')); ?>"></script>
<!-- Demo JS - remove this in your project -->
<script src="<?php echo e(asset('user/js/demo.min.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/custom/custom.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/custom/form.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/custom/Notify.js')); ?>"></script>
<script src="<?php echo e(asset('user/custom.js')); ?>"></script>

<?php if(session('success')): ?>
    <script>
        Notify('success', null, '<?php echo e(Session::get('success')); ?>')
    </script>
<?php endif; ?>

<?php if(Session::has('warning')): ?>
    <script>
        Notify('warning', null, '<?php echo e(Session::get('warning')); ?>')
    </script>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <script>
        Notify('error', null, '<?php echo e(Session::get('error')); ?>')
    </script>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/user/partials/scripts.blade.php ENDPATH**/ ?>
<?php if(config('system.unescaped')): ?>
<?php echo $data; ?>

<?php else: ?>
<?php echo e($data); ?>

<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/components/content.blade.php ENDPATH**/ ?>
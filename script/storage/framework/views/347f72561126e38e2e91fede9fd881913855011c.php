<?php if($childrens): ?>
    <li class="sub-menu--item">
        <a href="<?php echo e(url($childrens->href)); ?>"
           <?php if(!empty($childrens->target)): ?> target="<?php echo e($childrens->target); ?>" <?php endif; ?>><?php echo e($childrens->text); ?>

        </a>

        <?php if(isset($childrens->children)): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url($childrens->href)); ?>"><?php echo e($childrens->text); ?>

                    <span class="sub-nav-toggler"></span>
                </a>
                <ul class="sub-menu">
                    <?php $__currentLoopData = $childrens->children ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('components.menu.header.child', ['childrens' => $row], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
        <?php endif; ?>
    </li>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/components/menu/header/child.blade.php ENDPATH**/ ?>
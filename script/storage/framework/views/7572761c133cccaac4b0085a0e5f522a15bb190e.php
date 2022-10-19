<?php if(!empty($menus)): ?>
    <h4><?php echo e($menus['name'] ?? null); ?></h4>
    <ul>
        <?php $__currentLoopData = $menus['data'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($row->children)): ?>
                <li>
                    <a href="<?php echo e($row->href); ?>">
                        <?php echo e($row->text); ?>

                        <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu" id="submenu-<?php echo e($key); ?>">
                        <?php $__currentLoopData = $row->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('components.menu.header.child', ['childrens' => $childrens], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            <?php else: ?>
                <li>
                    <a href="<?php echo e(url($row->href)); ?>" <?php if(!empty($row->target)): ?> target="<?php echo e($row->target); ?>" <?php endif; ?>><?php echo e($row->text); ?></a>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/components/menu/footer/parent.blade.php ENDPATH**/ ?>
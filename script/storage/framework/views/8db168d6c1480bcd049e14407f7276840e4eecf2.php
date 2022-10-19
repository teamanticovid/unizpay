<?php if(!empty($menus)): ?>
    <?php $__currentLoopData = $menus['data'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($row->children)): ?>
            <li class="nav-item nav-item-has-children">
                <a href="<?php echo e($row->href); ?>" class="nav-link-item drop-trigger">
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
                <a class="nav-link-item <?php if(url()->current() == url($row->href)): ?> active <?php endif; ?>"  href="<?php echo e(url($row->href)); ?>" <?php if(!empty($row->target)): ?> target="<?php echo e($row->target); ?>" <?php endif; ?>><?php echo e($row->text); ?></a>
            </li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/components/menu/header/parent.blade.php ENDPATH**/ ?>
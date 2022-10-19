<?php $__currentLoopData = config('adminmenu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(isset($menu['header'])): ?>
        <?php if(isset($menu['can'])): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any($menu['can'])): ?>
                <li class="menu-header"><?php echo e(__($menu['header'])); ?></li>
            <?php endif; ?>
        <?php else: ?>
            <li class="menu-header"><?php echo e(__($menu['header'])); ?></li>
        <?php endif; ?>
    <?php elseif(isset($menu['submenu'])): ?>
        <?php
            $isActive = false;
            foreach ($menu['patterns'] ?? [] as $pattern){
                $isActive = Request::is($pattern);
            }
        ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any($menu['can'])): ?>
            <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['dropdown', 'active' => $isActive]) ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="<?php echo \Illuminate\Support\Arr::toCssClasses([$menu['icon'] ?? null]) ?>"></i>
                    <span><?php echo e(__($menu['title'])); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <?php $__currentLoopData = $menu['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $isActive = false;
                            foreach ($submenu['patterns'] ?? [] as $pattern){
                                $isActive = Request::is(str($pattern)->replace('.', '/'));
                            }
                        ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any($submenu['can'])): ?>
                            <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => $isActive]) ?>"">
                                <a class="nav-link"
                                   href="<?php echo e(Route::has($submenu['route']) ? route($submenu['route']) : url($submenu['route'])); ?>">
                                    <?php echo e(__($submenu['title'])); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
        <?php endif; ?>
    <?php else: ?>
    <li
        <?php
        $isActive = false;
        foreach ($menu['patterns'] ?? [] as $pattern){
            $isActive = Request::is($pattern);
        }
        ?>
        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['active' => $isActive]) ?>">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any($menu['can'])): ?>
        <a
            class="nav-link"
            href="<?php echo e(Route::has($menu['route']) ? route($menu['route']) : url($menu['route'])); ?>"
        >
            <i class="<?php echo \Illuminate\Support\Arr::toCssClasses([$menu['icon'] ?? null]) ?>"></i>
            <span><?php echo e(__($menu['title'])); ?></span>
        </a>
        <?php endif; ?>
    </li>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/admin/adminmenu.blade.php ENDPATH**/ ?>
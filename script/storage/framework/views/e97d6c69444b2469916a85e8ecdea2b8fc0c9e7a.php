<?php $__currentLoopData = Cart::instance('shopping_'.request('store'))->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <div class="cart-item-desc">
            <a href="<?php echo e(route('frontend.products.show', [request('store'), $cart->id])); ?>" class="image">
                <img src="<?php echo e(asset($cart->options['image'])); ?>" class="cart-thumb" alt="">
            </a>
            <div>
                <a href="<?php echo e(route('frontend.products.show', [request('store'), $cart->id])); ?>"><?php echo e(Str::limit($cart->name, 20, '...')); ?></a>
                <p><?php echo e($cart->qty); ?> x - <span class="price"><?php echo e(user_currency($cart->options['user'] ?? null)->symbol . ($cart->qty * $cart->price)); ?></span></p>
            </div>
        </div>
        <span class="dropdown-product-remove cart__close"  data-id="<?php echo e($cart->rowId); ?>"><i class="fas fa-times"></i></span>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/frontend/productPartials/cart-items.blade.php ENDPATH**/ ?>
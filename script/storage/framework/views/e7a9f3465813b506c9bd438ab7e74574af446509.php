<?php
    $store = get_store(request('store'));
?>

<!-- Header Area Start -->
<header class="site-header ecommerce site-header--menu-right landing-1-menu site-header--absolute site-header--sticky">
    <div class="container d-flex justify-content-between align-items-center">
        <nav class="navbar site-navbar">
            <!-- Brand Logo-->
            <div class="brand-logo ecommerce">
                <a href="<?php echo e(route('frontend.store-products', request('store'))); ?>">
                    <img src="<?php echo e(asset($store->image)); ?>" alt="" class="dark-version-logo">
                </a>
            </div>

            <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main py-1">
                        <li> <a class="nav-link-item"></a></li>
                    </ul>
                </nav>
            </div>
        </nav>


        <div class="hero_meta_area ml-auto d-flex align-items-center justify-content-end">
            <!-- Cart -->
            <div class="cart-area">
                <div class="cart--btn"><i class="fas fa-cart-plus"></i> <span class="cart_quantity"><?php echo e(Cart::instance('shopping_'.request('store'))->count()); ?></span></div>
                <!-- Cart Dropdown Content -->
                <div class="cart-dropdown-content">
                    <ul class="cart-list">
                        <?php $__currentLoopData = Cart::instance('shopping_'.request('store'))->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="cart-item-desc">
                                <a href="<?php echo e(route('frontend.products.show', [$store->id, $cart->id])); ?>" class="image">
                                    <img src="<?php echo e(asset($cart->options['image'] ?? '')); ?>" class="cart-thumb" alt="">
                                </a>
                                <div>
                                    <a href="<?php echo e(route('frontend.products.show', [$store->id, $cart->id])); ?>"><?php echo e(Str::limit($cart->name, 20, '...')); ?></a>
                                    <p><?php echo e($cart->qty); ?> x - <span class="price"><?php echo e(user_currency($cart->options['user'] ?? '')->symbol . ($cart->qty * $cart->price)); ?></span></p>
                                </div>
                            </div>
                            <span class="dropdown-product-remove cart__close"  data-id="<?php echo e($cart->rowId); ?>"><i class="fas fa-times"></i></span>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="cart-btn">
                        <a href="<?php echo e(route('frontend.cart.index', ['store' => request('store')])); ?>" class="d-block"><?php echo e(__("Cart")); ?></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- header-end -->
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/layouts/frontend/storePartials/header.blade.php ENDPATH**/ ?>
<div class="row">
    <div class="col-lg-8">
        <form action="<?php echo e(route('frontend.cart.create')); ?>" method="POST" class="update-cart">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="shopping__cart__table">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th><?php echo e(__('Product')); ?></th>
                                <th><?php echo e(__('Quantity')); ?></th>
                                <th><?php echo e(__('Sub Total')); ?></th>
                                <th><?php echo e(__('Total')); ?></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = Cart::instance('shopping_'.request('store'))->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="product__cart__item">
                                    <input type="hidden" value="<?php echo e($product->rowId); ?>" min="1" max="10" name="rowid[]" class="rowid">
                                    <div class="product__cart__item__pic">
                                        <img src="<?php echo e(asset($product->options['image'] ?? '')); ?>" class="cart-thumb" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6><?php echo e($product->name); ?></h6>
                                        <h5><?php echo e(user_currency($product->options['user'] ?? null)->symbol . ($product->qty * $product->price)); ?></h5>
                                    </div>
                                </td>
                                <input type="hidden" value="<?php echo e(request('store')); ?>" name="store">
                                <input type="hidden" value="1" name="update">
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <span class="fa fa-angle-left dec qtybtn"></span>
                                            <input type="text" value="<?php echo e($product->qty); ?>" min="1" max="10" name="qty[]" class="qty">
                                            <span class="fa fa-angle-right inc qtybtn"></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price"><?php echo e(user_currency($product->options['user'] ?? null)->symbol . ($product->price)); ?></td>
                                <td class="cart__price"><?php echo e(user_currency($product->options['user'] ?? null)->symbol . ($product->qty * $product->price)); ?></td>
                                <td class="cart__close cursor-pointer submit-btn" data-id="<?php echo e($product->rowId); ?>"><i class="far fa-window-close"></i></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="continue__btn">
                        <a type="button" href="<?php echo e(route('frontend.store-products', request('store'))); ?>"><?php echo e(__('Continue Shopping')); ?></a>
                    </div>
                </div>
                <?php if(Cart::instance('shopping_'.request('store'))->count() > 0): ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="continue__btn update__btn">
                        <button type="submit"><?php echo e(__('Update Shopping cart')); ?></button>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </form>
    </div>
    <div class="col-lg-4">
        <div class="cart__total cart__discount">
            <h6><?php echo e(__('Cart total')); ?></h6>
            <ul>
                <li><?php echo e(__('Subtotal')); ?> <span><?php echo e(user_currency($store->user)->symbol . Cart::instance('shopping_'.request('store'))->subtotal()); ?></span></li>
                <li><?php echo e(__('Total')); ?> <span><?php echo e(user_currency($store->user)->symbol . Cart::instance('shopping_'.request('store'))->subtotal()); ?></span></li>
            </ul>
            <?php if(Cart::instance('shopping_'.request('store'))->count() > 0): ?>
            <div class="btn-area text-center">
                <a href="<?php echo e(route('frontend.checkout.index', ['store' => request('store')])); ?>" class="primary-btn"><?php echo e(__('Proceed to checkout')); ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<input type="hidden" id="cart-route" value="<?php echo e(route('frontend.cart.index')); ?>">
<input type="hidden" id="store" value="<?php echo e(request('store')); ?>">
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/cart/cart-items.blade.php ENDPATH**/ ?>
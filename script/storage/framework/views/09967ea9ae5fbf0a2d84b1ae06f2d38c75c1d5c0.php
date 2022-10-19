<?php $__env->startSection('title', __('Products')); ?>

<?php $__env->startSection('content'); ?>

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2><?php echo e(__('Checkout')); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="<?php echo e(route('frontend.checkout.store', ['store' => request('store')])); ?>" method="post" class="ajaxform_instant_reload">
                    <?php echo csrf_field(); ?>

                    <div class="row">
                        <div class="col-lg-8 col-md-6 mb-50">
                            <h6 class="checkout__title"><?php echo e(__('Billing Details')); ?></h6>
                            <div class="checkout__input">
                                <p><?php echo e(__('Name')); ?><span>*</span></p>
                                <input type="text" name="name" required value="<?php echo e(auth()->user()->name ?? ''); ?>">
                            </div>
                            <?php if($store->product_type == 0): ?>
                            <div class="checkout__input">
                                <p><?php echo e(__('Address')); ?><span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" name="street_address" required>
                                <input type="text" placeholder="Apartment, suite, unite ect (optinal)" name="apartment">
                            </div>
                            <div class="checkout__input">
                                <p><?php echo e(__("Town/City")); ?><span>*</span></p>
                                <input type="text" name="city" required>
                            </div>
                            <div class="checkout__input">
                                <p><?php echo e(__('Country/State')); ?><span>*</span></p>
                                <input type="text" name="country" required>
                            </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p><?php echo e(__('Phone')); ?><span>*</span></p>
                                        <input type="text" name="phone" value="<?php echo e(auth()->user()->phone ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p><?php echo e(__('Email')); ?><span>*</span></p>
                                        <input type="text" name="email" value="<?php echo e(auth()->user()->email ?? ''); ?>" required>
                                    </div>
                                </div>
                            </div>
                            <?php if($store->product_type == 0 && !auth()->check()): ?>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    <?php echo e(__('Create an account?')); ?>

                                    <input type="checkbox" id="acc" name="create_account">
                                    <span class="checkmark"></span>
                                </label>
                                <p><?php echo e(__('Create an account by entering the information below. If you are a returning customer please login at the top of the page')); ?></p>
                            </div>
                            <div class="checkout__input">
                                <p><?php echo e(__('Account Password')); ?></p>
                                <input type="text" name="password">
                            </div>
                            <?php endif; ?>
                            <?php if($store->note_status): ?>
                            <div class="checkout__input">
                                <p><?php echo e(__('Order notes')); ?></p>
                                <input type="text" name="note" <?php echo e($store->note_status == 1 ? 'required':''); ?> placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title"><?php echo e(__('Your order')); ?></h4>
                                <div class="checkout__order__products"><?php echo e(__('Product')); ?> <span><?php echo e(__('Total')); ?></span></div>
                                <ul class="checkout__total__products">
                                    <?php $__currentLoopData = Cart::instance('shopping_'.request('store'))->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($loop->index+1 ." ". $product->name); ?> <span> <?php echo e($product->qty); ?> × <?php echo e(user_currency($product->options['user'] ?? null)->symbol . $product->price); ?></span></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li><?php echo e(__('Subtotal')); ?> <span><?php echo e(user_currency($store->user)->symbol . Cart::instance('shopping_'.request('store'))->subtotal()); ?></span></li>
                                    <li><?php echo e(__('Total')); ?> <span> <?php echo e(user_currency($store->user)->symbol); ?> <span class="total-price"><?php echo e(Cart::instance('shopping_'.request('store'))->subtotal()); ?></span></span></li>
                                </ul>
                                <?php if($store->shipping_status && $store->product_type == 0): ?>
                                <div class="checkout__input shipping-fees">
                                    <p><?php echo e(__('Select shipping address')); ?></p>
                                    <select name="shipping_id" class="form-control shipping-place">
                                        <option value="">-<?php echo e(__('Select')); ?>-</option>
                                        <?php $__currentLoopData = $shippings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option amount="<?php echo e($shipping->amount); ?>" value="<?php echo e($shipping->id); ?>"><?php echo e($shipping->region); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <p><?php echo e(__('Shipping charge is : ') . user_currency($store->user)->symbol); ?><span class="shipping-charge text-dark fw-bold">0</span></p>
                                </div>
                                <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="wallet">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <?php echo e(__('Pay from wallet')); ?>

                                    </label>
                                </div>
                                <?php endif; ?>
                                <?php if(Cart::instance('shopping_'.request('store'))->count() > 0): ?>
                                <button type="submit" class="site-btn submit-btn"><?php echo e(__('PLACE ORDER')); ?></button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <input type="hidden" id="total-price" value="<?php echo e(Cart::instance('shopping_'.request('store'))->subtotal()); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.store', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/checkout/index.blade.php ENDPATH**/ ?>
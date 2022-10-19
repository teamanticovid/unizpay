<?php $__env->startSection('title', __($product->name)); ?>

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area-single">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content-text">
                        <h6><?php echo app('translator')->get('Product Details'); ?></h6>
                        <h3><?php echo app('translator')->get('Stay focused on your business.'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area -->

    <section class="shop-details">

        <div class="product__details__content">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="product-image text-center mb-5">
                            <img src="<?php echo e(asset($product->image)); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product__details__text mb-5">
                            <h4><?php echo e($product->name); ?></h4>

                            <h3>
                                <?php echo e(user_currency($product->user)->symbol . $product->price); ?>

                            </h3>
                            <p><?php echo $product->description; ?></p>
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <span class="fa fa-angle-up dec qtybtn"></span>
                                        <input type="number" value="1" id="quantity" max="<?php echo e($product->quantity); ?>" min="1">
                                        <span class="fa fa-angle-down inc qtybtn"></span>
                                    </div>
                                </div>
                                <?php if($product->quantity): ?>
                                <a href="javascript:void(0)" data-id="<?php echo e($product->id ?? ''); ?>" data-url="<?php echo e(route('frontend.cart.store')); ?>" data-store="<?php echo e(request('store')); ?>" class="add_to_cart product-dro-btn two"> <?php echo e(__('add to cart')); ?></a>
                                <?php else: ?>
                                <a href="javascript:void(0)" class="product-dro-btn text-warning two"><?php echo e(__('Stock out')); ?></a>
                                <?php endif; ?>
                                <input type="hidden" id="max-qty" value="<?php echo e($product->quantity); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab mb-100">
                            <ul class="nav nav-pills mb-3 product-border-bottom justify-content-center" id="pills-tab"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo e(__("Description")); ?>

                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="product__details__tab__content">
                                        <?php echo $product->description; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-product-area text-center">
                            <a href="<?php echo e(route('frontend.products.show', [$store->id, $product->id])); ?>">
                                <div class="product-img">
                                    <img src="<?php echo e(asset($product->image)); ?>" alt="">
                                </div>
                            </a>
                            <div class="product-text">
                                <h6><?php echo e($product->category->title ?? ''); ?></h6>
                                <h5> <?php echo e($product->name); ?> </h5>
                                <p><?php echo e(__('Price')); ?>: <?php echo e(user_currency($store->user)->symbol . $product->price); ?></p>
                                <div class="product-details-area ">
                                    <div class="cart-btn">
                                        <a href="<?php echo e(route('frontend.products.show', [$store->id, $product->id])); ?>"><?php echo e(__('Shop product')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.store', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/products/show.blade.php ENDPATH**/ ?>
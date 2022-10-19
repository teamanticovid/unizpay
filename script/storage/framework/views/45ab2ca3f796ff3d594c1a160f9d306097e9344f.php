<?php $__env->startSection('title', __('Cart page')); ?>

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-text d-sm-flex justify-content-between align-items-center">
                        <h2><?php echo e(__('All Carts')); ?></h2>
                        <?php if(auth()->id() == $store->user_id): ?>
                        <div class="breadcrumb-dropdown d-flex align-items-center">
                            <div class="dropdown">
                                <a class="product-dro-btn dropdown-toggle two" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-plus"></i> <?php echo e(__('Add Product')); ?>

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo e(route('user.physical-products.create')); ?>"><?php echo e(__('Physical product')); ?></a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('user.digital-products.create')); ?>"><?php echo e(__('Digital product')); ?></a>
                                    </li>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area -->

    <!-- Cart Area -->
    <section class="shopping-cart spad">
        <div class="container" id="cart-area">
            <?php echo $__env->make('frontend.cart.cart-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    <!-- Cart Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.store', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/cart/index.blade.php ENDPATH**/ ?>
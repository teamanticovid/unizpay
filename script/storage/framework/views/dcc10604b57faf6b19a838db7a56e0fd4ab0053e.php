<?php $__env->startSection('content'); ?>
    <div class="product-area section-padding-100-50">
        <?php if($store->status): ?>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4">
                    <div class="single-product-area text-center">
                        <a href="<?php echo e(route('frontend.products.show', [$store->id, $product->id])); ?>">
                            <div class="product-img">
                                <img src="<?php echo e(asset($product->image ?? 'uploads/default.png')); ?>" alt="">
                            </div>
                        </a>
                        <div class="product-text">
                            <h6><?php echo e($product->category->title); ?></h6>
                            <h5> <?php echo e($product->name); ?> </h5>
                            <p><?php echo e(__('Price')); ?>: <?php echo e(user_currency($store->user)->symbol . $product->price); ?></p>
                            <div class="product-details-area ">
                                <div class="cart-btn">
                                    <a href="<?php echo e(route('frontend.products.show', [$store->id, $product->id])); ?>"><?php echo e(__('Add To Cart')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="shop_pagination_area mt-30 mb-50">
                        <?php echo e($products->links('vendor.pagination.bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 text-center">
                    <h3 class="text-warning"><?php echo e(__("This store has been disabled.")); ?></h3>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.store', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/products/store-base.blade.php ENDPATH**/ ?>
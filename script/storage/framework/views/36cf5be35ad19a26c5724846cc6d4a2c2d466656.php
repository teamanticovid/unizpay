<?php if(isset($data['headings']['heading.faq'])): ?>
    <?php
        $heading = $data['headings']['heading.faq'];
    ?>
    <div class="faq-area section-padding-100-50">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="heading-title text-center" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
                        <h2><span>-</span><?php echo e($heading['title'] ?? null); ?><span>-</span></h2>
                        <p><?php echo e($heading['description'] ?? null); ?></p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-9 col-lg-6">
                    <div class="faq-content mb-50">
                        <div class="accordion faq-accordian " id="faqaccordian">
                            <?php $__empty_1 = true; $__currentLoopData = $data['faqs'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <!-- Single FAQ -->
                            <div class="card border-0">
                                <div class="card-header tab-heading-card" id="heading<?php echo e($loop->index); ?>">
                                    <button class="btn tab-heading" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo e($loop->index); ?>" aria-expanded="<?php echo e($loop->first ? "true": "false"); ?>"
                                            aria-controls="collapse<?php echo e($loop->index); ?>"><?php echo e($faq->question); ?></button>
                                </div>
                                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['collapse', 'show' => $loop->first]) ?>" id="collapse<?php echo e($loop->index); ?>" aria-labelledby="heading<?php echo e($loop->index); ?>"
                                     data-bs-parent="#faqaccordian">
                                    <div class="card-body">
                                        <p><?php echo e($faq->answer); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php else: ?>
<?php endif; ?>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/frontend/home/faq.blade.php ENDPATH**/ ?>
<section class="bright services py-2" >
    <div class="container" style="padding-top: 1%;" >
        <div class="section-categories" style="text-align: center;">
            <h2 class="cat-text pt-1" >Search Results</h2>
        </div>
        <div class="row" style="justify-content: center">
            <div class="col-md-9">
                <div>
                    <?php if($product->count()>0): ?>
                        <div class="row">
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6">
                                    <div class="item card_item">
                                        <a href="<?php echo e(route('product.details', ['slug' => $product->slug])); ?>">
                                            <div class="card_img">
                                                <img class="img-fluid"
                                                    src="<?php echo e(asset('assets/images/Product')); ?>/<?php echo e($product->image); ?>"
                                                    alt="<?php echo e($product->name); ?>">
                                            </div>
                                            <div class="card_info pt-2">
                                                <h5><span><?php echo e($product->name); ?></span></h5>
                                                <div>
                                                    <button class="btn_price"><?php echo e($product->price); ?> KWD</button>
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                    <div class="text-center2" style="padding-bottom:4%;">
                    <h4> No Products Found</h4>
                     </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\Ecommerce-k\resources\views/livewire/search-component.blade.php ENDPATH**/ ?>
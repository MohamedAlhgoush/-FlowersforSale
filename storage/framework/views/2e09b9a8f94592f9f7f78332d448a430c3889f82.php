<?php if (isset($component)) { $__componentOriginal6121507de807c98d4e75d845c5e3ae4201a89c9a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\BaseLayout::class, []); ?>
<?php $component->withName('base-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="bright services py-2">
        <div class="container" style="padding-top: 6%;">
            <div class="row">
                <div class="col-md-3">
                    <div class="cat_list">
                        <div class="card_data p-3">
                            <h6 class="mb-2"><?php echo e($categories->name); ?></h6>
                            <a>
                                <div> <img src="<?php echo e(asset('assets/images/w8.jpg')); ?>" alt="" class="hidden_img"></div>
                                <div class="text_all">All</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div>
                        <?php if(($categories->products)->count()>0): ?>
                            <div class="row">
                                <?php $__currentLoopData = $categories->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6">
                                        <div class="item card_item">
                                            <a href="<?php echo e(route('product.details', ['slug' => $product->slug])); ?>">
                                                <div class="card_img" style="height: 70%; width:70%">
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
    </section>
 <?php if (isset($__componentOriginal6121507de807c98d4e75d845c5e3ae4201a89c9a)): ?>
<?php $component = $__componentOriginal6121507de807c98d4e75d845c5e3ae4201a89c9a; ?>
<?php unset($__componentOriginal6121507de807c98d4e75d845c5e3ae4201a89c9a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Ecommerce-k\resources\views/livewire/category-component.blade.php ENDPATH**/ ?>
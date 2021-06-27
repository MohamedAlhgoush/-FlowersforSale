<section class="bright services py-2">
    <div class="container">
        <div class="section-categories">
            <h2 class="cat-text pt-1">Review order</h2>
        </div>
        <div class="order_item">
            <div class="item">
                <?php if(Session::has('success_message')): ?>
                    <div class="alert alert-success">
                        <strong>Success</strong><?php echo e(Session::get('success_message')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Cart::count() > 0): ?>
                <div class="item picutre_box">
                    <h6>Delivery info</h6>
                    <div class="item_box">
                        <a href="/time">
                            <p class="float-left">Tomorrow</p><span dir="ltr">09:00 AM - 11:00 AM</span>
                            <p class="red float-right"><a href="time.html"><i aria-hidden="true"
                                        class="fa theme-color fa-chevron-right"></i></a></p>
                            <div class="clearfix"></div>
                        </a>
                    </div>
                </div>
                    <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="spc_btw"><a href="#">
                                <a href="<?php echo e(route('product.details', ['slug' => $item->model->slug])); ?>">
                                    <div class="img_box handcursor">
                                        <img class="img-fluid img_product"
                                            src="<?php echo e(asset('assets/images/Product')); ?>/<?php echo e($item->model->image); ?>"
                                            alt="<?php echo e($item->model->name); ?>">
                                    </div>
                                </a>
                            </a>
                            <div class="details_box">
                                <div class="spc_btw">
                                    <p class="float-left"> <?php echo e($item->qty); ?> x <?php echo e($item->model->name); ?> </p>
                                    <p class="float-right price"> <?php echo e($item->model->price); ?> KWD </p>
                                </div>
                            </div>
                        </div>
                        <div class="btm_box mt-3">
                            <div class="float-right">
                                <a class="site_color_btn"
                                    href="<?php echo e(route('product.details', ['slug' => $item->model->slug])); ?>">
                                    <i class="fa fa-pencil">
                                    </i> Update </a>
                                <span style="font-size: 12px;color: #8e8e8e;"> | </span>
                                <button class="site_color_btn" wire:click.prevent="delete('<?php echo e($item->rowId); ?>')">
                                    <i class="fa fa-times-circle"></i> Remove
                                </button>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="item">
                <h6>Promo Code</h6>
                <div class="add_promocode">
                    <form autocomplete="off" novalidate="" class="ng-untouched ng-pristine ng-valid">
                        <!----><input class="instr_optn float-left ng-untouched ng-pristine ng-valid"
                            formcontrolname="coupon_code" maxlength="50" type="text">
                        <!---->
                        <!----><button _ngcontent-qqt-c6="" class="site_btn small  float-right instr_optn"
                            style="margin: 0"> Apply
                            <!---->
                        </button>
                        <!---->
                        <div _ngcontent-qqt-c6="" class="clearfix">
                        </div>
                    </form>
                </div>
            </div>
            <div class="item_total">
                <div>
                    <p class="float-left">Subtotal</p>
                    <p class="float-right"> <?php echo e(Cart::subtotal()); ?> KWD</p>
                    <div class="clearfix">
                    </div>
                </div>

                <div>
                    <h4 class="float-left site_color_ttl">Total</h4>
                    <p class="float-right site_color"> <?php echo e(Cart::subtotal()); ?> KWD</p>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
            <div class="footer_btn_box row">
                <div class="col-md-6 mx-auto">
                    <a class="site_btn lg" href="/checkout">Proceed to checkout</a>
                </div>
            </div>
             <?php else: ?>
            <div class="text-center2">
                <h4>Your bag is empty</h4>
                <p class="sm_text pb-3"> Browse menu and add items to your order to proceed </p>
                <a href="/"><button class="site_btn lg" tabindex="0" style="height: 40px"> Browse Menu </button></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\Ecommerce-k\resources\views/livewire/order-component.blade.php ENDPATH**/ ?>
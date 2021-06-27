<?php if (isset($component)) { $__componentOriginal6121507de807c98d4e75d845c5e3ae4201a89c9a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\BaseLayout::class, []); ?>
<?php $component->withName('base-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="img img1">
        <img src="<?php echo e(asset('assets/images/w8.jpg')); ?>">

    </section>
    <!-- img logo -->
    <section>
        <div class="logo1 ">
            <a href="/">
                <img class="img-fluid rounded-circle" src="<?php echo e(asset('assets/images/w8.jpg')); ?>">
            </a>

        </div>
        <div class="sectext">
            <h2>Amor De Roses</h2>
        </div>
    </section>

    <!-- categories -->
    <section class="bright services pb-2">
        <div class="container">

            <!-- login form -->
            <div class="login_page">
                <div class="container">
                    <div class="tab_cont_ttl_bar">
                        <h2> Login </h2>
                    </div>
                    <p class="site_color_btn"> Please login to your account </p>
                    <!---->
                        <form autocomplete="off" class="site_form max-w ng-untouched ng-pristine ng-invalid"
                            novalidate="" name="frm-login" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <div class="site_ipt_box">
                                <label class="site_ipt_lbl">Email
                                    <span class="req_star">*</span>
                                </label>
                                <input class="site_ipt ng-untouched ng-pristine ng-invalid" formcontrolname="username"
                                    type="email" placeholder="Email" name="email" required autofocus>
                                <!---->
                            </div>
                            <div class="site_ipt_box">
                                <label class="site_ipt_lbl">
                                    Password <span class="req_star">*</span>
                                </label>
                                <input class="site_ipt ng-untouched ng-pristine ng-invalid" formcontrolname="password"
                                    maxlength="15" type="password" placeholder="Password" name="password" required>
                                <!---->
                            </div>
                            <div class="site_ipt_box footer_btn_box">
                                <button class="site_btn lg" type="submit" style="height: 40px"> Login
                                    <!---->
                                </button>
                            </div>
                            <!---->
                            <div class=" footer_btn_box">
                                <a class="site_color_btn" href="forgot_password.html">Forgot your password ? </a>
                            </div>
                            <!---->
                            <div class="site_ipt_box footer_btn_box">
                                <a href="<?php echo e(route('register')); ?>">
                                    <button class="site_btn lg light" type="button" style="height: 40px" > Register </button>
                                </a>
                            </div>
                        </form>
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
<?php /**PATH C:\xampp\htdocs\Ecommerce-k\resources\views/auth/login.blade.php ENDPATH**/ ?>
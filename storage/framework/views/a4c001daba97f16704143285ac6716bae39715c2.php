<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!-- background img -->
    <section class="img img1">
        <img src="<?php echo e(asset('assets/images/w8.jpg')); ?>">

    </section>
    <!-- img logo -->
    <section>
        <div class="logo1 ">
            <a href="homepage.html">
                <img class="img-fluid rounded-circle" src="<?php echo e(asset('assets/images/w8.jpg')); ?>">
            </a>

        </div>
        <div class="sectext">
            <h2>Gate of Flowers</h2>
        </div>
    </section>

    <!-- categories -->
    <section class="bright services pb-2">
        <div class="container">

            <!-- login form -->
            <div class="login_page">
                <div class="container">
                    <div class="tab_cont_ttl_bar">
                        <h2> create an account </h2>
                    </div>
                    <p class="site_color_btn"> Please login to your account </p>
                    <!---->
                    <form autocomplete="off" class="site_form max-w ng-untouched ng-pristine ng-invalid" novalidate=""
                        action="<?php echo e(route('register')); ?>" name="frm-login" method="POST">
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
                        <?php echo csrf_field(); ?>
                        <!---->
                        <div class="site_ipt_box">
                            <label class="site_ipt_lbl">Country </label>
                            <select class="site_ipt ng-untouched ng-pristine ng-valid" formcontrolname="country_id"
                                name="country">
                                <!---->
                                <!---->
                                <option value="1">Kuwait</option>
                            </select>
                            <!---->
                        </div>
                        <div class="site_ipt_box">
                            <label class="site_ipt_lbl"> Mobile Number </label>
                            <div class="row row_mobile">
                                <div class="col-3 col-p5">
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" formcontrolname="code"
                                        lang="en" readonly="" type="text" name="phone" required>
                                </div>
                                <div class="col-9 col-p5">
                                    <input class="site_ipt ng-untouched ng-pristine ng-invalid" formcontrolname="phone"
                                        lang="en" maxlength="15" pattern="\d*" type="text" placeholder="Mobile Number"
                                        name="phone" required>
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                        </div>
                        <div class="site_ipt_box">
                            <label class="site_ipt_lbl">Name </label>
                            <input class="site_ipt ng-untouched ng-pristine ng-invalid" formcontrolname="name"
                                maxlength="50" type="text" placeholder="Name" name="name" required>
                            <!---->
                            <!---->
                        </div>
                        <div class="site_ipt_box">
                            <label class="site_ipt_lbl">Email </label>
                            <input class="site_ipt ng-untouched ng-pristine ng-invalid" formcontrolname="email"
                                maxlength="50" type="email" placeholder="Email" name="email" required>
                            <!---->
                            <!---->
                            <!---->
                        </div>
                        <div class="site_ipt_box">
                            <label class="site_ipt_lbl">Password </label>
                            <input class="site_ipt ng-untouched ng-pristine ng-invalid" formcontrolname="password"
                                maxlength="15" type="password" placeholder="Password" name="password" required>
                            <!---->
                            <!---->
                            <!---->
                        </div>
                        <div class="site_ipt_box">
                            <label class="site_ipt_lbl">Confirm Password </label>
                            <input class="site_ipt ng-untouched ng-pristine ng-invalid" formcontrolname="password"
                                maxlength="15" type="password" placeholder="Password" name="password_confirmation"
                                required autocomplete="new-password">
                            <!---->
                            <!---->
                            <!---->
                        </div>
                        <div class="site_ipt_box footer_btn_box">
                            <button type="submit" class="site_btn lg"> Register
                                <!---->
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 <?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Ecommerce-k\resources\views/auth/register.blade.php ENDPATH**/ ?>
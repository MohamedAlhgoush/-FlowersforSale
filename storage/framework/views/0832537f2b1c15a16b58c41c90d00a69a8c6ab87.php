<section class="bright services py-2">
    <div class="container">
        <div class="section-categories">
            <h2 class="cat-text pt-1">checkout</h2>
        </div>

        <div class="order_item">
            <div class="container">
                <div class="deliver_pickup">
                    <!---->
                    <label class="radio_btn inline-block">
                        <input name="mode" type="radio" value="delivery">
                        <span class="lbl">Delivery</span>
                        <span class="checkmark"></span>
                    </label>
                    <!---->
                </div>

            </div>
        </div>
        <div class="container delivery_section">
            <div class="tab_cont_ttl_bar" id="delivery_background">

            </div>
            <div class="delivery_scn">
                <form action="" autocomplete="off" class="site_form ng-untouched ng-pristine ng-valid" novalidate="">
                    <!------------------------------------->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <div class="row" id="office_div">
                        <div class="col-md-6">
                            <div class="site_ipt_box">
                                <label class="site_ipt_lbl"> City </label>
                                <input class="site_ipt ng-untouched ng-pristine ng-valid" formcontrolname="city"
                                    maxlength="50" readonly="" type="text">
                                <!---->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="site_ipt_box">
                                <label class="site_ipt_lbl"> Area </label>
                                <input class="site_ipt ng-untouched ng-pristine ng-valid" formcontrolname="area"
                                    maxlength="50" readonly="" type="text">
                                <!---->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="site_ipt_box">
                                <label class="site_ipt_lbl"> Choose Unit Type </label>
                                <select class="site_ipt" style="display: none;">
                                    <option value="house">Home</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="office">Office</option>
                                </select>
                                <div class="unit_type_box">
                                    <label class="radio_btn inline-block" id="home">
                                        <input formcontrolname="unit_type" type="radio" value="house"
                                            class="ng-untouched ng-pristine ng-valid">
                                        <div class="radio_btn_box site_ipt" id="home1">
                                            <img class="home_img" src="<?php echo e(asset("assets/home.svg")); ?>" alt="Home">

                                            <span class="lbl">Home</span>
                                        </div>
                                        <span class="checkmark">

                                        </span>
                                    </label>
                                    <label class="radio_btn inline-block" id="apartment">
                                        <input formcontrolname="unit_type" type="radio" value="apartment"
                                            class="ng-untouched ng-pristine ng-valid">
                                        <div class="radio_btn_box site_ipt" id="apartment1">
                                            <img class="apartment_img" src="<?php echo e(asset("assets/office.svg")); ?>" alt="Apartment">

                                            <span class="lbl">Apartment</span>
                                        </div>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio_btn inline-block" id="office">
                                        <input formcontrolname="unit_type" type="radio" value="office"
                                            class="ng-untouched ng-pristine ng-valid">
                                        <div class="radio_btn_box site_ipt" id="office1">
                                            <img class="office_img" src="<?php echo e(asset("assets/building.svg")); ?>" alt="Office">

                                            <span class="lbl">Office</span>
                                        </div>
                                        <span class="checkmark">

                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <!---->
                        <!---->
                        <div class="col-md-6">
                            <div class="site_ipt_box">
                                <label class="site_ipt_lbl"> Block</label>
                                <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                    minlength="1" maxlength="50" required>
                                <!---->
                            </div>
                        </div>
                        <!------------ office form -------->
                        <div class="row px-3" id="office_row">
                            <div class="col-6">
                                <div class="site_ipt_box">
                                    <label class="site_ipt_lbl">Street
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        minlength="1" maxlength="150" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-6">

                                <div class="site_ipt_box" id="building_no">
                                    <label class="site_ipt_lbl">Building
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        minlength="1" maxlength="100" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-6">
                                <div class="site_ipt_box" id="floor_no">
                                    <label class="site_ipt_lbl">Floor
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        pattern="\d*" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-6">
                                <div class="site_ipt_box" id="office_no">
                                    <label class="site_ipt_lbl">Office No
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        pattern="\d*" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>

                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-6">
                                <div class="site_ipt_box">
                                    <label class="site_ipt_lbl">Avenue
                                        <!---->
                                        <!---->
                                        <small>
                                            (Optional)</small>
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        minlength="1" maxlength="5">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <!------------ apartment form------ -->
                        <div class="row px-3" id="apartment_row">
                            <div class="col-6">
                                <div class="site_ipt_box">
                                    <label class="site_ipt_lbl">Street
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        minlength="1" maxlength="150" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-6">

                                <div class="site_ipt_box" id="building_no">
                                    <label class="site_ipt_lbl">Building
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        minlength="1" maxlength="100" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-6">
                                <div class="site_ipt_box" id="floor_no">
                                    <label class="site_ipt_lbl">Floor
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        pattern="\d*" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-6">

                                <div class="site_ipt_box" id="apartment_no">
                                    <label class="site_ipt_lbl">Apartment No
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        pattern="\d*" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-6">
                                <div class="site_ipt_box">
                                    <label class="site_ipt_lbl">Avenue
                                        <!---->
                                        <!---->
                                        <small>
                                            (Optional)</small>
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        minlength="1" maxlength="5">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <!---------- home form------------- -->
                        <div class="row px-3" id="home_row">


                            <div class="col-6">
                                <div class="site_ipt_box">
                                    <label class="site_ipt_lbl">Street
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        minlength="1" maxlength="150" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-6">
                                <div class="site_ipt_box" id="house_no">
                                    <label class="site_ipt_lbl">House
                                        <!---->
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        minlength="1" maxlength="100" required>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>

                            </div>
                            <!---->
                            <!---->
                            <!---->

                            <div class="col-6">
                                <div class="site_ipt_box">
                                    <label class="site_ipt_lbl">Avenue
                                        <!---->
                                        <!---->
                                        <small>
                                            (Optional)</small>
                                    </label>
                                    <input class="site_ipt ng-untouched ng-pristine ng-valid" max="" min="" type="text"
                                        minlength="1" maxlength="5">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>
                        <!---->
                    </div>
                    <!-- --------------------------------------------------------------------------- -->


                    <!---->
                    <!---->
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="site_ipt_box">
                                <label class="site_ipt_lbl"> Name </label>
                                <input class="site_ipt ng-untouched ng-pristine ng-valid" formcontrolname="name"
                                    maxlength="50" type="text" required>
                                <!---->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="site_ipt_box">
                                <label class="site_ipt_lbl"> Mobile Number </label>
                                <div class="row row_mobile">
                                    <div class="col-3 col-p5">
                                        <input class="site_ipt ng-untouched ng-pristine ng-valid" formcontrolname="code"
                                            value="965" lang="en" readonly="" type="text" required>
                                    </div>
                                    <div class="col-9 col-p5">
                                        <input class="site_ipt ng-untouched ng-pristine ng-valid"
                                            formcontrolname="phone" lang="en" maxlength="15" pattern="\d*" type="text">
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="col-md-6">
                            <div class="site_ipt_box">
                                <label class="site_ipt_lbl"> Email
                                    <span id="opt_email" class="optional_remove"><small>(Optional)</small></span>
                                </label>
                                <input class="site_ipt ng-untouched ng-pristine ng-valid" formcontrolname="email"
                                    maxlength="50" type="email">
                                <!---->
                                <!---->
                                <!---->
                            </div>
                        </div>
                        <!---->
                        <!---->
                        <div class="col-sm-6">
                            <div class="site_ipt_box">
                                <label class="radio_btn inline-block quick_reg_label" id="label_remember">
                                    Remember me for future checkouts
                                    <input class="quick_reg_checkbox ng-untouched ng-pristine ng-valid"
                                        formcontrolname="quick_register" type="checkbox" value="1">
                                    <span class="checkmark" id="remember_me"> <i class="fa fa-check" aria-hidden="true"
                                            style="color:white;position: absolute;font-size: 16px;top: 2px;left: 2px;"></i>

                                    </span>
                                </label>
                                <div class="quick_reg_box">
                                    <label class="site_ipt_lbl">Password </label>
                                    <div class="input_with_icon">
                                        <div class="icon_box">
                                            <i class="fa fa-unlock-alt site_color"></i>
                                        </div>
                                        <input class="site_ipt ng-untouched ng-pristine ng-valid"
                                            formcontrolname="password" maxlength="15" type="password"
                                            placeholder="Password">
                                        <!---->
                                        <!---->
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <label class="site_ipt_lbl">Already have an account?
                                            <a class="site_color bold" data-target="#login_modal" data-toggle="modal"
                                                id="login_a">Login</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site_ipt_box site_btn_box col-md-6 mx-auto">
                        <a href="/payment"><button class="site_btn lg" type="button">Next
                                <!---->
                            </button></a>

                    </div>
                </form>
            </div>
        </div>




    </div>
    <!------ form login--- -->
    <div aria-labelledby="exampleModalCenterTitle" class="modal fade" id="login_modal" role="dialog" tabindex="-1"
        style="display: none;padding-right: 8px;" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document" id="login_form_in">
            <div class="modal-content" id="modal_contact">
                <div class="modal-body">
                    <!---->
                    <app-login parentname="checkout" _nghost-buj-c13="">
                        <div class="login_page">
                            <div class="container">
                                <div class="tab_cont_ttl_bar">
                                    <h2> Login </h2>
                                </div>
                                <p class="site_color_btn"> Please login to your account </p>
                                <!---->
                                <form autocomplete="off" class="site_form max-w ng-untouched ng-pristine ng-invalid"
                                    novalidate="">
                                    <div class="site_ipt_box">
                                        <label class="site_ipt_lbl">Email <span class="req_star">*</span></label>
                                        <input class="site_ipt ng-untouched ng-pristine ng-invalid"
                                            formcontrolname="username" type="email" placeholder="Email">
                                        <!---->
                                    </div>
                                    <div class="site_ipt_box">
                                        <label class="site_ipt_lbl">Password <span class="req_star">*</span></label>
                                        <input class="site_ipt ng-untouched ng-pristine ng-invalid"
                                            formcontrolname="password" maxlength="15" type="password"
                                            placeholder="Password">
                                        <!---->
                                    </div>
                                    <div class="site_ipt_box footer_btn_box">
                                        <button class="site_btn lg"> Login
                                            <!---->
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </app-login>
                </div>
                <div class=" footer_btn_box">
                    <a class="site_color_btn" data-dismiss="modal" data-target="#forgot_pass_modal" data-toggle="modal"
                        id="password_a">Forgot your password ? </a>
                </div>
                <div class="modal-footer text-center">
                    <button class="site_btn md light modal_close" data-dismiss="modal" type="button"
                        id="login_form_cancel">CANCEL</button>
                </div>
            </div>
        </div>
        <!-- form forgot password -->
        <div class="modal-dialog modal-dialog-centered" role="document" id="forgot_password">
            <div class="modal-content">
                <div class="modal-body">
                    <app-fpw parentname="checkout">
                        <div class="main_content_scn">
                            <div class="container">
                                <div class="tab_cont_ttl_bar">
                                    <h2> Forgot password </h2>
                                </div>
                                <form autocomplete="off" class="site_form max-w ng-untouched ng-pristine ng-invalid"
                                    novalidate="">
                                    <!---->
                                    <div class="site_ipt_box">
                                        <label class="site_ipt_lbl">Email </label>
                                        <input class="site_ipt ng-untouched ng-pristine ng-invalid"
                                            formcontrolname="email" type="email" placeholder="Email">
                                    </div>
                                    <div class="site_ipt_box footer_btn_box">
                                        <button class="site_btn lg"> Submit </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </app-fpw>
                </div>
                <div class="modal-footer text-center">
                    <button class="site_btn md light modal_close" data-dismiss="modal" type="button"
                        id="forgot_password_cancel">CANCEL</button>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH C:\xampp\htdocs\Ecommerce-k\resources\views/livewire/checkout-component.blade.php ENDPATH**/ ?>
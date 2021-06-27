<x-base-layout>
    <section class="img img1">
        <img src="{{ asset('assets/images/w8.jpg') }}">

    </section>
    <!-- img logo -->
    <section>
        <div class="logo1 ">
            <a href="/">
                <img class="img-fluid rounded-circle" src="{{ asset('assets/images/w8.jpg') }}">
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
                            novalidate="" name="frm-login" method="POST" action="{{ route('login') }}">
                            @csrf
                            <x-jet-validation-errors class="mb-4" />
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
                                <a href="{{ route('register') }}">
                                    <button class="site_btn lg light" type="button" style="height: 40px" > Register </button>
                                </a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>

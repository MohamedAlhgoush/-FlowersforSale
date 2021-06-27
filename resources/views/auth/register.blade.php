<x-guest-layout>
    <!-- background img -->
    <section class="img img1">
        <img src="{{ asset('assets/images/w8.jpg') }}">

    </section>
    <!-- img logo -->
    <section>
        <div class="logo1 ">
            <a href="homepage.html">
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
                        <h2> create an account </h2>
                    </div>
                    <p class="site_color_btn"> Please login to your account </p>
                    <!---->
                    <form autocomplete="off" class="site_form max-w ng-untouched ng-pristine ng-invalid" novalidate=""
                        action="{{ route('register') }}" name="frm-login" method="POST">
                        <x-jet-validation-errors class="mb-4" />
                        @csrf
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
</x-guest-layout>

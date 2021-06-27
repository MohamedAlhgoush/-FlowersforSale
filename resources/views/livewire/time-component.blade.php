<section class="img img1">
    <img src="{{ asset('assets/images/w8.jpg') }}">

</section>
<!-- img logo -->
<section>
    <div class="logo1 ">
        <a href="/">
            <img class="img-fluid rounded-circle" src= {{ asset('assets/images/w8.jpg') }}>
        </a>

    </div>
    <div class="sectext">
        <h2>Amor De Roses</h2>
    </div>
</section>

<!-- categories -->
<section class="bright services py-4">
    <div class="container">
        <div class="section-categories">
            <h2 class="cat-text pt-1">dalivery time</h2>
        </div>

        <div class="">
            <div class="time_info_hours">
                <label class="radio_btn inline-block" id="check_hours">2 Hours
                    <input name="tab" type="radio">
                    <span class="checkmark"></span></label>
                <label class="radio_btn inline-block" id="check_schedule">Schedule Order
                    <input name="tab" type="radio" value="Scheduled_time">
                    <span class="checkmark"></span></label>
            </div>
            <div class="hide_main">
                <hr>
                <div class="main">

                    <div id='top'>

                        <div class='left'>
                            Timezone:
                            <select id='time-zone-selector'>
                                <option value='local' selected>local</option>
                                <option value='UTC'>UTC</option>
                            </select>
                        </div>

                        <div class='right'>
                            <span id='loading'>loading...</span>
                            <span id='script-warning'><code>php/get-events.php</code> must be running.</span>
                        </div>

                        <div class='clear'></div>

                    </div>

                    <div id='calendar'></div>
                </div>
                <div class="clear"></div>
                <hr>
                <div class="days_slots_container show" dir="ltr">
                    <div class="row">
                        <!---->
                        <!---->
                        <div class="col-6">
                            <a>
                                <div class="site_ipt ht40 text-left selTime" style="direction: ltr" id="input_9">
                                    <!---->09:00 AM - 11:00 AM
                                    <!---->
                                </div>
                            </a>
                        </div>
                        <!---->
                        <div class="col-6">
                            <a>
                                <div class="site_ipt ht40 text-left" style="direction: ltr" id="input_11">
                                    <!---->11:00 AM - 01:00 PM
                                    <!---->
                                </div>
                            </a>
                        </div>
                        <!---->
                        <div class="col-6">
                            <a>
                                <div class="site_ipt ht40 text-left" style="direction: ltr" id="input_1">
                                    <!---->01:00 PM - 03:00 PM
                                    <!---->
                                </div>
                            </a>
                        </div>
                        <!---->
                        <div class="col-6">
                            <a>
                                <div class="site_ipt ht40 text-left" style="direction: ltr" id="input_3">
                                    <!---->03:00 PM - 05:00 PM
                                    <!---->
                                </div>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="footer_btn_box">
                <a href="/"><button class="site_btn lg" style="height: 40px;"> Continue </button></a>
            </div>
        </div>
    </div>

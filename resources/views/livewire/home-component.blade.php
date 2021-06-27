    <section class="img img1">
        <img src="{{ asset('assets/images/w8.jpg') }}">
    </section>
    <!-- img logo -->
    <section>
        <div class="logo1 ">
            <img class="img-fluid rounded-circle" src="{{ asset('assets/images/w8.jpg') }}">

        </div>
        <div class="sectext">
            <h2>Amor De Roses</h2>
        </div>
    </section>
    <!-- delivery -->
    <section class="del1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="delivery">
                        <p>Delivery</p>
                    </div>
                </div>
            </div>
            <div class="row row_r2">
                <div class="col-md-12">
                    <div class="delivery_r2">
                        <p>Delivery To</p>
                    </div>
                </div>
            </div>
            <div class="row row_r2">
                <div class="col-md-6">
                    <a href="/order-mode">
                        <div class="delivery_r3">
                            saida
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="/time">
                        <div class="delivery_r3">
                            <!----> Scheduled Time : 23 Mar Tuesday -
                            <span class="ltr"> 09:00 AM - 11:00 AM</span>
                            <span class="float-right"><i class="fa fa-chevron-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- categories -->
    <section class="bright services py-2">
        <div class="container">
            <div class="section-categories">
                <h2 class="cat-text pt-1">categories</h2>
            </div>

            <div class="row">
                @foreach ($categories as $category )
                <article class="col-md-4 ">
                        <div class="row">
                            <form action= {{ route('category.product',$category) }} method="GET">                         
                                <div class="col-sm-12">
                                    <div class="img_cat">
                                     <button type="submit"><img class="img-fluid" src="{{ asset('assets/images/Category') }}/{{ $category->image }}" alt="{{ $category->name }}"></button>
                                    </div>
                                </div>
                        </div>
                        <div class="row row2 py-2">
                            <div class="col-sm-12 service-icon">
                                <div class="d-flex h-100">
                                    <div class="mx-auto align-self-center">
                                        <h3 class="text_cat"><span>{{ $category->name }}</span></h3>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>   
                </article>
                @endforeach
            </div>
        </div>

    </section>

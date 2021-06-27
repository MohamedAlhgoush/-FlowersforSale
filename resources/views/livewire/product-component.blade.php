<section class="product_info">
    <div class="cotainer" style="padding-top:3%;">
        <div class="row">
            <div class="col-md-4 mx-auto img_div">

                <img class="img-fluid img_product" src="{{ asset('assets/images/Product') }}/{{ $product->image }}"
                    alt="{{ $product->name }}">
            </div>
        </div>
        <div class="col-md-4 mx-auto img_div2 p-3">
            <div class="info_div">
                <div class="code_product">
                    <h5>{{ $product->name }}</h5>
                </div>
                <div class="price_wts">
                    <a>
                        <h5>{{ $product->price }} KWD</h5>
                    </a>
                    {{-- <a href="#"><i class="px-2 fa fa-whatsapp"></i></a> --}}
                </div>
            </div>
            <p>{{ $product->description }}</p>
            <div class="site_box">
                <label for="">leave your message (optional)</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div><a href="/order">
            </a>

            <div>
                <div class="counter">
                    <span class="mr-20 action_btn" id="decrease_nb">
                        <i aria-hidden="true" class="fa fa-minus"></i></span>
                    <span class="mr-20 px-2">
                        <input class="quantity_input ng-untouched ng-pristine ng-valid" id="change_nb" value="1"
                            readonly="" type="text">
                    </span>
                    <span class="action_btn" id="increase_nb">
                        <i aria-hidden="true" class="fa fa-plus"></i></span>
                </div>
                <div class="text-center">
                    <a href="#"
                        wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->price }})">
                        <button class="site_btn lg" type="submit" style="height: 40px;">
                            <!---->
                            <!----> Add to Order
                            <!---->
                            <!----> {{ $product->price }}KWD
                            <!---->
                        </button>
                    </a>

                </div>
            </div>

        </div>



    </div>
</section>

<section class="bright services py-2" >
    <div class="container" style="padding-top: 1%;" >
        <div class="section-categories" style="text-align: center;">
            <h2 class="cat-text pt-1" >Search Results</h2>
        </div>
        <div class="row" style="justify-content: center">
            <div class="col-md-9">
                <div>
                    @if ($product->count()>0)
                        <div class="row">
                            @foreach ($product as $product)
                                <div class="col-md-6">
                                    <div class="item card_item">
                                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                            <div class="card_img">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/images/Product') }}/{{ $product->image }}"
                                                    alt="{{ $product->name }}">
                                            </div>
                                            <div class="card_info pt-2">
                                                <h5><span>{{ $product->name }}</span></h5>
                                                <div>
                                                    <button class="btn_price">{{ $product->price }} KWD</button>
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                    <div class="text-center2" style="padding-bottom:4%;">
                    <h4> No Products Found</h4>
                     </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</section>
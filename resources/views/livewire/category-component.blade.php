<x-base-layout>
    <section class="bright services py-2">
        <div class="container" style="padding-top: 6%;">
            <div class="row">
                <div class="col-md-3">
                    <div class="cat_list">
                        <div class="card_data p-3">
                            <h6 class="mb-2">{{ $categories->name }}</h6>
                            <a>
                                <div> <img src="{{ asset('assets/images/w8.jpg') }}" alt="" class="hidden_img"></div>
                                <div class="text_all">All</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div>
                        @if (($categories->products)->count()>0)
                            <div class="row">
                                @foreach ($categories->products as $product)
                                    <div class="col-md-6">
                                        <div class="item card_item">
                                            <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                                <div class="card_img" style="height: 70%; width:70%">
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
</x-base-layout>

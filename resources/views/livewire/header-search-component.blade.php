<form class="form-row" action="{{ route('product.search') }}" method="GET">
    <div class="input-field">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input type="text" value="{{ $search }}" name="search" placeholder="Search here...." >
        <input type="hidden" name="product_cat" aria-label="Search"
            value="{{ $product_cat }}" id="product-cat">
        <input type="hidden" name="product_cat_id" aria-label="Search"
        value="{{ $product_cat_id }}" id="product-cat-id">
        {{-- <a href="#" class="link-control">{{ str_split($product_cat,12)[0] }}</a> --}}
    </div>
</form>
<form class="form-row" action="<?php echo e(route('product.search')); ?>" method="GET">
    <div class="input-field">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input type="text" value="<?php echo e($search); ?>" name="search" placeholder="Search here...." >
        <input type="hidden" name="product_cat" aria-label="Search"
            value="<?php echo e($product_cat); ?>" id="product-cat">
        <input type="hidden" name="product_cat_id" aria-label="Search"
        value="<?php echo e($product_cat_id); ?>" id="product-cat-id">
        
    </div>
</form><?php /**PATH C:\xampp\htdocs\Ecommerce-k\resources\views/livewire/header-search-component.blade.php ENDPATH**/ ?>
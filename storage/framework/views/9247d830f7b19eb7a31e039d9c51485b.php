<?php $__env->startSection( 'title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper content-wrapper--archive">

        <div class="post-header">
            <header class="archive-header">
            </header>

            <div class="archive-hero-wrap">
                <div class="archive-hero_title">
                    <div class="hero-title"> <a href="../index.htm" rel="tag">Equipment</a><span class="seperator"> > </span>Heating Devices</div>	</div>
                <div class="archive-hero_description">
                </div>
                <div class="archive-hero_childs-lists">
                    <ul class="category-product_cat-list"><li class="cat-item cat-item-3222"><a href="dry-block-heaters/index.htm">Dry Block Heaters (5)</a></li><li class="cat-item cat-item-3223"><a href="../../../product/ivf-tech-tube-warmer/index.htm">Tube Warmers (1)</a></li><li class="cat-item cat-item-3224"><a href="warming-plates/index.htm">Warming Plates (6)</a></li><li class="cat-item cat-item-3225"><a href="heated-trolley-table/index.htm">Heated Trolley Table (2)</a></li></ul>	</div>


            </div>
        </div>

        <div class="content-main"><main><div class="storefront-breadcrumb"><div class="col-full"><nav class="woocommerce-breadcrumb"><span class="breadcrumb-content"><a href="../index.htm">Equipment</a></span><span class="breadcrumb-separator"> &gt; </span><span class="breadcrumb-content">Heating Devices</span></nav></div></div><header class="woocommerce-products-header">

                    <h1 class="woocommerce-products-header__title page-title" style="display: none;"> Heating Devices</h1>

                </header>
                <div class="woocommerce-notices-wrapper"></div>
                <ul class="products columns-4">
                    <?php if($products->isEmpty()): ?>
                        <div class="post-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="wc-empty-cart-message">
                                    <div class="cart-empty woocommerce-info">
                                        Your products are currently empty.
                                    </div>
                                </div>
                                <p class="return-to-shop">
                                    <a class="button wc-backward" href="<?php echo e(url('shop')); ?>">
                                        Return to shop
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="product type-product post-9201 status-publish onbackorder product_cat-stools has-post-thumbnail taxable shipping-taxable product-type-grouped">
                                <a href="<?php echo e(route('product.details', ['product' => $product->id])); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">

                                    <?php if($product->product_images->isNotEmpty()): ?>
                                        <div class="super-img" style="background-image: url('<?php echo e($product->product_images->sortBy('created_at')->first()->getImageUrl()); ?>')">
                                            <img src="<?php echo e($product->product_images->sortBy('created_at')->first()->getImageUrl()); ?>" alt="<?php echo e($product->title); ?>">
                                        </div>
                                    <?php else: ?>
                                        <div class="super-img" style="background-image: url('../../wp-content/uploads/2024/01/Beta45-med-farvekort-768x768.jpg')">
                                            <img src="../../wp-content/uploads/2024/01/Beta45-med-farvekort-768x768.jpg" alt="Default Image">
                                        </div>
                                    <?php endif; ?>

                                    <?php if(isset($product->sub_products) && $product->sub_products->count() > 0): ?>
                                        <span class="price sku"><?php echo e($product->sub_products->count()); ?> variants</span>
                                    <?php else: ?>
                                        <span class="price sku"><?php echo e($product->ref_number); ?></span>
                                    <?php endif; ?>

                                    <h2 class="woocommerce-loop-product__title"><?php echo e($product->title); ?></h2>
                                </a>

                                <form class="cart" action="#" method="post" enctype="multipart/form-data">
                                    <div class="unit-data not-login">1 unit</div>
                                    <div class="quantity">
                                        <label class="screen-reader-text" for="quantity_<?php echo e($product->id); ?>">Quantity</label>
                                        <input type="number" id="quantity_<?php echo e($product->id); ?>" class="input-text qty text" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" step="1" inputmode="numeric" autocomplete="off">
                                    </div>

                                    <a href="<?php echo e(url('my-account')); ?>" class="single_add_to_cart_button button alt">Login to shop</a>
                                </form>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
                <?php if($products->isNotEmpty()): ?>
                    <nav class="woocommerce-pagination">
                        <ul class='page-numbers'>
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="page/2/index.htm">2</a></li>
                            <li><a class="page-numbers" href="page/3/index.htm">3</a></li>
                            <li><a class="page-numbers" href="page/4/index.htm">4</a></li>
                            <li><a class="next page-numbers" href="page/2/index.htm">&rarr;</a></li>
                        </ul>
                    </nav>
                <?php endif; ?>
            </main>
            <!-- <section class="sidebar">


            </section> -->
        </div>			</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('nordiccell.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\home\nordiccell\resources\views/nordiccell/pages/sub_category_item_products.blade.php ENDPATH**/ ?>
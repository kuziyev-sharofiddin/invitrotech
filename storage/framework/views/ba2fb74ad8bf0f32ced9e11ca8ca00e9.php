<?php $__env->startSection( 'title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper content-wrapper--archive">

        <div class="post-header">
            <header class="archive-header">
            </header>

            <div class="archive-hero-wrap">
                <div class="archive-hero_title">
                    <div class="hero-title"> Equipment</div>
                </div>
                <div class="archive-hero_description">
                </div>
                <div class="archive-hero_childs-lists">
                    <ul class="category-product_cat-list">
                        <li class="cat-item cat-item-3221"><a href="heating-devices/index.htm">Heating Devices (14)</a>
                        </li>
                        <li class="cat-item cat-item-3220">
                            <a href="lab-furniture/index.htm">Lab Furniture (57)</a></li>
                        <li class="cat-item cat-item-1514">
                            <a href="cryo-lab-equipment/index.htm">Cryo Lab Equipment
                                (41)</a></li>
                        <li class="cat-item cat-item-1390">
                            <a href="aspiration-pumps/index.htm">Aspiration Pumps (3)</a>
                        </li>
                        <li class="cat-item cat-item-3226">
                            <a href="centrifuges/index.htm">Centrifuges (5)</a></li>
                        <li class="cat-item cat-item-3232">
                            <a href="changeover-systems/index.htm">Changeover Systems
                                (4)</a></li>
                        <li class="cat-item cat-item-4011">
                            <a href="workstation-accessories/index.htm">Workstation
                                Accessories (4)</a></li>
                    </ul>
                </div>


            </div>
        </div>

        <div class="content-main">
            <main>
                <header class="woocommerce-products-header">

                    <h1 class="woocommerce-products-header__title page-title" style="display: none;"> Equipment</h1>

                </header>
                <div class="woocommerce-notices-wrapper"></div>
                <ul class="product-categories">
                    <?php $__currentLoopData = $parentcategory->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="product-category">
                            <a href="<?php echo e(route('category.products', ['name'=>$category->name])); ?>" class="heating-devices"><?php echo e($category->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
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
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('nordiccell.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\home\nordiccell\resources\views/nordiccell/pages/parent_category_products.blade.php ENDPATH**/ ?>
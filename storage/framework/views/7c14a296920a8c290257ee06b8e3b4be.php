<?php $__env->startSection( 'title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="post-header">
            <header class="hero hero--size-large hero--align-left">


                <div class="hero__text-wrap ">

                    <h1 class="hero__title">Frontpage</h1>


                </div>


            </header>
        </div>


        <div class="content-main">

            <main>


                <article id="article-2318" class="post-wrapper post-2318 page type-page status-publish hentry">


                    <div class="post-content">


                        <div class="product-focus">
                            <div class="product-focus-wrapper">
                                <div class="image-wrapper">
                                    <img fetchpriority="high" decoding="async" width="1024" height="769"
                                         src="/wp-content/uploads/2024/08/forside-lenshooke-vendt-1-1024x769.jpg"
                                         class="" alt=""

                                         sizes="(max-width: 1024px) 100vw, 1024px"></div>
                                <div class="product-focus-body">
                                    <h2 class="product-focus-title">New sperm separator that will change your
                                        workflow</h2>
                                    <div class="body__content">
                                        <p>LensHooke Sperm Separation Device is simple, fast, centrifuge free, and has
                                            excellent performance.</p>
                                    </div>
                                    <a class="body__link nordiccell-button" href="product/lenshooke/index.htm">Shop
                                        now</a>
                                </div>
                            </div>
                        </div>


                        <div class="block-teaser">

                            <div class="block-teaser-wrapper center">
                                <div class="image-wrapper">
                                    <div class="image">
                                        <img decoding="async"
                                             src="wp-content/uploads/2024/08/dakota-corbin-243775-fertility-annettestest.jpg"
                                             alt="dakota-corbin-243775-fertility-annettestest">
                                    </div>
                                </div>
                                <div class="body__content">
                                    <h2 class="title">We supply disposables and equipment within reproductive science,
                                        gynecology, and obstetrics</h2>
                                    <a class="body__link nordiccell-button" href="<?php echo e(route('all-product')); ?>">Explore all
                                        products</a>
                                </div>
                            </div>

                        </div>


                        <div class="block-newest-products spacing-40">

                            <h2>Featured Products</h2>
                            <div class="list-newest-products">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item-product">
                                        <a href="<?php echo e(route('product.details', ['product' => $product->id])); ?>">
                                            <div>
                                                <?php if($product->product_images->isNotEmpty()): ?>
                                                    <div class="super-img wrap-img"
                                                         style="background-image: url('<?php echo e($product->product_images->sortBy('created_at')->first()->getImageUrl()); ?>')">
                                                        <img decoding="async"
                                                             src="<?php echo e($product->product_images->sortBy('created_at')->first()->getImageUrl()); ?>">
                                                    </div>
                                                <?php else: ?>
                                                    <div class="super-img wrap-img"
                                                         style="background-image: url('wp-content/uploads/2023/06/DSF5857_42428_1-copy@0.5x-768x768.jpg')">
                                                        <img decoding="async"
                                                             src="wp-content/uploads/2024/08/DSF5857_42428_1-copy%400.5x-768x768.jpg">
                                                    </div>
                                                <?php endif; ?>
                                                <?php if(isset($product->sub_products) && $product->sub_products->count() > 0): ?>
                                                    <div class="text-small"><?php echo e($product->sub_products->count()); ?>

                                                        variants
                                                    </div>
                                                <?php else: ?>
                                                    <div class="text-small"><?php echo e($product->ref_number); ?></div>
                                                <?php endif; ?>
                                                <h3><?php echo e($product->title); ?></h3>


                                            </div>
                                            <div>
                                                <div class="price-explainer"><?php echo e($product->bulk); ?></div>
                                            </div>

                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>


                    </div>


                </article>


            </main>


        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('nordiccell.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\home\nordiccell\resources\views/nordiccell/pages/home.blade.php ENDPATH**/ ?>
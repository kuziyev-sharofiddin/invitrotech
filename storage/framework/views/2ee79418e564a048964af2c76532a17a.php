<?php $__env->startSection( 'title', 'Product Edit'); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-container container-lg  pt-10">
        <div class="content-header row mb-6">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-4">Add</h2>
                        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                                <li class="breadcrumb-item">
                                    <a href="/admin/dashboard">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="<?php echo e(route('products.index')); ?>">
                                        Products
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Add
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-flush p-10">
            <form id="kt_docs_formvalidation_text" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                  action="<?php echo e(route('products.update', ['product' => $product->id])); ?>" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Parent Category</label>
                    </div>
                    <div class="col-7">
                        <select class="form-control form-control-solid mb-3 mb-lg-0"
                                name="sub_category_id">
                            <option value=""></option>
                            <?php $__currentLoopData = $parent_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($parent_category->id); ?>"><?php echo e($parent_category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Category</label>
                    </div>
                    <div class="col-7">
                        <select class="form-control form-control-solid mb-3 mb-lg-0"
                                name="sub_category_id">
                            <option value=""></option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Sub Category</label>
                    </div>
                    <div class="col-7">
                        <select class="form-control form-control-solid mb-3 mb-lg-0"
                                name="sub_category_id">
                            <option value=""></option>
                            <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($sub_category->id); ?>"><?php echo e($sub_category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Sub Category Item</label>
                    </div>
                    <div class="col-7">
                        <select class="form-control form-control-solid mb-3 mb-lg-0"
                                name="sub_category_id">
                            <option value=""></option>
                            <?php $__currentLoopData = $sub_category_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($sub_category_item->id); ?>"><?php echo e($sub_category_item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Title</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="title" value="<?php echo e($product->title); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Description</label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="editor2" name="description" value="<?php echo e($product->description); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Definition</label>
                    </div>
                    <div class="col-7">
                        <input type="text" id="editor3" name="definition" value="<?php echo e($product->definition); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Ref Number</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="ref_number" value="<?php echo e($product->ref_number); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Bulk</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="bulk" value="<?php echo e($product->bulk); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Bulk Part</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="bulk_part" value="<?php echo e($product->bulk_part); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Testing</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="testing" value="<?php echo e($product->testing); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Latex Material</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="latex_material" value="<?php echo e($product->latex_material); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Ce Marking</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="ce_marking" value="<?php echo e($product->ce_marking); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Intended Use</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="intended_use" value="<?php echo e($product->intended_use); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Available In</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="available_in" value="<?php echo e($product->available_in); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Quantity</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="quantity" value="<?php echo e($product->quantity); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Price</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="price" value="<?php echo e($product->price); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Discount Price</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="discount_price" value="<?php echo e($product->discount_price); ?>"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-3 col-7">
                        <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary btn-sm">
                            Save
                        </button>
                        <a class="btn btn-sm btn-danger" href="">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\home\nordiccell\resources\views/admin/pages/products/product_edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection( 'title', 'Order Items Show'); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-container container  pt-10">
        <div class="content-header row mb-6">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-4">Users</h2>
                        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                                <li class="breadcrumb-item">
                                    <a href="/admin/dashboard">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Users
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body p-10">
            <div class="d-flex flex-stack mb-5 ">
                <form action="" method="GET">
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span
                                class="path2"></span></i>
                        <input type="text" style="margin-right: 10px;" data-kt-docs-table-filter="search" name="search"
                               class="form-control form-control-solid w-250px ps-15"
                               placeholder="Search...">
                        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                            <button class="btn btn-primary btn-sm" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="categories_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table id="categories_datatable"
                           class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                           aria-describedby="categories_datatable_info" style="width: 1198px;">
                        <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="№: activate to sort column ascending" style="width: 25px;">№
                            </th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Ref Number</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Image</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Title</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Price</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Quantity</th>
                            <th class="w-225px sorting" tabindex="0" aria-controls="categories_datatable" rowspan="1"
                                colspan="1" aria-label="Nomi: activate to sort column ascending"
                                style="width: 225.25px;">Sub Total</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                        <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even">
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->product->ref_number); ?></td>
                                <td><?php echo e($item->product->product_images->sortBy('created_at')->first()->getImageUrl()); ?></td>
                                <td><?php echo e($item->product->title); ?></td>
                                <td><?php echo e($item->product->price); ?></td>
                                <td><?php echo e($item->quantity); ?></td>
                                <td><?php echo e($item->price); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="categories_datatable_paginate">
                            <?php if($orderItems->hasPages()): ?>
                                <div class="pagination-wrapper">
                                    <?php echo e($orderItems->links()); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\home\nordiccell\resources\views/admin/pages/order/order_items_list.blade.php ENDPATH**/ ?>
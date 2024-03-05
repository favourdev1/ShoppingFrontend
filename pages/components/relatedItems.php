<!-- section -->




<section class="my-lg-14 my-14">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <!-- heading -->
                <h3>Similar Products</h3>
            </div>
        </div>
        <!-- row -->
        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
            <!-- col -->

            <?php
            if (count($similarProducts) > 0) {
                // Loop through the categories array
                foreach ($similarProducts as $product) {
                    // Get the category id, name, slug, description, status, and created_at fields
            
                    $id = $product['id'];
                    $productName = $product['product_name'];

                    $status = $product['status'];
                    $created_at = $product['created_at'];
                    $salesPrice = $product['sales_price'];
                    $regularPrice = $product['regular_price'];

                    // Use the category name as the image file name
                    $productImg = empty($product['product_img1']) ? 'assets/images/products/product-img-1.jpg' : $product['product_img1'];

                    // Format the created_at date as dd/mm/yyyy
                    $date = date("d/m/Y", strtotime($created_at));
                    if ($status == 'active') {
                        // Display the table row for each category
                        ?>


            <div class="col">
                <div class="card card-product">
                    <div class="card-body">
                        <div class="text-center position-relative">
                            <div class="position-absolute top-0 start-0">
                                <span class="badge bg-danger">Sale</span>
                            </div>
                            <a href="<?php echo "pages/shop-single.php?id=" . $id ?>"><img
                                    src="<?php echo $productImg ?>"
                                    alt=""
                                    class="mb-3 img-fluid"
                                /></a>

                            <div class="card-product-action">
                                <a
                                    href="#!"
                                    class="btn-action"
                                    data-product-details='<?php echo json_encode($product); ?>'
                                    onclick="showQuickView(this)"
                                >
                                    <i
                                        class="bi bi-eye"
                                        data-bs-toggle="tooltip"
                                        data-bs-html="true"
                                        title="Quick View"
                                    ></i>
                                </a>
                                <a
                                    href="#!"
                                    class="btn-action"
                                    data-bs-toggle="tooltip"
                                    data-bs-html="true"
                                    title="Wishlist"
                                ><i class="bi bi-heart"></i></a>
                                <a
                                    href="#!"
                                    class="btn-action"
                                    data-bs-toggle="tooltip"
                                    data-bs-html="true"
                                    title="Compare"
                                ><i class="bi bi-arrow-left-right"></i></a>
                            </div>
                        </div>
                        <div class="text-small mb-1 text-center">
                            <a
                                href="<?php echo "pages/shop-single.php?id=" . $id ?>"
                                class="text-decoration-none text-muted text-center title-container"
                            ><small><?php echo $productName ?></small></a>
                        </div>



                        <div class="d-block justify-content-between align-items-center  text-center fs-6 fw-bold">
                            <div>
                                <?php if (!empty($regularPrice)) { ?>

                                <span class="text-dark"><?php echo CURRENCY . number_format($salesPrice) ?></span>

                                <span
                                    class="text-decoration-line-through text-muted small fw-100"><?php echo CURRENCY . number_format($regularPrice) ?></span>

                                <?php } ?>


                            </div>

                            <div>
                                <small class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </small>
                                <span class="text-muted small">4.5(149)</span>
                            </div>
                            <div>


                                <a
                                    href="#"
                                    data-product-details='<?php echo json_encode($product); ?>'
                                    onclick="showQuickView(this)"
                                    class="btn btn-primary btn-sm w-100 mt-4"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-plus"
                                    >
                                        <line
                                            x1="12"
                                            y1="5"
                                            x2="12"
                                            y2="19"
                                        ></line>
                                        <line
                                            x1="5"
                                            y1="12"
                                            x2="19"
                                            y2="12"
                                        ></line>
                                    </svg>
                                    Add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php }
                }
            } ?>

        </div>
    </div>
</section>
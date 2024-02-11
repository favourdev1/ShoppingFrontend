<!DOCTYPE html>
<html lang="en">

    <?php $pageName = 'Sosmart - Online shopping and more' ?>

    <?php include_once('header.php') ?>

    <body>
        <!-- navbar -->
        <?php include_once('php/profile/fetchAll.php'); ?>

        <?php include_once('php/cart/fetchAll.php') ?>
        <?php include_once('php/category/fetchAll.php'); ?>
        <?php include_once 'php/search/search.php' ?>

        <?php include_once('navbar.php') ?>






        <script src="../assets/js/vendors/validation.js"></script>

        <main>
            <!-- section-->

            <!-- section -->
            <div class="mt-8 mb-lg-14 mb-8">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row gx-10">
                        <!-- col -->
                        <?php if ($searchTotalProducts < 1) { ?>
                        <div class="d-flex  align-items-center justify-content-center ">
                            <div clas="mx-auto text-center">
                                <div class="text-center">
                                    <img
                                        src="../assets/images/svg-graphics/search.svg"
                                        height="300"
                                    />
                                </div>
                                <?php $query = $_GET['query'] ?? ''; ?>
                                <div class="text-center">

                                    <h5>There are no products for "<?php echo $query; ?>"</h5>
                                    <p class="mt-4 mb-0 small">- Check your spelling for typing errors</p>
                                    <p class="mb-0 small">
                                        - Try searching with short and simple keywords
                                    </p>
                                    <p class="mb-0 small">
                                        - Try searching more general terms - you can then filter the search results
                                    </p>

                                    <button
                                        class="btn btn-primary px-4 mt-4"
                                        onclick="goToHome()"
                                    >Go to Home page</button>
                                </div>
                            </div>

                        </div>

                        <?php } ?>
                        <?php if ($searchTotalProducts > 0) {
                            include_once('components/search/filter-view.php');
                            ?>


                        <section class="col-lg-9 col-md-12">
                            <!-- card -->
                            <!-- <div class="card mb-4 bg-light border-0">
                      
                        <div class="card-body p-9">
                           <h2 class="mb-0 fs-1">Snacks & Munchies</h2>
                        </div>
                     </div> -->
                            <!-- list icon -->
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="mb-3 mb-lg-0">
                                    <p class="mb-0">
                                        <span class="text-dark"><?php echo $searchTotalProducts; ?></span>
                                        Products found
                                    </p>
                                </div>

                                <!-- icon -->
                                <div class="d-md-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center justify-content-between">

                                        <div class="ms-2 d-lg-none">
                                            <a
                                                class="btn btn-outline-gray-400 text-muted"
                                                data-bs-toggle="offcanvas"
                                                href="#offcanvasCategory"
                                                role="button"
                                                aria-controls="offcanvasCategory"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="14"
                                                    height="14"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="feather feather-filter me-2"
                                                >
                                                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3">
                                                    </polygon>
                                                </svg>
                                                Filters
                                            </a>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-2 mt-lg-0">
                                        <div class="me-2 flex-grow-1">
                                            <!-- select option -->
                                            <select class="form-select">
                                                <option selected>Show: 50</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                        <div>
                                            <!-- select option -->
                                            <select class="form-select">
                                                <option selected>Sort by: Featured</option>
                                                <option value="Low to High">Price: Low to High</option>
                                                <option value="High to Low">Price: High to Low</option>
                                                <option value="Release Date">Release Date</option>
                                                <option value="Avg. Rating">Avg. Rating</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->

                            <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">

                                <?php

                                        foreach ($searchProduct as $searchedProducts) { ?>
                                <?php
$product = $searchedProducts;
                                                $id = $searchedProducts['id'];
                                                $productName = $searchedProducts['product_name'];
                                                $productCategory = $searchedProducts['category'];
                                                // $slug = $searchedProducts['slug'];
                                                // $description = $searchedProducts['description'];
                                                $status = $searchedProducts['status'];
                                                $created_at = $searchedProducts['created_at'];
                                                $salesPrice = $searchedProducts['sales_price'];
                                                $regularPrice = $searchedProducts['regular_price'];

                                                // Use the category name as the image file name
                                                $productImg = empty($searchedProducts['product_img1']) ? 'assets/images/products/product-img-1.jpg' : $searchedProducts['product_img1'];
                                                $freeShipping = $searchedProducts['free_shipping'];
                                                // Format the created_at date as dd/mm/yyyy
                                                $date = date("d/m/Y", strtotime($created_at));
                                                $percentageDiscount = number_format(calculatePercentageDiscount($regularPrice, $salesPrice), 0);


                                                ?>
                                <?php include("components/product-card.php"); ?>

                                <?php } ?>


                            </div>
                  
                    <div class="row mt-8">
                        <div class="col">
                            <!-- nav -->
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a
                                            class="page-link mx-1"
                                            href="#"
                                            aria-label="Previous"
                                        >
                                            <i class="feather-icon icon-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a
                                            class="page-link mx-1 active"
                                            href="#"
                                        >1</a></li>
                                    <li class="page-item"><a
                                            class="page-link mx-1"
                                            href="#"
                                        >2</a></li>

                                    <li class="page-item"><a
                                            class="page-link mx-1"
                                            href="#"
                                        >...</a></li>
                                    <li class="page-item"><a
                                            class="page-link mx-1"
                                            href="#"
                                        >12</a></li>
                                    <li class="page-item">
                                        <a
                                            class="page-link mx-1"
                                            href="#"
                                            aria-label="Next"
                                        >
                                            <i class="feather-icon icon-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <?php } ?>
                    </section>
                </div>
            </div>
            </div>
        </main>

        <!-- modal -->
        <!-- Modal -->
        <div
            class="modal fade"
            id="quickViewModal"
            tabindex="-1"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-8">
                        <div class="position-absolute top-0 end-0 me-3 mt-3">
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- img slide -->
                                <div
                                    class="product productModal"
                                    id="productModal"
                                >
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="background-image: url(../assets/images/products/product-single-img-1.jpg)"
                                    >
                                        <!-- img -->
                                        <img
                                            src="../assets/images/products/product-single-img-1.jpg"
                                            alt=""
                                        />
                                    </div>
                                    <div>
                                        <div
                                            class="zoom"
                                            onmousemove="zoom(event)"
                                            style="background-image: url(../assets/images/products/product-single-img-2.jpg)"
                                        >
                                            <!-- img -->
                                            <img
                                                src="../assets/images/products/product-single-img-2.jpg"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="zoom"
                                            onmousemove="zoom(event)"
                                            style="background-image: url(../assets/images/products/product-single-img-3.jpg)"
                                        >
                                            <!-- img -->
                                            <img
                                                src="../assets/images/products/product-single-img-3.jpg"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="zoom"
                                            onmousemove="zoom(event)"
                                            style="background-image: url(../assets/images/products/product-single-img-4.jpg)"
                                        >
                                            <!-- img -->
                                            <img
                                                src="../assets/images/products/product-single-img-4.jpg"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                                <!-- product tools -->
                                <div class="product-tools">
                                    <div
                                        class="thumbnails row g-3"
                                        id="productModalThumbnails"
                                    >
                                        <div
                                            class="col-3"
                                            class="tns-nav-active"
                                        >
                                            <div class="thumbnails-img">
                                                <!-- img -->
                                                <img
                                                    src="../assets/images/products/product-single-img-1.jpg"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="thumbnails-img">
                                                <!-- img -->
                                                <img
                                                    src="../assets/images/products/product-single-img-2.jpg"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="thumbnails-img">
                                                <!-- img -->
                                                <img
                                                    src="../assets/images/products/product-single-img-3.jpg"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="thumbnails-img">
                                                <!-- img -->
                                                <img
                                                    src="../assets/images/products/product-single-img-4.jpg"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ps-lg-8 mt-6 mt-lg-0">
                                    <a
                                        href="#!"
                                        class="mb-4 d-block"
                                    >Bakery Biscuits</a>
                                    <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
                                    <div class="mb-4">
                                        <small class="text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </small>
                                        <a
                                            href="#"
                                            class="ms-2"
                                        >(30 reviews)</a>
                                    </div>
                                    <div class="fs-4">
                                        <span class="fw-bold text-dark">$32</span>
                                        <span class="text-decoration-line-through text-muted">$35</span>
                                        <span><small class="fs-6 ms-2 text-danger">26% Off</small></span>
                                    </div>
                                    <hr class="my-6" />
                                    <div class="mb-4">
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary"
                                        >250g</button>
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary"
                                        >500g</button>
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary"
                                        >1kg</button>
                                    </div>
                                    <div>
                                        <!-- input -->
                                        <!-- input -->
                                        <div class="input-group input-spinner">
                                            <input
                                                type="button"
                                                value="-"
                                                class="button-minus btn btn-sm"
                                                data-field="quantity"
                                            />
                                            <input
                                                type="number"
                                                step="1"
                                                max="10"
                                                value="1"
                                                name="quantity"
                                                class="quantity-field form-control-sm form-input"
                                            />
                                            <input
                                                type="button"
                                                value="+"
                                                class="button-plus btn btn-sm"
                                                data-field="quantity"
                                            />
                                        </div>
                                    </div>
                                    <div class="mt-3 row justify-content-start g-2 align-items-center">
                                        <div class="col-lg-4 col-md-5 col-6 d-grid">
                                            <!-- button -->
                                            <!-- btn -->
                                            <button
                                                type="button"
                                                class="btn btn-primary"
                                            >
                                                <i class="feather-icon icon-shopping-bag me-2"></i>
                                                Add to cart
                                            </button>
                                        </div>
                                        <div class="col-md-4 col-5">
                                            <!-- btn -->
                                            <a
                                                class="btn btn-light"
                                                href="#"
                                                data-bs-toggle="tooltip"
                                                data-bs-html="true"
                                                aria-label="Compare"
                                            ><i class="bi bi-arrow-left-right"></i></a>
                                            <a
                                                class="btn btn-light"
                                                href="#!"
                                                data-bs-toggle="tooltip"
                                                data-bs-html="true"
                                                aria-label="Wishlist"
                                            ><i class="feather-icon icon-heart"></i></a>
                                        </div>
                                    </div>
                                    <hr class="my-6" />
                                    <div>
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>Product Code:</td>
                                                    <td>FBB00255</td>
                                                </tr>
                                                <tr>
                                                    <td>Availability:</td>
                                                    <td>In Stock</td>
                                                </tr>
                                                <tr>
                                                    <td>Type:</td>
                                                    <td>Fruits</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping:</td>
                                                    <td>
                                                        <small>
                                                            01 day shipping.
                                                            <span class="text-muted">( Free pickup today)</span>
                                                        </small>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php include_once('footer.php') ?>


        <!-- Javascript-->
        <script src="../assets/libs/nouislider/dist/nouislider.min.js"></script>
        <script src="../assets/libs/wnumb/wNumb.min.js"></script>
        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>

        <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
        <script src="../assets/js/vendors/tns-slider.js"></script>
        <script src="../assets/js/vendors/zoom.js"></script>

        <script>
        function goToHome() {
            window.location.href = "../index.php"
        }
        </script>
    </body>

</html>
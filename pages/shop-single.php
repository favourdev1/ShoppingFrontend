<!DOCTYPE html>
<html lang="en">
    <?php
    // require_once 'vendor/autoload.php'; ?>
    <?php $productName = $_GET['productName'] ?? 'Product Details';
    $pageName = $productName . " | Sosmart Online shopping and more! "; ?>
    <?php include_once('header.php') ?>



    <?php
    $pageName = $productName . " | Sosmart Online shopping and more! ";
    ?>

    <body>
        <script>
        document.title = " <?php echo $pageName ?>"
        </script>
        <!-- files   -->
        <?php
        if (!isset($_GET['id'])) {
            header('Location: 404error.php');
        }
        $getId = $_GET['id'];?>
        <?php include_once('php/profile/fetchAll.php'); ?>

        <?php include_once('php/category/fetchAll.php'); ?>
        <?php include_once('php/products/fetchSimilar.php'); ?>
        <?php include_once('php/products/fetch.php'); ?>
        <?php include_once('php/cart/fetchAll.php') ?>
        <!-- navbar -->
        <?php include_once('navbar.php') ?>


        <!-- Modal -->
        <div
            class="modal fade"
            id="locationModal"
            tabindex="-1"
            aria-labelledby="locationModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-6">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5
                                    class="mb-1"
                                    id="locationModalLabel"
                                >Choose your Delivery Location</h5>
                                <p class="mb-0 small">Enter your address and we will specify the offer you area.</p>
                            </div>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="my-5">
                            <input
                                type="search"
                                class="form-control"
                                placeholder="Search your area"
                            />
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <script src="../assets/js/vendors/validation.js"></script>

        <main>

            <section class="mt-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <!-- img slide -->
                            <div
                                class="product"
                                id="product"
                            >
                                <div
                                    class="zoom"
                                    onmousemove="zoom(event)"
                                    style="background-image: url(<?php echo $productImg1 ?>); background-repeat:no-repeat"
                                >
                                    <!-- img -->
                                    <!-- img -->
                                    <img
                                        src="<?php echo $productImg1 ?>"
                                        alt=""
                                    />
                                </div>
                                <div>
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="background-image: url(<?php echo $productImg2 ?>); background-repeat:no-repeat"
                                    >
                                        <!-- img -->
                                        <img
                                            src="<?php echo $productImg2 ?>"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="background-image: url(<?php echo $productImg3 ?>); background-repeat:no-repeat"
                                    >
                                        <!-- img -->
                                        <img
                                            src="<?php echo $productImg3 ?>"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="zoom"
                                        onmousemove="zoom(event)"
                                        style="background-image: url(<?php echo $productImg4 ?>); background-repeat:no-repeat"
                                    >
                                        <!-- img -->
                                        <img
                                            src="<?php echo $productImg4 ?>"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                            <!-- product tools -->
                            <div class="product-tools">
                                <div
                                    class="thumbnails row g-3"
                                    id="productThumbnails"
                                >
                                    <div class="col-3">
                                        <div class="thumbnails-img border rounded">
                                            <!-- img -->
                                            <img
                                                src="<?php echo $productImg1 ?>"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img border rounded">
                                            <!-- img -->
                                            <img
                                                src="<?php echo $productImg2 ?>"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img border rounded">
                                            <!-- img -->
                                            <img
                                                src="<?php echo $productImg3 ?>"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnails-img border rounded">
                                            <!-- img -->
                                            <img
                                                src="<?php echo $productImg4 ?>"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="ps-lg-10 mt-6 mt-md-0">
                                <!-- content -->
                                <a
                                    href="#!"
                                    class="mb-4 d-block"
                                ><?php echo $categoryName ?></a>
                                <!-- heading -->
                                <h1 class="mb-1"><?php echo $productName ?></h1>
                                <small class="text-muted d-flex align-items-center">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <?php if (is_array($tags)) { ?>
                                            <span class="text-muted fw-bold">Tags:</span>
                                            <?php foreach ($tags as $tag): ?>
                                                <a
                                                    href="shop-grid.php?search=<?= $tag->value ?>"
                                                    class="ps-2 text-muted text-decoration-underline"
                                                >
                                                    <?= $tag->value ?>
                                                </a>
                                            <?php endforeach;
                                        } ?>

                                    </div>
                                </small>
                                <div class="mb-4">
                                    <!-- rating -->
                                    <!-- rating -->
                                    <small class="text-warning">
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </small>
                                    <a
                                        href="#"
                                        class="ms-2"
                                    >(0 reviews)</a>
                                </div>
                                <div class="fs-4 fw-bold">
                                    <!-- price -->
                                    <?php if (!empty($regularPrice)) { ?>

                                        <span
                                            class="text-decoration-line-through text-muted"><?php echo CURRENCY . number_format($regularPrice) ?></span>

                                    <?php } ?>
                                    <span class="text-dark"><?php echo CURRENCY . number_format($salesPrice) ?></span>

                                </div>
                                <!-- hr -->
                                <hr class="my-6" />
                                <div class="mb-5">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary"
                                    >250g</button>
                                    <!-- btn -->
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary"
                                    >500g</button>
                                    <!-- btn -->
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary"
                                    >1kg</button>
                                </div>
                                <div>
                                    <!-- input -->
                                    <div class="input-group input-spinner ">
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
                                        <p class="ps-3 text-muted pb-0">(<?php echo $quantityInStock; ?> available)</p>
                                    </div>
                                </div>
                                <div class="mt-3 row justify-content-start g-2 align-items-center">
                                    <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
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
                                    <div class="col-md-4 col-4">
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
                                            href="shop-wishlist.php"
                                            data-bs-toggle="tooltip"
                                            data-bs-html="true"
                                            aria-label="Wishlist"
                                        ><i class="feather-icon icon-heart"></i></a>
                                    </div>
                                </div>
                                <!-- hr -->
                                <hr class="my-6 mb-3" />
                                <div>
                                    <!-- table -->
                                    <table class="table table-borderless mb-0 ps-0">
                                        <tbody class="ps-0">
                                            <tr>
                                                <td class="ps-0">Brand:</td>
                                                <td><?php echo $brand ?></td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">Availability:</td>
                                                <td>In Stock</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">Type:</td>
                                                <td>Fruits</td>
                                            </tr>
                                            <tr>
                                                <td class="ps-0">Shipping:</td>
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
                                <div class="mt-8">
                                    <!-- dropdown -->
                                    <div class="dropdown">
                                        <a
                                            class="btn btn-outline-secondary dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                        >Share</a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                >
                                                    <i class="bi bi-facebook me-2"></i>
                                                    Facebook
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                >
                                                    <i class="bi bi-twitter me-2"></i>
                                                    Twitter
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                >
                                                    <i class="bi bi-instagram me-2"></i>
                                                    Instagram
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-lg-14 mt-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul
                                class="nav nav-pills nav-lb-tab"
                                id="myTab"
                                role="tablist"
                            >
                                <!-- nav item -->
                                <li
                                    class="nav-item"
                                    role="presentation"
                                >
                                    <!-- btn -->
                                    <button
                                        class="nav-link active"
                                        id="product-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#product-tab-pane"
                                        type="button"
                                        role="tab"
                                        aria-controls="product-tab-pane"
                                        aria-selected="true"
                                    >
                                        Product Details
                                    </button>
                                </li>
                                <!-- nav item -->

                                <!-- nav item -->
                                <li
                                    class="nav-item"
                                    role="presentation"
                                >
                                    <!-- btn -->
                                    <button
                                        class="nav-link"
                                        id="reviews-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#reviews-tab-pane"
                                        type="button"
                                        role="tab"
                                        aria-controls="reviews-tab-pane"
                                        aria-selected="false"
                                    >
                                        Reviews
                                    </button>
                                </li>
                                <!-- nav item -->

                            </ul>
                            <!-- tab content -->
                            <div
                                class="tab-content"
                                id="myTabContent"
                            >
                                <!-- tab pane -->
                                <div
                                    class="tab-pane fade show active"
                                    id="product-tab-pane"
                                    role="tabpanel"
                                    aria-labelledby="product-tab"
                                    tabindex="0"
                                >
                                    <div class="my-8">
                                        <?= $description ?>
                                        <div
                                            class=" alert alert-warning"
                                            style="" ">
                                            <h5 class="
                                            mb-1
                                            small"
                                        >Disclaimer</h5>
                                            <p class="mb-0 small">
                                                Image shown is a representation and may slightly vary from the actual
                                                product. Every effort is made to maintain accuracy of all information
                                                displayed.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="reviews-tab-pane"
                                    role="tabpanel"
                                    aria-labelledby="reviews-tab"
                                    tabindex="0"
                                >
                                    <div class="my-8">
                                        <!-- row -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="me-lg-12 mb-6 mb-md-0">
                                                    <div class="mb-5">
                                                        <!-- title -->
                                                        <h4 class="mb-3">Customer reviews</h4>
                                                        <span>
                                                            <!-- rating -->
                                                            <small class="text-warning">
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-fill"></i>
                                                                <i class="bi bi-star-half"></i>
                                                            </small>
                                                            <span class="ms-3">4.1 out of 5</span>
                                                            <small class="ms-3">11,130 global ratings</small>
                                                        </span>
                                                    </div>
                                                    <div class="mb-8">
                                                        <!-- progress -->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="text-nowrap me-3 text-muted">
                                                                <span
                                                                    class="d-inline-block align-middle text-muted">5</span>
                                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                            </div>
                                                            <div class="w-100">
                                                                <div
                                                                    class="progress"
                                                                    style="height: 6px"
                                                                >
                                                                    <div
                                                                        class="progress-bar bg-warning"
                                                                        role="progressbar"
                                                                        style="width: 60%"
                                                                        aria-valuenow="60"
                                                                        aria-valuemin="0"
                                                                        aria-valuemax="100"
                                                                    ></div>
                                                                </div>
                                                            </div>
                                                            <span class="text-muted ms-3">53%</span>
                                                        </div>
                                                        <!-- progress -->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="text-nowrap me-3 text-muted">
                                                                <span
                                                                    class="d-inline-block align-middle text-muted">4</span>
                                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                            </div>
                                                            <div class="w-100">
                                                                <div
                                                                    class="progress"
                                                                    style="height: 6px"
                                                                >
                                                                    <div
                                                                        class="progress-bar bg-warning"
                                                                        role="progressbar"
                                                                        style="width: 50%"
                                                                        aria-valuenow="50"
                                                                        aria-valuemin="0"
                                                                        aria-valuemax="50"
                                                                    ></div>
                                                                </div>
                                                            </div>
                                                            <span class="text-muted ms-3">22%</span>
                                                        </div>
                                                        <!-- progress -->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="text-nowrap me-3 text-muted">
                                                                <span
                                                                    class="d-inline-block align-middle text-muted">3</span>
                                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                            </div>
                                                            <div class="w-100">
                                                                <div
                                                                    class="progress"
                                                                    style="height: 6px"
                                                                >
                                                                    <div
                                                                        class="progress-bar bg-warning"
                                                                        role="progressbar"
                                                                        style="width: 35%"
                                                                        aria-valuenow="35"
                                                                        aria-valuemin="0"
                                                                        aria-valuemax="35"
                                                                    ></div>
                                                                </div>
                                                            </div>
                                                            <span class="text-muted ms-3">14%</span>
                                                        </div>
                                                        <!-- progress -->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="text-nowrap me-3 text-muted">
                                                                <span
                                                                    class="d-inline-block align-middle text-muted">2</span>
                                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                            </div>
                                                            <div class="w-100">
                                                                <div
                                                                    class="progress"
                                                                    style="height: 6px"
                                                                >
                                                                    <div
                                                                        class="progress-bar bg-warning"
                                                                        role="progressbar"
                                                                        style="width: 22%"
                                                                        aria-valuenow="22"
                                                                        aria-valuemin="0"
                                                                        aria-valuemax="22"
                                                                    ></div>
                                                                </div>
                                                            </div>
                                                            <span class="text-muted ms-3">5%</span>
                                                        </div>
                                                        <!-- progress -->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="text-nowrap me-3 text-muted">
                                                                <span
                                                                    class="d-inline-block align-middle text-muted">1</span>
                                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                            </div>
                                                            <div class="w-100">
                                                                <div
                                                                    class="progress"
                                                                    style="height: 6px"
                                                                >
                                                                    <div
                                                                        class="progress-bar bg-warning"
                                                                        role="progressbar"
                                                                        style="width: 14%"
                                                                        aria-valuenow="14"
                                                                        aria-valuemin="0"
                                                                        aria-valuemax="14"
                                                                    ></div>
                                                                </div>
                                                            </div>
                                                            <span class="text-muted ms-3">7%</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid">
                                                        <h4>Review this product</h4>
                                                        <p class="mb-0">Share your thoughts with other customers.</p>
                                                        <a
                                                            href="#"
                                                            class="btn btn-outline-gray-400 mt-4 text-muted"
                                                        >Write the Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col -->
                                            <div class="col-md-8">
                                                <div class="mb-10">
                                                    <div class="d-flex justify-content-between align-items-center mb-8">
                                                        <div>
                                                            <!-- heading -->
                                                            <h4>Reviews</h4>
                                                        </div>
                                                        <div>
                                                            <select class="form-select">
                                                                <option selected>Top Reviews</option>
                                                                <option value="Most Recent">Most Recent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border-bottom pb-6 mb-6">
                                                        <!-- img -->
                                                        <!-- img -->
                                                        <img
                                                            src="../assets/images/avatar/avatar-10.jpg"
                                                            alt=""
                                                            class="rounded-circle avatar-lg"
                                                        />
                                                        <div class="ms-5">
                                                            <h6 class="mb-1">Shankar Subbaraman</h6>
                                                            <!-- select option -->
                                                            <!-- content -->
                                                            <p class="small">
                                                                <span class="text-muted">30 December 2022</span>
                                                                <span class="text-primary ms-3 fw-bold">Verified
                                                                    Purchase</span>
                                                            </p>
                                                            <!-- rating -->
                                                            <div class="mb-2">
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <span class="ms-3 text-dark fw-bold">Need to recheck the
                                                                    weight at delivery point</span>
                                                            </div>
                                                            <!-- text-->
                                                            <p>
                                                                Product quality is good. But, weight seemed less than
                                                                1kg. Since it is being sent in open package, there is a
                                                                possibility of pilferage in between.
                                                                Sosmart sends the veggies and fruits through sealed
                                                                plastic covers and Barcode on the weight etc. .
                                                            </p>
                                                            <div>
                                                                <div class="border icon-shape icon-lg border-2">
                                                                    <!-- img -->
                                                                    <img
                                                                        src="../assets/images/products/product-img-1.jpg"
                                                                        alt=""
                                                                        class="img-fluid"
                                                                    />
                                                                </div>
                                                                <div class="border icon-shape icon-lg border-2 ms-1">
                                                                    <!-- img -->
                                                                    <img
                                                                        src="../assets/images/products/product-img-2.jpg"
                                                                        alt=""
                                                                        class="img-fluid"
                                                                    />
                                                                </div>
                                                                <div class="border icon-shape icon-lg border-2 ms-1">
                                                                    <!-- img -->
                                                                    <img
                                                                        src="../assets/images/products/product-img-3.jpg"
                                                                        alt=""
                                                                        class="img-fluid"
                                                                    />
                                                                </div>
                                                            </div>
                                                            <!-- icon -->
                                                            <div class="d-flex justify-content-end mt-4">
                                                                <a
                                                                    href="#"
                                                                    class="text-muted"
                                                                >
                                                                    <i class="feather-icon icon-thumbs-up me-1"></i>
                                                                    Helpful
                                                                </a>
                                                                <a
                                                                    href="#"
                                                                    class="text-muted ms-4"
                                                                >
                                                                    <i class="feather-icon icon-flag me-2"></i>
                                                                    Report abuse
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                                        <!-- img -->
                                                        <img
                                                            src="../assets/images/avatar/avatar-12.jpg"
                                                            alt=""
                                                            class="rounded-circle avatar-lg"
                                                        />
                                                        <div class="ms-5">
                                                            <h6 class="mb-1">Robert Thomas</h6>
                                                            <!-- content -->
                                                            <p class="small">
                                                                <span class="text-muted">29 December 2022</span>
                                                                <span class="text-primary ms-3 fw-bold">Verified
                                                                    Purchase</span>
                                                            </p>
                                                            <!-- rating -->
                                                            <div class="mb-2">
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star text-warning"></i>
                                                                <span class="ms-3 text-dark fw-bold">Need to recheck the
                                                                    weight at delivery point</span>
                                                            </div>

                                                            <p>
                                                                Product quality is good. But, weight seemed less than
                                                                1kg. Since it is being sent in open package, there is a
                                                                possibility of pilferage in between.
                                                                Sosmart sends the veggies and fruits through sealed
                                                                plastic covers and Barcode on the weight etc. .
                                                            </p>

                                                            <!-- icon -->
                                                            <div class="d-flex justify-content-end mt-4">
                                                                <a
                                                                    href="#"
                                                                    class="text-muted"
                                                                >
                                                                    <i class="feather-icon icon-thumbs-up me-1"></i>
                                                                    Helpful
                                                                </a>
                                                                <a
                                                                    href="#"
                                                                    class="text-muted ms-4"
                                                                >
                                                                    <i class="feather-icon icon-flag me-2"></i>
                                                                    Report abuse
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                                        <!-- img -->
                                                        <img
                                                            src="../assets/images/avatar/avatar-9.jpg"
                                                            alt=""
                                                            class="rounded-circle avatar-lg"
                                                        />
                                                        <div class="ms-5">
                                                            <h6 class="mb-1">Barbara Tay</h6>
                                                            <!-- content -->
                                                            <p class="small">
                                                                <span class="text-muted">28 December 2022</span>
                                                                <span class="text-danger ms-3 fw-bold">Unverified
                                                                    Purchase</span>
                                                            </p>
                                                            <!-- rating -->
                                                            <div class="mb-2">
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star text-warning"></i>
                                                                <span class="ms-3 text-dark fw-bold">Need to recheck the
                                                                    weight at delivery point</span>
                                                            </div>

                                                            <p>Everytime i ordered from fresh i got greenish yellow
                                                                bananas just like i wanted so go for it , its happens
                                                                very rare that u get over riped ones.</p>

                                                            <!-- icon -->
                                                            <div class="d-flex justify-content-end mt-4">
                                                                <a
                                                                    href="#"
                                                                    class="text-muted"
                                                                >
                                                                    <i class="feather-icon icon-thumbs-up me-1"></i>
                                                                    Helpful
                                                                </a>
                                                                <a
                                                                    href="#"
                                                                    class="text-muted ms-4"
                                                                >
                                                                    <i class="feather-icon icon-flag me-2"></i>
                                                                    Report abuse
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                                        <!-- img -->
                                                        <img
                                                            src="../assets/images/avatar/avatar-8.jpg"
                                                            alt=""
                                                            class="rounded-circle avatar-lg"
                                                        />
                                                        <div class="ms-5 flex-grow-1">
                                                            <h6 class="mb-1">Sandra Langevin</h6>
                                                            <!-- content -->
                                                            <p class="small">
                                                                <span class="text-muted">8 December 2022</span>
                                                                <span class="text-danger ms-3 fw-bold">Unverified
                                                                    Purchase</span>
                                                            </p>
                                                            <!-- rating -->
                                                            <div class="mb-2">
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star text-warning"></i>
                                                                <span class="ms-3 text-dark fw-bold">Great
                                                                    product</span>
                                                            </div>

                                                            <p>Great product & package. Delivery can be expedited.</p>

                                                            <!-- icon -->
                                                            <div class="d-flex justify-content-end mt-4">
                                                                <a
                                                                    href="#"
                                                                    class="text-muted"
                                                                >
                                                                    <i class="feather-icon icon-thumbs-up me-1"></i>
                                                                    Helpful
                                                                </a>
                                                                <a
                                                                    href="#"
                                                                    class="text-muted ms-4"
                                                                >
                                                                    <i class="feather-icon icon-flag me-2"></i>
                                                                    Report abuse
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a
                                                            href="#"
                                                            class="btn btn-outline-gray-400 text-muted"
                                                        >Read More Reviews</a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <!-- rating -->
                                                    <h3 class="mb-5">Create Review</h3>
                                                    <div class="border-bottom py-4 mb-4">
                                                        <h4 class="mb-3">Overall rating</h4>
                                                        <div class="rater"></div>
                                                    </div>
                                                    <div class="border-bottom py-4 mb-4">
                                                        <h4 class="mb-0">Rate Features</h4>
                                                        <div class="my-5">
                                                            <h5>Flavor</h5>
                                                            <div class="rater"></div>
                                                        </div>
                                                        <div class="my-5">
                                                            <h5>Value for money</h5>
                                                            <div class="rater"></div>
                                                        </div>
                                                        <div class="my-5">
                                                            <h5>Scent</h5>
                                                            <div class="rater"></div>
                                                        </div>
                                                    </div>
                                                    <!-- form control -->
                                                    <div class="border-bottom py-4 mb-4">
                                                        <h5>Add a headline</h5>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="What’s most important to know"
                                                        />
                                                    </div>
                                                    <div class="border-bottom py-4 mb-4">
                                                        <h5>Add a photo or video</h5>
                                                        <p>Shoppers find images and videos more helpful than text alone.
                                                        </p>

                                                        <div
                                                            id="my-dropzone"
                                                            class="dropzone mt-4 border-dashed rounded-2 min-h-0"
                                                        ></div>
                                                    </div>
                                                    <div class="py-4 mb-4">
                                                        <!-- heading -->
                                                        <h5>Add a written review</h5>
                                                        <textarea
                                                            class="form-control"
                                                            rows="3"
                                                            placeholder="What did you like or dislike? What did you use this product for?"
                                                        ></textarea>
                                                    </div>
                                                    <!-- button -->
                                                    <div class="d-flex justify-content-end">
                                                        <a
                                                            href="#"
                                                            class="btn btn-primary"
                                                        >Submit Review</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Related Items  -->

            <?php include_once('components/relatedItems.php') ?>
        </main>
        <!-- footer -->
        <?php include_once('footer.php') ?>

        <!-- QUick view modal -->
        <?php include_once('components/quickview.php') ?>

        <!-- Javascript-->
        <script src="../assets/libs/rater-js/index.js"></script>
        <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>

        <script src="../assets/js/vendors/jquery.min.js"></script>
        <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
        <script src="../assets/js/vendors/tns-slider.js"></script>
        <script src="../assets/js/vendors/zoom.js"></script>
        <script src="../assets/js/vendors/dropzone.js"></script>
    </body>

</html>
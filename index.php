<!DOCTYPE html>
<html lang="en">
    <?php $pageName = 'Sosmart - Online shopping and more' ?>

    <?php include_once('header.php') ?>

    <body>
        <!-- navbar -->
        <?php include_once('pages/php/products/fetchAll.php'); ?>
        <?php include_once('pages/php/category/fetchAll.php'); ?>
        <?php include_once('navbar.php') ?>
<?php include_once('pages/php/cart/fetchAll.php')?>
        <!-- Modal -->
        <div
            class="modal fade"
            id="userModal"
            tabindex="-1"
            aria-labelledby="userModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-4">
                    <div class="modal-header border-0">
                        <h5
                            class="modal-title fs-3 fw-bold"
                            id="userModalLabel"
                        >Sign Up</h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form
                            class="needs-validation"
                            novalidate
                        >
                            <div class="mb-3">
                                <label
                                    for="fullName"
                                    class="form-label"
                                >Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="fullName"
                                    placeholder="Enter Your Name"
                                    required
                                />
                                <div class="invalid-feedback">Please enter name.</div>
                            </div>
                            <div class="mb-3">
                                <label
                                    for="email"
                                    class="form-label"
                                >Email address</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Enter Email address"
                                    required
                                />
                                <div class="invalid-feedback">Please enter email.</div>
                            </div>
                            <div class="mb-3">
                                <label
                                    for="password"
                                    class="form-label"
                                >Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Enter Password"
                                    required
                                />
                                <div class="invalid-feedback">Please enter password.</div>
                                <small class="form-text">
                                    By Signup, you agree to our
                                    <a href="#!">Terms of Service</a>
                                    &
                                    <a href="#!">Privacy Policy</a>
                                </small>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-primary"
                                type="submit"
                            >Sign Up</button>
                        </form>
                    </div>
                    <div class="modal-footer border-0 justify-content-center">
                        Already have an account?
                        <a href="#">Sign in</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- OffCart Canvas -->
        <?php include_once('offcart.php') ?>





        <script src="assets/js/vendors/validation.js"></script>

        <main>
            <section class="mt-8">
                <div class="container">
                    <div class="hero-slider">
                        <div
                            style="background: url(assets/images/slider/slide-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                            <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                                <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                                <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery</h2>
                                <p class="lead">Introduced a new model for online grocery shopping and convenient home
                                    delivery.</p>
                                <a
                                    href="#!"
                                    class="btn btn-dark mt-3"
                                >
                                    Shop Now
                                    <i class="feather-icon icon-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                        <div
                            style="background: url(assets/images/slider/slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                            <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                                <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                                <h2 class="text-dark display-5 fw-bold mt-4">
                                    Free Shipping on
                                    <br />
                                    orders over
                                    <span class="text-primary">$100</span>
                                </h2>
                                <p class="lead">Free Shipping to First-Time Customers Only, After promotions and
                                    discounts are applied.</p>
                                <a
                                    href="#!"
                                    class="btn btn-dark mt-3"
                                >
                                    Shop Now
                                    <i class="feather-icon icon-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Category Section Start-->
            <section class="mb-lg-10 mt-lg-14 my-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-6">
                            <h3 class="mb-0">Featured Categories</h3>
                        </div>
                    </div>
                    <div class="category-slider">
                        <?php
                        // Check if the categories array is not empty
                        if (count($Allcategories) > 0) {
                            // Loop through the categories array
                            foreach ($Allcategories as $category) {
                                // Get the category id, name, slug, description, status, and created_at fields
                        
                                $id = $category['id'];
                                $categoryName = $category['category_name'];
                                $slug = $category['slug'];
                                $description = $category['description'];
                                $status = $category['status'];
                                $created_at = $category['created_at'];

                                // Use the category name as the image file name
                                $categoryImg = empty($category['category_image']) ? 'https://ng.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/19/8636501/1.jpg?2920' : $category['category_image'];

                                // Format the created_at date as dd/mm/yyyy
                                $date = date("d/m/Y", strtotime($created_at));
                                if ($status == 'active') {
                                    // Display the table row for each category
                                    ?> <div class="item">
                                        <a
                                            href="pages/shop-grid.php"
                                            class="text-decoration-none text-inherit"
                                        >
                                            <div class="card card-product mb-lg-4">
                                                <div class="card-body text-center py-8">
                                                    <img
                                                        src="<?php echo $categoryImg ?>"
                                                        alt="Grocery Ecommerce Template"
                                                        class="mb-3 img-fluid"
                                                    />
                                                    <div class="text-truncate"><?php echo $categoryName ?> </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <?php
                                }
                            }
                        }
                        ?>


                    </div>
                </div>
            </section>
            <!-- Category Section End-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3 mb-lg-0">
                            <div>
                                <div
                                    class="py-10 px-8 rounded"
                                    style="background: url(assets/images/banner/grocery-banner.png) no-repeat; background-size: cover; background-position: center"
                                >
                                    <div>
                                        <h3 class="fw-bold mb-1">Fruits & Vegetables</h3>
                                        <p class="mb-4">
                                            Get Upto
                                            <span class="fw-bold">30%</span>
                                            Off
                                        </p>
                                        <a
                                            href="#!"
                                            class="btn btn-dark"
                                        >Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div>
                                <div
                                    class="py-10 px-8 rounded"
                                    style="background: url(assets/images/banner/grocery-banner-2.jpg) no-repeat; background-size: cover; background-position: center"
                                >
                                    <div>
                                        <h3 class="fw-bold mb-1">Freshly Baked Buns</h3>
                                        <p class="mb-4">
                                            Get Upto
                                            <span class="fw-bold">25%</span>
                                            Off
                                        </p>
                                        <a
                                            href="#!"
                                            class="btn btn-dark"
                                        >Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Popular Products Start-->
            <section class="my-lg-14 my-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-6">
                            <h3 class="mb-0">Popular Products</h3>
                        </div>
                    </div>

                    <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">


                        <?php
                        // Check if the categories array is not empty
                        if (count($allProducts) > 0) {
                            // Loop through the categories array
                            foreach ($allProducts as $product) {
                                // Get the category id, name, slug, description, status, and created_at fields
                        
                                $id = $product['id'];
                                $productName = $product['product_name'];
                                $productCategory = $product['category'];
                                // $slug = $product['slug'];
                                // $description = $product['description'];
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
                                                <div class="text-small mb-1">
                                                    <a
                                                        href="<?php echo "pages/shop-single.php?id=" . $id ?>"
                                                        class="text-decoration-none text-muted"
                                                    ><small><?php echo $productName ?></small></a>
                                                </div>
                                                <h2 class="fs-6"><a
                                                        href="<?php echo "pages/shop-single.php?id=" . $id ?>"
                                                        class="text-inherit text-decoration-none"
                                                    ><?php echo $productCategory ?></a></h2>
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
                                                <div class="d-flex justify-content-between align-items-center mt-3">
                                                    <div>
                                                        <?php if (!empty($regularPrice)) { ?>

                                                            <span
                                                                class="text-decoration-line-through text-muted"><?php echo number_format($regularPrice) ?></span>

                                                        <?php } ?>
                                                        <span class="text-dark"><?php echo number_format($salesPrice) ?></span>

                                                    </div>
                                                    <div>
                                                        <a
                                                            href="#!"
                                                            class="btn btn-primary btn-sm"
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
                                                            Add
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

        </main>

<?php include_once('pages/components/quickview.php') ?>
        

        <!-- footer -->
        <?php include_once('footer.php') ?>

        <!-- Javascript-->

        <!-- Libs JS -->
        <!-- <script src="./assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

        <script src="../node_modules/axios/dist/axios.min.js"></script>


        <!-- Theme JS -->
        <script src="assets/js/theme.min.js"></script>

        <script src="assets/js/vendors/jquery.min.js"></script>
        <script src="assets/js/vendors/countdown.js"></script>
        <script src="assets/libs/slick-carousel/slick/slick.min.js"></script>
        <script src="assets/js/vendors/slick-slider.js"></script>
        <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
        <script src="node_modules/axios/dist/axios.min.js"></script>
        <script src="assets/js/vendors/tns-slider.js"></script>
        <script src="assets/js/vendors/zoom.js"></script>
        <script src="pages/javascript/checkAuth.js">

        </script>
    </body>

</html>
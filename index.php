<!DOCTYPE html>
<html lang="en">
    <?php $pageName = 'Sosmart - Online shopping and more' ?>

    <?php include_once('header.php') ?>

    <body>
        <!-- navbar -->
        
        <?php 
        include_once('pages/php/profile/fetchAll.php'); ?>
        <?php include_once('pages/php/products/fetchAll.php'); ?>
        <?php include_once('pages/php/category/fetchAll.php'); ?>
        <?php include_once('pages/php/cart/fetchAll.php') ?>
        <?php include_once('pages/php/products/discountProduct.php') ?>
        <?php include_once('navbar.php') ?>
      <!-- LOading dialog -->
      <div
    class="modal d-flex align-items-center   justify-content-center"
    tabindex="-1"
    role="dialog"
    id="loadingDialog"
    data-backdrop="static"
    data-keyboard="false"
    style="background:#000000e5 !important"
>
    <div
        class="modal-dialog "
        role="document"
    >
        <div class="modal-content border">
            <img
                src="assets/images/loader.svg"
                height="100"
                width="100"
                class="img-fluid m-5 "
                alt=""
            >
        </div>
    </div>
</div>

<script>

    // document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('loadingDialog');
        // hideDialog(true)

       
    // })
    function hideDialog(hide) {
            if (hide) {
                modal.style.cssText = 'background:#000000a5 ;display: none !important;';

            } else {
                modal.style.cssText = 'background:#000000a5 ; display: flex !important;';

            }

        }


    document.addEventListener("DOMContentLoaded", function() {
        // const modal = document.getElementById('loadingDialog');
        hideDialog(true)

       
    })

</script>




      <!-- end of loading dialog -->

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
        <?php //include_once('offcart.php') ?>





        <script src="assets/js/vendors/validation.js"></script>

        <main>
            <!-- <section class="mt-8">
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
            </section> -->

            <!-- Category Section Start-->
            <section class="mb-lg-10 mt-lg-14 my-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-6">
                            <h3 class="mb-0">Shop By Categories</h3>
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
                                <div class="card border-0 shadow-none card-product mb-lg-4">
                                    <div class="card-body text-center py-8 px-0">
                                        <div class="rounded-circle overflow-hidden border-2 mx-auto border  card-product mb-4 "
                                        style="background-color: rgba(0, 0, 0, 0.5);height: 100px!important ;width:100px !important;" id="categoryContainer">

                                        <img
                                            src="<?php echo $categoryImg ?>"
                                            alt="<?=$categoryName?>"
                                            class="mb-3  img-fluid  p-0 card" style=" object-fit:cover!important  ; "
                                            loading="lazy"
                                          
                                        />


                                        </div>
                                        <small class="text-center  text-truncate"><?php echo $categoryName ?> </small>
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
                                    style="background: url(https://ae01.alicdn.com/kf/Sa24f41ac53234b6ea52a15062a3c2517J/Air-Conditioner-Mini-Fan-Cooler-Portable-Air-Cooler-AC-Air-Conditioning-3-Gear-Speed-Air-Cooling.jpg_350x350xz.jpg_.webp) no-repeat; background-size: cover; background-position: center"
                                >
                                    <div>
                                        <h3 class="fw-bold mb-1">Discounts Everywhere!</h3>
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
                                        <h3 class="fw-bold mb-1">Simple Shopping !</h3>
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


            <!-- Top Deals  Section-->

            <section class="mb-lg-10 mt-lg-14 my-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-6">
                            <h3 class="mb-0">Top deals</h3>
                        </div>
                    </div>
                    <div class="top-deals-slider">
                        <?php
                       
                        if (count($discountProducts) > 0) {
                            // Loop through the categories array
                            foreach ($discountProducts as $product) {
                          
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
                                $freeShipping = $product['free_shipping'];
                                // Format the created_at date as dd/mm/yyyy
                                $date = date("d/m/Y", strtotime($created_at));
                                $percentageDiscount = number_format(calculatePercentageDiscount($regularPrice,$salesPrice),0);
                                if ($status == 'active') {
                                    ?> <div class="item">
                            <a
                                href="pages/shop-grid.php"
                                class="text-decoration-none text-inherit"
                            >
                                <?php include('pages/components/discount-card.php') ?>
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


            <!-- divider Container -->
            <section class="my-lg-14 my-8">
           <?php //include_once('pages/components/bannerview.php')?>
            </section>

            <!-- Popular Products Start-->
            <section class="my-lg-14 my-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-6">
                            <h3 class="mb-0">Popular Products</h3>
                        </div>
                    </div>

                    <div class="row g-2 row-cols-lg-6 row-cols-2 row-cols-md-3">


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
                                $freeShipping = $product['free_shipping'];
                                $percentageDiscount = number_format(calculatePercentageDiscount($regularPrice,$salesPrice),0);
                                // Format the created_at date as dd/mm/yyyy
                                $date = date("d/m/Y", strtotime($created_at));
                                if ($status == 'active') {

                                    ?>

                        <?php include('pages/components/product-card.php') ?>





                        <?php }
                            }
                        } ?>
                    </div>
                </div>
            </section>

        </main>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.min.js'>
</script>


        <script>
        // function submitCartForm(event) {
        //     event.preventDefault(); // Prevents the default behavior of the anchor tag (navigating to a new page)

        //     // Get the form element
        //     var form = document.getElementById('cartForm');

        //     // Submit the form
        //     form.submit();
        // }
        // 
        </script>

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
        <script src="pages/javascript/checkAuth.js"> </script>

        <script>
            hideDialog(false)
            document.addEventListener('DOMContentLoaded',function(){
                hideDialog(true)
            })
        </script>
    </body>

</html>
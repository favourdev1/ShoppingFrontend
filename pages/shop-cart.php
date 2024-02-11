<!DOCTYPE html>
<html lang="en">
    <?php $pageName = "Shopping Cart | Sosmart online shopping and more!";
    include_once('header.php') ?>

    <body>

        <?php


        if (!if_Authenticated()) {
            setcookie('userId', '', time() - 3600, '/');
            setcookie('token', '', time() - 3600, '/');
            setcookie('isAdmin', '', time() - 3600, '/');
            header('Location: signin.php?error=user not logged in & redirect=' . __DIR__ . '/shop-cart.php');
            exit;
        }
        ?>
        <!-- navbar -->
        <?php include_once('php/profile/fetchAll.php'); ?>

        <?php include_once('php/category/fetchAll.php'); ?>
        <?php include_once('php/cart/fetchAll.php') ?>
        <?php include_once('navbar.php') ?>



        <script src="../assets/js/vendors/validation.js"></script>

        <main>

            <!-- section -->
            <section class="mb-lg-14 mb-8 mt-8">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <!-- card -->
                            <div class="card py-1 border-0 ">
                                <div>
                                    <h1 class="fw-bold my-2"> Cart Items</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="py-0">
                                <!-- alert -->
                                <div
                                    class="alert alert-secondary p-2"
                                    role="alert"
                                >
                                    You’ve got FREE delivery. Start
                                    <a
                                        href="#!"
                                        class="alert-link"
                                    >checkout now!</a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <!-- list group -->


                                    <?php
                                    $totalTax = 0;
                                    $subTotalPrice = 0;
                                    $totalShippingFee = 0;
                                    if (!isset($cartItems) || count($cartItems) < 1) { ?>

                                            <div class="alert alert-secondary">
                                                No item in cart
                                            </div>
                                    <?php } else { ?>

                                            <?php foreach ($cartItems as $cart) { ?>
                                                    <?php

                                                    $cartId = $cart['cart_id'];
                                                    $cartName = $cart['product_name'];
                                                    $cartcategoryId = $cart['category_id'];
                                                    $cartdescription = $cart['description'];
                                                    $cartregularPrice = $cart['regular_price'];
                                                    $cartbrand = $cart['brand'];
                                                    $cartImg1 = $cart['product_img1'];
                                                    $cartImg2 = $cart['product_img2'];
                                                    $cartImg3 = $cart['product_img3'];
                                                    $cartImg4 = $cart['product_img4'];
                                                    $cartImg5 = $cart['product_img5'];
                                                    $cartweight = $cart['weight'];
                                                    $tax = $cart['tax'];
                                                    $shippingFee = $cart['shipping_cost'];
                                                    $quantityInStock = $cart['quantity_in_stock'];
                                                    $cartItemQuantity = $cart['quantity'];
                                                    $cartSalesPrice = $cart['sales_price'];
                                                    $subTotalPrice += $cartSalesPrice * $cartItemQuantity;
                                                    $totalTax += $tax + $totalTax;
                                                    $totalShippingFee += $shippingFee + $totalShippingFee;
                                                    ?>

                                                    <li class="list-group-item py-3 ps-0 border-top">
                                                        <!-- row -->
                                                        <div class="row align-items-center">
                                                            <div class="col  col-lg">
                                                                <div class="d-flex">
                                                                    <img
                                                                        src="<?php echo $cartImg1 ?>"
                                                                        alt="Cart Image"
                                                                        class="icon-shape icon-xxl"
                                                                    />
                                                                    <div class="ms-5">
                                                                        <!-- title -->
                                                                        <a
                                                                            href="shop-single.php?id=<?php echo $cartId ?>"
                                                                            class="text-inherit"
                                                                        >
                                                                            <h6 class="mb-0"><?= $cartName ?></h6>
                                                                        </a>
                                                                        <span>
                                                                            <small
                                                                                class="text-muted"><?= $cartItemQuantity . " x " . CURRENCY . number_format($cartSalesPrice) ?>
                                                                            </small>
                                                                        </span>
                                                                        <!-- text -->


                                                                        <!-- price -->
                                                                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                                            <span
                                                                                class="fw-bold"><?= CURRENCY . number_format($cartSalesPrice) ?>
                                                                            </span>
                                                                        </div>




                                                                        <div class="d-flex align-items-center">


                                                                            <!-- input group -->
                                                                            <div class="mt-2 small lh-1">
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
                                                                                        value="<?= $cartItemQuantity ?>"
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

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="col-1 text-center col-md-2 mt-2 small lh-1 p-0">
                                                                <a
                                                                    href="php/cart/delete.php?id=<?php echo $cartId;?>"
                                                                    class="text-decoration-none text-inherit"
                                                                >
                                                                    <span class="me-1 align-text-bottom">
                                                                        <i class="bi bi-trash fs-4 text-danger"></i>
                                                                    </span>
                                                                    <span class="text-danger d-none d-md-inline">Remove</span>
                                                                </a>
                                                            </div>


                                                        </div>
                                                    </li>

                                                    <?php
                                            }
                                    } ?>
                                </ul>
                                <!-- btn -->
                                <div class="d-flex justify-content-between mt-4">

                                    <a
                                        href="#!"
                                        class="btn btn-dark"
                                    >Update Cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- sidebar -->
                        <div class="col-12 col-lg-4 col-md-5">
                            <!-- card -->

                           <?php if (isset($cartItems)&& count($cartItems) >0) { ?>
                            <div class="mb-5 card mt-6">
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <h2 class="h5 mb-4">Summary</h2>
                                    <div class="card mb-2">
                                        <!-- list group -->
                                        <ul class="list-group list-group-flush">
                                            <!-- list group item -->
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Item Subtotal</div>
                                                </div>
                                                <span><?php echo CURRENCY . number_format($subTotalPrice) ?></span>
                                            </li>

                                            <!-- list group item -->

                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Shipping Fee</div>
                                                </div>
                                                <span><?php echo CURRENCY . number_format($totalShippingFee) ?></span>
                                            </li>


                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Tax</div>
                                                </div>
                                                <span><?php echo CURRENCY . number_format($totalTax) ?></span>
                                            </li>
                                            <!-- list group item -->
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="fw-bold">Subtotal</div>
                                                </div>
                                                <span
                                                    class="fw-bold"><?php echo CURRENCY . number_format($subTotalPrice+$totalShippingFee+$totalTax) ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-grid mb-1 mt-4">
                                        <!-- btn -->
                                        <a
                                            href="shop-checkout.php"
                                            class="btn btn-primary btn-lg d-flex justify-content-between align-items-center"
                                            type="submit"
                                        >

                                            Go to Checkout
                                            <span
                                                class="fw-bold"><?php echo CURRENCY . number_format($subTotalPrice+$totalShippingFee+$totalTax) ?></span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <?php }?>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <!-- footer -->
        <?php include_once("footer.php") ?>

        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>
    </body>


</html>
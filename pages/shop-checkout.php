<!DOCTYPE html>
<html lang="en">

    <?php
    $pageName = "Checkout - Sosmart ";
    include_once('header.php');

    if (!if_Authenticated()) {
        header("Location: signin.php");
    }


    ?>

    <body>
        <!-- navbar -->
        <?php include_once('php/profile/fetchAll.php'); ?>

        <?php include_once('php/address/fetchAll.php'); ?>
        <?php include_once('php/category/fetchAll.php'); ?>
        <?php include_once('php/cart/fetchAll.php') ?>

        <?php include_once('navbar.php') ?>


        <script src="../assets/js/vendors/validation.js"></script>

        <main>
<?php include_once('components/loadingDialog.php') ?>
            <!-- section -->
            <section class="mb-lg-14 mb-8 mt-8">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-12">
                            <div>
                                <div class="mb-8">
                                    <!-- text -->
                                    <h1 class="fw-bold mb-0">Checkout</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <!-- accordion -->
                                <div
                                    class="accordion accordion-flush"
                                    id="accordionFlushExample"
                                >
                                    <!-- accordion item -->
                                    <div class="accordion-item py-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- heading one -->
                                            <a
                                                href="#"
                                                class="fs-5 text-inherit collapsed h4"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne"
                                                aria-expanded="true"
                                                aria-controls="flush-collapseOne"
                                            >
                                                <i class="feather-icon icon-map-pin me-2 text-muted"></i>
                                                Add delivery address
                                            </a>
                                            <!-- btn -->
                                            <a
                                                href="#"
                                                class="btn btn-outline-primary btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#addAddressModal"
                                            >Add a new address</a>
                                            <!-- collapse -->
                                        </div>






                                        <!-- Addresses  Section  -->
                                        <div
                                            id="flush-collapseOne"
                                            class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionFlushExample"
                                        >
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class=" col-12 mb-4">
                                                        <!-- form -->
                                                        <?php

                                                        if (count($allAddresses) < 1) { ?>

                                                            <div class=" text-center alert alert-warning rounded-3  p-6">
                                                                No address added
                                                            </div>

                                                        <?php } else { ?>
                                                            <?php foreach ($allAddresses as $address) { ?>


                                                                <div
                                                                    class="d-flex align-items-center border rounded-3  p-6 mt-2">
                                                                    <div class="form-check mb-4">
                                                                        <input
                                                                            class="form-check-input"
                                                                            type="radio"
                                                                            name="flexRadioDefault"
                                                                            id="homeRadio"
                                                                            checked
                                                                            data-address-id="<?= $address['id'] ?>"
                                                                        />


                                                                        <!-- <label class="form-check-label text-dark" for="homeRadio">Home</label> -->
                                                                    </div>
                                                                    <!-- address -->
                                                                    <div class="col">


                                                                        <address class="my-0">
                                                                            <strong><?= $address['firstname'] . " " . $address['lastname'] ?></strong>
                                                                            <br>

                                                                            <?= $address['delivery_address'] . "," ?>

                                                                            <br>
                                                                            <?= $address['city'] . " " . $address['city'] . "," ?>



                                                                            <abbr title="Phone">
                                                                                <?= $address['phone_number_1'] ?>
                                                                            </abbr>
                                                                        </address>
                                                                        <?php if ($address['is_default'] === true) { ?>
                                                                            <span
                                                                                class="text-dark small rounded px-2"
                                                                                style="background:rgba(0,0,0,.1); width:max-content!important "
                                                                            >Default address</span>

                                                                        <?php } ?>
                                                                    </div>
                                                                </div>

                                                            <?php }
                                                        } ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>











                                    <!-- accordion item -->
                                    <div class="accordion-item py-4">
                                        <a
                                            href="#"
                                            class="text-inherit h5"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseThree"
                                        >
                                            <i class="feather-icon icon-shopping-bag me-2 text-muted"></i>
                                            Delivery instructions
                                            <!-- collapse -->
                                        </a>
                                        <div
                                            id="flush-collapseThree"
                                            class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample"
                                        >
                                            <div class="mt-5">
                                                <label
                                                    for="DeliveryInstructions"
                                                    class="form-label sr-only"
                                                >Delivery instructions</label>
                                                <textarea
                                                    class="form-control"
                                                    id="DeliveryInstructions"
                                                    rows="3"
                                                    placeholder="Write delivery instructions "
                                                ></textarea>
                                                <p class="form-text">Add instructions for how you want your order
                                                    shopped and/or delivered</p>
                                                <div class="mt-5 d-flex justify-content-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-outline-gray-400 text-muted"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseTwo"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseTwo"
                                                    >
                                                        Prev
                                                    </a>
                                                    <a
                                                        href="#"
                                                        class="btn btn-primary ms-2"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseFour"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapseFour"
                                                    >
                                                        Next
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion item -->
                                    <div class="accordion-item py-4">
                                        <a
                                            href="#"
                                            class="text-inherit h5"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseFour"
                                        >
                                            <i class="feather-icon icon-credit-card me-2 text-muted"></i>
                                            Payment Method
                                            <!-- collapse -->
                                        </a>
                                        <div
                                            id="flush-collapseFour"
                                            class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample"
                                        >
                                            <div class="mt-5">
                                                <div>
                                                    <div class="card card-bordered shadow-none mb-2">
                                                        <!-- card body -->
                                                        <div class="card-body p-6">
                                                            <div class="d-flex">
                                                                <div class="form-check">
                                                                    <!-- checkbox -->
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="radio"
                                                                        name="flexRadioDefault"
                                                                        id="paypal"
                                                                    />
                                                                    <label
                                                                        class="form-check-label ms-2"
                                                                        for="paypal"
                                                                    ></label>
                                                                </div>
                                                                <div>
                                                                    <!-- title -->
                                                                    <h5 class="mb-1 h6">Bank Transfer</h5>
                                                                    <p class="mb-0 small">Transfer Directly from Your account  </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- card -->
                                                    <!-- <div class="card card-bordered shadow-none mb-2">
                                                        
                                                        <div class="card-body p-6">
                                                            <div class="d-flex mb-4">
                                                                <div class="form-check">
                                                                
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="radio"
                                                                        name="flexRadioDefault"
                                                                        id="creditdebitcard"
                                                                    />
                                                                    <label
                                                                        class="form-check-label ms-2"
                                                                        for="creditdebitcard"
                                                                    ></label>
                                                                </div>
                                                                <div>
                                                                    <h5 class="mb-1 h6">Credit / Debit Card</h5>
                                                                    <p class="mb-0 small">Safe money transfer using your
                                                                        bank accou k account. We support Mastercard
                                                                        tercard, Visa, Discover and Stripe.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row g-2">
                                                                <div class="col-12">
                                                                   
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Card Number</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            placeholder="1234 4567 6789 4321"
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                   
                                                                    <div class="mb-3 mb-lg-0">
                                                                        <label class="form-label">Name on card</label>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            placeholder="Enter your first name"
                                                                        />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-12">
                                                                   
                                                                    <div class="mb-3 mb-lg-0 position-relative">
                                                                        <label class="form-label">Expiry date</label>
                                                                        <input
                                                                            class="form-control flatpickr"
                                                                            type="text"
                                                                            placeholder="Select Date"
                                                                        />
                                                                        <div
                                                                            class="position-absolute bottom-0 end-0 p-3 lh-1">
                                                                            <i class="bi bi-calendar text-muted"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-12">
                                                                   
                                                                    <div class="mb-3 mb-lg-0">
                                                                        <label class="form-label">CVV code</label>
                                                                        <input
                                                                            type="password"
                                                                            class="form-control"
                                                                            placeholder="***"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                   
                                                    <!-- card -->
                                                    <div class="card card-bordered shadow-none">
                                                        <div class="card-body p-6">
                                                            <!-- check input -->
                                                            <div class="d-flex">
                                                                <div class="form-check">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="radio"
                                                                        name="flexRadioDefault"
                                                                        id="cashonDelivery"
                                                                    />
                                                                    <label
                                                                        class="form-check-label ms-2"
                                                                        for="cashonDelivery"
                                                                    ></label>
                                                                </div>
                                                                <div>
                                                                    <!-- title -->
                                                                    <h5 class="mb-1 h6">Cash on Delivery</h5>
                                                                    <p class="mb-0 small">Pay with cash when your order
                                                                        is delivered.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Button -->
                                                    <div class="mt-5 d-flex justify-content-end">
                                                        <a
                                                            href="#"
                                                            class="btn btn-outline-gray-400 text-muted"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseThree"
                                                            aria-expanded="false"
                                                            aria-controls="flush-collapseThree"
                                                        >
                                                            Prev
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="btn btn-primary ms-2"
                                                        >Place Order</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-md-5">
                                <!-- card -->

                                <?php if (isset($cartItems) && count($cartItems) > 0) {

                                    $totalTax = 0;
                                    $subTotalPrice = 0;
                                    $totalShippingFee = 0;

                                    ?>

                                    <?php foreach ($cartItems as $cart) { ?>
                                        <?php
                                        $productId = $cart['id'];
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
                                    } ?>

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
                                                        <span id="shippingCost"><?php echo CURRENCY . number_format($totalShippingFee) ?></span>
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
                                                            class="fw-bold"><?php echo CURRENCY . number_format($subTotalPrice + $totalShippingFee + $totalTax) ?></span>
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
                                                        class="fw-bold"><?php echo CURRENCY . number_format($subTotalPrice + $totalShippingFee + $totalTax) ?></span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Modal -->
        <div
            class="modal fade"
            id="deleteModal"
            tabindex="-1"
            aria-labelledby="deleteModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5
                            class="modal-title"
                            id="deleteModalLabel"
                        >Delete address</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <h6>Are you sure you want to delete this address?</h6>
                        <p class="mb-6">
                            Jitu Chauhan
                            <br />

                            4450 North Avenue Oakland,
                            <br />

                            Nebraska, United States,
                            <br />

                            402-776-1106
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-outline-gray-400"
                            data-bs-dismiss="modal"
                        >Cancel</button>
                        <button
                            type="button"
                            class="btn btn-danger"
                        >Delete</button>
                    </div>
                </div>
            </div>
        </div>


        <script src="javascript/Route.js"></script>
        <script src="javascript/checkout/shippingCost.js"></script>
        <?php include_once('components/shipping-modal.php') ?>

        <!-- Footer -->
        <!-- footer -->
        <?php include_once('footer.php') ?>
        <!-- Javascript-->
        <script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>
    </body>


</html>
<!DOCTYPE html>
<html lang="en">


<?php
$pageName = 'Orders - Sosmart Online shopping and more';
include_once 'header.php';
?>

<style>
    /* Default badge styles */
    .badge {
        display: inline-block;
        padding: 0.25em 0.4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
    }

    /* Contextual variations */
    .badge-primary {
        color: #fff;
        background-color: #007bff;
        /* Bootstrap default */
    }

    .badge-secondary {
        color: #fff;
        background-color: #6c757d;
        /* Bootstrap default */
    }

    .badge-success {
        color: #000;
        /* Black text for better contrast */
        background-color: #ecfdf3;
        /* Custom color */
    }

    .badge-danger {
        color: #fff;
        background-color: #dc3545;
        /* Bootstrap default */
    }

    .badge-warning {
        color: #000;
        /* Black text for better contrast */
        background-color: #ffc107;
        /* Bootstrap default */
    }

    .badge-info {
        color: #000;
        /* Black text for better contrast */
        background-color: #fff7e7;
        /* Custom color */
    }

    .badge-light {
        color: #000;
        /* Black text for better contrast */
        background-color: #f8f9fa;
        /* Bootstrap default */
    }

    .badge-dark {
        color: #fff;
        background-color: #343a40;
        /* Bootstrap default */
    }

    /* Pill style */
    .badge-pill {
        padding-right: 0.6em;
        padding-left: 0.6em;
        border-radius: 10rem;
    }
</style>

<body>
    <!-- navbar -->
    <?php include_once 'php/profile/fetchAll.php'; ?>
    <?php include_once 'php/category/fetchAll.php'; ?>
    <?php include_once 'php/cart/fetchAll.php'; ?>
    <?php include_once 'php/orders/fetchAll.php'; ?>
    <?php include_once 'navbar.php'; ?>
    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name"
                                required />
                            <div class="invalid-feedback">Please enter name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email address"
                                required />
                            <div class="invalid-feedback">Please enter email.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password"
                                required />
                            <div class="invalid-feedback">Please enter password.</div>
                            <small class="form-text">
                                By Signup, you agree to our
                                <a href="#!">Terms of Service</a>
                                &
                                <a href="#!">Privacy Policy</a>
                            </small>
                        </div>

                        <button type="submit" class="btn btn-primary" type="submit">Sign Up</button>
                    </form>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    Already have an account?
                    <a href="#">Sign in</a>
                </div>
            </div>
        </div>
    </div>




    

    <script src="../assets/js/vendors/validation.js"></script>

    <main>
        <!-- section -->
        <section>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                            <!-- heading -->
                            <h3 class="fs-5 mb-0">Account Setting</h3>
                            <!-- button -->
                            <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3"
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount"
                                aria-controls="offcanvasAccount">
                                <i class="bi bi-text-indent-left fs-3"></i>
                            </button>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-3 col-md-4 col-12 border-end d-none d-md-block">
                        <div class="pt-10 pe-lg-10">
                            <!-- nav -->
                            <ul class="nav flex-column nav-pills nav-pills-dark">
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="account-orders.php">
                                        <i class="feather-icon icon-shopping-bag me-2"></i>
                                        Your Orders
                                    </a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="account-settings.php">
                                        <i class="feather-icon icon-settings me-2"></i>
                                        Settings
                                    </a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="account-address.php">
                                        <i class="feather-icon icon-map-pin me-2"></i>
                                        Address
                                    </a>
                                </li>

                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="account-notification.php">
                                        <i class="feather-icon icon-bell me-2"></i>
                                        Notification
                                    </a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <hr />
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="../index.php">
                                        <i class="feather-icon icon-log-out me-2"></i>
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="py-6 p-md-6 p-lg-10">
                            <!-- heading -->
                            <h2 class="mb-6">Your Orders</h2>

                            <div class="table-responsive-xxl border-0">
                                <!-- Table -->
                                <div class="container">

                                    <!-- Empty order -->

                                    <?php 
if (count($orderItems) === 0) {?>
                                    <div class="alert alert-secondary">
                                        No available orders
                                    </div>

                                    <?php } else { ?>
                                    <?php foreach ($orderItems as $orderItem) { 
    $order_id = $orderItem['id'];
    $order_number = $orderItem['order_number'];
    $order_status = $orderItem['order_status'];
    $payment_status = $orderItem['payment_status'];
    $delivery_status = $orderItem['delivery_status'];
    $total_amount = $orderItem['total_amount'];
    $created_at = $orderItem['created_at'];
    $product_id = $orderItem['product_id'];
    $product_name = $orderItem['product_name'];
    $quantity = $orderItem['quantity'];
    $price = $orderItem['price'];
    $product_img1 = $orderItem['product_img1'];
    $product_img2 = $orderItem['product_img2'];
    $product_img3 = $orderItem['product_img3'];
    $product_img4 = $orderItem['product_img4'];
    $product_img5 = $orderItem['product_img5'];
    $category_id = $orderItem['category_id'];
    $description = $orderItem['description'];
    $regular_price = $orderItem['regular_price'];
    $brand = $orderItem['brand'];
    $weight = $orderItem['weight'];
    $quantity_in_stock = $orderItem['quantity_in_stock'];
    $tags = $orderItem['tags'];
    $refundable = $orderItem['refundable'];
    $sales_price = $orderItem['sales_price'];
    $meta_title = $orderItem['meta_title'];
    $meta_description = $orderItem['meta_description'];
    $cash_on_delivery = $orderItem['cash_on_delivery'];
    $sku = $orderItem['sku'];
    $free_shipping = $orderItem['free_shipping'];
    $shipping_cost = $orderItem['shipping_cost'];
    $length = $orderItem['length'];
    $width = $orderItem['width'];
    $height = $orderItem['height'];
    $status = $orderItem['status'];
    $delivery_date = $orderItem['delivery_date'];
    $shipping_address = $orderItem['shipping_address'];
    $payment_method = $orderItem['payment_method'];

    
    ?>
                                    <div class="row order-details border py-3 mb-3 rounded-3">
                                        <div class="col-md-2">
                                            <img src="<?php echo $product_img1; ?>" alt=""   height="70" width="100" class="order-img img-fluid rounded-3">
                                        </div>

                                        <div class="col-md-7">
                                            <!-- Product details -->
                                            <p class="">
                                                <?php
                                                echo $product_name;
                                                ?></p>

                                            <!-- Order number -->
                                            <small class="text-muted">Order id: <?php echo $order_number; ?></small>
                                            <br>

                                            <!-- Delivery status and date -->
                                            <small
                                                class='bg-success px-3 py-1 small text-white rounded-pill'><?php echo $delivery_status; ?></small>
                                            <br>
                                        </div>

                                        <!-- See details button -->
                                        <div class='nav-item col text-end'>
                                            <a href="#" class='  text-primary border-0 nav-link'
                                                style="font-size:0.85rem">SEE
                                                DETAILS</a>
                                        </div>

                                    </div>

                                    <?php } }?>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- modal -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount"
        aria-labelledby="offcanvasAccountLabel">
        <!-- offcanvas header -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasAccountLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- offcanvas body -->
        <div class="offcanvas-body">
            <ul class="nav flex-column nav-pills nav-pills-dark">
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="account-orders.php">
                        <i class="feather-icon icon-shopping-bag me-2"></i>
                        Your Orders
                    </a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="account-settings.php">
                        <i class="feather-icon icon-settings me-2"></i>
                        Settings
                    </a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="account-address.php">
                        <i class="feather-icon icon-map-pin me-2"></i>
                        Address
                    </a>
                </li>
                <!-- nav item
                <li class="nav-item">
                    <a class="nav-link" href="account-payment-method.php">
                        <i class="feather-icon icon-credit-card me-2"></i>
                        Payment Method
                    </a>
                </li> -->
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="account-notification.php">
                        <i class="feather-icon icon-bell me-2"></i>
                        Notification
                    </a>
                </li>
            </ul>
            <hr class="my-6" />
            <div>
                <!-- nav  -->
                <ul class="nav flex-column nav-pills nav-pills-dark">
                    <!-- nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                            <i class="feather-icon icon-log-out me-2"></i>
                            Log out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- footer -->
    <?php include_once 'footer.php'; ?>
    <!-- Javascript-->
    <!-- Libs JS -->
    <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>
</body>

<!-- Mirrored from Sosmart.codescandy.com/pages/account-orders.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 01:18:01 GMT -->

</html>

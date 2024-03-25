<!DOCTYPE html>
<html lang="en">



    <?php
    $pageName = "Settings - Sosmart Online shopping and more";
    include_once ('header.php')
        ?>

    <body>
        <!-- navbar -->
        <?php

        if (!if_Authenticated()) {
            setcookie('userId', '', time() - 3600, '/');
            setcookie('token', '', time() - 3600, '/');
            setcookie('isAdmin', '', time() - 3600, '/');
            header('Location: signin.php?error=user not logged in & redirect=' . __DIR__ . '/shop-cart.php');
            exit();
        }
        ?>
        <?php include_once ('php/profile/fetchAll.php'); ?>
        <?php include_once ('php/category/fetchAll.php'); ?>
        <?php include_once ('php/cart/fetchAll.php') ?>
        <?php include_once ('navbar.php') ?>
      

  
    
        <script src="../assets/js/vendors/validation.js"></script>

        <main>
            <!-- section -->
            <section>
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                                <!-- heading -->
                                <h3 class="fs-5 mb-0">Account Setting</h3>
                                <!-- button -->
                                <button
                                    class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasAccount"
                                    aria-controls="offcanvasAccount"
                                >
                                    <i class="bi bi-text-indent-left fs-3"></i>
                                </button>
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col-lg-3 col-md-4 col-12 border-end d-none d-md-block">
                            <div class="pt-10 pe-lg-10">
                                <!-- nav item -->
                                <ul class="nav flex-column nav-pills nav-pills-dark">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            aria-current="page"
                                            href="account-orders.php"
                                        >
                                            <i class="feather-icon icon-shopping-bag me-2"></i>
                                            Your Orders
                                        </a>
                                    </li>
                                    <!-- nav item -->
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            href="account-settings.php"
                                        >
                                            <i class="feather-icon icon-settings me-2"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <!-- nav item -->
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="account-address.php"
                                        >
                                            <i class="feather-icon icon-map-pin me-2"></i>
                                            Address
                                        </a>
                                    </li>
                                    <!-- nav item -->
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="account-payment-method.php"
                                        >
                                            <i class="feather-icon icon-credit-card me-2"></i>
                                            Payment Method
                                        </a>
                                    </li>
                                    <!-- nav item -->
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="account-notification.php"
                                        >
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
                                        <a
                                            class="nav-link"
                                            href="../index.php"
                                        >
                                            <i class="feather-icon icon-log-out me-2"></i>
                                            Log out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="py-6 p-md-6 p-lg-10">
                                <div class="mb-0">
                                    <!-- heading -->
                                    <h2 class="mb-0">Account Setting</h2>
                                </div>
                                <hr class="mt-3 mb-5" />

                                <div>
                                    <!-- heading -->
                                    <h5 class="mb-4">Account details</h5>
                                    <div class="row">
                                        <div class="col-lg">
                                            <!-- form -->
                                            <form>
                                                <!-- input -->
                                                <div class="row row-cols-1 row-cols-md-2">

                                                <div class=" col   mb-3">
                                                    <label class="form-label">FirstName</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        disabled value="<?php echo $userFirstname ?>"
                                                    />
                                                </div>

                                                <div class=" col   mb-3">
                                                    <label class="form-label">LastName</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        disabled value="<?php echo $userLastname ?>"
                                                    />
                                                </div>

                                                </div>
                                             
                                                <!-- Row -->
                                                <div class="row row-cols-1 row-cols-md-2">

                                                   <!-- input -->
                                                   <div class=" col   mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input
                                                        type="email"
                                                        class="form-control"
                                                        disabled value="<?php echo $userEmail ?>"
                                                    />
                                                </div>
                                                <div class="mb-5">
                                                    <label class="form-label">Phone</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        disabled placeholder="Phone number"
                                                    />
                                                </div>  
                                                </div>
                                                
                                                <!-- button -->
                                                <div class=" col   mb-3">
                                                    <button class="btn btn-dark px-5 py-2">Save Details</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-10" />
                                <div class="pe-lg-14">
                                    <!-- heading -->
                                    <h5 class="mb-4">Password</h5>
                                    <form class="row row-cols-1 row-cols-lg-2">
                                        <!-- input -->
                                        <div class=" col   mb-3 col">
                                            <label class="form-label">New Password</label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                placeholder="**********"
                                            />
                                        </div>
                                        <!-- input -->
                                        <div class=" col   mb-3 col">
                                            <label class="form-label">Current Password</label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                placeholder="**********"
                                            />
                                        </div>
                                        <!-- input -->
                                        <div class="col-12">
                                            <p class="mb-4">
                                                Can’t remember your current password?
                                                <a href="#">Reset your password.</a>
                                            </p>
                                            <a
                                                href="#"
                                                class="btn btn-primary"
                                            >Save Password</a>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-10" />
                                <div>
                                    <!-- heading -->
                                    <h5 class="mb-4">Delete Account</h5>
                                    <p class="mb-2">Would you like to delete your account?</p>
                                    <p class="mb-5">This account contain 12 orders, Deleting your account will remove
                                        all the order details associated with it.</p>
                                    <!-- btn -->
                                    <a
                                        href="#"
                                        class="btn btn-outline-danger"
                                    >I want to delete my account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- modal -->
        <div
            class="offcanvas offcanvas-start"
            tabindex="-1"
            id="offcanvasAccount"
            aria-labelledby="offcanvasAccountLabel"
        >
            <!-- offcanvas header -->
            <div class="offcanvas-header">
                <h5
                    class="offcanvas-title"
                    id="offcanvasAccountLabel"
                >Offcanvas</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                ></button>
            </div>
            <!-- offcanvas body -->
            <div class="offcanvas-body">
                <ul class="nav flex-column nav-pills nav-pills-dark">
                    <!-- nav item -->
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            aria-current="page"
                            href="account-orders.php"
                        >
                            <i class="feather-icon icon-shopping-bag me-2"></i>
                            Your Orders
                        </a>
                    </li>
                    <!-- nav item -->

                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            href="account-settings.php"
                        >
                            <i class="feather-icon icon-settings me-2"></i>
                            Settings
                        </a>
                    </li>
                    <!-- nav item -->

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="account-address.php"
                        >
                            <i class="feather-icon icon-map-pin me-2"></i>
                            Address
                        </a>
                    </li>
                    <!-- nav item -->

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="account-payment-method.php"
                        >
                            <i class="feather-icon icon-credit-card me-2"></i>
                            Payment Method
                        </a>
                    </li>
                    <!-- nav item -->

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="account-notification.php"
                        >
                            <i class="feather-icon icon-bell me-2"></i>
                            Notification
                        </a>
                    </li>
                </ul>
                <hr class="my-6" />
                <div>
                    <!-- navs -->
                    <ul class="nav flex-column nav-pills nav-pills-dark">
                        <!-- nav item -->
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="../index.php"
                            >
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
        <?php include_once ('footer.php'); ?>
        <!-- Javascript-->
        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>
    </body>


</html>
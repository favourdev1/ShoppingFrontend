<!DOCTYPE html>
<html lang="en">
<?php $pageName = 'Shopping Cart | Sosmart online shopping and more!';
include_once 'header.php'; ?>

<body>

    <?php
    
    if (!if_Authenticated()) {
        setcookie('userId', '', time() - 3600, '/');
        setcookie('token', '', time() - 3600, '/');
        setcookie('isAdmin', '', time() - 3600, '/');
        header('Location: signin.php?error=user not logged in & redirect=' . __DIR__ . '/shop-cart.php');
        exit();
    }
    ?>
    <!-- navbar -->
    <?php include_once 'php/profile/fetchAll.php'; ?>

<!-- Navbar -->


<div class="py-5">
        <div class="container">
            <div class="row w-100 align-items-center justify-content-between gx-lg-2 gx-0">
                <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
                    <a class="navbar-brand d-none d-lg-block" href="index-2.html">
                        <img src="../assets/images/logo/sosmart-logo.png" height="40" class=""
                            alt="Sosmart Logo" />
                    </a>
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="../assets/images/logo/sosmart-logo.png" height="40" class=""
                                alt="Sosmart Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-xxl-7 col-lg-5 d-none d-lg-block">

                </div>

                <div class="col-lg-2 col-xxl-2 text-end col-md-6 col-7">
                    <div class="list-inline">

                        <div class="list-inline-item me-5 dropdown" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <a href="#" class="text-dark dropdown-toggle" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"
                                    style="vertical-align:middle">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>

                                <?php if (if_Authenticated()) { ?>
                                <span class="d-none d-md-inline"><?php echo 'Hi ' . $userFirstname; ?></span>
                                <?php } else { ?>
                                <span class="d-none d-md-inline"><?php echo 'Hello User'; ?></span>

                                <?php } ?>

                            </a>
                            <div class="dropdown-menu py-4 px-2" aria-labelledby="userDropdown">


                                <?php if (if_Authenticated()) { ?> <a class="dropdown-item fs-6" href="pages/account-settings.php">My
                                    Account</a>
                                <a class="dropdown-item fs-6" href="#">Orders</a>
                                <a class="dropdown-item fs-6" href="#">Inbox</a>
                                <a class="dropdown-item fs-6" href="#">Saved Items</a>
                                <hr>
                                <a class="dropdown-item fs-6" href="logout.php">Logout</a>

                                <?php } else { ?>
                                <a class="dropdown-item rounded fs-6  text-white "
                                    style="background-color: #1877f2 !important;" href="pages/signin.php">LOGIN TO
                                    CONTINUE</a>
                                <?php } ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="javascript/Route.js"></script> -->
    <!-- NavBar -->

    <div class="py-5 border-top d-flex align-items-center justify-content-center" style="min-height:80vh">
        <div class="container my-5 py-5">

        <div class="border col col-md-6 col-lg-5 mx-auto rounded-4 text-center py-5 my-5 px-4 shadow-sm">
            <img class="mt-5" class="img-fluid"src="../assets/images/success-image.png">

            <h1 class="fw-bold text-success mt-5">Payment Successful</h1>

            <p>Your payent was successfull and is now being reviewed </p>
            <small>Thanks for shopping with us!</small>
<br>
            <a href="../index.php" class="btn btn-primary my-4 px-5">
                Go Back Home
            </a>
        </div>


        </div>
    </div>
    <?php include_once 'footer.php'; ?>

<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
<script src="javascript/main.js"></script>
</body>
</html>
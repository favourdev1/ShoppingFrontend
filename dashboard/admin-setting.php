<!DOCTYPE html>
<html lang="en">




<?php include_once 'header.php'; ?>

<body class="position-relative">
    <!-- main -->
    <!-- navbar -->

    <?php include_once 'navbar.php'; ?>

    <link rel="stylesheet" href="../node_modules/@yaireo/tagify/dist/tagify.css" />
    <script src="../node_modules/@yaireo/tagify/dist/tagify.js"></script>



    <?php include_once 'php/products/fetch.php'; ?>
    <?php include_once 'php/category/fetchAll.php'; ?>
    <?php include_once 'php/admin-settings/fetchAll.php'; ?>
    <?php
    if ($isUpdating) {
        $endPoint = 'php/products/update.php';
    } else {
        $endPoint = 'php/products/store.php';
    }
    ?>
    <div class="main-wrapper position-relative vh-100">
        <!-- navbar vertical -->
        <!-- navbar -->
        <?php include_once 'sidebar.php'; ?>



        <!-- main -->
        <main class="main-content-wrapper">
            <!-- container -->

            <div>
                <!-- section -->
                <section>
                    <!-- container -->
                    <div class="container-fluid">
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
                            <div class="col-lg-3 col-md-4 col-12 border-end d-none d-md-block">
                                <div class="pt-10 pe-lg-10">
                                    <!-- nav -->
                                    <ul class="nav flex-column nav-pills nav-pills-dark">
                                        <!-- nav item -->

                                        <!-- nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link active " href="admin-setting.php">
                                                <i class="feather-icon icon-credit-card me-2"></i>
                                                Payment Information
                                            </a>
                                        </li>
                                        <!-- nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link " href="system_information.php">
                                                <i class="feather-icon icon-bell me-2"></i>
                                                System Information
                                            </a>
                                        </li>
                                        <!-- nav item -->
                                        <li class="nav-item">
                                            <hr />
                                        </li>
                                        <!-- nav item -->

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 col-12">
                                <div class="py-6 p-md-6 p-lg-10">
                                    <!-- heading -->
                                    <h2>Account Numbers</h2>
                                    <small>These represents the account number you would be using to recieve money when
                                        customers make payments </small>
                                    <ul class="list-group list-group-flush">
                                        <!-- List group item -->
                                        <li class="list-group-item px-0 py-5 border  rounded-3 px-3 mt-2">
                                            <div class="d-md-flex justify-content-between">
                                                <div class="d-flex">
                                                    <div>
                                                        <?php
                                                        $account_name_1 = $allAdminSettings['account_name_1'];
                                                        $bankName_1 = $allAdminSettings['bank_name_1'];
                                                        $account_number_1 = $allAdminSettings['account_number_1'];
                                                        if (empty($account_name)) {
                                                            $account_name = 'Not set';
                                                        }
                                                        if (empty($bankName)) {
                                                            $bankName = 'Not set';
                                                        }
                                                        if (empty($account_number_1)) {
                                                            $account_number_1 = 'Not set';
                                                        }
                                                        ?>
                                                        <h5 class="mb-">Account Name : <?php print_r($account_name_1); ?></h5>
                                                        <p class="mb-0 small">Account Number : <?php echo $account_number_1; ?></p>

                                                        <p class="mb-0 small text-muted">Bank Name :
                                                            <?php echo $bankName_1; ?></p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <!-- button -->
                                                    <a href="#"
                                                        class="btn btn-outline-gray-400 mt-3 mt-md-0 text-muted  btn-sm">Update
                                                        Information</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- List group item -->
                                        <?php

                                        if ($allAdminSettings['account_name_2'] != null) {
                                            ?>

                                        <li class="list-group-item px-0 py-5 border  rounded-3 px-3 mt-2">
                                            <div class="d-md-flex justify-content-between">
                                                <div class="d-flex">

                                                    <div>
                                                        <?php
                                                        $account_name_2 = $allAdminSettings['account_name_2'];
                                                        $bankName = $allAdminSettings['bank_name_2'];
                                                        $account_number_2 = $allAdminSettings['account_number_2'];
                                                        if (empty($account_name)) {
                                                            $account_name = 'Not set';
                                                        }
                                                        if (empty($bankName)) {
                                                            $bankName = 'Not set';
                                                        }
                                                        if (empty($account_number_2)) {
                                                            $account_number_2 = 'Not set';
                                                        }
                                                        ?>
                                                        <h5 class="mb-">Account Name : <?php print_r($account_name_2); ?></h5>
                                                        <p class="mb-0 small">Account Number : <?php echo $account_number_2; ?></p>

                                                        <p class="mb-0 small text-muted">Bank Name :
                                                            <?php echo $bankName; ?></p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <!-- button-->
                                                    <a href="#"
                                                        class="btn btn-outline-gray-400 mt-3 mt-md-0 text-muted btn-sm">Update
                                                        Information</a>
                                                </div>
                                            </div>
                                        </li>

                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- modal -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount"
                aria-labelledby="offcanvasAccountLabel">
                <!-- offcanvas header -->
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasAccountLabel">Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- offcanvas body -->
                <div class="offcanvas-body">
                    <ul class="nav flex-column nav-pills nav-pills-dark">
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link active " href="admin-setting.php">
                                <i class="feather-icon icon-credit-card me-2"></i>
                                Payment Information
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="system_information.php">
                                <i class="feather-icon icon-bell me-2"></i>
                                System Information
                            </a>
                        </li>

                    </ul>

                </div>

        </main>


    </div>


    <?php include_once 'footer.php'; ?>


    <!-- Libs JS -->
    <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>

    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script src="../assets/js/vendors/editor.js"></script>



</body>

</html>

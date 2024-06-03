<!DOCTYPE html>
<html lang="en">




    <?php include_once 'header.php'; ?>
<?php include_once 'route.php'; ?>
    <body class="position-relative">
        <!-- main -->
        <!-- navbar -->

        <?php include_once 'navbar.php'; ?>

        <link
            rel="stylesheet"
            href="../node_modules/@yaireo/tagify/dist/tagify.css"
        />
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

        <?php include_once ('loadDialog.php'); ?>
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
                                <div class="col-lg-3 col-md-4 col-12 border-end d-none d-md-block">
                                    <div class="pt-10 pe-lg-10">
                                        <!-- nav -->
                                        <ul class="nav flex-column nav-pills nav-pills-dark">
                                            <!-- nav item -->

                                            <!-- nav item -->
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link active "
                                                    href="admin-setting.php"
                                                >
                                                    <i class="feather-icon icon-credit-card me-2"></i>
                                                    Payment Information
                                                </a>
                                            </li>
                                            <!-- nav item -->
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link "
                                                    href="system_information.php"
                                                >
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
                                        <small>These represents the account number you would be using to recieve money
                                            when
                                            customers make payments </small>
                                        <ul class="list-group list-group-flush">
                                            <!-- List group item -->

                                            <?php
                                            $accountId = $allAdminSettings['id'];

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

                                            $accountId = $allAdminSettings['id'];

                                            $account_name_2 = $allAdminSettings['account_name_2'];
                                            $bankName_2 = $allAdminSettings['bank_name_2'];
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



                                            <li class="list-group-item border-0 px-0 py-5 gy-4 rounded-3 px-3 mt-2">
                                                <h5 class="mb-0">Account 1</h5>

                                                <div class="d-flex justify-content-between  border-bottom py-3">
                                                    <p class="mb-0 py-0">Account Name :</p>
                                                    <p class="mb-0"> <?php print_r($account_name_1); ?></p>
                                                </div>

                                                <div class="d-flex justify-content-between  border-bottom py-3">

                                                    <p class="mb-0 py-0 ">Account Number </p>
                                                    <p class="mb-0"> <?php echo $account_number_1; ?></p>
                                                </div>

                                                <div class="d-flex justify-content-between border-bottom py-3">
                                                    <p class="mb-0 py-0 ">Bank Name </p>
                                                    <p class="mb-0"> <?php echo $bankName_1; ?></p>
                                                </div>



                                            </li>
                                            <!-- acount number 2-2h8a2 -->





                                            <li class="list-group-item px-0 py-5 gy-4 rounded-3 px-3 mt-2 border-0">
                                                <h5 class="mb-0">Account 2</h5>

                                                <div class="d-flex justify-content-between  border-bottom py-3">
                                                    <p class="mb-0 py-0">Account Name :</p>
                                                    <p class="mb-0"> <?php print_r($account_name_2); ?></p>
                                                </div>

                                                <div class="d-flex justify-content-between  border-bottom py-3">

                                                    <p class="mb-0 py-0 ">Account Number </p>
                                                    <p class="mb-0"> <?php echo $account_number_2; ?></p>
                                                </div>

                                                <div class="d-flex justify-content-between border-bottom py-3">
                                                    <p class="mb-0 py-0 ">Bank Name </p>
                                                    <p class="mb-0"> <?php echo $bankName_2; ?></p>
                                                </div>



                                            </li>
                                            <!-- List group item -->


                                            <div>
                                                <!-- button -->
                                                <a
                                                    href="#"
                                                    data-account-id="<?php echo $accountId; ?>"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#updatePaymentModal"
                                                    class="btn updateBtn btn-primary w-100 mt-3 mt-md-0 text-white"
                                                >Update
                                                </a>
                                            </div>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
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
                        >Settings</h5>
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
                                    class="nav-link active "
                                    href="admin-setting.php"
                                >
                                    <i class="feather-icon icon-credit-card me-2"></i>
                                    Payment Information
                                </a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item">
                                <a
                                    class="nav-link "
                                    href="system_information.php"
                                >
                                    <i class="feather-icon icon-bell me-2"></i>
                                    System Information
                                </a>
                            </li>

                        </ul>

                    </div>

            </main>


        </div>
        <!-- Update button -->


        <!-- Modal -->
        <div
            class="modal fade"
            id="updatePaymentModal"
            tabindex="-1"
            aria-labelledby="updatePaymentModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5
                            class="modal-title"
                            id="updatePaymentModalLabel"
                        >Update Payment Details </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form id="updateForm">

                            <h5>Account Number 1</h5>

                            <div class="mb-3">
                                <label
                                    for="accountName"
                                    class="form-label"
                                >Account Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="accountName"
                                    name="account_name_1"
                                    value="<?php echo $account_name_1; ?>"
                                >
                            </div>
                            <div class="mb-3">
                                <label
                                    for="accountNumber"
                                    class="form-label"
                                >Account Number</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="accountNumber"
                                    name="account_number_1"
                                    value="<?php echo $account_number_1; ?>"
                                >
                            </div>
                            <div class="mb-3">
                                <label
                                    for="bankName"
                                    class="form-label"
                                >Bank Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="bankName"
                                    name="bank_name_1"
                                    value="<?php echo $bankName_1; ?>"
                                >
                            </div>
                            <input
                                type="hidden"
                                id="accountId"
                                value="<?php echo $accountId; ?>"
                            >


                            <h5>Account Number 2</h5>
                            <div class="mb-3">
                                <label
                                    for="accountName2"
                                    class="form-label"
                                >Second Account Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="accountName2"
                                    name="account_name_2"
                                    value="<?php echo $account_name_2; ?>"
                                >
                            </div>
                            <div class="mb-3">
                                <label
                                    for="accountNumber2"
                                    class="form-label"
                                >Second Account Number</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="accountNumber2"
                                    name="account_number_2"
                                    value="<?php echo $account_number_2; ?>"
                                >
                            </div>
                            <div class="mb-3">
                                <label
                                    for="bankName2"
                                    class="form-label"
                                >Second Bank Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="bankName2"
                                    name="bank_name_2"
                                    value="<?php echo $bankName_2; ?>"
                                >
                            </div>

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
        // Get all update buttons
        var updateBtns = document.querySelectorAll('.updateBtn');


        var headers = <?php echo json_encode($payloadRequest); ?>;
        // Listen for the form submission
        document.getElementById('updateForm').addEventListener('submit', function(e) {
            e.preventDefault();
            hideDialog(false);


            var url = '<?php echo $apiUrl; ?>/admin_settings/update/account/numbers'

            // Get the form data
            var formData = new FormData(e.target);

            // Convert it to an object
            var data = Object.fromEntries(formData.entries());
            // Send the data to the server
            // Send the data to the server
            axios.post(url, data, {
                    headers: headers,

                })

                // find out why show alert is not working and add loading dialog to this request 
                .then(function(response) {
                    // Handle the response
                    console.log(response.data);
               
                    if (response.data.status == "success") {
                        showAlert('Saved successfully!', 'success')
                    } else {
                        showAlert('Failed to save!', 'danger')

                    }

                    window.location.reload()

                })
                .catch(function(error) {
                    console.log(error);
                    showAlert('Failed to save! please contact it support', 'danger')
                })
                .then(function() {
                    hideDialog(true);
                });
        });
        </script>

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
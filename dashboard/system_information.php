<!DOCTYPE html>
<html lang="en">




<?php include_once 'header.php'; ?>
<?php include_once 'loadDialog.php'; ?>
<?php include_once 'route.php'; ?>

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
                                    <h3 class="fs-5 mb-0">System Settings </h3>
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
                                            <a class="nav-link " href="admin-setting.php">
                                                <i class="feather-icon icon-credit-card me-2"></i>
                                                Payment Information
                                            </a>
                                        </li>
                                        <!-- nav item -->
                                        <li class="nav-item">
                                            <a class="nav-link active" href="system_information.php">
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
                            <div class="col-xl-6 col-lg-8 col-md-8 col-12">
                                <div class="py-6 p-md-6 p-lg-10">
                                    <!-- heading -->
                                    <h2>System Information </h2>
                                    <small>These represents the account number you would be using to recieve money when
                                        customers make payments </small>
                                    <ul class="list-group list-group-flush">
                                        <!-- List group item -->

                                        <!-- make me a form to add the office address # -->
                                        <div class="mt-5 form-control pt-3 pb-0  px-0 text-dark">
                                            <div class="px-3">

                                                <label for="office_address" class="fw-bold h5">Office
                                                    Address</label>
                                                <input type="text" name="office_address" id="office_address"
                                                    class="form-control mb-3" placeholder="Enter Office Address">
                                                <small class="m-0 ">This is where you set up your office
                                                    address</small>

                                            </div>
                                            <div
                                                class="border-top d-flex align-items-center justify-content-between mt-3 px-3 py-3">
                                                <small class="m-0 h-6">Please enter your address, in this format
                                                    address, city,the state, and country</small>

                                                <button id="officeAddressButton" type="submit" class="btn btn-primary small m-0">Save</button>
                                            </div>


                                        </div>
                                            <div>
                                                <!-- make me a form to add the office address # -->
                                                <div class="mt-5 form-control pt-3 pb-0  px-0 text-dark">
                                                    <div class="px-3">

                                                        <label for="shipping_cost_per_meter" class="fw-bold h5">
                                                            Shipping Cost per meter $</label>
                                                        <input type="number" name="shipping_cost_per_meter"
                                                            id="shipping_cost_per_meter" class="form-control mb-3"
                                                            placeholder="Enter Office Address">
                                                        <small class="m-0 ">Used for charging shipping fees
                                                            ...</small>

                                                    </div>
                                                    <div
                                                        class="border-top d-flex align-items-center justify-content-between mt-3 px-3 py-3">
                                                        <small class="m-0 h-6">Enter value in naira</small>

                                                        <button id="shippingCostButton"type="submit"
                                                            class="btn btn-primary small m-0">Save</button>
                                                    </div>
                                                </div>
                                            </div>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- <script src="../pages/javascript/Route.js"></script> -->
            <script>
                var headers = <?php echo json_encode($payloadRequest); ?>;
                fetchAllInformation()
                // check if shipping cost per meter is not empty

                const shippingButton = document.getElementById('shippingCostButton')
                const officeAddressButton = document.getElementById('officeAddressButton')
                const officeAddressInput = document.getElementById('office_address')
                const shippingCost = document.getElementById('shipping_cost_per_meter')
                shippingButton.addEventListener('click', (e) => {
                    if (shippingCost.value == "" || shippingCost.value == null || shippingCost.value == 0) {
                        showAlert('Please enter a valid shipping cost per meter', 'danger')
                        return;
                    }

                    saveShipingCost()
                })

                officeAddressButton.addEventListener('click',function(){
                    if(officeAddressInput.value == "" || officeAddressInput.value == null){
                        showAlert('Please enter a valid office address', 'danger')
                        return;
                    }
                    saveOfficeAddr()
                })


                function fetchAllInformation() {
                    hideDialog(false)

                    //use axios to fetch office address
                    axios.get(endPoint + "/admin" + adminSettingsRoute, {
                        headers: headers,

                    }).then((response) => {
                        console.log(response.data.data)
                        document.getElementById('office_address').value = response.data.data.office_address
                        document.getElementById('shipping_cost_per_meter').value = response.data.data
                            .shipping_cost_per_meter
                    }).catch((error) => {
                        console.log(error)
                    }).finally(() => {
                        hideDialog(true)
                    })
                }

                function saveOfficeAddr() {
                    hideDialog(false)
                    

                    //use axios to save office address
                    axios.post(endPoint + "/admin" + adminSettingsRoute + updateofficeRoute, {
                            office_address: document.getElementById('office_address').value
                        }, {
                            headers: headers,

                        }).then((response) => {
                            showAlert('Saved successfully!', 'success')
                        }).catch((error) => {
                            console.log(error)
                        })
                        .finally(() => {
                            hideDialog(true)
                        })
                }

                function saveShipingCost() {
                    //use axios to save shipping cost per meter
                    hideDialog(false)

                    axios.post(endPoint + "/admin" + adminSettingsRoute + updateShippingcostRoute, {
                        shipping_cost_per_meter: document.getElementById('shipping_cost_per_meter').value
                    }, {
                        headers: headers,

                    }).then((response) => {
                        showAlert('Saved successfully!', 'success')
                    }).catch((error) => {
                        console.log(error)
                    }).finally(() => {
                        hideDialog(true)
                    })
                }
            </script>

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
                            <a class="nav-link " href="admin-setting.php">
                                <i class="feather-icon icon-credit-card me-2"></i>
                                Payment Information
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link active" href="system_information.php">
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

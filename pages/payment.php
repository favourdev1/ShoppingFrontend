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

        <script>
        let payloadRequest = <?php echo json_encode($payloadRequest); ?>
        </script>


        <!-- <script src="javascript/Route.js"></script> -->
        <!-- NavBar -->


        <?php

        if (!isset($_GET['order_number']) || empty($_GET['order_number'])) {
            header('Location: 404error.php?error=we are unable to find the order infomation you are looking for');
            exit();
        }

        ?>
        <?php include_once 'php/cart/fetchAll.php'; ?>
        <?php include_once 'php/orders/fetch.php'; ?>
        <div class="py-5">
            <div class="container">
                <div class="row w-100 align-items-center justify-content-between gx-lg-2 gx-0">
                    <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
                        <a
                            class="navbar-brand d-none d-lg-block"
                            href="../index.php"
                        >
                            <img
                                src="../assets/images/logo/sosmart-logo.png"
                                height="40"
                                class=""
                                alt="Sosmart Logo"
                            />
                        </a>
                        <div class="d-flex justify-content-between w-100 d-lg-none">
                            <a
                                class="navbar-brand"
                                href="../index.php"
                            >
                                <img
                                    src="../assets/images/logo/sosmart-logo.png"
                                    height="40"
                                    class=""
                                    alt="Sosmart Logo"
                                />
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-lg-5 d-none d-lg-block">

                    </div>

                    <div class="col-lg-2 col-xxl-2 text-end col-md-6 col-7">
                        <div class="list-inline">

                            <div
                                class="list-inline-item me-5 dropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <a
                                    href="#"
                                    class="text-dark dropdown-toggle"
                                    id="userDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-user"
                                        style="vertical-align:middle"
                                    >
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle
                                            cx="12"
                                            cy="7"
                                            r="4"
                                        ></circle>
                                    </svg>

                                    <?php if (if_Authenticated()) { ?>
                                    <span class="d-none d-md-inline"><?php echo 'Hi ' . $userFirstname; ?></span>
                                    <?php } else { ?>
                                    <span class="d-none d-md-inline"><?php echo 'Hello User'; ?></span>

                                    <?php } ?>

                                </a>
                                <div
                                    class="dropdown-menu py-4 px-2"
                                    aria-labelledby="userDropdown"
                                >


                                    <?php if (if_Authenticated()) { ?> <a
                                        class="dropdown-item fs-6"
                                        href="account-settings.php"
                                    >My
                                        Account</a>
                                    <a
                                        class="dropdown-item fs-6"
                                        href="account-orders.php"
                                    >Orders</a>
                                    <a
                                        class="dropdown-item fs-6"
                                        href="#"
                                    >Inbox</a>
                                    <a
                                        class="dropdown-item fs-6"
                                        href="shop-wishlist.php"
                                    >Saved Items</a>
                                    <hr>
                                    <a
                                        class="dropdown-item fs-6"
                                        href="php/logout.php"
                                    >Logout</a>

                                    <?php } else { ?>
                                    <a
                                        class="dropdown-item rounded fs-6  text-white "
                                        style="background-color: #1877f2 !important;"
                                        href="pages/signin.php"
                                    >LOGIN TO
                                        CONTINUE</a>
                                    <?php } ?>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="../assets/js/vendors/validation.js"></script>

        <main>
            <?php include_once 'components/loadingDialog.php'; ?>

            <div class="border-top"></div> <!-- section -->
            <section
                class=" pb-lg-14 pb-8 border-bottom mt-md-8"
                style="min-height:60dvh"
            >
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-12 px-0 col-lg-5 rounded-3 border mx-auto ">
                            <!-- boxicon back button -->
                            <div class="d-flex align-items-center border-bottom p-4 p-4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-arrow-left"
                                    onclick="window.history.back()"
                                >
                                    <line
                                        x1="19"
                                        y1="12"
                                        x2="5"
                                        y2="12"
                                    ></line>
                                    <polyline points="12 19 5 12 12 5"></polyline>
                                </svg>


                                <h4 class="m-0 p-0 ps-3 fs-5 ">Payment</h4>
                            </div>
                            <!-- design me something where user can see an account number where they are to make payment transfer to  -->
                            <div class="container mt-5">

                                <div class="container">
                                    <div class="card-body">
                                        <div
                                            class="icon bg-success px-3"
                                            style="width:fit-content"
                                        >
                                            <i class="fas fa-check-circle text-whte"></i>
                                        </div>
                                        <div class="text-center">
                                            <img
                                                src="../assets/images/icons/success-icon.png"
                                                alt=""
                                            >
                                            <h2 class="text-success">Order placed!</h2>
                                            <p>please proceed to make payment to the following details </p>
                                        </div>

                                        <div class="row row-cols align-items-center justify-content-center ">
                                            <div
                                                class=" border rounded-3 m-4 p-4"
                                                style="width:max-content"
                                            >
                                                <img
                                                    src="../assets/images/orange.png"
                                                    class="img-fluid"
                                                    width="100"
                                                    alt="mpesa logo"
                                                >
                                                <p class="text-center pb-0 mb-0 fw-bold">Mpesa</p>

                                            </div>
                                            <div
                                                class=" border rounded-3 m-4 p-4 "
                                                style="width:max-content"
                                            >
                                                <img
                                                    src="../assets/images/MPESA.png"
                                                    class="img-fluid"
                                                    width="100"
                                                    alt="mpesa logo"
                                                >
                                                <p class="text-center pb-0 mb-0 fw-bold">Mpesa</p>
                                            </div>
                                        </div>


                                        <!-- <div class="card mb-2"> -->
                                        <ul class=" list-group list-group-flush">
                                            <!-- list group item -->
                                            <li
                                                class="list-group-item px-0 py-3 d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Amount To Transfer</div>
                                                </div>
                                                <span
                                                    id="amount"><?= CURRENCY . number_format($total_amount, 2) ?></span>
                                            </li>
                                            <li
                                                class="list-group-item px-0 py-3 d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Account Number</div>
                                                </div>
                                                <span>0892128066 </span>
                                            </li>
                                            <li
                                                class="list-group-item px-0 py-3 d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Account Name</div>
                                                </div>
                                                <span>Jachike Onuigbo</span>
                                            </li>


                                            <li
                                                class="list-group-item px-0 py-3 justify-content-between align-items-start ">
                                                <div class="my-0  ">Payment Proof</div>
                                                <div
                                                    class="custom-file-input col w-100 text-center py-5 my-3 rounded"
                                                    style="border-style:dashed"
                                                >
                                                    <div class="me-auto my-5">
                                                        <p
                                                            class="fw-bold my-0 text-secondary"
                                                            id="fileName"
                                                        >No file
                                                            chosen</p>
                                                        <!-- file size -->
                                                        <p
                                                            class="small my-0 py-0 text-secondary"
                                                            id="filesize"
                                                        >0kb</p>
                                                    </div>
                                                    <input
                                                        type="file"
                                                        accept="image/png, image/jpeg"
                                                        name="payment_proof"
                                                        id="payment_proof_input"
                                                    >
                                                </div>


                                            </li>



                                            <li
                                                class="  list-group-item border-0 px-0 py-3 justify-content-between align-items-start ">
                                                <div class="">
                                                    <div class="fw-bold">Account Number</div>
                                                </div>

                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="accNo"
                                                    id="accNo"
                                                >
                                                <small>The account number you are using to make the payment</small>
                                            </li>
                                            <div
                                                class="d-flex align-items-cente py-4 px-3 alert alert-danger"
                                                style="vertical-align:middle ; "
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    height="20"
                                                    width="20"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="2.5"
                                                    stroke="currentColor"
                                                    class="w-6 h-6 me-3 fw-bold  "
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"
                                                    />
                                                </svg>

                                                <p class=" small   fw-bold py-0 my-0">Please ensure that you are
                                                    transfering the exact amount that is shown on this page
                                                </p>
                                            </div>
                                            <p
                                                class="btn btn-primary w-100 mb-5"
                                                id="sendPayment"
                                            >
                                                Request Approval
                                            </p>
                                        </ul>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </main>



        <style>
        .custom-file-input {
            position: relative;
            overflow: hidden;
            display: inline-block;
            border: 1px solid #ccc;
            padding: 8px 12px;
            cursor: pointer;
            background-color: #f0f0f0;
        }


        .custom-file-input input[type="file"] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }
        </style>

        <script>
        const order_number = '<?= $_GET['order_number'] ?>'
        hideDialog(false)
        document.addEventListener('DomContentLoaded', () => {
            hideDialog(true)

        });
        const sendDataToServerBtn = document.getElementById('sendPayment')

        sendDataToServerBtn.addEventListener('click', () => {
            sendDataToServer()
            console.log('clicked')
        })
        const paymentProofInput = document.getElementById('payment_proof_input');

        const accNoInput = document.getElementById('accNo');

        const paymentProofDiv = document.getElementById('fileName')
        const fileSizeDiv = document.getElementById('filesize')
        paymentProofInput.addEventListener('change', (event) => {
            const fileName = event.target.files[0].name;
            paymentProofDiv.textContent = fileName;

            const fileSize = event.target.files[0].size;
            const fileSizeInKb = fileSize / 1024;
            const fileSizeInMb = fileSizeInKb / 1024;
            const fileSizeInGb = fileSizeInMb / 1024;
            const fileSizeInTb = fileSizeInGb / 1024;

            if (fileSizeInTb > 1) {
                fileSizeDiv.textContent = fileSizeInTb.toFixed(2) + 'TB';
            } else if (fileSizeInGb > 1) {
                fileSizeDiv.textContent = fileSizeInGb.toFixed(2) + 'GB';
            } else if (fileSizeInMb > 1) {
                fileSizeDiv.textContent = fileSizeInMb.toFixed(2) + 'MB';
            } else if (fileSizeInKb > 1) {
                fileSizeDiv.textContent = fileSizeInKb.toFixed(2) + 'KB';
            } else {
                fileSizeDiv.textContent = fileSize.toFixed(2) + 'B';
            }

        });


        function sendDataToServer() {
            const amount = document.getElementById('amount').innerHTML
            const file = paymentProofInput.files[0];
            const accNo = accNoInput.value;
            if (!file) {
                showAlert('Please select a file,', 'error');
                return;
            }

            if (!accNo || accNo.length < 9) {
                showAlert('Please enter your correct  account number', 'error');
                return;
            }
            hideDialog(false)
            const formData = new FormData();
            formData.append('payment_proof', file);
            formData.append('account_number', accNo);
            formData.append('payment_amount', amount)
            formData.append('order_number', order_number)



            // setTimeout(() => {
            //     window.location.href = 'successPayment.php';

            //     hideDialog(true)
            // }, 5000);

            console.log(endPoint + sendPayment + "")
            axios.post(endPoint + sendPayment, formData, {
                    headers: payloadRequest
                })
                .then(response => {
                    console.log(response);
                    // Handle success
                    if (response.data.status == 'success') {

                        window.location.href = 'successPayment.php';
                    } else {
                        showAlert(response.data.data.message)
                    }

                })
                .catch(error => {
                    // Handle error
                    console.log(error);
                })
                .finally(function() {
                    hideDialog(true)

                });
        }




        axios.get(endPoint  + adminSettingsRoute, {
                headers: payloadRequest
            })
            .then(response => {
                // Check the HTTP status code
                console.log(response);
                // Handle success
                if (response.data.status == 'success') {
                    const allAdminSettings = response.data.data.admin_settings;

                    // Output or process the settings as needed
                    console.log(allAdminSettings); // Example of outputting the data
                } else {
                    // Handle non-successful responses
                    console.error(`Error Status Code: ${response.status}`);
                }
            })
            .catch(error => {
                // Handle errors in the request itself (e.g., network errors)
                if (error.response) {
                    // The request was made and the server responded with a status code
                    // that falls out of the range of 2xx
                    console.error("Error Status Code:", error.response.status);
                    console.error("Error Message:", error.response.data.message);
                } else if (error.request) {
                    // The request was made but no response was received
                    console.error("No response received:", error.request);
                } else {
                    // Something happened in setting up the request that triggered an Error
                    console.error("Error", error.message);
                }
            });
        </script>


        <!-- Footer -->
        <!-- footer -->
        <?php include_once 'footer.php'; ?>

        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>
        <script src="javascript/main.js"></script>
        <script>
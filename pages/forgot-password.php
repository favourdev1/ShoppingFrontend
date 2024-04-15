<!DOCTYPE html>
<html lang="en">


<?php
$pageName = 'Forgot Password - Sosmart Online shopping and more';
include_once 'header.php'; ?>


<body>

    <!-- LOading dialog -->
    <div class="modal d-flex align-items-center   justify-content-center" tabindex="-1" role="dialog" id="loadingDialog"
        data-backdrop="static" data-keyboard="false" style="background:#ffffff !important">
        <div class="modal-dialog " role="document">
            <div class="modal-content border">
                <img src="../assets/images/loader.svg" height="100" width="100" class="img-fluid m-5 "
                    alt="">
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
                modal.style.cssText = 'display: none !important;';

            } else {
                modal.style.cssText = ' display: flex !important;';

            }

        }


        document.addEventListener("DOMContentLoaded", function() {
            // const modal = document.getElementById('loadingDialog');
            hideDialog(true)


        })
    </script>
    <!-- navigation -->
    <div class="border-bottom shadow-sm">
        <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
                <a class="navbar-brand" href="../index.php">
                    <img src="../assets/images/logo/" alt="" class="d-inline-block align-text-top" />
                </a>
                <span class="navbar-text">
                    Already have an account?
                    <a href="signin.php">Sign in</a>
                </span>
            </div>
        </nav>
    </div>

    <main class="border-bottom d-flex align-items-center px-3
      " style="min-height:70vh">
        <!-- section -->
        <section class="my-lg-14 my-8 mx-auto">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row justify-content-center align-items-center">

                    <div class="col col-lg-6 col-xl-9 mx-auto d-flex align-items-center text-center">
                        <div>
                            <div class="mb-lg-9 mb-5">
                                <!-- heading -->
                                <h1 class="mb-2 h2 fw-bold">Forgot your password?</h1>
                                <p>Please enter the email address associated with your account and We will email you a
                                    link to reset your password.</p>
                            </div>
                            <!-- form -->
                            <!-- <form class="needs-validation" novalidate> -->
                            <!-- row -->
                            <div class="row g-3">
                                <!-- col -->
                                <div class="col-12">
                                    <!-- input -->
                                    <label for="formForgetEmail" class="form-label visually-hidden">Email
                                        address</label>
                                    <input type="email" class="form-control" id="formForgetEmail"
                                        placeholder="Email"value="favourapps17@gmai.com" required />

                                </div>

                                <!-- btn -->
                                <div class="col-12 d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" id="resetPasswordBtn">Reset
                                        Password</button>
                                    <a href="signup.php" class="btn btn-light">Back</a>
                                </div>
                            </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        const email = document.getElementById('formForgetEmail');
        const resetPasswordBtn = document.getElementById('resetPasswordBtn');

        const url = endPoint + forgotPassword;


        resetPasswordBtn.addEventListener('click', (e) => {

            // console.log(url)
            hideDialog(false)
            if (!validateEmail()) {
                showAlert('Invalid email address', 'error');
                return;
            }


            axios.post(url, {
                    email: email.value,
                })
                .then((response) => {
                    const responseData = response.data
                    console.log(responseData)
                    if (responseData.status == "error") {
                        showAlert(responseData.message, 'error')
                        return;
                    }
                    showAlert(responseData.message, 'success', 30)
                }, (error) => {
                    console.log(error.response)
                    if (error && error.response && error.response.data) {
                        showAlert(error.response.data.message, 'error')
                    } else {

                    }
                })
                .finally(() => {
                    hideDialog(true)
                });



        })


        function validateEmail() {
            const email = document.getElementById('formForgetEmail').value;
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (email.match(emailPattern)) {
                return true;
            } else {
                return false;
            }
        }
    </script>

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

    <script src="../assets/js/vendors/validation.js"></script>
</body>


</html>

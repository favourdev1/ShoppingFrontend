<!DOCTYPE html>
<html lang="en">


    <?php $pageName = "Signin -Sosmart online shopping and more!"; ?>
    <?php include_once('header.php') ?>



    <body class="d-flex align-items-center justify-content-center">


   <?php include_once('components/loadingDialog.php')?>

        <?php

   if (if_Authenticated()) {
            // header_remove();
            // ob_end_clean();

            echo '<script type="text/javascript">';
            echo 'window.location.href="../index.php";';
            echo '</script>';

    //   exit;
   }
   ?>
        
        <div class="vh-100 d-flex align-items-center ">
            <!-- section -->
            <section class="my-8">
                <div class="container">
                    <!-- row -->
                    <div class="row justify-content-center align-items-center">

                        <!-- col -->
                        <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                            <div class="mb-lg-9 mb-5 text-center">
                                <h1 class="mb-1 h2 fw-bold">Sign in to Sosmart</h1>
                                <p>Welcome back to Sosmart! Enter your email to get started.</p>
                            </div>

                            <form
                                id="loginForm"
                                class="needs-validation"
                                novalidate
                            >
                                <div class="row g-3">
                                    <!-- row -->

                                    <div class="col-12">
                                        <!-- input -->
                                        <label
                                            for="formSigninEmail"
                                            class="form-label visually-hidden"
                                        >Email address</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="formSigninEmail"
                                            name="email"
                                            placeholder="Email"
                                            required
                                        />
                                        <div class="invalid-feedback">Please enter name.</div>
                                    </div>
                                    <div class="col-12">
                                        <!-- input -->
                                        <div class="password-field position-relative">
                                            <label
                                                for="formSigninPassword"
                                                class="form-label visually-hidden"
                                            >Password</label>
                                            <div class="password-field position-relative">
                                                <input
                                                    type="password"
                                                    class="form-control fakePassword"
                                                    id="formSigninPassword"
                                                    name="password"
                                                    placeholder="*****"
                                                    required
                                                />
                                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                                <div class="invalid-feedback">Please enter password.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <!-- form check -->
                                        <div class="form-check">
                                            <input
                                                class="form-check-input small"
                                                name="remember"
                                                type="checkbox"
                                                value=""
                                                id="flexCheckDefault"
                                            />

                                        
                                            <!-- label -->
                                            <label
                                                class="form-check-label small"
                                                for="flexCheckDefault"
                                            >Remember me</label>
                                        </div>
                                        <div class="small">
                                            Forgot password?
                                            <a href="forgot-password.php">Reset It</a>
                                        </div>
                                    </div>
                                    <!-- btn -->
                                    <div class="col-12 d-grid"><button
                                            type="submit"
                                            class="btn btn-primary"
                                        >Sign In</button></div>
                                    <!-- link -->
                                    <div class="text-center">
                                        Don’t have an account?
                                        <a href="signup.php">Sign Up</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        
      
        <!-- Javascript-->
        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>

        <script src="../assets/js/vendors/password.js"></script>
        <script src="../assets/js/vendors/validation.js"></script>
        <script src="javascript/login.js"></script>

    </body>


</html>
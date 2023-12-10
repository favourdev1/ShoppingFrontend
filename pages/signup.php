<!DOCTYPE html>
<html lang="en">
<?php $pageName="Create an account -Sosmart online shopping and more!";
 include_once('header.php')?>

    <body>
        <!-- navigation -->
        <div class="border-bottom shadow-sm">
            <nav class="navbar navbar-light py-2">
                <div class="container justify-content-center justify-content-lg-between">
                    <a
                        class="navbar-brand"
                        href="../index.php"
                    >
                        <img
                            src="../assets/images/logo/freshcart-logo.svg"
                            alt=""
                            class="d-inline-block align-text-top"
                        />
                    </a>
                    <span class="navbar-text">
                        Already have an account?
                        <a href="signin.php">Sign in</a>
                    </span>
                </div>
            </nav>
        </div>

        <main class="border-bottom">
            <!-- section -->

            <section class="my-lg-14 my-8 ">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row justify-content-center align-items-center">
                      
                        <!-- col -->
                        <div class="col-12 col-md-6 col-lg-5 offset-lg-1 col-lg-4 order-lg-2 order-1 ">
                            <div class="mb-lg-9 mb-5 text-center">
                                <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
                                <p>Welcome to Sosmart! Enter your email to get started.</p>
                            </div>
                            <!-- form -->

                            <div class="alert alert-warning small text-center " id="error"role="alert">

</div>



                            <form
                            id="signupform"
                                class="needs-validation"
                                novalidate
                            >
                                <div class="row  g-3">
                                    <!-- col -->
                                    <div class="col-12">
                                        <!-- input -->
                                        <label
                                            for="formSignupfname"
                                            class="form-label small"
                                        >First Name</label>
                                        <input
                                            type="text"
                                            name="firstname"
                                            class="form-control rounded-1"
                                            id="formSignupfname"
                                            placeholder="Enter lastname"
                                            required
                                        />
                                        <div class="invalid-feedback">Please enter first name.</div>
                                    </div>
                                    <div class="col-12">
                                        <!-- input -->
                                        <label
                                            for="formSignuplname"
                                            class="form-label small"
                                        >Last Name</label>
                                        <input
                                            type="text"
                                            name="lastname"
                                            class="form-control rounded-1"
                                            id="formSignuplname"
                                            placeholder="Enter lastname..."
                                            required
                                        />
                                        <div class="invalid-feedback">Please enter last name.</div>
                                    </div>
                                    <div class="col-12">
                                        <!-- input -->
                                        <label
                                            for="formSignupEmail"
                                            class="form-label small"
                                        >Email address</label>
                                        <input
                                            type="email"
                                            class="form-control rounded-1"
                                            id="formSignupEmail"
                                            name="email"
                                            placeholder="Email"
                                            required
                                        />
                                        <div class="invalid-feedback">Please enter email.</div>

                               
                                    </div>
                                    <div class="col-12">
                                        <div class="password-field position-relative">
                                            <label
                                                for="formSignupPassword"
                                                class="form-label small"
                                            >Password</label>
                                            <div class="password-field position-relative">
                                                <input
                                                    type="password"
                                                    class="form-control rounded-1 fakePassword"
                                                    id="formSignupPassword"
                                                    placeholder="*****"
                                                    name="password"
                                                    required
                                                />
                                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                                <div class="invalid-feedback">Please enter password.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- btn -->
                                    <div class="col-12 d-grid mt-5"><button
                                            type="submit"
                                            class="btn btn-primary"
                                        >Create New Account </button></div>

                                    <!-- text -->
                                    <p class="text-center">
                                        <small class="text-center">
                                            By continuing, you agree to our
                                            <a href="#!">Terms of Service</a>
                                            &
                                            <a href="#!">Privacy Policy</a>
                                        </small>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <!-- footer -->
        <?php include_once('footer.php')?>

        <!-- Javascript-->
        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>

        <script src="../assets/js/vendors/password.js"></script>

        <script src="../assets/js/vendors/validation.js"></script>
        <script src="javascript/signup.js"></script>
    </body>


</html>
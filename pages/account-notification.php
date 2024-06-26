<!DOCTYPE html>
<html lang="en">
   
   
<?php
$pageName = "Notification Settings - Sosmart Online shopping and more";
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
                        <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required />
                        <div class="invalid-feedback">Please enter name.</div>
                     </div>
                     <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email address" required />
                        <div class="invalid-feedback">Please enter email.</div>
                     </div>
                     <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" required />
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
                              <a class="nav-link" aria-current="page" href="account-orders.php">
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
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="account-payment-method.php">
                                 <i class="feather-icon icon-credit-card me-2"></i>
                                 Payment Method
                              </a>
                           </li> -->
                           <!-- nav item -->
                           <li class="nav-item">
                              <a class="nav-link active" href="account-notification.php">
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
                              <a class="nav-link" href="logout.php">
                                 <i class="feather-icon icon-log-out me-2"></i>
                                 Log out
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-9 col-md-8 col-12">
                     <div class="py-6 p-md-6 p-lg-10">
                        <div class="mb-6">
                           <!-- heading -->
                           <h2 class="mb-0">Notification settings</h2>
                        </div>

                        <div class="mb-10">
                           <!-- text -->
                           <div class="border-bottom pb-3 mb-5">
                              <h5 class="mb-0">Email Notifications</h5>
                           </div>
                           <!-- text -->
                           <div class="d-flex justify-content-between align-items-center mb-6">
                              <div>
                                 <h6 class="mb-1">Weekly Notification</h6>
                                 <p class="mb-0">Stay updated with our weekly notifications. Get the latest news, offers, and promotions delivered straight to your inbox.</p>
                              </div>
                              <!-- checkbox -->
                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                                 <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                              </div>
                           </div>
                         
                        </div>
                        <div class="mb-10">
                           <!-- heading -->
                           <div class="border-bottom pb-3 mb-5">
                              <h5 class="mb-0">Order updates</h5>
                           </div>
                           <div class="d-flex justify-content-between align-items-center mb-6">
                              <div>
                                 <!-- heading -->
                                 <h6 class="mb-0">Text messages</h6>
                              </div>
                              <!-- form checkbox -->
                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2"  disabled/>
                                 <label class="form-check-label" for="flexSwitchCheckDefault2"></label>
                              </div>
                           </div>
                           <!-- text -->
                           <div class="d-flex justify-content-between align-items-center">
                              <div>
                                 <h6 class="mb-1">Call before checkout</h6>
                                
                              </div>
                              <!-- form checkbox -->
                              <div class="form-check form-switch">
                                 <input class="form-check-input" disabled type="checkbox" role="switch" id="flexSwitchCheckChecked2"  />
                                 <label class="form-check-label" for="flexSwitchCheckChecked2"></label>
                              </div>
                           </div>
                        </div>
                     
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <!-- modal -->

      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
         <!-- offcanvac header -->
         <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <!-- offcanvac body -->
         <div class="offcanvas-body">
            <ul class="nav flex-column nav-pills nav-pills-dark">
               <!-- nav item -->
               <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="account-orders.php">
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
                  <a class="nav-link" href="account-payment-method.php">
                     <i class="feather-icon icon-credit-card me-2"></i>
                     Payment Method
                  </a>
               </li>
               <!-- nav item -->
               <li class="nav-item">
                  <a class="nav-link active" href="account-notification.php">
                     <i class="feather-icon icon-bell me-2"></i>
                     Notification
                  </a>
               </li>
            </ul>
            <hr class="my-6" />
            <div>
               <!-- nav -->
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
     <?php include_once ('footer.php') ?>
      <!-- Javascript-->
      <!-- Libs JS -->
      <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

      <!-- Theme JS -->
      <script src="../assets/js/theme.min.js"></script>
   </body>


</html>

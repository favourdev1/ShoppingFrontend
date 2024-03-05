<!DOCTYPE html>
<html lang="en">
   

   
<?php
$pageName = "Shipping Info - Sosmart Online shopping and more";
include_once('header.php')
   ?>

<body>
    <!-- navbar -->
    <?php include_once('php/profile/fetchAll.php'); ?>
    <?php include_once('php/address/fetchAll.php'); ?>
        <?php include_once('php/category/fetchAll.php'); ?>
        <?php include_once('php/cart/fetchAll.php') ?>
        <?php include_once('navbar.php') ?>
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
                              <!-- nav link -->
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
                              <a class="nav-link active" href="account-address.php">
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
                              <a class="nav-link" href="account-notification.php">
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
                        <div class="d-flex justify-content-between mb-6">
                           <!-- heading -->
                           <h2 class="mb-0">Address</h2>
                           <!-- button -->
                           <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addAddressModal">Add a new address</a>
                        </div>
                        
                        



                                    <!-- Addresses  Section  -->
                                    <div
                                            id="flush-collapseOne"
                                            class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionFlushExample"
                                        >
                                            <div class="mt-5">
                                                <div class="row">
                                                    <div class=" col-12 mb-4">
                                                        <!-- form -->
                                                        <?php 
                                                      
                                                        if(count($allAddresses)<1){?>

                                                        <div class=" text-center alert alert-warning rounded-3  p-6">
                                                            No address added
                                                        </div>

                                                        <?php }else{?>
                                                        <?php foreach ($allAddresses as $address){?>


                                                        <div class="d-flex align-items-center border rounded-3  p-6 mt-2">
                                                            <div class="form-check mb-4">
                                                                <input
                                                                    class="form-check-input"
                                                                    type="radio"
                                                                    name="flexRadioDefault"
                                                                    id="homeRadio"
                                                                    checked
                                                                />
                                                                <!-- <label class="form-check-label text-dark" for="homeRadio">Home</label> -->
                                                            </div>
                                                            <!-- address -->
                                                            <div class="col">


                                                                <address class="my-0">
                                                                    <strong><?=$address['firstname']." ".$address['lastname']?></strong>
                                                                    <br>

                                                                    <?=$address['delivery_address'].","?>

                                                                    <br>
                                                                    <?=$address['city']." ".$address['city'].","?>



                                                                    <abbr title="Phone"> <?=$address['phone_number_1']?>
                                                                    </abbr>
                                                                </address>

                                                                <div class="d-flex mt-3 align-items-center">
                                                                <?php if($address['is_default']===true){?>
                                                                <span
                                                                    class="text-dark small rounded px-2"
                                                                    style="background:rgba(0,0,0,.1); width:max-content!important "
                                                                >Default address</span>

                                                                <?php }else{?>
<a href="#" class="btn btn-primary text-white rounded py-1 px-3 small me-2"  > set as default </a>
<a href="#" class="btn btn-secondary text-white rounded py-1 px-3 small me-2"  > Update Address </a>

<a href="#" class="btn btn-danger text-white rounded py-1 px-3 small me-2"  >Delete Address </a>

                                                              <?php   } ?>
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <?php }}?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <!-- Modal -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <!-- modal content -->
            <div class="modal-content">
               <!-- modal header -->
               <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Delete address</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <!-- modal body -->
               <div class="modal-body">
                  <h6>Are you sure you want to delete this address?</h6>
                  <p class="mb-6">
                     Jitu Chauhan
                     <br />

                     4450 North Avenue Oakland,
                     <br />

                     Nebraska, United States,
                     <br />

                     402-776-1106
                  </p>
               </div>
               <!-- modal footer -->
               <div class="modal-footer">
                  <!-- btn -->
                  <button type="button" class="btn btn-outline-gray-400" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <?php include_once('components/shipping-modal.php') ?>





      <!-- footer -->
     <?php include_once('footer.php') ?>
      <!-- Javascript-->
      <!-- Libs JS -->
      <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

      <!-- Theme JS -->
      <script src="../assets/js/theme.min.js"></script>
   </body>


</html>

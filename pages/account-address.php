<!DOCTYPE html>
<html lang="en">
   

   
<?php 
$pageName="Shipping Info - Sosmart Online shopping and more";
include_once('header.php')
?>

<body>
    <!-- navbar -->
    <?php include_once('navbar.php')?>
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

      <!-- OffCart Canvas -->
      <?php include_once('offcart.php')?>



      <!-- Modal -->
      <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-6">
                  <div class="d-flex justify-content-between align-items-start">
                     <div>
                        <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                        <p class="mb-0 small">Enter your address and we will specify the offer you area.</p>
                     </div>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="my-5">
                     <input type="search" class="form-control" placeholder="Search your area" />
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <h6 class="mb-0">Select Location</h6>
                     <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>
                  </div>
                  <div>
                     <div data-simplebar style="height: 300px">
                        <div class="list-group list-group-flush">
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                              <span>Alabama</span>
                              <span>Min:$20</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Alaska</span>
                              <span>Min:$30</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Arizona</span>
                              <span>Min:$50</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>California</span>
                              <span>Min:$29</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Colorado</span>
                              <span>Min:$80</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Florida</span>
                              <span>Min:$90</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Arizona</span>
                              <span>Min:$50</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>California</span>
                              <span>Min:$29</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Colorado</span>
                              <span>Min:$80</span>
                           </a>
                           <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                              <span>Florida</span>
                              <span>Min:$90</span>
                           </a>
                        </div>
                     </div>
                  </div>
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
                              <a class="nav-link" href="../index.php">
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
                        <div class="row">
                           <!-- col -->
                           <div class="col-lg-5 col-xxl-4 col-12 mb-4">
                              <!-- form -->
                              <div class="card">
                                 <div class="card-body p-6">
                                    <div class="form-check mb-4">
                                       <input class="form-check-input" type="radio" name="flexRadioDefault" id="homeRadio" checked />
                                       <label class="form-check-label text-dark fw-semibold" for="homeRadio">Home</label>
                                    </div>
                                    <!-- address -->
                                    <p class="mb-6">
                                       Jitu Chauhan
                                       <br />

                                       4450 North Avenue Oakland,
                                       <br />

                                       Nebraska, United States,
                                       <br />

                                       402-776-1106
                                    </p>
                                    <!-- btn -->
                                    <a href="#" class="btn btn-info btn-sm">Default address</a>
                                    <div class="mt-4">
                                       <a href="#" class="text-inherit">Edit</a>
                                       <a href="#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-5 col-xxl-4 col-12 mb-4">
                              <!-- input -->
                              <div class="card">
                                 <div class="card-body p-6">
                                    <div class="form-check mb-4">
                                       <input class="form-check-input" type="radio" name="flexRadioDefault" id="officeRadio" />
                                       <label class="form-check-label text-dark fw-semibold" for="officeRadio">Office</label>
                                    </div>
                                    <!-- nav item -->
                                    <p class="mb-6">
                                       Nitu Chauhan
                                       <br />

                                       3853 Coal Road
                                       <br />

                                       Tannersville, Pennsylvania, 18372, United States
                                       <br />

                                       402-776-1106
                                    </p>
                                    <!-- link -->
                                    <a href="#" class="link-primary">Set as Default</a>
                                    <div class="mt-4">
                                       <a href="#" class="text-inherit">Edit</a>
                                       <!-- btn -->
                                       <a href="#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                                    </div>
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
      <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <!-- modal content -->
            <div class="modal-content">
               <!-- modal body -->
               <div class="modal-body p-6">
                  <div class="d-flex justify-content-between mb-5">
                     <div>
                        <!-- heading -->
                        <h5 class="mb-1" id="addAddressModalLabel">New Shipping Address</h5>
                        <p class="small mb-0">Add new shipping address for your order delivery.</p>
                     </div>
                     <div>
                        <!-- button -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row g-3">
                     <!-- col -->
                     <div class="col-12">
                        <!-- input -->
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" required="" />
                     </div>
                     <!-- col -->
                     <div class="col-12">
                        <!-- input -->
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required="" />
                     </div>
                     <!-- col -->
                     <div class="col-12">
                        <!-- input -->
                        <input type="text" class="form-control" placeholder="Address Line 1" />
                     </div>
                     <!-- col -->
                     <div class="col-12">
                        <!-- input -->
                        <input type="text" class="form-control" placeholder="Address Line 2" />
                     </div>
                     <!-- col -->
                     <div class="col-12">
                        <!-- input -->
                        <input type="text" class="form-control" placeholder="City" />
                     </div>
                     <!-- col -->
                     <div class="col-12">
                        <!-- form select -->
                        <select class="form-select">
                           <option selected="">India</option>
                           <option value="1">UK</option>
                           <option value="2">USA</option>
                           <option value="3">UAE</option>
                        </select>
                     </div>
                     <!-- col -->
                     <div class="col-12">
                        <!-- form select -->
                        <select class="form-select">
                           <option selected="">Gujarat</option>
                           <option value="1">Northern Ireland</option>
                           <option value="2">Alaska</option>
                           <option value="3">Abu Dhabi</option>
                        </select>
                     </div>
                     <!-- col -->
                     <div class="col-12">
                        <!-- input -->
                        <input type="text" class="form-control" placeholder="Zip Code" />
                     </div>
                     <!-- col -->
                     <div class="col-12">
                        <!-- input -->
                        <input type="text" class="form-control" placeholder="Business Name" />
                     </div>
                     <!-- col -->
                     <div class="col-12">
                        <!-- form check -->
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                           <label class="form-check-label" for="flexCheckDefault">Set as Default</label>
                        </div>
                     </div>
                     <!-- col -->
                     <div class="col-12 text-end">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="button">Save Address</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- modal -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
         <!-- offcanvac header -->
         <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <!-- offcanvac body -->
         <div class="offcanvas-body">
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
     <?php include_once('footer.php')?>
      <!-- Javascript-->
      <!-- Libs JS -->
      <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

      <!-- Theme JS -->
      <script src="../assets/js/theme.min.js"></script>
   </body>


</html>

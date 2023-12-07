<!DOCTYPE html>
<html lang="en">
   
   
<?php 
$pageName="Orders - Sosmart Online shopping and more";
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
                              <a class="nav-link active" aria-current="page" href="account-orders.php">
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
                        <!-- heading -->
                        <h2 class="mb-6">Your Orders</h2>

                        <div class="table-responsive-xxl border-0">
                           <!-- Table -->
                           <table class="table mb-0 text-nowrap table-centered">
                              <!-- Table Head -->
                              <thead class="bg-light">
                                 <tr>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Items</th>
                                    <th>Status</th>
                                    <th>Amount</th>

                                    <th></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <!-- Table body -->
                                 <tr>
                                    <td class="align-middle border-top-0 w-0">
                                       <a href="#"><img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="fw-semibold text-inherit">
                                          <h6 class="mb-0">Haldiram's Nagpur Aloo Bhujia</h6>
                                       </a>
                                       <span><small class="text-muted">400g</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="text-inherit">#14899</a>
                                    </td>
                                    <td class="align-middle border-top-0">March 5, 2023</td>
                                    <td class="align-middle border-top-0">1</td>
                                    <td class="align-middle border-top-0">
                                       <span class="badge bg-warning">Processing</span>
                                    </td>
                                    <td class="align-middle border-top-0">$15.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                       <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="align-middle border-top-0 w-0">
                                       <a href="#"><img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="fw-semibold text-inherit">
                                          <h6 class="mb-0">Nutri Choise Biscuit</h6>
                                       </a>
                                       <span><small class="text-muted">2 Pkt</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="text-inherit">#14658</a>
                                    </td>
                                    <td class="align-middle border-top-0">July 9, 2023</td>
                                    <td class="align-middle border-top-0">2</td>
                                    <td class="align-middle border-top-0">
                                       <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td class="align-middle border-top-0">$45.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                       <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="align-middle border-top-0 w-0">
                                       <a href="#"><img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="text-inherit">
                                          <h6 class="mb-0">Cadbury Dairy Milk 5 Star Bites</h6>
                                          <span><small class="text-muted">202 g</small></span>
                                       </a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="text-inherit">#13778</a>
                                    </td>
                                    <td class="align-middle border-top-0">Oct 03, 2023</td>
                                    <td class="align-middle border-top-0">4</td>
                                    <td class="align-middle border-top-0">
                                       <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td class="align-middle border-top-0">$99.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                       <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="align-middle border-top-0 w-0">
                                       <a href="#"><img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="fw-semibold text-inherit">
                                          <h6 class="mb-0">Onion Flavour Potato</h6>
                                       </a>
                                       <span><small class="text-muted">100 g</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="text-inherit">#13746</a>
                                    </td>
                                    <td class="align-middle border-top-0">March 5, 2023</td>
                                    <td class="align-middle border-top-0">1</td>
                                    <td class="align-middle border-top-0">
                                       <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td class="align-middle border-top-0">$12.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                       <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="align-middle border-top-0 w-0">
                                       <a href="#"><img src="../assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="fw-semibold text-inherit">
                                          <h6 class="mb-0">Salted Instant Popcorn</h6>
                                       </a>
                                       <span><small class="text-muted">500 g</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="text-inherit">#13566</a>
                                    </td>
                                    <td class="align-middle border-top-0">July 9, 2023</td>
                                    <td class="align-middle border-top-0">2</td>
                                    <td class="align-middle border-top-0">
                                       <span class="badge bg-danger">Cancel</span>
                                    </td>
                                    <td class="align-middle border-top-0">$6.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                       <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="align-middle border-top-0 w-0">
                                       <a href="#"><img src="../assets/images/products/product-img-6.jpg" alt="Ecommerce" class="icon-shape icon-xl" /></a>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="fw-semibold text-inherit">
                                          <h6 class="mb-0">Blueberry Greek Yogurt</h6>
                                       </a>
                                       <span><small class="text-muted">500 g</small></span>
                                    </td>
                                    <td class="align-middle border-top-0">
                                       <a href="#" class="text-inherit">#12094</a>
                                    </td>
                                    <td class="align-middle border-top-0">Oct 03, 2023</td>
                                    <td class="align-middle border-top-0">4</td>
                                    <td class="align-middle border-top-0">
                                       <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td class="align-middle border-top-0">$18.00</td>
                                    <td class="text-muted align-middle border-top-0">
                                       <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <!-- modal -->

      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
         <!-- offcanvas header -->
         <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <!-- offcanvas body -->
         <div class="offcanvas-body">
            <ul class="nav flex-column nav-pills nav-pills-dark">
               <!-- nav item -->
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="account-orders.php">
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
                  <a class="nav-link" href="account-notification.php">
                     <i class="feather-icon icon-bell me-2"></i>
                     Notification
                  </a>
               </li>
            </ul>
            <hr class="my-6" />
            <div>
               <!-- nav  -->
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

<!-- Mirrored from freshcart.codescandy.com/pages/account-orders.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 01:18:01 GMT -->
</html>

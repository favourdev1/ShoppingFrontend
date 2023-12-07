<!DOCTYPE html>
<html lang="en">
   
<?php include_once('header.php')?>

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

      <!-- Shop Cart -->

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
         <div class="offcanvas-header border-bottom">
            <div class="text-start">
               <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
               <small>Location in 382480</small>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <div>
               <!-- alert -->
               <div class="alert alert-danger p-2" role="alert">
                  You’ve got FREE delivery. Start
                  <a href="#!" class="alert-link">checkout now!</a>
               </div>
               <ul class="list-group list-group-flush">
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0 border-top">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                 </a>
                                 <span><small class="text-muted">.98 / lb</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$5.00</span>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">NutriChoice Digestive</h6>
                                 </a>
                                 <span><small class="text-muted">250g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold text-danger">$20.00</span>
                           <div class="text-decoration-line-through text-muted small">$26.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                 </a>
                                 <span><small class="text-muted">1 kg</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Onion Flavour Potato</h6>
                                 </a>
                                 <span><small class="text-muted">250g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                     </div>
                  </li>
                  <!-- list group -->
                  <li class="list-group-item py-3 ps-0 border-bottom">
                     <!-- row -->
                     <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-lg-7">
                           <div class="d-flex">
                              <img src="../assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                              <div class="ms-3">
                                 <!-- title -->
                                 <a href="shop-single.html" class="text-inherit">
                                    <h6 class="mb-0">Salted Instant Popcorn</h6>
                                 </a>
                                 <span><small class="text-muted">100g</small></span>
                                 <!-- text -->
                                 <div class="mt-2 small lh-1">
                                    <a href="#!" class="text-decoration-none text-inherit">
                                       <span class="me-1 align-text-bottom">
                                          <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="14"
                                             height="14"
                                             viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 text-success">
                                             <polyline points="3 6 5 6 21 6"></polyline>
                                             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                             <line x1="10" y1="11" x2="10" y2="17"></line>
                                             <line x1="14" y1="11" x2="14" y2="17"></line>
                                          </svg>
                                       </span>
                                       <span class="text-muted">Remove</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- input group -->
                        <div class="col-4 col-md-3 col-lg-3">
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                           <span class="fw-bold">$15.00</span>
                           <div class="text-decoration-line-through text-muted small">$25.00</div>
                        </div>
                     </div>
                  </li>
               </ul>
               <!-- btn -->
               <div class="d-flex justify-content-between mt-4">
                  <a href="#!" class="btn btn-primary">Continue Shopping</a>
                  <a href="#!" class="btn btn-dark">Update Cart</a>
               </div>
            </div>
         </div>
      </div>

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
         <div class="mt-4">
            <div class="container">
               <!-- row -->
               <div class="row">
                  <!-- col -->
                  <div class="col-12">
                     <!-- breadcrumb -->
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item"><a href="#">Bakery Biscuits</a></li>

                           <li class="breadcrumb-item active" aria-current="page">Napolitanke Ljesnjak</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <section class="mt-8">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <!-- img slide -->
                     <div class="product" id="product">
                        <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-1.jpg)">
                           <!-- img -->
                           <!-- img -->
                           <img src="../assets/images/products/product-single-img-1.jpg" alt="" />
                        </div>
                        <div>
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-2.jpg)">
                              <!-- img -->
                              <img src="../assets/images/products/product-single-img-2.jpg" alt="" />
                           </div>
                        </div>
                        <div>
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-3.jpg)">
                              <!-- img -->
                              <img src="../assets/images/products/product-single-img-3.jpg" alt="" />
                           </div>
                        </div>
                        <div>
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-4.jpg)">
                              <!-- img -->
                              <img src="../assets/images/products/product-single-img-4.jpg" alt="" />
                           </div>
                        </div>
                     </div>
                     <!-- product tools -->
                     <div class="product-tools">
                        <div class="thumbnails row g-3" id="productThumbnails">
                           <div class="col-3">
                              <div class="thumbnails-img">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-1.jpg" alt="" />
                              </div>
                           </div>
                           <div class="col-3">
                              <div class="thumbnails-img">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-2.jpg" alt="" />
                              </div>
                           </div>
                           <div class="col-3">
                              <div class="thumbnails-img">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-3.jpg" alt="" />
                              </div>
                           </div>
                           <div class="col-3">
                              <div class="thumbnails-img">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-4.jpg" alt="" />
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="ps-lg-10 mt-6 mt-md-0">
                        <!-- content -->
                        <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
                        <!-- heading -->
                        <h1 class="mb-1">Napolitanke Ljesnjak</h1>
                        <div class="mb-4">
                           <!-- rating -->
                           <!-- rating -->
                           <small class="text-warning">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <a href="#" class="ms-2">(30 reviews)</a>
                        </div>
                        <div class="fs-4">
                           <!-- price -->
                           <span class="fw-bold text-dark">$32</span>
                           <span class="text-decoration-line-through text-muted">$35</span>
                           <span><small class="fs-6 ms-2 text-danger">26% Off</small></span>
                        </div>
                        <!-- hr -->
                        <hr class="my-6" />
                        <div class="mb-5">
                           <button type="button" class="btn btn-outline-secondary">250g</button>
                           <!-- btn -->
                           <button type="button" class="btn btn-outline-secondary">500g</button>
                           <!-- btn -->
                           <button type="button" class="btn btn-outline-secondary">1kg</button>
                        </div>
                        <div>
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <div class="mt-3 row justify-content-start g-2 align-items-center">
                           <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                              <!-- button -->
                              <!-- btn -->
                              <button type="button" class="btn btn-primary">
                                 <i class="feather-icon icon-shopping-bag me-2"></i>
                                 Add to cart
                              </button>
                           </div>
                           <div class="col-md-4 col-4">
                              <!-- btn -->
                              <a class="btn btn-light" href="#" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              <a class="btn btn-light" href="shop-wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                           </div>
                        </div>
                        <!-- hr -->
                        <hr class="my-6" />
                        <div>
                           <!-- table -->
                           <table class="table table-borderless mb-0">
                              <tbody>
                                 <tr>
                                    <td>Product Code:</td>
                                    <td>FBB00255</td>
                                 </tr>
                                 <tr>
                                    <td>Availability:</td>
                                    <td>In Stock</td>
                                 </tr>
                                 <tr>
                                    <td>Type:</td>
                                    <td>Fruits</td>
                                 </tr>
                                 <tr>
                                    <td>Shipping:</td>
                                    <td>
                                       <small>
                                          01 day shipping.
                                          <span class="text-muted">( Free pickup today)</span>
                                       </small>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="mt-8">
                           <!-- dropdown -->
                           <div class="dropdown">
                              <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Share</a>

                              <ul class="dropdown-menu">
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="bi bi-facebook me-2"></i>
                                       Facebook
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="bi bi-twitter me-2"></i>
                                       Twitter
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="bi bi-instagram me-2"></i>
                                       Instagram
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="mt-lg-14 mt-8">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
                        <!-- nav item -->
                        <li class="nav-item" role="presentation">
                           <!-- btn -->
                           <button
                              class="nav-link active"
                              id="product-tab"
                              data-bs-toggle="tab"
                              data-bs-target="#product-tab-pane"
                              type="button"
                              role="tab"
                              aria-controls="product-tab-pane"
                              aria-selected="true">
                              Product Details
                           </button>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item" role="presentation">
                           <!-- btn -->
                           <button
                              class="nav-link"
                              id="details-tab"
                              data-bs-toggle="tab"
                              data-bs-target="#details-tab-pane"
                              type="button"
                              role="tab"
                              aria-controls="details-tab-pane"
                              aria-selected="false">
                              Information
                           </button>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item" role="presentation">
                           <!-- btn -->
                           <button
                              class="nav-link"
                              id="reviews-tab"
                              data-bs-toggle="tab"
                              data-bs-target="#reviews-tab-pane"
                              type="button"
                              role="tab"
                              aria-controls="reviews-tab-pane"
                              aria-selected="false">
                              Reviews
                           </button>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item" role="presentation">
                           <!-- btn -->
                           <button
                              class="nav-link"
                              id="sellerInfo-tab"
                              data-bs-toggle="tab"
                              data-bs-target="#sellerInfo-tab-pane"
                              type="button"
                              role="tab"
                              aria-controls="sellerInfo-tab-pane"
                              aria-selected="false"
                              disabled>
                              Seller Info
                           </button>
                        </li>
                     </ul>
                     <!-- tab content -->
                     <div class="tab-content" id="myTabContent">
                        <!-- tab pane -->
                        <div class="tab-pane fade show active" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab" tabindex="0">
                           <div class="my-8">
                              <div class="mb-5">
                                 <!-- text -->
                                 <h4 class="mb-1">Nutrient Value & Benefits</h4>
                                 <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc
                                    sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus adipiscing sagittis sed. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.
                                 </p>
                              </div>
                              <div class="mb-5">
                                 <h5 class="mb-1">Storage Tips</h5>
                                 <p class="mb-0">
                                    Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus
                                    facilisis ante ipsum netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                 </p>
                              </div>
                              <!-- content -->
                              <div class="mb-5">
                                 <h5 class="mb-1">Unit</h5>
                                 <p class="mb-0">3 units</p>
                              </div>
                              <div class="mb-5">
                                 <h5 class="mb-1">Seller</h5>
                                 <p class="mb-0">DMart Pvt. LTD</p>
                              </div>
                              <div>
                                 <h5 class="mb-1">Disclaimer</h5>
                                 <p class="mb-0">
                                    Image shown is a representation and may slightly vary from the actual product. Every effort is made to maintain accuracy of all information displayed.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <!-- tab pane -->
                        <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                           <div class="my-8">
                              <div class="row">
                                 <div class="col-12">
                                    <h4 class="mb-4">Details</h4>
                                 </div>
                                 <div class="col-12 col-lg-6">
                                    <table class="table table-striped">
                                       <!-- table -->
                                       <tbody>
                                          <tr>
                                             <th>Weight</th>
                                             <td>1000 Grams</td>
                                          </tr>
                                          <tr>
                                             <th>Ingredient Type</th>
                                             <td>Vegetarian</td>
                                          </tr>
                                          <tr>
                                             <th>Brand</th>
                                             <td>Dmart</td>
                                          </tr>
                                          <tr>
                                             <th>Item Package Quantity</th>
                                             <td>1</td>
                                          </tr>
                                          <tr>
                                             <th>Form</th>
                                             <td>Larry the Bird</td>
                                          </tr>
                                          <tr>
                                             <th>Manufacturer</th>
                                             <td>Dmart</td>
                                          </tr>
                                          <tr>
                                             <th>Net Quantity</th>
                                             <td>340.0 Gram</td>
                                          </tr>
                                          <tr>
                                             <th>Product Dimensions</th>
                                             <td>9.6 x 7.49 x 18.49 cm</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="col-12 col-lg-6">
                                    <table class="table table-striped">
                                       <!-- table -->
                                       <tbody>
                                          <tr>
                                             <th>ASIN</th>
                                             <td>SB0025UJ75W</td>
                                          </tr>
                                          <tr>
                                             <th>Best Sellers Rank</th>
                                             <td>#2 in Fruits</td>
                                          </tr>
                                          <tr>
                                             <th>Date First Available</th>
                                             <td>30 April 2022</td>
                                          </tr>
                                          <tr>
                                             <th>Item Weight</th>
                                             <td>500g</td>
                                          </tr>
                                          <tr>
                                             <th>Generic Name</th>
                                             <td>Banana Robusta</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- tab pane -->
                        <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
                           <div class="my-8">
                              <!-- row -->
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="me-lg-12 mb-6 mb-md-0">
                                       <div class="mb-5">
                                          <!-- title -->
                                          <h4 class="mb-3">Customer reviews</h4>
                                          <span>
                                             <!-- rating -->
                                             <small class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                             </small>
                                             <span class="ms-3">4.1 out of 5</span>
                                             <small class="ms-3">11,130 global ratings</small>
                                          </span>
                                       </div>
                                       <div class="mb-8">
                                          <!-- progress -->
                                          <div class="d-flex align-items-center mb-2">
                                             <div class="text-nowrap me-3 text-muted">
                                                <span class="d-inline-block align-middle text-muted">5</span>
                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                             </div>
                                             <div class="w-100">
                                                <div class="progress" style="height: 6px">
                                                   <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                             </div>
                                             <span class="text-muted ms-3">53%</span>
                                          </div>
                                          <!-- progress -->
                                          <div class="d-flex align-items-center mb-2">
                                             <div class="text-nowrap me-3 text-muted">
                                                <span class="d-inline-block align-middle text-muted">4</span>
                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                             </div>
                                             <div class="w-100">
                                                <div class="progress" style="height: 6px">
                                                   <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                                                </div>
                                             </div>
                                             <span class="text-muted ms-3">22%</span>
                                          </div>
                                          <!-- progress -->
                                          <div class="d-flex align-items-center mb-2">
                                             <div class="text-nowrap me-3 text-muted">
                                                <span class="d-inline-block align-middle text-muted">3</span>
                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                             </div>
                                             <div class="w-100">
                                                <div class="progress" style="height: 6px">
                                                   <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="35"></div>
                                                </div>
                                             </div>
                                             <span class="text-muted ms-3">14%</span>
                                          </div>
                                          <!-- progress -->
                                          <div class="d-flex align-items-center mb-2">
                                             <div class="text-nowrap me-3 text-muted">
                                                <span class="d-inline-block align-middle text-muted">2</span>
                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                             </div>
                                             <div class="w-100">
                                                <div class="progress" style="height: 6px">
                                                   <div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="22"></div>
                                                </div>
                                             </div>
                                             <span class="text-muted ms-3">5%</span>
                                          </div>
                                          <!-- progress -->
                                          <div class="d-flex align-items-center mb-2">
                                             <div class="text-nowrap me-3 text-muted">
                                                <span class="d-inline-block align-middle text-muted">1</span>
                                                <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                             </div>
                                             <div class="w-100">
                                                <div class="progress" style="height: 6px">
                                                   <div class="progress-bar bg-warning" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="14"></div>
                                                </div>
                                             </div>
                                             <span class="text-muted ms-3">7%</span>
                                          </div>
                                       </div>
                                       <div class="d-grid">
                                          <h4>Review this product</h4>
                                          <p class="mb-0">Share your thoughts with other customers.</p>
                                          <a href="#" class="btn btn-outline-gray-400 mt-4 text-muted">Write the Review</a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- col -->
                                 <div class="col-md-8">
                                    <div class="mb-10">
                                       <div class="d-flex justify-content-between align-items-center mb-8">
                                          <div>
                                             <!-- heading -->
                                             <h4>Reviews</h4>
                                          </div>
                                          <div>
                                             <select class="form-select">
                                                <option selected>Top Reviews</option>
                                                <option value="Most Recent">Most Recent</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="d-flex border-bottom pb-6 mb-6">
                                          <!-- img -->
                                          <!-- img -->
                                          <img src="../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-lg" />
                                          <div class="ms-5">
                                             <h6 class="mb-1">Shankar Subbaraman</h6>
                                             <!-- select option -->
                                             <!-- content -->
                                             <p class="small">
                                                <span class="text-muted">30 December 2022</span>
                                                <span class="text-primary ms-3 fw-bold">Verified Purchase</span>
                                             </p>
                                             <!-- rating -->
                                             <div class="mb-2">
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                                             </div>
                                             <!-- text-->
                                             <p>
                                                Product quality is good. But, weight seemed less than 1kg. Since it is being sent in open package, there is a possibility of pilferage in between.
                                                FreshCart sends the veggies and fruits through sealed plastic covers and Barcode on the weight etc. .
                                             </p>
                                             <div>
                                                <div class="border icon-shape icon-lg border-2">
                                                   <!-- img -->
                                                   <img src="../assets/images/products/product-img-1.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="border icon-shape icon-lg border-2 ms-1">
                                                   <!-- img -->
                                                   <img src="../assets/images/products/product-img-2.jpg" alt="" class="img-fluid" />
                                                </div>
                                                <div class="border icon-shape icon-lg border-2 ms-1">
                                                   <!-- img -->
                                                   <img src="../assets/images/products/product-img-3.jpg" alt="" class="img-fluid" />
                                                </div>
                                             </div>
                                             <!-- icon -->
                                             <div class="d-flex justify-content-end mt-4">
                                                <a href="#" class="text-muted">
                                                   <i class="feather-icon icon-thumbs-up me-1"></i>
                                                   Helpful
                                                </a>
                                                <a href="#" class="text-muted ms-4">
                                                   <i class="feather-icon icon-flag me-2"></i>
                                                   Report abuse
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                          <!-- img -->
                                          <img src="../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle avatar-lg" />
                                          <div class="ms-5">
                                             <h6 class="mb-1">Robert Thomas</h6>
                                             <!-- content -->
                                             <p class="small">
                                                <span class="text-muted">29 December 2022</span>
                                                <span class="text-primary ms-3 fw-bold">Verified Purchase</span>
                                             </p>
                                             <!-- rating -->
                                             <div class="mb-2">
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star text-warning"></i>
                                                <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                                             </div>

                                             <p>
                                                Product quality is good. But, weight seemed less than 1kg. Since it is being sent in open package, there is a possibility of pilferage in between.
                                                FreshCart sends the veggies and fruits through sealed plastic covers and Barcode on the weight etc. .
                                             </p>

                                             <!-- icon -->
                                             <div class="d-flex justify-content-end mt-4">
                                                <a href="#" class="text-muted">
                                                   <i class="feather-icon icon-thumbs-up me-1"></i>
                                                   Helpful
                                                </a>
                                                <a href="#" class="text-muted ms-4">
                                                   <i class="feather-icon icon-flag me-2"></i>
                                                   Report abuse
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                          <!-- img -->
                                          <img src="../assets/images/avatar/avatar-9.jpg" alt="" class="rounded-circle avatar-lg" />
                                          <div class="ms-5">
                                             <h6 class="mb-1">Barbara Tay</h6>
                                             <!-- content -->
                                             <p class="small">
                                                <span class="text-muted">28 December 2022</span>
                                                <span class="text-danger ms-3 fw-bold">Unverified Purchase</span>
                                             </p>
                                             <!-- rating -->
                                             <div class="mb-2">
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star text-warning"></i>
                                                <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                                             </div>

                                             <p>Everytime i ordered from fresh i got greenish yellow bananas just like i wanted so go for it , its happens very rare that u get over riped ones.</p>

                                             <!-- icon -->
                                             <div class="d-flex justify-content-end mt-4">
                                                <a href="#" class="text-muted">
                                                   <i class="feather-icon icon-thumbs-up me-1"></i>
                                                   Helpful
                                                </a>
                                                <a href="#" class="text-muted ms-4">
                                                   <i class="feather-icon icon-flag me-2"></i>
                                                   Report abuse
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                          <!-- img -->
                                          <img src="../assets/images/avatar/avatar-8.jpg" alt="" class="rounded-circle avatar-lg" />
                                          <div class="ms-5 flex-grow-1">
                                             <h6 class="mb-1">Sandra Langevin</h6>
                                             <!-- content -->
                                             <p class="small">
                                                <span class="text-muted">8 December 2022</span>
                                                <span class="text-danger ms-3 fw-bold">Unverified Purchase</span>
                                             </p>
                                             <!-- rating -->
                                             <div class="mb-2">
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star text-warning"></i>
                                                <span class="ms-3 text-dark fw-bold">Great product</span>
                                             </div>

                                             <p>Great product & package. Delivery can be expedited.</p>

                                             <!-- icon -->
                                             <div class="d-flex justify-content-end mt-4">
                                                <a href="#" class="text-muted">
                                                   <i class="feather-icon icon-thumbs-up me-1"></i>
                                                   Helpful
                                                </a>
                                                <a href="#" class="text-muted ms-4">
                                                   <i class="feather-icon icon-flag me-2"></i>
                                                   Report abuse
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <div>
                                          <a href="#" class="btn btn-outline-gray-400 text-muted">Read More Reviews</a>
                                       </div>
                                    </div>
                                    <div>
                                       <!-- rating -->
                                       <h3 class="mb-5">Create Review</h3>
                                       <div class="border-bottom py-4 mb-4">
                                          <h4 class="mb-3">Overall rating</h4>
                                          <div class="rater"></div>
                                       </div>
                                       <div class="border-bottom py-4 mb-4">
                                          <h4 class="mb-0">Rate Features</h4>
                                          <div class="my-5">
                                             <h5>Flavor</h5>
                                             <div class="rater"></div>
                                          </div>
                                          <div class="my-5">
                                             <h5>Value for money</h5>
                                             <div class="rater"></div>
                                          </div>
                                          <div class="my-5">
                                             <h5>Scent</h5>
                                             <div class="rater"></div>
                                          </div>
                                       </div>
                                       <!-- form control -->
                                       <div class="border-bottom py-4 mb-4">
                                          <h5>Add a headline</h5>
                                          <input type="text" class="form-control" placeholder="What’s most important to know" />
                                       </div>
                                       <div class="border-bottom py-4 mb-4">
                                          <h5>Add a photo or video</h5>
                                          <p>Shoppers find images and videos more helpful than text alone.</p>

                                          <div id="my-dropzone" class="dropzone mt-4 border-dashed rounded-2 min-h-0"></div>
                                       </div>
                                       <div class="py-4 mb-4">
                                          <!-- heading -->
                                          <h5>Add a written review</h5>
                                          <textarea class="form-control" rows="3" placeholder="What did you like or dislike? What did you use this product for?"></textarea>
                                       </div>
                                       <!-- button -->
                                       <div class="d-flex justify-content-end">
                                          <a href="#" class="btn btn-primary">Submit Review</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- tab pane -->
                        <div class="tab-pane fade" id="sellerInfo-tab-pane" role="tabpanel" aria-labelledby="sellerInfo-tab" tabindex="0">...</div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!-- section -->
         <section class="my-lg-14 my-14">
            <div class="container">
               <!-- row -->
               <div class="row">
                  <div class="col-12">
                     <!-- heading -->
                     <h3>Related Items</h3>
                  </div>
               </div>
               <!-- row -->
               <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
                  <!-- col -->
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <!-- badge -->

                           <div class="text-center position-relative">
                              <div class="position-absolute top-0 start-0">
                                 <span class="badge bg-danger">Sale</span>
                              </div>
                              <a href="#!">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                              </a>
                              <!-- action btn -->
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <!-- heading -->
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                           </div>
                           <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                           <div>
                              <!-- rating -->
                              <small class="text-warning">
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <span class="text-muted small">4.5(149)</span>
                           </div>
                           <!-- price -->
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$18</span>
                                 <span class="text-decoration-line-through text-muted">$24</span>
                              </div>
                              <!-- btn -->
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- col -->
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <!-- badge -->
                           <div class="text-center position-relative">
                              <a href="#!"><img src="../assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <!-- action btn -->
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <!-- heading -->
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                           </div>
                           <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">NutriChoice Digestive</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <span class="text-muted small">4.5 (25)</span>
                           </div>
                           <!-- price -->
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div><span class="text-dark">$24</span></div>
                              <!-- btn -->
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- col -->
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <!-- badge -->
                           <div class="text-center position-relative">
                              <a href="#!"><img src="../assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <!-- action btn -->
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <!-- heading -->
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                           </div>
                           <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Cadbury 5 Star Chocolate</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                              </small>
                              <span class="text-muted small">5 (469)</span>
                           </div>
                           <!-- price -->
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$32</span>
                                 <span class="text-decoration-line-through text-muted">$35</span>
                              </div>
                              <!-- btn -->
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- col -->
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <!-- badge -->
                           <div class="text-center position-relative">
                              <a href="#!"><img src="../assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <!-- action btn -->
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <!-- heading -->
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                           </div>
                           <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                                 <i class="bi bi-star"></i>
                              </small>
                              <span class="text-muted small">3.5 (456)</span>
                           </div>
                           <!-- price -->
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$3</span>
                                 <span class="text-decoration-line-through text-muted">$5</span>
                              </div>
                              <!-- btn -->
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- col -->
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <!-- badge -->
                           <div class="text-center position-relative">
                              <a href="#!"><img src="../assets/images/products/product-img-9.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                              <!-- action btn -->
                              <div class="card-product-action">
                                 <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                 </a>
                                 <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                 <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              </div>
                           </div>
                           <!-- heading -->
                           <div class="text-small mb-1">
                              <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                           </div>
                           <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">Slurrp Millet Chocolate</a></h2>
                           <div class="text-warning">
                              <small>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <span class="text-muted small">4.5 (67)</span>
                           </div>
                           <!-- price -->
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-dark">$6</span>
                                 <span class="text-decoration-line-through text-muted">$10</span>
                              </div>
                              <!-- btn -->
                              <div>
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
        <!-- footer -->
        <?php include_once('footer.php')?>

      <!-- modal -->
      <!-- Modal -->
      <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-body p-8">
                  <div class="position-absolute top-0 end-0 me-3 mt-3">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-1.jpg)">
                              <!-- img -->
                              <img src="../assets/images/products/product-single-img-1.jpg" alt="" />
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-2.jpg)">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-2.jpg" alt="" />
                              </div>
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-3.jpg)">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-3.jpg" alt="" />
                              </div>
                           </div>
                           <div>
                              <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-4.jpg)">
                                 <!-- img -->
                                 <img src="../assets/images/products/product-single-img-4.jpg" alt="" />
                              </div>
                           </div>
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                           <div class="thumbnails row g-3" id="productModalThumbnails">
                              <div class="col-3" class="tns-nav-active">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-1.jpg" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-2.jpg" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-3.jpg" alt="" />
                                 </div>
                              </div>
                              <div class="col-3">
                                 <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="../assets/images/products/product-single-img-4.jpg" alt="" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="ps-lg-8 mt-6 mt-lg-0">
                           <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
                           <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
                           <div class="mb-4">
                              <small class="text-warning">
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-fill"></i>
                                 <i class="bi bi-star-half"></i>
                              </small>
                              <a href="#" class="ms-2">(30 reviews)</a>
                           </div>
                           <div class="fs-4">
                              <span class="fw-bold text-dark">$32</span>
                              <span class="text-decoration-line-through text-muted">$35</span>
                              <span><small class="fs-6 ms-2 text-danger">26% Off</small></span>
                           </div>
                           <hr class="my-6" />
                           <div class="mb-4">
                              <button type="button" class="btn btn-outline-secondary">250g</button>
                              <button type="button" class="btn btn-outline-secondary">500g</button>
                              <button type="button" class="btn btn-outline-secondary">1kg</button>
                           </div>
                           <div>
                              <!-- input -->
                              <!-- input -->
                              <div class="input-group input-spinner">
                                 <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                 <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                 <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                              </div>
                           </div>
                           <div class="mt-3 row justify-content-start g-2 align-items-center">
                              <div class="col-lg-4 col-md-5 col-6 d-grid">
                                 <!-- button -->
                                 <!-- btn -->
                                 <button type="button" class="btn btn-primary">
                                    <i class="feather-icon icon-shopping-bag me-2"></i>
                                    Add to cart
                                 </button>
                              </div>
                              <div class="col-md-4 col-5">
                                 <!-- btn -->
                                 <a class="btn btn-light" href="#" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 <a class="btn btn-light" href="#!" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                              </div>
                           </div>
                           <hr class="my-6" />
                           <div>
                              <table class="table table-borderless">
                                 <tbody>
                                    <tr>
                                       <td>Product Code:</td>
                                       <td>FBB00255</td>
                                    </tr>
                                    <tr>
                                       <td>Availability:</td>
                                       <td>In Stock</td>
                                    </tr>
                                    <tr>
                                       <td>Type:</td>
                                       <td>Fruits</td>
                                    </tr>
                                    <tr>
                                       <td>Shipping:</td>
                                       <td>
                                          <small>
                                             01 day shipping.
                                             <span class="text-muted">( Free pickup today)</span>
                                          </small>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Javascript-->
      <script src="../assets/libs/rater-js/index.js"></script>
      <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
      <!-- Libs JS -->
      <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

      <!-- Theme JS -->
      <script src="../assets/js/theme.min.js"></script>

      <script src="../assets/js/vendors/jquery.min.js"></script>
      <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
      <script src="../assets/js/vendors/tns-slider.js"></script>
      <script src="../assets/js/vendors/zoom.js"></script>
      <script src="../assets/js/vendors/dropzone.js"></script>
   </body>

</html>

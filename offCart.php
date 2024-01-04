 <!-- Shop Cart -->

 <div
     class="offcanvas offcanvas-end"
     tabindex="-1"
     id="offcanvasRight"
     aria-labelledby="offcanvasRightLabel"
 >
     <div class="offcanvas-header border-bottom">
         <div class="text-start">
             <h5
                 id="offcanvasRightLabel"
                 class="mb-0 fs-4"
             >Cart items</h5>

         </div>
         <button
             type="button"
             class="btn-close text-reset"
             data-bs-dismiss="offcanvas"
             aria-label="Close"
         ></button>
     </div>
     <div class="offcanvas-body ">
         <div class="">
             <ul
                 class="list-group list-group-flush"
                 style="90% !important"
             >

                 <?php 
              if(!isset($cartItems) || count($cartItems)<1){?>

                 <div class="alert alert-secondary">
                     No item in cart
                 </div>
                 <?php     }else{  ?>

                 <?php foreach($cartItems as $cart){ ?>
                 <?php 

            $id = $cart['id'];
            $cartName = $cart['product_name'];
            $cartcategoryId = $cart['category_id'];
            $cartdescription = $cart['description'];
            $cartregularPrice = $cart['regular_price'];
            $cartbrand = $cart['brand'];
            $cartImg1 = $cart['product_img1'];
            $cartImg2 = $cart['product_img2'];
            $cartImg3 = $cart['product_img3'];
            $cartImg4 = $cart['product_img4'];
            $cartImg5 = $cart['product_img5'];
            $cartweight = $cart['weight'];
            $quantityInStock = $cart['quantity_in_stock'];
       $cartItemQuantity = $cart['quantity'];
            $cartSalesPrice = $cart['sales_price'];
           

?>
                 <li class="list-group-item py-3 ps-0 border-top">
                     <!-- row -->
                     <div class="row align-items-center">
                         <div class="col-6 col-md-6 col-lg-7">
                             <div class="d-flex">
                                 <img
                                     src="<?php echo $cartImg1 ?>"
                                     alt="
                                     Ecommerce"
                                     class="icon-shape icon-xxl"
                                 />
                                 <div class="ms-3">
                                     <!-- title -->
                                     <a
                                         href="shop-single.html"
                                         class="text-inherit"
                                     >
                                         <h6 class="mb-0"><?= $cartName ?></h6>
                                     </a>
                                     <span><small
                                             class="text-muted">.<?= $cartItemQuantity."x".CURRENCY.$cartSalesPrice ?></small></span>
                                     <!-- text -->
                                     <div class="mt-2 small lh-1">
                                         <a
                                             href="#!"
                                             class="text-decoration-none text-inherit"
                                         >
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
                                                     class="feather feather-trash-2 text-danger"
                                                 >
                                                     <polyline points="3 6 5 6 21 6"></polyline>
                                                     <path
                                                         d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                                     ></path>
                                                     <line
                                                         x1="10"
                                                         y1="11"
                                                         x2="10"
                                                         y2="17"
                                                     ></line>
                                                     <line
                                                         x1="14"
                                                         y1="11"
                                                         x2="14"
                                                         y2="17"
                                                     ></line>
                                                 </svg>
                                             </span>
                                             <span class="text-muted">dkdk</span>
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
                                 <input
                                     type="button"
                                     value="-"
                                     class="button-minus btn btn-sm"
                                     data-field="quantity"
                                 />
                                 <input
                                     type="number"
                                     step="1"
                                     max="10"
                                     value="1"
                                     name="quantity"
                                     class="quantity-field form-control-sm form-input"
                                 />
                                 <input
                                     type="button"
                                     value="+"
                                     class="button-plus btn btn-sm"
                                     data-field="quantity"
                                 />
                             </div>
                         </div>
                         <!-- price -->
                         <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                             <span class="fw-bold">$5.00</span>
                         </div>
                     </div>
                 </li>

                 <?php } }?>

             </ul>
             <!-- btn -->
             <div class="d-flex justify-content-between mt-4">
                 <a
                     href="#!"
                     class="btn btn-primary"
                 >Continue Shopping</a>
                 <a
                     href="#!"
                     class="btn btn-dark"
                 >Update Cart</a>
             </div>
         </div>
     </div>
 </div>
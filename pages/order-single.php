<!DOCTYPE html>
<html lang="en">


<?php
$pageName = 'Orders - Sosmart Online shopping and more';
include_once 'header.php'; ?>

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
    <?php include_once 'php/profile/fetchAll.php'; ?>
    <?php include_once 'php/category/fetchAll.php'; ?>
    <?php include_once 'php/cart/fetchAll.php'; ?>
    <?php include_once 'php/orders/fetch.php'; ?>
    <?php include_once 'navbar.php'; ?>


    <!-- main wrapper -->
    <div class="main-wrapper">
        <!-- navbar vertical -->
        <!-- navbar -->



        <main class="main-content-wrapper pt-5 ">
            <!-- container -->
            <div class="container-lg ">
                <!-- row -->
                <div class="row  justify-content-between border-bottom pb-3">
                <div class="col ">
                    <h3>Order Information (<small class="mb-1 me-2 lh-lg ">

<span class="text-dark mt-3"><?php echo count($order_items); ?> items</span></small>)</h3>
              
                </div>

                <div class="col text-end">

                
                                        <?php if ($paymentInformation !== null) { ?>
                                            <a href="payment.php?order_number=<?=$_GET['order_number']?>" class="btn btn-danger px-4 py-2 rounded">Make payment </a>

                                            <?php }else{ 
                                                echo "<span class='bg-success px-3 py-1 small text-white rounded-pill'>Payment made</span>";
                                            
                                            } ?>
                                    </div>

            </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-12 px-0 mb-5">
                        <!-- card -->
                        <div class="card border-0 shadow-none h-100 card-lg">
                            <div class="card-body -6">
                               
                                <div class="d-flex">

                                    <div class=" col col px-0 px-md-5">
                              
                                       <strong> Order Date:</strong>
                                        <small><?php echo (new DateTime($created_at))->format('F j, Y \a\t g:i:s A');
                                        ?></small><br>

                                        <small class="mb-1 lh-lg ">
                                            <strong>Address:</strong>
                                            <?php echo $shipping_address; ?>
                                        </small>
                                        <br>

                                        <small>

                                            <strong>Total Cost:</strong>
                                            <span class="text-dark ">$<?= number_format($total_amount, 2) ?></span>

                                        </small>
                                        <br>
                                        
                                    </div>

                                   

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <!-- Table -->
                                        <?php 
                                         foreach ($order_items as $orderItem){

                                            $order_id = $orderItem['id'];
                                            $order_number = $orderItem['order_number'];
                                            $order_status = $orderItem['order_status'];
                                            $payment_status = $orderItem['payment_status'];
                                            $delivery_status = $orderItem['delivery_status'];
                                            $total_amount = $orderItem['total_amount'];
                                            $created_at = $orderItem['created_at'];
                                            $product_id = $orderItem['product_id'];
                                            $product_name = $orderItem['product_name'];
                                            $quantity = $orderItem['quantity'];
                                            $price = $orderItem['price'];
                                            $product_img1 = $orderItem['product_img1'];
                                            $product_img2 = $orderItem['product_img2'];
                                            $product_img3 = $orderItem['product_img3'];
                                            $product_img4 = $orderItem['product_img4'];
                                            $product_img5 = $orderItem['product_img5'];
                                            $category_id = $orderItem['category_id'];
                                            $description = $orderItem['description'];
                                            $regular_price = $orderItem['regular_price'];
                                            $brand = $orderItem['brand'];
                                            $weight = $orderItem['weight'];
                                            $quantity_in_stock = $orderItem['quantity_in_stock'];
                                            $tags = $orderItem['tags'];
                                            $refundable = $orderItem['refundable'];
                                            $sales_price = $orderItem['sales_price'];
                                            $meta_title = $orderItem['meta_title'];
                                            $meta_description = $orderItem['meta_description'];
                                            $cash_on_delivery = $orderItem['cash_on_delivery'];
                                            $sku = $orderItem['sku'];
                                            $free_shipping = $orderItem['free_shipping'];
                                            $shipping_cost = $orderItem['shipping_cost'];
                                            $length = $orderItem['length'];
                                            $width = $orderItem['width'];
                                            $height = $orderItem['height'];
                                            $status = $orderItem['status'];
                                            $delivery_date = $orderItem['delivery_date'];
                                            $shipping_address = $orderItem['shipping_address'];
                                            $payment_method = $orderItem['payment_method'];
                                        
?>
                                        <div class="col-11 mx-auto">
                                            <div class="row order-details border py-3 mb-3 rounded-3">
                                                <div class="d-flex">

                                                    <div class="">
                                                        <img src="<?php echo $product_img1; ?>" alt="" height="70"
                                                            width="70" class="order-img img-fluid rounded-3">
                                                    </div>

                                                    <div class="col ps-3">
                                                        <!-- Product details -->
                                                        <p class="">
                                                            <?php
                                                            echo $product_name;
                                                            ?></p>

                                                        <!-- Order number -->
                                                        <small class="text-muted"> <?php echo CURRENCY . $sales_price; ?></small>
                                                        <!-- Order number -->


                                                        <br>
                                                        <small class="text-muted">Quantity: <?php echo $quantity; ?></small>
                                                        <br>

                                                        <!-- Delivery status and date -->

                                                    </div>
                                                </div>


                                                <div class="col">
                                                    <small
                                                        class='bg-success px-3 py-1 small text-white rounded-pill'><?php echo $delivery_status; ?></small>
                                                    <br>
                                                </div>

                                                <!-- See details button -->
                                                <div class='nav-item col text-end justify-items-end'>
                                                    <a href="shop-single.php?id=<?= $product_id ?>"
                                                        class='  text-white border-0 nav-link bg-primary ms-auto px-4 py-2 rounded'
                                                        style="font-size:0.85rem; width :max-content !important">Buy Again</a>
                                                </div>

                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Libs JS -->
    <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>

</body>



</html>

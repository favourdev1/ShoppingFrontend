<!DOCTYPE html>
<html lang="en">

<?php $pageName = 'Favourite Sosmart - Online shopping and more'; ?>

<?php include_once 'header.php'; ?>

<body>
    <!-- navbar -->
    <?php include_once 'components/loadingDialog.php'; ?>
    <?php include_once 'php/profile/fetchAll.php'; ?>

    <?php include_once 'php/category/fetchAll.php'; ?>
    <?php include_once 'php/cart/fetchAll.php'; ?>
    <?php include_once 'navbar.php'; ?>
    <?php include_once 'php/wishlist/fetchAll.php'; ?>




    <script src="javascript/main.js"></script>

    <script src="../assets/js/vendors/validation.js"></script>

    <main>

        <!-- section -->
        <section class="mt-8 mb-14">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-8">
                            <!-- heading -->
                            <h1 class="mb-1">My Wishlist</h1>
                            <?php if (count($wishlistItems) > 0) { ?>
                            <p>There is <?php echo count($wishlistItems); ?> products in your wishlist.</p>
                            <?php } else { ?>
                            <p>Your wishlist is empty.</p>
                            <?php } ?>
                        </div>
                        <div>
                            <?php if (count($wishlistItems) <1) { ?>
                            <div class="alert alert-secondary">
                                No item in wishlist
                            </div>

                            <?php } else { ?>

                            <!-- table -->
                            <div class="table-responsive">

                                <?php foreach ($wishlistItems as $wishlistItem) { 
                                                    $wishlistItem_id = $wishlistItem['id'];
                                                    $wishlist_userId = $wishlistItem['user_id'];
                                                    $wishlist_product_id = $wishlistItem['product_id'];
                                                    $wishlist_created_at = $wishlistItem['created_at'];
                                                    $wishlist_updated_at = $wishlistItem['updated_at'];
                                                    $wishlist_product_name = $wishlistItem['product_name'];
                                                    $wishlist_category_id = $wishlistItem['category_id'];
                                                    $wishlist_description = $wishlistItem['description'];
                                                    $wishlist_regular_price = $wishlistItem['regular_price'];
                                                    $wishlist_brand = $wishlistItem['brand'];
                                                    $wishlist_product_img1 = $wishlistItem['product_img1'];
                                                    $wishlist_product_img2 = $wishlistItem['product_img2'];
                                                    $wishlist_product_img3 = $wishlistItem['product_img3'];
                                                    $wishlist_product_img4 = $wishlistItem['product_img4'];
                                                    $wishlist_product_img5 = $wishlistItem['product_img5'];
                                                    $wishlist_weight = $wishlistItem['weight'];
                                                    $wishlist_quantity_in_stock = $wishlistItem['quantity_in_stock'];
                                                    $wishlist_tags = $wishlistItem['tags'];
                                                    $wishlist_refundable = $wishlistItem['refundable'];
                                                    $wishlist_status = $wishlistItem['status'];
                                                    $wishlist_sales_price = $wishlistItem['sales_price'];
                                                    $wishlist_meta_title = $wishlistItem['meta_title'];
                                                    $wishlist_meta_description = $wishlistItem['meta_description'];
                                                    $wishlist_cash_on_delivery = $wishlistItem['cash_on_delivery'];
                                                    $wishlist_sku = $wishlistItem['sku'];
                                                    $wishlist_free_shipping = $wishlistItem['free_shipping'];
                                                    $wishlist_shipping_cost = $wishlistItem['shipping_cost'];
                                                    $wishlist_tax = $wishlistItem['tax'];
                                                    $wishlist_length = $wishlistItem['length'];
                                                    $wishlist_width = $wishlistItem['width'];
                                                    $wishlist_height = $wishlistItem['height'];
                                                
                                                
                                                ?>
                                <?php 
if($wishlist_quantity_in_stock > 0){

?>
                                <div
                                    class="d-block d-md-flex align-items-center order-details border py-3 mb-3 rounded-3 px-2">
                                    <div class="col d-flex -align-items-center">

                                        <div class="me-4">
                                            <img height="70" width="100" src="<?php echo $wishlist_product_img1; ?>"
                                                alt=""class="order-img border img-fluid rounded-3">
                                        </div>

                                        <div class="col ">
                                            <!-- Product details -->
                                            <a href="<?php echo 'shop-single.php?id=' . $wishlist_product_id; ?>" class="">
                                                <?php
                                                echo $wishlist_product_name;
                                                ?></a>

                                            <br>

                                            <p class="mt-auto ">

                                                <span class="fw-bold ">
                                                    <?php echo CURRENCY . number_format($wishlist_sales_price, 2); ?></span>

                                                <small class="text-decoration-line-through text-muted me-3">


                                                    <?php echo CURRENCY . number_format($wishlist_regular_price, 2); ?>
                                                </small>

                                            </p>



                                            <br>

                                            <!-- Delivery status and date -->
                                            <small
                                                class='bg-success px-3 py-1 small text-white rounded-pill'><?php
                                                if ($wishlist_quantity_in_stock > 0) {
                                                    echo 'In stock';
                                                } else {
                                                    echo 'Out of stock';
                                                } ?></small>
                                            <br>
                                        </div>

                                    </div>
                                    <!-- See details button -->

                                    <div class='  text-end'>
                                        <a href="#"
                                            onclick=" movefromWishlistToCart(<?= $wishlist_product_id ?>,1,true,event)"
                                            class='btn  btn-primary btn-action wishlist-page  text-white border-0 '
                                            style="font-size:0.85rem"
                                            data-product-id = "<?= $wishlist_product_id ?>">Buy Now</a>
                                    </div>

                                </div>

                                <?php } }?>

                            </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

</body>


</html>

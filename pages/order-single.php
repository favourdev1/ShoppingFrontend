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
            <?php
            $deliveryStatusArr = [
                '1' => 'pending',
                '2' => 'processing',
                '3' => 'shipped',
                '4' => 'delivered'
            ];

            foreach ($order_items as $orderItem) {


                $delivery_status = $orderItem['delivery_status'];
                $deliveryStatus_index = array_search($delivery_status, $deliveryStatusArr);
                if ($deliveryStatus_index !== false) {


                    break;
                }

            }

            ?>


            <main class="main-content-wrapper pt-5 ">
                <!-- container -->
                <div class="container-lg ">
                    <!-- row -->
                    <div class="row  justify-content-between border-bottom pb-3">
                        <div class="col ">
                            <h3>Order Information (<small class="mb-1 me-2 lh-lg ">

                                    <span class="text-dark mt-3"><?php echo count($order_items); ?>
                                        items</span></small>)</h3>

                            <?php
                            foreach ($order_items as $order_item) {
                                $payment_method = $order_item['payment_method'];
                                break;
                            }


                            ?>
                        </div>

                        <div class="col text-end">


                            <?php if ($paymentInformation == null && $payment_method !== 4) { ?>
                                <a
                                    href="payment.php?order_number=<?= $_GET['order_number'] ?>"
                                    class="btn btn-danger px-4 py-2 rounded"
                                >Make payment </a>

                            <?php } else {
                                echo "<span class='bg-success px-3 py-1 small text-white rounded-pill'>Payment made</span>";

                            } ?>
                        </div>

                    </div>

                    <ul class="step-progress d-flex justify-content-between my-5 py-5">
                        <?php

                        if ($deliveryStatus_index == false) {
                            echo '<li class="active">Pending</li>';

                        } else {
                            echo '<li class="active">Pending</li>';

                        }
                        if ($deliveryStatus_index > 1) {
                            echo "<li class='active'>Processing</li>";

                        } else {
                            echo "<li >Processing</li>";

                        }
                        if ($deliveryStatus_index > 2) {
                            echo "<li class='active'>Shipped</li>";
                        } else {
                            echo "<li >Shipped</li>";

                        }

                        if ($deliveryStatus_index > 3) {
                            echo "<li class='active'>Delivered</li>";

                        } else {
                            echo "<li> Delivered</li>";


                        }

                        ?>

                    </ul>
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
                                            foreach ($order_items as $orderItem) {

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
                                                $reviewed = $orderItem['review_exists'];

                                                ?>
                                                <div class="col-11 mx-auto">
                                                    <div class="row order-details border py-3 mb-3 rounded-3">
                                                        <div class="d-flex">

                                                            <div class="">
                                                                <img
                                                                    src="<?php echo $product_img1; ?>"
                                                                    alt=""
                                                                    height="70"
                                                                    width="70"
                                                                    class="order-img img-fluid rounded-3"
                                                                >
                                                            </div>

                                                            <div class="col ps-3">
                                                                <!-- Product details -->
                                                                <p class="">
                                                                    <?php
                                                                    echo $product_name;
                                                                    ?></p>

                                                                <!-- Order number -->
                                                                <small class="text-muted">
                                                                    <?php echo CURRENCY . $sales_price; ?></small>
                                                                <!-- Order number -->


                                                                <br>
                                                                <small class="text-muted">Quantity:
                                                                    <?php echo $quantity; ?></small>
                                                                <br>

                                                                <!-- Delivery status and date -->

                                                            </div>
                                                        </div>


                                                        <div class="col">
                                                            <small
                                                                class='bg-success px-3 py-1 small text-white rounded-pill'
                                                            ><?php echo $delivery_status; ?></small>
                                                            <br>
                                                        </div>

                                                        <div class='d-flex align-items-center text-end justify-content-end'>
                                                            <div class="d-flex align-items-center">

                                                                <?php

                                                                if ($deliveryStatus_index > 2 && $reviewed == false) {

                                                                    ?>
                                                                    <a
                                                                        data-product-id=<?= $product_id ?>
                                                                        data-order-number=<?= $order_number ?>
                                                                        id="reviewProduct"
                                                                        class=' ms-auto text-white border-0  bg-dark ms-auto px-4 py-2 rounded me-3'
                                                                        style="font-size:0.85rem; width :max-content !important"
                                                                    >Review Product</a>



                                                                <?php }
                                                                ?>
                                                                <!-- See details button -->

                                                                <a
                                                                    href="shop-single.php?id=<?= $product_id ?>"
                                                                    class='  text-white border-0  bg-primary ms-auto px-4 py-2 rounded'
                                                                    style="font-size:0.85rem; width :max-content !important"
                                                                >Buy Again</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>




                </div>




            </main>
        </div>



        <!-- Modal -->
        <div
            class="modal fade"
            id="reviewModal"
            tabindex="-1"
            aria-labelledby="reviewModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content border  rounded-3">
                    <div class="modal-header">
                        <h5
                            class="modal-title"
                            id="reviewModalLabel"
                        >Add Review</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">

                        <div>

                            <link
                                rel="stylesheet"
                                href="../assets/libs/starability-all.min.css"
                            >


                            <div class="border-bottom py-0 mb-0">

                                <div class="my-5">

                                    <div class="rater mx-auto d-flex align-items-center justify-content-center">
                                        <fieldset class="starability-basic">

                                            <input
                                                type="radio"
                                                id="no-rate"
                                                class="input-no-rate"
                                                name="rating"
                                                value="0"
                                                checked
                                                aria-label="No rating."
                                            />
                                            <input
                                                type="radio"
                                                id="one-star"
                                                name="rating"
                                                value="1"
                                            />
                                            <label
                                                for="one-star"
                                                title="Terrible"
                                            >★</label>
                                            <input
                                                type="radio"
                                                id="two-stars"
                                                name="rating"
                                                value="2"
                                            />
                                            <label
                                                for="two-stars"
                                                title="Not good"
                                            >★</label>
                                            <input
                                                type="radio"
                                                id="three-stars"
                                                name="rating"
                                                value="3"
                                            />
                                            <label
                                                for="three-stars"
                                                title="Average"
                                            >★</label>
                                            <input
                                                type="radio"
                                                id="four-stars"
                                                name="rating"
                                                value="4"
                                            />
                                            <label
                                                for="four-stars"
                                                title="Very good"
                                            >★</label>
                                            <input
                                                type="radio"
                                                id="five-stars"
                                                name="rating"
                                                value="5"
                                            />
                                            <label
                                                for="five-stars"
                                                title="Amazing"
                                            >★</label>
                                        </fieldset>

                                    </div>
                                </div>
                            </div>
                            <!-- form control -->
                            <div class="border-bottom py-4 mb-4">
                                <h5>Add a headline</h5>
                                <input
                                    type="text"
                                    id="reviewHeading"
                                    class="form-control"
                                    placeholder="What’s most important to know"
                                />
                            </div>

                            <div class="py-4 mb-4">
                                <!-- heading -->
                                <h5>Add a written review</h5>
                                <textarea
                                    class="form-control"
                                    rows="3"
                                    id="reviewDescription"
                                    placeholder="What did you like or dislike? What did you use this product for?"
                                ></textarea>
                            </div>
                            <!-- button -->

                        </div>
                        <button
                            id="submitReview"
                            type="submit"
                            class="btn btn-primary"
                        >Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script>
             var headers = <?php echo json_encode($payloadRequest); ?>;
            var url = endPoint + reviewRoute + createReviewRoute
            console.log(url)

        var product_id = null;
        var order_number = null;
        const submitReview = document.getElementById('submitReview');
        var myModal = new bootstrap.Modal(document.getElementById('reviewModal'), {});
        const reviewProduct = document.getElementById('reviewProduct');
        reviewProduct.addEventListener('click', (e) => {
            product_id = e.target.getAttribute('data-product-id');
            order_number = e.target.getAttribute('data-order-number');
            myModal.show();
        });

        submitReview.addEventListener('click', (e) => {
            var heading =document.getElementById('reviewHeading').value;
            var stars = document.querySelector('input[name="rating"]:checked').value;
            var description =document.getElementById('reviewDescription').value;

            console.log(stars)

            if (heading == '' || description == '') {
                showAlert('Please fill in all fields', 'danger')
                return;
            }

            if (stars < 1 || stars == null || stars > 5) {
                showAlert('Please rate the product', 'danger')
                return;
            }
          
             sendRequst(product_id, order_number, heading, description, stars);
        });

        function sendRequst(product_id, order_number, heading, description, stars) {
            axios.post(url, {
                product_id: product_id,
                order_number: order_number,
                heading: heading,
                description: description,
                stars: stars
            },  {
    headers: headers,
})
              .then(function(response) {
                  console.log(response.data);
                  showAlert('Review added successfully', 'success')
                  myModal.hide();
              })
                .catch(function(error) {
                    console.log(error);
                    showAlert('An error occured', 'danger')
                });


        }
        </script>

        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>

        <style>
        /* Custom styles */
        .step-progress {
            list-style-type: none;
            padding-left: 0;
        }

        .step-progress li {
            display: inline-block;
            width: 24%;
            text-align: center;
            position: relative;
        }

        .step-progress li:before {
            content: '';
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #ccc;
            background-color: #fff;
            display: block;
            margin: 0 auto 10px auto;
            position: relative;
            z-index: 1;
        }

        .step-progress li:after {
            content: '';
            height: 2px;
            width: 100%;
            background-color: #ccc;
            position: absolute;
            left: -50%;
            top: 10px;
            z-index: 0;
        }

        .step-progress li:first-child:after {
            content: none;
        }

        .step-progress li.active:before {
            border-color: #007bff;
        }

        .step-progress li.active:after {
            background-color: #007bff;
        }
        </style>

    </body>



</html>
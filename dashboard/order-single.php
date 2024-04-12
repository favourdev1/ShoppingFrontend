<!DOCTYPE html>
<html lang="en">

<?php include_once 'header.php'; ?>

<body>
    <!-- main -->
    <!-- navbar -->

    <?php include_once 'navbar.php'; ?>

    <?php include_once 'components/loadingDialog.php'; ?>


    <!-- main wrapper -->
    <div class="main-wrapper">
        <!-- navbar vertical -->
        <!-- navbar -->
        <?php include_once 'sidebar.php'; ?>


        <main class="main-content-wrapper">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row mb-8">
                    <div class="col-md-12">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                            <div>
                                <!-- page header -->
                                <h2>Order Single</h2>

                            </div>
                            <!-- button -->
                            <div>
                                <a href="#" class="btn btn-primary" onclick="history.back()">Back to all orders</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card shadow-none h-100 card-lg">
                            <div class="card-body p-6">
                                <div class="d-md-flex justify-content-between">
                                    <div class="d-flex align-items-center mb-2 mb-md-0">
                                        <h2 class="mb-0" id="order_number">Order ID: #</h2>
                                        <span class="badge bg-light-warning text-dark-warning ms-2"
                                            id="status"></span>
                                    </div>
                                    <!-- select option -->
                                    <div class="d-md-flex">
                                        <!-- <div class="mb-2 mb-md-0">
                                            <select class="form-select">
                                                <option selected>Status</option>
                                                <option value="Success">Success</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Cancel">Cancel</option>
                                            </select>
                                        </div> -->
                                        <!-- button -->
                                        <!-- <div class="ms-md-3">
                                            <a href="#" class="btn btn-primary">Save</a>
                                            <a href="#" class="btn btn-secondary">Download Invoice</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="mt-8">
                                    <div class="row">
                                        <!-- address -->
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="mb-6">
                                                <h6>Customer Details</h6>
                                                <p class="mb-1 lh-lg">
                                                    <span id="customer_name"></span><br>
                                                    <span id="customer_email"></span><br>
                                                    <span id="customer_contact"></span><br>
                                                </p>
                                                <a href="#">View Profile</a>
                                            </div>
                                        </div>
                                        <!-- address -->
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="mb-6">
                                                <h6>Shipping Address</h6>
                                                <p class="mb-1 lh-lg">
                                                    <span id="customer_address"></span><br>
                                                    <span id="customer_location"></span><br>
                                                    <span id="customer_contact"></span><br>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- address -->
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="mb-6">
                                                <h6>Order Details</h6>
                                                <p class="mb-1 lh-lg">
                                                    Order ID:
                                                    <span class="text-dark" id="order-id"></span>
                                                    <br />
                                                    Order Date:
                                                    <span class="text-dark" id="order-date">October 22, 2023</span>
                                                    <br />
                                                    Order Total:
                                                    <span class="text-dark" id="order-total">$734.28</span>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row rounded-3 border my-3 py-5">
                                <div class="col-12">
                                    <div class="px-3 mb-4">

                                        <h3>Verification </h3>
                                        <small class="text-muted">These are thee products that were ordered by the
                                            customer </small>
                                    </div>
                                    <div class="d-block d-md-flex rounded-4 gap-3 px-3 ">
                                        <!-- Table -->
                                        <div class="col  border rounded py-3 px-4">
                                            <h4 class="my-3 border-bottom pb-2">Payment Information</h4>
                                            <div class="d-flex align-items-center gap-3">

                                                <p class="fw-bold">payment status </p>
                                                <p class="d-none" id="noPayment">No payment found </p>
                                                <p class=""> <select name="payment_status" class="form-select"
                                                        id="payment_status">
                                                        <option>Pending</option>
                                                        <option>Approved</option>
                                                        <option>Declined</option>

                                                    </select></p>
                                            </div>
                                            <div class="d-flex align-items-center gap-3">

                                                <p class="fw-bold">payment Proof </p>
                                                <p class="paymentUploaded" id="paymentUploaded"> Uploaded</p>
                                            </div>
                                            <button class="small btn btn-light rounded-3 border"
                                                id="viewPaymentButton">View payment
                                                proof</button>
                                        </div>
                                        <div class="col  border rounded py-3 px-4">
                                            <h4 class="my-3 border-bottom pb-2">Delivery Information</h4>
                                            <div class="d-flex align-items-center gap-3">

                                                <p class="fw-bold">Delivery status </p>
                                                <p class=""> <select name="delivery_status" class="form-select"
                                                        id="delivery_status">
                                                        <option>Pending</option>
                                                        <option>Processing</option>
                                                        <option>Shipped</option>
                                                        <option>Delivered</option>
                                                        <option>Cancelled</option>


                                                    </select></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row rounded-3 border my-3 py-5">
                                <div class="col-12">
                                    <div class="px-3 mb-4">

                                        <h3>Products </h3>
                                        <small class="text-muted">These are thee products that were ordered by the
                                            customer </small>
                                    </div>
                                    <div class="table-responsive border rounded-4">
                                        <!-- Table -->
                                        <table class="table mb-0 text-nowrap table-centered">
                                            <!-- Table Head -->
                                            <thead class=" ">
                                                <tr>
                                                    <th>Products</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <!-- tbody -->
                                            <tbody id="tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-6">
                                <div class="row">
                                    <div class="col-md-6 mb-4 mb-lg-0">
                                        <h6>Payment method</h6>
                                        <span id="payment_method">Cash on Delivery</span>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Notes</h5>
                                        <textarea disabled id="notes" class="form-control mb-3" rows="3" placeholder="No note for this order"></textarea>

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
    <script src="../pages/javascript/Route.js"></script>


    <script>
        const urlParams = new URLSearchParams(window.location.search);
        var headers = <?php echo json_encode($payloadRequest); ?>;
        const orderNumber = urlParams.get('order_number');
        document.getElementById('delivery_status').addEventListener('change', function() {
            hideDialog(false)
            var status = this.value;
            var url = apiRoute + orderRoute + updateOrderStatus
            axios.post(url, {
                    status: status.toLowerCase(),
                    order_number: orderNumber
                }, {
                    headers: payloadRequest
                })
                .then(response => {
                    console.log('Success:', response.data);
                    // Reload the page after 5 seconds
                    if (response.data.status)
                        showAlert(response.data.message, 'success')
                })
                .catch(error => {
                    console.error('Error:', error);
                }).finally(() => {
                    hideDialog(true)
                });

        });
    </script>

    <script>
        //fetch orderitems from api from order number in the 
        //url

        const options = {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        };

        // use axios
        console.log(orderNumber)
        axios.get(apiRoute + `/orders/fetch/${orderNumber}`, {
                    headers: headers
                }

            )
            .then(response => {
                console.log(response.data);
                const responseInfo = response.data.data
                const order = responseInfo.order;

                const payment = responseInfo.payment_info;

console.log(responseInfo.payment_info)
                const orderItems = responseInfo.order_items.length;
                const orderTotal = order.total_amount;
                const orderStatus = order.status;

                const orderDate = new Date(order.created_at).toLocaleString('en-US', options);
                const customer = order.customer;
                const shippingAddress = order.shipping_address;
                const paymentMethod = order.payment_method;
                const payment_status = order.payment_status
                const notes = order.notes;



                if (payment == null) {
                    document.getElementById('noPayment').classList.toggle('d-none')
                    document.getElementById('paymentUploaded').textContent = " Not Uploaded"

                    document.getElementById('viewPaymentButton').classList.toggle('d-none')
                    document.getElementById('payment_status').classList.toggle('d-none')
                } else {
                    document.getElementById('paymentUploaded').textContent = "Uploaded"
                    document.getElementById('viewPaymentButton').addEventListener('click', function() {
                        window.location.href = websiteurl + "images/" + payment.image
                    })
                    document.getElementById('payment_status').value = capitalizeFirstLetter(payment_status)
                }
                //customer infomation
                const customerInfo = responseInfo.user_info;
                const customer_name = customerInfo.firstname + ' ' + customerInfo.lastname;
                const customer_email = customerInfo.email;
                const customer_contact = customerInfo.phone;

                //populate the order details
                document.getElementById('order_number').textContent += orderNumber;
                document.getElementById('order-id').textContent = orderNumber;
                document.getElementById('order-date').textContent = orderDate;
                document.getElementById('order-total').textContent = "$" + orderTotal;
                document.getElementById('status').textContent = orderStatus;
                document.getElementById('delivery_status').value = capitalizeFirstLetter(orderStatus);



                // custoomer infomation address
                document.getElementById('customer_name').textContent = customer_name;
                document.getElementById('customer_email').textContent = customer_email;
                document.getElementById('customer_contact').textContent = customer_contact;


                // shipping information address
                document.getElementById('customer_address').textContent = shippingAddress;



                document.getElementById('notes').textContent = notes;
                document.getElementById('payment_method').textContent = capitalizeFirstLetter(paymentMethod);
                //table for order items
                const orderItemsTable = responseInfo.order_items;
                const tableBody = document.querySelector('#tbody');
                orderItemsTable.forEach(item => {
                    console.log(item)
                    const row = `<tr>
                    <td>
                        <a href="#" class="text-inherit">
                            <div class="d-flex align-items-center">
                                <div>
                                    <img src="${item.product_img1}" width="40" height="40"
                                        alt="" class="icon-shape icon-lg" />
                                </div>
                                <div class="ms-lg-4 mt-2 mt-lg-0">
                                    <h5 class="mb-0 h6">${item.product_name}</h5>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td><span class="text-body">$${item.price}</span></td>
                    <td>${item.quantity}</td>
                    <td>$${item.quantity*item.price}</td>
                </tr>`;

                    tableBody.innerHTML += row;
                })

            })
            .catch(error => {
                console.error(error);
            })




        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    </script>
</body>



</html>

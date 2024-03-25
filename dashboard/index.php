<!DOCTYPE html>
<html lang="en">

    <?php include_once ('header.php'); ?>

    <body>
        <!-- main -->
        <div>
            <!-- navbar -->
            <?php include_once ('navbar.php') ?>

            <div class="main-wrapper">
                <!-- navbar vertical -->
                <!-- navbar -->

                <?php include_once ('sidebar.php') ?>


                <!-- main wrapper -->
                <main class="main-content-wrapper">
                    <section class="container">
                        <!-- row -->
                        <div class="row mb-8">
                 
                        <!-- table -->
                        <div class="table-responsive-xl mb-6 mb-lg-0">
                            <div class="row flex-nowrap pb-3 pb-lg-0">
                                <div class="col-lg-4 col-12 mb-6">
                                    <!-- card -->
                                    <div class="card h-100 card-lg shadow-0 border">
                                        <!-- card body -->
                                        <div class="card-body p-6">
                                            <!-- heading -->
                                            <div class="d-flex justify-content-between align-items-center mb-6">
                                                <div>
                                                    <h4 class="mb-0 fs-5">Earnings</h4>
                                                </div>
                                                <div
                                                    class="icon-shape icon-md bg-light-danger text-dark-danger rounded-circle">
                                                    <i class="bi bi-currency-dollar fs-5"></i>
                                                </div>
                                            </div>
                                            <!-- project number -->
                                            <div class="lh-1">
                                                <h1 class="mb-2 fw-bold fs-2" id="total_earnings">$0</h1>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mb-6">
                                    <!-- card -->
                                    <div class="card h-100 card-lg shadow-0 border">
                                        <!-- card body -->
                                        <div class="card-body p-6">
                                            <!-- heading -->
                                            <div class="d-flex justify-content-between align-items-center mb-6">
                                                <div>
                                                    <h4 class="mb-0 fs-5">Orders</h4>
                                                </div>
                                                <div
                                                    class="icon-shape icon-md bg-light-warning text-dark-warning rounded-circle">
                                                    <i class="bi bi-cart fs-5"></i>
                                                </div>
                                            </div>
                                            <!-- project number -->
                                            <div class="lh-1">
                                                <h1 class="mb-2 fw-bold fs-2" id="total_orders">0</h1>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mb-6">
                                    <!-- card -->
                                    <div class="card h-100 card-lg shadow-0 border">
                                        <!-- card body -->
                                        <div class="card-body p-6">
                                            <!-- heading -->
                                            <div class="d-flex justify-content-between align-items-center mb-6">
                                                <div>
                                                    <h4 class="mb-0 fs-5">Customer</h4>
                                                </div>
                                                <div
                                                    class="icon-shape icon-md bg-light-info text-dark-info rounded-circle">
                                                    <i class="bi bi-people fs-5"></i>
                                                </div>
                                            </div>
                                            <!-- project number -->
                                            <div class="lh-1">
                                                <h1 class="mb-2 fw-bold fs-2" id="customers">0</h1>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row -->
                        <div class="row">
                            <div class="col-xl-8 col-lg-6 col-md-12 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg shadow-0 border">
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h3 class="mb-1 fs-5">Revenue</h3>
                                                <small>(+63%) than last year)</small>
                                            </div>
                                            <div>
                                                <!-- select option -->
                                                <select class="form-select">
                                                    <option selected>2019</option>
                                                    <option value="2023">2020</option>
                                                    <option value="2024">2021</option>
                                                    <option value="2025">2022</option>
                                                    <option value="2025">2023</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- chart -->
                                        <div
                                            id="revenueChart"
                                            class="mt-6"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 mb-6">
                                <!-- card -->
                                <div class="card h-100 card-lg shadow-0 border">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- heading -->
                                        <h3 class="mb-0 fs-5">Total Sales</h3>
                                        <div
                                            id="totalSale"
                                            class="mt-6 d-flex justify-content-center"
                                        ></div>
                                        <div class="mt-4">
                                            <!-- list -->
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="8"
                                                        height="8"
                                                        fill="currentColor"
                                                        class="bi bi-circle-fill text-primary"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <circle
                                                            cx="8"
                                                            cy="8"
                                                            r="8"
                                                        />
                                                    </svg>
                                                    <span class="ms-1">
                                                        <span class="text-dark">Shippings $32.98</span>
                                                        (2%)
                                                    </span>
                                                </li>
                                                <li class="mb-2">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="8"
                                                        height="8"
                                                        fill="currentColor"
                                                        class="bi bi-circle-fill text-warning"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <circle
                                                            cx="8"
                                                            cy="8"
                                                            r="8"
                                                        />
                                                    </svg>
                                                    <span class="ms-1">
                                                        <span class="text-dark">Refunds $11</span>
                                                        (11%)
                                                    </span>
                                                </li>
                                                <li class="mb-2">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="8"
                                                        height="8"
                                                        fill="currentColor"
                                                        class="bi bi-circle-fill text-danger"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <circle
                                                            cx="8"
                                                            cy="8"
                                                            r="8"
                                                        />
                                                    </svg>
                                                    <span class="ms-1">
                                                        <span class="text-dark">Order $14.87</span>
                                                        (1%)
                                                    </span>
                                                </li>
                                                <li>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="8"
                                                        height="8"
                                                        fill="currentColor"
                                                        class="bi bi-circle-fill text-info"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <circle
                                                            cx="8"
                                                            cy="8"
                                                            r="8"
                                                        />
                                                    </svg>
                                                    <span class="ms-1">
                                                        <span class="text-dark">Income 3,271</span>
                                                        (86%)
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                       
                        <!-- row -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-6">
                                <div class="card h-100 card-lg shadow-0 border">
                                    <!-- heading -->
                                    <div class="p-6 border-bottom">
                                        <h3 class="mb-0 fs-5">Recent Order</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <!-- table -->
                                        <div class="table-responsive">
                                            <table
                                                class="table table-centered table-borderless text-nowrap table-hover" id="myTable">
                                                <thead class="bg-light">
                                                    <tr>
                                                    <th scope="col">S/N</th>
                                                        <th scope="col">Order Number</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Order Date</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tableBody">
                                                    <tr>
                                                    <td>#</td>

                                                        <td>#FC0005</td>
                                                        <td>Haldiram's Sev Bhujia</td>
                                                        <td>28 March 2023</td>
                                                        <td>$18.00</td>
                                                        <td>
                                                            <span
                                                                class="badge bg-light-primary text-dark-primary">Shipped</span>
                                                        </td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="border-top d-md-flex justify-content-between align-items-center "
                                id="pagination">

                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>

        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>

        <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="../assets/js/vendors/chart.js"></script>



    <script>

var headers = <?php echo json_encode($payloadRequest); ?>;
        //fetch all orders 

        const options = {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                };





 // Define the function to build the table
 function buildTable(data) {
            var tableBody = document.getElementById('myTable');
            tableBody.innerHTML = ''; // Clear table body

            data.forEach(item => {
                var row = `   <tr class="text-center">
                        <td>${item.id}</td>
                        <td>${item.order_number}</td>
                        <td>${item.firstname} ${item.lastname}</td>
                        <td>${new Date(item.created_at).toLocaleString('en-us',options)}</td>
                        
                        <td>$${item.total_amount}</td>
                        
                        <td><span class="badge bg-light-primary text-dark-primary">${item.order_status}</span></td>
                        <td>
                            <a href="order-details.php?id=${item.id}" class="btn btn-sm btn-primary">View</a>
                        </td>
                   
                 
                </tr>`;
                tableBody.innerHTML += row;
            });
        }

        // Define the function to build pagination
        function buildPagination(data) {
            var paginationDiv = document.getElementById('pagination');
            paginationDiv.innerHTML = ''; // Clear pagination container

            var totalPages = Math.ceil(data.total / data.per_page);
            var currentPage = data.current_page;
            var startPage = Math.max(1, currentPage - 2);
            var endPage = Math.min(totalPages, currentPage + 2);

            var paginationHTML = '<div class=" d-md-flex justify-content-between align-items-center p-6">';
            paginationHTML += '<span>Showing ' + data.from + ' to ' + data.to + ' of ' + data.total + ' entries</span>';
            paginationHTML += '<nav class="mt-2 mt-md-0"><ul class="pagination mb-0">';

            if (currentPage > 1) {
                paginationHTML += '<li class="page-item"><a class="page-link" href="#!" onclick="loadPage(' + (currentPage - 1) + ')">Previous</a></li>';
            } else {
                paginationHTML += '<li class="page-item disabled"><span class="page-link">Previous</span></li>';
            }

            for (var i = startPage; i <= endPage; i++) {
                if (i === currentPage) {
                    paginationHTML += '<li class="page-item active"><span class="page-link">' + i + '</span></li>';
                } else {
                    paginationHTML += '<li class="page-item"><a class="page-link" href="#!" onclick="loadPage(' + i + ')">' + i + '</a></li>';
                }
            }

            if (currentPage < totalPages) {
                paginationHTML += '<li class="page-item"><a class="page-link" href="#!" onclick="loadPage(' + (currentPage + 1) + ')">Next</a></li>';
            } else {
                paginationHTML += '<li class="page-item disabled"><span class="page-link">Next</span></li>';
            }

            paginationHTML += '</ul></nav></div>';
            paginationDiv.innerHTML = paginationHTML;
        }

        // Define the function to load data for a specific page
        function loadPage(pageNumber) {
            var url = endPoint + orderRoute + '?page=' + pageNumber;

            axios.get(url, {
                    headers: payloadRequest
                })
                .then(response => {
                    const data = response.data;

                    if (data.status === 'success') {
                        const dataPayload = data.data;
                        const paginationPayload = data.data;

                        buildTable(dataPayload.data);
                        buildPagination(paginationPayload);
                    } else {
                        console.log('Failed to get data');
                        console.log(data.status);
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        }

        // Initial load of data (assuming page 1)
        loadPage(1);


getDashboardInfo()
        function getDashboardInfo(){
            axios.get(endPoint + '/admin/dashboard/dashboard_info', {
                headers: payloadRequest
            })
            .then(response => {
                const data = response.data;
                // console.log(data);
                if(data.status === 'success'){
                    const dashboardData = data.data;
                    console.log(dashboardData)
                    document.getElementById('total_orders').innerText=dashboardData.total_orders;
                    document.getElementById('customers').innerText = dashboardData.total_customers;
                    document.getElementById('total_earnings').innerText ="$"+ dashboardData.total_revenue;
                }else{
                    console.log('Failed to get data');
                    console.log(data.status);
                }
            })
            .catch(error => {
                console.error(error);
            });
        }


    </script>


    </body>


</html>
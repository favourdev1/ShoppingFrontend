<!DOCTYPE html>
<html lang="en">


<?php include_once 'header.php'; ?>

<body>
    <!-- main -->
    <!-- navbar -->

    <?php include_once 'navbar.php'; ?>


    <div class="main-wrapper">
        <!-- navbar vertical -->
        <!-- navbar -->
        <?php include_once 'sidebar.php'; ?>

        <!-- main wrapper -->
        <main class="main-content-wrapper">
            <div class="contain " style="height:80vh">
                <!-- row -->
                <div class="row mb-8">
                    <div class="col-md-12">
                        <!-- page header -->
                        <div>
                            <h2>Order List</h2>

                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row h-100">
                    <div class="col-xl-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lg">
                            <div class="p-6">
                                <div class="row justify-content-between">
                                    <div class="col-md-4 col-12 mb-2 mb-md-0">
                                        <!-- form -->
                                        <form class="d-flex" role="search">
                                            <input class="form-control" type="search" placeholder="Search"
                                                aria-label="Search" />
                                        </form>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12">
                                        <!-- select -->
                                        <select class="form-select">
                                            <option selected>Status</option>
                                            <option value="Success">Success</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Cancel">Cancel</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body p-0">
                                <!-- table responsive -->
                                <div class="table-responsive">
                                    <table
                                        class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                        <thead class="bg-light">
                                            <tr class="text-center">
                                                <th>
                                                   S/N
                                                </th>

                                                <th>Order Name</th>
                                                <th>Customer</th>
                                                <th>Date & TIme</th>
                                                <th>Payment</th>
                                                <th>Shipping Fee</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="border-top d-md-flex justify-content-between align-items-center p-6"
                                id="pagination">

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

<script>
      

        // Define the function to build the table
        function buildTable(data) {
            var tableBody = document.getElementById('myTable');
            tableBody.innerHTML = ''; // Clear table body

            data.forEach(item => {
                var row = `<tr class="text-center">
                    <td>${item.id}</td>
                    <td>${item.order_number}</td>
                    <td>${item.firstname} ${item.lastname}</td>
                    <td>${new Date(item.created_at).toLocaleString()}</td>
                    <td>${item.payment_method}</td>
                    <td>${item.shipping_charge}</td>
                    <td><span class="badge bg-light-primary text-dark-primary">${item.order_status}</span></td>
                    <td><?= CURRENCY ?>${formatCurrency(item.total_amount)}</td>
                    <td>
                        <div class="dropdown">
                            <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="feather-icon icon-more-vertical fs-5"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3"></i>Edit</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                            </ul>
                        </div>
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

            var paginationHTML = '<div class="border-top d-md-flex justify-content-between align-items-center p-6">';
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
    </script>
</html>

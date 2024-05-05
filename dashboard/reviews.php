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



        <!-- main -->
        <main class="main-content-wrapper px-0">
            <div class="container">
                <div class="row mb-8">
                    <div class="col-md-12">
                        <div>
                            <!-- page header -->
                            <h2>Reviews</h2>

                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lg">
                            <div class="p-6">
                                <div class="row justify-content-between">
                                    <div class="col-md-4 col-12 mb-2 mb-md-0">
                                        <!-- form -->
                                        <form class="d-flex" role="search">
                                            <input class="form-control" type="search" placeholder="Search Reviews"
                                                aria-label="Search" />
                                        </form>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12">
                                        <!-- main -->
                                        <select class="form-select">
                                            <option selected>Select Rating</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="5">Five</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body p-0">
                                <!-- table -->
                                <div class="table-responsive">
                                    <table
                                        class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="checkAll" />
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th>Product</th>
                                                <th>Name</th>
                                                <th>Reviews</th>
                                                <th>Rating</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                        
                                        </tbody>
                                    </table>
                                </div>

                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <script>
        var headers = <?php echo json_encode($payloadRequest); ?>;

        var url = endPoint + '/admin' + reviewRoute
        console.log(url)
        //fetch reviews using axios
        axios.get(url, {
                headers: headers
            })
            .then(response => {
                var reviewResponse = response.data
                
                if(reviewResponse.status == 'success'){
                    reviewsTable(reviewResponse.data.review)
                }
                // console.log(reviewResponse)
            })
            .catch(error => {
                console.log(error)
            })


        function reviewsTable(data) {
           
            var tableBody = document.getElementById('tableBody')
            tableBody.innerHtML = ''
            return
            data.forEach(element => {
                var row = `<tr>
    <td>
                                                    
                                                    </td>

                                                    <td><a href="#" class="text-reset">Haldiram's Sev Bhujia</a></td>
                                                    <td>Barry McKenzie</td>

                                                    <td>
                                                        <span class="text-truncate">Nice & fresh oranges with value for money..</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-warning"></i></span>
                                                            <span><i class="bi bi-star-fill text-light"></i></span>
                                                        </div>
                                                    </td>
                                                    <td>23 Nov,2022</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="bi bi-trash me-3"></i>
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="bi bi-pencil-square me-3"></i>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
    </tr>`

    tableBody.innerHtML +=row
});
}
            
    </script>
    <!-- Libs JS -->
    <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>

</body>


</html>

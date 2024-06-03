<!DOCTYPE html>
<html lang="en">


    <?php include_once ('header.php') ?>
    <!-- <script src="./js/products.js"></script> -->

    <body>
        <!-- main wrapper-->

        <!-- navbar -->
        <?php include_once ('navbar.php'); ?>
        <?php include_once ('php/products/fetchAll.php') ?>
        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
            <?php include_once ('sidebar.php') ?>

            <!-- main -->
            <main class="main-content-wrapper">
                <div class="containe">
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <!-- page header -->
                            <div class="d-md-flex justify-content-between align-items-center">
                                <div>
                                    <h2>Products</h2>

                                </div>
                                <!-- button -->
                                <div>
                                    <a
                                        href="add-product.php
                                        "
                                        class="btn btn-primary"
                                    >Add Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-12 col-12 mb-5">
                            <!-- card -->
                            <div class=" h-100 border rounded-4">
                                <div class="px-6 py-6">
                                    <div class="row justify-content-between">
                                        <!-- form -->
                                        <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                                            <form
                                                class="d-flex"
                                                role="search"
                                            >
                                                <input
                                                    class="form-control"
                                                    type="search"
                                                    placeholder="Search Products"
                                                    aria-label="Search"
                                                />
                                            </form>
                                        </div>
                                        <!-- select option -->
                                        <div class="col-lg-2 col-md-4 col-12">
                                            <select
                                                class="form-select"
                                                id="status"
                                                onchange="filter()"
                                            >
                                                <?php if (isset ($_GET['status'])) {
                                                    $filterStatus = $_GET['status'];
                                                    echo $filterStatus;
                                                }
                                                ?>
                                                <option <?php echo !isset ($filterStatus) ? 'selected' : '' ?> value='none'>
                                                    filter status
                                                </option>

                                                <option
                                                    value="active"
                                                    <?php echo isset ($filterStatus) && $filterStatus == 'active' ? 'selected' : '' ?>
                                                >Active</option>
                                                <option
                                                    value="inactive"
                                                    <?php echo isset ($filterStatus) && $filterStatus == 'inactive' ? 'selected' : '' ?>
                                                >Inactive</option>

                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body p-0">
                                    <!-- table -->
                                    <div class="table-responsive">
                                        <table
                                            class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox"
                                        >
                                            <thead class="bg-light">
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Image</th>
                                                    <th>Proudct Name</th>
                                                    <th>Category</th>
                                                    <th>Quantity</th>
                                                    <th>Base Price</th>
                                                    <th>Status</th>
                                                    <th>Create at</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $i = 1;
                                                foreach ($allProducts as $product) { ?>

                                                        <?php
                                                        $id = $product['id'];
                                                        $productName = $product['product_name'];
                                                        $category = $product['category'];
                                                        $quantity = $product['quantity_in_stock'];
                                                        $status = $product['status'];
                                                        $price = $product['regular_price'];
                                                        $image1 = $product['product_img1'];
                                                        ?>

                                                        <!-- IF filter is enabled  -->
                                                        <?php if (!isset ($filterStatus) || empty ($filterStatus) || $filterStatus == "none") {

                                                            ?>

                                                                    <tr>
                                                                        <td><?php echo $i++ ?></td>
                                                                        <td>
                                                                            <a href="#!"><?php $image1 ?><img
                                                                                    src="<?php echo $image1 ?>"
                                                                                    alt=""
                                                                                    class="icon-shape icon-md"
                                                                                /></a>
                                                                        </td>
                                                                        <td><a
                                                                                onclick="openProduct('../pages/shop-single.php?id=<?php echo $id . '&productName=' . $productName ?>')"
                                                                                class="text-reset cursor-pointer"
                                                                            ><?php echo $productName ?></a></td>
                                                                        <td><?php echo $category ?></td>
                                                                        <td><?php echo $quantity ?></td>

                                                                        <td><?php echo "$" . number_format($price) ?></td>
                                                                        <td>
                                                                            <small
                                                                                class="badge  <?php echo $status == 'active' ? 'bg-light-success text-dark-success' : 'bg-light-danger text-dark-danger'; ?> "
                                                                            ><?php echo ucfirst($status); ?></small>
                                                                        </td>
                                                                        <td><?php $date = date("d/m/Y", strtotime($product['created_at']));
                                                                        echo $date ?></td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <a
                                                                                    href="#"
                                                                                    class="text-reset"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"
                                                                                >
                                                                                    <i class="feather-icon icon-more-vertical fs-5"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu">

                                                                                    <li>
                                                                                        <a
                                                                                            class="dropdown-item"
                                                                                            href="../pages/shop-single.php?id=<?php echo $id . "&productName=" . $productName ?>"
                                                                                        >
                                                                                            <i class="bi bi-trash me-3"></i>
                                                                                            View Product
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a
                                                                                            class="dropdown-item"
                                                                                            href="add-product.php?id=<?php echo $id . '&productName=' . $productName ?>"
                                                                                        >
                                                                                            <i class="bi bi-pencil-square me-3"></i>
                                                                                            Edit
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a
                                                                                            class="dropdown-item"
                                                                                            href="php/products/delete.php?id=<?php echo $id; ?>"
                                                                                        >
                                                                                            <i class="bi bi-trash me-3"></i>
                                                                                            Delete
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <?php

                                                        } else { ?>
                                                                <?php if (isset ($filterStatus)) {
                                                                    if (strtolower($product['status']) == $filterStatus) {
                                                                        ?>

                                                                                <tr>
                                                                                    <td><?php echo $i++ ?></td>
                                                                                    <td>
                                                                                        <a href="#!"><?php $image1 ?><img
                                                                                                src="<?php echo $image1 ?>"
                                                                                                alt=""
                                                                                                class="icon-shape icon-md"
                                                                                            /></a>
                                                                                    </td>
                                                                                    <td><a
                                                                                            onclick="openProduct('../pages/shop-single.php?id=<?php echo $id . '&productName=' . $productName ?>')"
                                                                                            class="text-reset cursor-pointer"
                                                                                        ><?php echo $productName ?></a></td>
                                                                                    <td><?php echo $category ?></td>
                                                                                    <td><?php echo $quantity ?></td>

                                                                                    <td>
                                                                                        <small
                                                                                            class="badge  <?php echo $status == 'active' ? 'bg-light-success text-dark-success' : 'bg-light-danger text-dark-danger'; ?> "
                                                                                        ><?php echo ucfirst($status); ?></small>
                                                                                    </td>
                                                                                    <td><?php echo $price ?></td>
                                                                                    <td><?php $date = date("d/m/Y", strtotime($product['created_at']));
                                                                                    echo $date ?></td>
                                                                                    <td>
                                                                                        <div class="dropdown">
                                                                                            <a
                                                                                                href="#"
                                                                                                class="text-reset"
                                                                                                data-bs-toggle="dropdown"
                                                                                                aria-expanded="false"
                                                                                            >
                                                                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                                                                            </a>
                                                                                            <ul class="dropdown-menu">

                                                                                                <li>
                                                                                                    <a
                                                                                                        class="dropdown-item"
                                                                                                        href="../pages/shop-single.php?id=<?php echo $id . "&productName=" . $productName ?>"
                                                                                                    >
                                                                                                        <i class="bi bi-trash me-3"></i>
                                                                                                        View Product
                                                                                                    </a>
                                                                                                </li>

                                                                                                <li>
                                                                                                    <a
                                                                                                        class="dropdown-item"
                                                                                                        href="add-product.php?id=<?php echo $id . '&productName=' . $productName ?>"
                                                                                                    >
                                                                                                        <i class="bi bi-pencil-square me-3"></i>
                                                                                                        Edit
                                                                                                    </a>
                                                                                                </li>

                                                                                                <li>
                                                                                                    <a
                                                                                                        class="dropdown-item"
                                                                                                        href="php/products/delete.php?id=<?php echo $id; ?>"
                                                                                                    >
                                                                                                        <i class="bi bi-trash me-3"></i>
                                                                                                        Delete
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <?php
                                                                    }
                                                                }
                                                        }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- <div class="border-top d-md-flex justify-content-between align-items-center px-6 py-6">
                                    <span>Showing 1 to 8 of 12 entries</span>
                                    <nav class="mt-2 mt-md-0">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled"><a
                                                    class="page-link"
                                                    href="#!"
                                                >Previous</a></li>
                                            <li class="page-item"><a
                                                    class="page-link active"
                                                    href="#!"
                                                >1</a></li>
                                            <li class="page-item"><a
                                                    class="page-link"
                                                    href="#!"
                                                >2</a></li>
                                            <li class="page-item"><a
                                                    class="page-link"
                                                    href="#!"
                                                >3</a></li>
                                            <li class="page-item"><a
                                                    class="page-link"
                                                    href="#!"
                                                >Next</a></li>
                                        </ul>
                                    </nav>
                                </div> -->
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
        <?php include_once ('footer.php') ?>

        <script>
        function openProduct(productLink) {
            window.location.href = productLink
        }
        </script>



        <script>
        function filter(status) {
            var status = document.getElementById("status").value;
            // console.log('sometthing')
            window.location.href = "products.php?status=" + status
        }
        </script>
    </body>



</html>
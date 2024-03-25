<!DOCTYPE html>
<html lang="en">



    <?php include_once ('header.php') ?>
    <?php include_once ('php/category/fetchAll.php') ?>

    <body>
        <!-- main -->
        <!-- navbar -->

        <?php include_once ('navbar.php'); ?>


        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
            <?php include_once ('sidebar.php') ?>


            <!-- main -->
            <main class="main-content-wrapper ">
                <div class="containe">
                    <!-- row -->
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                                <!-- pageheader -->
                                <div>
                                    <h3>Categories</h3>
                                </div>
                                <!-- button -->
                                <div>
                                    <a
                                        href="add-category.php"
                                        class="btn btn-primary"
                                    >Add New Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-12 mb-5">
                            <!-- card -->
                            <div class="rounded-4 border h-100 ">
                                <div class="px-6 py-6">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4 col-md-6 col-12 mb-2 mb-md-0">
                                            <!-- form -->
                                            <form
                                                class="d-flex"
                                                role="search"
                                            >
                                                <input
                                                    class="form-control"
                                                    type="search"
                                                    placeholder="Search Category"
                                                    aria-label="Search"
                                                />
                                            </form>
                                        </div>
                                        <!-- select option -->
                                        <div class="col-xl-2 col-md-4 col-12">
                                            <select class="form-select">
                                                <option selected>Status</option>
                                                <option value="Published">Published</option>
                                                <option value="Unpublished">Unpublished</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body p-0">
                                    <!-- table -->
                                    <div class="table-responsive">
                                        <table
                                            class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox"
                                        >





                                            <thead class="bg-light">


                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                value=""
                                                                id="checkAll"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="checkAll"
                                                            ></label>
                                                        </div>
                                                    </th>
                                                    <th>Icon</th>
                                                    <th>Name</th>
                                                    <th>Proudct</th>
                                                    <th>created at</th>
                                                    <th>Status</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                // Check if the categories array is not empty
                                                if (count($Allcategories) > 0) {
                                                    // Loop through the categories array
                                                    foreach ($Allcategories as $category) {
                                                        // Get the category id, name, slug, description, status, and created_at fields
                                                
                                                        $id = $category['id'];
                                                        $name = $category['category_name'];
                                                        $slug = $category['slug'];
                                                        $description = $category['description'];
                                                        $status = $category['status'];
                                                        $created_at = $category['created_at'];

                                                        // Use the category name as the image file name
                                                        $categoryImg = $category['category_image'];

                                                        // Format the created_at date as dd/mm/yyyy
                                                        $date = date("d/m/Y", strtotime($created_at));

                                                        // Display the table row for each category
                                                        ?>

                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="checkbox"
                                                                        value="<?php echo $id; ?>"
                                                                        id="category<?php echo $id; ?>"
                                                                    />
                                                                    <label
                                                                        class="form-check-label"
                                                                        for="category<?php echo $id; ?>"
                                                                    ></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="#!"><img
                                                                        src="<?php if (empty ($categoryImg) || $categoryImg == null) {
                                                                            echo "../assets/images/icons/bakery.svg";
                                                                        } else {
                                                                            echo $categoryImg;

                                                                        } ?>"
                                                                        alt="<?php echo $name; ?>"
                                                                        class="icon-shape icon-md rounded-3 border "
                                                                    /></a>
                                                            </td>
                                                            <td><a
                                                                    href="#"
                                                                    class="text-reset"
                                                                ><?php echo $name; ?></a></td>
                                                            <td><?php echo $description; ?></td>
                                                            <td><?php echo $date; ?></td>
                                                            <td>
                                                                <small
                                                                    class="badge  <?php echo $status == 'active' ? 'bg-light-success text-dark-success' : 'bg-light-danger text-dark-danger'; ?> "
                                                                ><?php echo ucfirst($status); ?></small>
                                                            </td>
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
                                                                                href="php/category/delete.php?id=<?php echo $id; ?>"
                                                                            >
                                                                                <i class="bi bi-trash me-3"></i>
                                                                                Delete
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="add-category.php?id=<?php echo $id ?>"
                                                                            >
                                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                                Edit
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                    }
                                                }
                                                ?>


                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                                <div
                                    class="border-top d-flex justify-content-between align-items-md-center px-6 py-6 flex-md-row flex-column gap-4">
                                    <span>Showing 1 to 8 of 12 entries</span>
                                    <nav>
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




        <?php

        if (isset ($_GET['success']) && !empty ($_GET['success'])) {
            echo ' <script>
		  const alertHub = new AlertHub();
        alertHub.showAlert({
            title: "",
            description: "' . $_GET['success'] . '",
            position: "top-right", 
            type: "success",
            timeout: 5, 
            closeButton: false, 
            closeButtonSize: 20, 
            animation: "fade-in",
        });
        </script>;';
        }

        if (isset ($_GET['error']) && !empty ($_GET['error'])) {
            echo ' <script>
			const alertHub = new AlertHub();
		  alertHub.showAlert({
			  title: "",
			  description: "' . $_GET['error'] . '",
			  position: "top-right", 
			  type: "danger", 
			  timeout: 5,
			  closeButton: false, 
			  closeButtonSize: 20,
			  animation: "fade-in",
		  });
		  </script>;';
        }
        ?>
    </body>


</html>
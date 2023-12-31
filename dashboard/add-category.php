<!DOCTYPE html>
<html lang="en">



    <?php

    include_once('header.php');
    include_once __DIR__ . '/php/auth.php'; ?>

    <link
        rel="stylesheet"
        href="../node_modules/dropzone/dist/dropzone.css"
        ?
    >
    <script src="../node_modules/dropzone/dist/dropzone-min.js"></script>

    <body>
        <!-- main -->
        <!-- navbar -->

        <?php include_once('navbar.php'); ?>

        <?php include_once('php/category/fetch.php') ?>
        <?php include_once('php/category/fetchAll.php') ?>
        <?php
        if ($isUpdating) {
            $endPoint = "php/category/update.php";

        } else {
            $endPoint = "php/category/store.php";
        }
        ?>
        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
            <?php include_once('sidebar.php') ?>

            <!-- main -->
            <main class="main-content-wrapper">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <!-- page header -->
                                <div>
                                    <h2>Add New Category</h2>

                                </div>
                                <div>
                                    <a
                                        href="categories.php"
                                        class="btn btn-light"
                                    >Back to Categories</a>
                                </div>
                            </div>
                        </div>
                    </div>




                    <form
                        action="<?php echo $endPoint ?>"
                        method="post"
                        enctype="multipart/form-data"
                        id="form"
                    >
                        <div class="row">
                            <div class="col-lg-12 col-12">
                              
                                <div class=" mb-6 border rounded-4 ">
                                   
                                    <div class=" p-6">
                                        <h4 class="mb-5 h5">Category Image</h4>
                                        <div class="mb-4 d-flex">
                                            <div class="position-relative">
                                                <img
                                                    class="image icon-shape icon-xxxl bg-light rounded-4 border"
                                                    src="<?php
                                                    if ($isUpdating) {
                                                        if (empty($categoryImg) || $categoryImg == null) {
                                                            echo "../assets/images/icons/bakery.svg";
                                                        } else {
                                                            echo $categoryImg;

                                                        }
                                                    } else {
                                                        echo "../assets/images/icons/bakery.svg";
                                                    }


                                                    ?>"
                                                    alt="Image"
                                                />
                                                <div class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                                                    <input
                                                        id="pickImage"
                                                        type="file"
                                                        accept=".jepg,.png,.jpg"
                                                        name="image"
                                                        class="file-input"
                                                    />
                                                    <span class="icon-shape icon-sm rounded-circle bg-white">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="12"
                                                            height="12"
                                                            fill="currentColor"
                                                            class="bi bi-pencil-fill text-muted"
                                                            viewBox="0 0 16 16"
                                                        >
                                                            <path
                                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"
                                                            />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <small
                                            id="errorImage"
                                            hidden
                                            class="text-secondary"
                                        >
                                            Unable to upload image <span class="text-danger fw-bold">Retry</span>
                                        </small>
                                        <h4 class="mb-4 h5 mt-5">Category Information</h4>

                                        <div class="row">
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Category Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="category_name"
                                                    placeholder="Category Name"
                                                    value="<?php echo $isUpdating ? $name : '' ?>"
                                                    required
                                                />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Slug</label>
                                                <input
                                                    name="slug"
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Slug"
                                                    value="<?php echo $isUpdating ? $slug : '' ?>"
                                                    required
                                                />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Parent Category</label>
                                                <select class="form-select">
                                                    <option selected>Category Name</option>
                                                    <option value="Dairy, Bread & Eggs">Dairy, Bread & Eggs</option>
                                                    <option value="Snacks & Munchies">Snacks & Munchies</option>
                                                    <option value="Fruits & Vegetables">Fruits & Vegetables</option>
                                                </select>
                                            </div>

                                            <div></div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-12">
                                                <label class="form-label">Description</label>



                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="description"
                                                    id="description"
                                                    value="<?php echo $isUpdating ? $description : '' ?>"
                                                >
                                                <input
                                                hidden
                                                    type="text"
                                                    value="<?php echo $isUpdating ? $categoryImg : '' ?>"
                                                    name="category_image"
                                                    id="categoryImagetext"
                                                />
                                            </div>



                                            <!-- input -->
                                            <div class="mb-3 col-lg-12">
                                                <label
                                                    class="form-label"
                                                    id="productSKU"
                                                >Status</label>
                                                <br />
                                                <div class="form-check form-check-inline">
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="status"
                                                        id="inlineRadio1"
                                                        value="active"
                                                        <?php
                                                        if ($isUpdating) {
                                                            if ($status == "active") {
                                                                echo "checked";
                                                            }
                                                        } else {
                                                            echo "checked";
                                                        } ?>
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="inlineRadio1"
                                                    >Active</label>
                                                </div>
                                                <!-- input -->
                                                <div class="form-check form-check-inline">
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="status"
                                                        id="inlineRadio2"
                                                        value="inactive"
                                                        <?php
                                                        if ($isUpdating) {
                                                            if ($status == "inactive") {
                                                                echo "checked";
                                                            }
                                                        } ?>
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="inlineRadio2"
                                                    >Disabled</label>
                                                </div>
                                                <!-- input -->
                                            </div>
                                            <input
                                                type="text"
                                                hidden
                                                name="id"
                                                value="<?php echo $_GET['id'] ?? '' ?>"
                                            />

                                            <div class="col-lg-12">
                                                <input
                                                    type="submit"
                                                    value="<?php echo $isUpdating ? 'Update Category' : 'Create New Category' ?>"
                                                    class="btn btn-primary"
                                                />

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </main>
        </div>


        <script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>


        <!-- <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script> -->



        <script>
        document.getElementById('pickImage').addEventListener('change', handleFileSelect);

        function handleFileSelect(event) {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                uploadFile(selectedFile);
            }
        }

        function uploadFile(file) {

            const formData = new FormData();
            formData.append('image', file);


            var token = "<?php echo $token ?>"
            var headers = {
                Accept: "application/json",
                Cookie: "access_token=" + token,
                Authorization: "Bearer " + token,
            };
            var imgUrlelement = document.getElementById('categoryImagetext')
            var errorImg = document.getElementById('errorImage')
            axios.post('<?php echo $apiUrl ?>/category/upload-image/', formData, {
                    headers: headers,
                })
                .then(response => {
                    // Handle the success response here
                    console.log('File uploaded successfully:', response);
                    errorImg.hidden = true
                    const imageUrl = response.data.data.image_url;
                    console.log('Image URL:', imageUrl);
                    imgUrlelement.value = imageUrl


                })
                .catch(error => {
                    // Handle the error here
                    errorImg.hidden = false
                    console.error('Error uploading file:', error);
                });
        }
        </script>

    </body>


</html>
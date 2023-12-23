<!DOCTYPE html>
<html lang="en">




    <?php include_once('header.php') ?>

    <body class="position-relative">
        <!-- main -->
        <!-- navbar -->

        <?php include_once('navbar.php'); ?>
        <?php include_once('php/Category/fetchAll.php'); ?>
        <link
            rel="stylesheet"
            href="../node_modules/@yaireo/tagify/dist/tagify.css"
        />
        <script src="../node_modules/@yaireo/tagify/dist/tagify.js"></script>


        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
            <?php include_once('sidebar.php') ?>



            <!-- main -->
            <main class="main-content-wrapper">
                <!-- container -->
                <div class="containe">
                    <!-- row -->
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <!-- page header -->
                                <div>
                                    <h2>Add New Product</h2>

                                </div>
                                <!-- button -->
                                <div>
                                    <a
                                        href="products.php"
                                        class="btn btn-light"
                                    >Back to Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->

                    <form
                        id="form"
                        action="php/products/store.php"
                        method="post"
                    >
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <!-- card -->
                                <div class="mb-6 border rounded-4 ">
                                    <!-- card body -->
                                    <div class="p-6">
                                        <h4 class="mb-4 h5">Product Information</h4>
                                        <div class="row">
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Title</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="product_name"
                                                    placeholder="Product Name"
                                                    required
                                                />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Product Category</label>
                                                <select
                                                    class="form-select"
                                                    name="category_id"
                                                >
                                                    <option selected>Product Category</option>
                                                    <?php
                                                    foreach ($Allcategories as $category) { ?>
                                                        <option value="<?php echo $category['id'] ?>">
                                                            <?php echo $category['category_name'] ?></option>
                                                    <?php }
                                                    ?>


                                                </select>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Weight</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Weight"
                                                    required
                                                />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Quantity</label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    name="quantity_in_stock"
                                                    placeholder="enter quantity"
                                                />
                                            </div>



                                            <div>
                                                <div class="mb-3 col-lg-12 mt-5">
                                                    <!-- heading -->
                                                    <h4 class="mb-3 h5">Product Images</h4>

                                                    <div class="d-flex align-items-center overflow-x-scroll">
                                                        <?php
                                                        for ($i = 1; $i <= 4; $i++) {
                                                            $uniqueAlt = "Image" . $i;
                                                            $uniqueId = "product_img" . $i;
                                                            ?>

                                                            <?php
                                                            $imageUrls = [
                                                                '../assets/images/icons/placeholder.webp',
                                                                '../assets/images/icons/placeholder.webp',
                                                                '../assets/images/icons/placeholder.webp',
                                                                '../assets/images/icons/placeholder.webp',
                                                            ];

                                                            for ($i = 0; $i < 4; $i++) {
                                                                $uniqueAlt = "Image" . ($i + 1);
                                                                $uniqueId = "image" . ($i + 1);
                                                                $categoryImg = isset($imageUrls[$i]) && !empty($imageUrls[$i]) ? $imageUrls[$i] : '../assets/images/icons/placeholder.webp';

                                                                ?>

                                                                <div
                                                                    class="position-relative mx-2"
                                                                    style="width:max-content"
                                                                >
                                                                    <img
                                                                        class="image icon-shape icon-xxxl bg-light rounded-4 border"
                                                                        src="<?php echo $categoryImg ?: "../assets/images/icons/placeholder.webp"; ?>"
                                                                        alt="<?php echo $uniqueAlt; ?>"
                                                                    />
                                                                    <div
                                                                        class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                                                                        <input
                                                                            id="<?php echo $uniqueId; ?>"
                                                                            type="file"
                                                                            name="<?php echo $uniqueId; ?>"
                                                                            class="file-input"
                                                                        />
                                                                        <span
                                                                            class="icon-shape icon-sm rounded-circle bg-white">
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

                                                            <?php } ?>


                                                        <?php } ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-lg-12 mt-5">
                                                <h4 class="mb-3 h5">Brand</h4>
                                                <input
                                                    name='brand'
                                                    value=''
                                                    required
                                                    placeholder="brand of product..."
                                                    class="form-control "
                                                >
                                            </div>
                                            <div class="mb-3 col-lg-12 mt-5">
                                                <h4 class="mb-3 h5">Tags</h4>
                                                <input
                                                    name='tags'
                                                    value=''
                                                    required
                                                    placeholder="Add tags seprated by comma"
                                                    class="form-control py-1"
                                                >
                                            </div>
                                            <script>
                                            // The DOM element you wish to replace with Tagify
                                            var input = document.querySelector('input[name=tags]');

                                            // initialize Tagify on the above input node reference
                                            new Tagify(input)
                                            </script>
                                        </div>





                                    </div>
                                </div>

                                <!-- input -->
                                <div class="mb-3 col-lg-12 mt-5 border px-4 rounded-4 py-6">
                                    <h4 class="mb-3 h5">Product Description</h4>
                                    <div
                                        class="py-2 border-0"
                                        placeholder="type here"
                                        style="height:300px"
                                        name="description"
                                        id="editor"
                                    ></div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-12">
                                <!-- card -->
                                <div class="mb-6 border rounded-4 ">
                                    <!-- card body -->
                                    <div class=" p-6">
                                        <!-- input -->
                                        <div class="form-check form-switch mb-4">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                role="switch"
                                                id="flexSwitchStock"
                                                checked
                                            />
                                            <label
                                                class="form-check-label"
                                                for="flexSwitchStock"
                                            >In Stock</label>
                                        </div>
                                        <!-- input -->
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Product Code</label>
                                                <input
                                                    type="text"
                                                    name="product_code"
                                                    class="form-control"
                                                    placeholder="Enter Product Title"
                                                />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Product SKU</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Enter Product Title"
                                                />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
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
                                                        checked
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
                                                        value="disabled"
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="inlineRadio2"
                                                    >Disabled</label>
                                                </div>
                                                <!-- input -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="mb-6 border rounded-4 ">
                                    <!-- card body -->
                                    <div class=" p-6">
                                        <h4 class="mb-4 h5">Product Price</h4>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Regular Price</label>
                                            <input
                                                type="number"
                                                name="regular_price"
                                                required
                                                class="form-control"
                                                placeholder="$0.00"
                                            />
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Sale Price</label>
                                            <input
                                                type="number"
                                                required
                                                name="sales_price"
                                                class="form-control"
                                                placeholder="$0.00"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="mb-6 border rounded-4">
                                    <!-- card body -->
                                    <div class=" p-6 ">
                                        <h4 class="mb-4 h5">Meta Data</h4>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Meta Title</label>
                                            <input
                                                required
                                                type="text"
                                                name="meta_title"
                                                class="form-control"
                                                placeholder="Title"
                                            />
                                        </div>

                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Meta Description</label>
                                            <textarea
                                                class="form-control"
                                                rows="4"
                                                name="meta_description"
                                                placeholder="Meta Description"
                                            ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- button -->

                            </div>
                        </div>
                        <div class="col col-md-8">
                            <input
                                type="submit"
                                class=" w-100 btn btn-primary"
                            />
                        </div>
                    </form>
                </div>
            </main>
        </div>

        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->



        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>

        <script src="../assets/libs/quill/dist/quill.min.js"></script>
        <script src="../assets/js/vendors/editor.js"></script>




        <script>
        // const progressBar = document.getElementById('progressBar')
        // document.getElementById('form').addEventListener('submit', function(e) {
        //     e.preventDefault()
        //     progressBar.style.display = 'block'
        // })
        </script>

        <!-- <script>
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


            var token = "<? //php echo $token ?>"
            var headers = {
                Accept: "application/json",
                Cookie: "access_token=" + token,
                Authorization: "Bearer " + token,
            };
            var imgUrlelement = document.getElementById('categoryImagetext')
            var errorImg = document.getElementById('errorImage')
            axios.post('<?php //echo $apiUrl ?>/category/upload-image/', formData, {
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
        </script> -->

        <?php
        $arr = $_SESSION;
        print_r($arr);
        if (isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>

            <script>
            const alertHub = new AlertHub();

            alertHub.showAlert({
                title: "",
                description: "<?php echo $_SESSION['error'] . " " ?>",
                position: "top-right",
                type: "danger",
                timeout: 7,
                closeButton: false,
                closeButtonSize: 20,
                animation: "fade-in",
            });
            </script>

            <?php
            unset($_SESSION['error']);
        }

        ?>
    </body>

</html>
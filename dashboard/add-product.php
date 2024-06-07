<!DOCTYPE html>
<html lang="en">

    <!-- find out why form data is not being sent on the request
     after image is uploaded #  -->


    <?php include_once ('header.php') ?>

    <body class="position-relative">
        <!-- main -->
        <?php include_once 'loadDialog.php'; ?>
        <!-- navbar -->
        <?php include_once ('navbar.php'); ?>

        <link
            rel="stylesheet"
            href="../node_modules/@yaireo/tagify/dist/tagify.css"
        />
        <script src="../node_modules/@yaireo/tagify/dist/tagify.js"></script>


        <?php include_once ('php/products/fetch.php') ?>
        <?php include_once ('php/category/fetchAll.php') ?>
        <?php
        if ($isUpdating) {
            $endPoint = "php/products/update.php";

        } else {
            $endPoint = "php/products/store.php";
        }
        ?>
        <div class="main-wrapper position-relative vh-100">
            <!-- navbar vertical -->
            <!-- navbar -->
            <?php include_once ('sidebar.php') ?>



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
                        method="post"
                        enctype="multipart/form-data"
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
                                                    value="<?php echo $isUpdating ? $productName : '' ?>"
                                                    placeholder="Product Name"
                                                    required
                                                />
                                            </div>
                                            <?php

                                            if ($isUpdating) { ?>
                                                <input
                                                    hidden
                                                    name="id"
                                                    value='<?php echo $_GET['id'] ?>'
                                                >
                                                <?php
                                            }
                                            ?>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Product Category</label>
                                                <select
                                                    class="form-select"
                                                    name="category_id"
                                                >
                                                    <option <?php echo !$isUpdating ? 'selected' : '' ?>>Product
                                                        Category
                                                    </option>
                                                    <?php
                                                    foreach ($Allcategories as $category) { ?>

                                                        <option
                                                            value="<?php echo $category['id'] ?>"
                                                            <?php if ($isUpdating) {
                                                                if ($categoryId == $category['id']) {
                                                                    echo "selected";
                                                                }
                                                            } ?>
                                                        >
                                                            <?php echo $category['category_name'] ?></option>
                                                    <?php }
                                                    ?>


                                                </select>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Weight <span
                                                        class="text-muted">(optional)</span></label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Weight"
                                                    value="<?php echo $isUpdating ? $weight : '' ?>"
                                                />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Quantity in stock</label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    name="quantity_in_stock"
                                                    placeholder="enter quantity"
                                                    value="<?php echo $isUpdating ? $quantityInStock : '' ?>"
                                                />
                                            </div>



                                            <div>
                                                <div class="mb-3 col-lg-12 mt-5">
                                                    <!-- heading -->
                                                    <h4 class="mb-3 h5">Product Images</h4>

                                                    <div
                                                        class="d-flex align-items-center overflow-x-scroll hide-scrollbar">
                                                        <?php
                                                        // for ($i = 1; $i <= 4; $i++) {
                                                        //     $uniqueAlt = "Image" . $i;
                                                        //     $uniqueId = "image" . $i;
                                                        //     $productImageName = "product_img".$i;
                                                        ?>

                                                        <?php
                                                        $imageUrls = [
                                                            $isUpdating ? $productImg1 : '../assets/images/icons/placeholder.webp',
                                                            $isUpdating ? $productImg2 : '../assets/images/icons/placeholder.webp',
                                                            $isUpdating ? $productImg3 : '../assets/images/icons/placeholder.webp',
                                                            $isUpdating ? $productImg4 : '../assets/images/icons/placeholder.webp',
                                                        ];

                                                        for ($i = 0; $i < 4; $i++) {
                                                            $uniqueAlt = "Image" . ($i + 1);
                                                            $uniqueId = "image" . ($i + 1);
                                                            $categoryImg = isset($imageUrls[$i]) && !empty($imageUrls[$i]) ? $imageUrls[$i] : '../assets/images/icons/placeholder.webp';
                                                            $productImageName = "product_img" . $i + 1;

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
                                                                        accept=".jpg, .jpeg, .png, .webpg"
                                                                        type="file"
                                                                        name="<?php echo $uniqueId; ?>"
                                                                        class="file-input"
                                                                    />
                                                                    <input
                                                                        hidden
                                                                        id="<?php echo $productImageName; ?>"
                                                                        type="text"
                                                                        value="<?php echo $categoryImg ?>"
                                                                        name="<?php echo $productImageName; ?>"
                                                                        class=""
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


                                                        <?php //}  ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-lg-12 mt-5">
                                                <h4 class="mb-3 h5">Brand</h4>
                                                <input
                                                    name='brand'
                                                    value="<?php echo $isUpdating ? $brand : '' ?>"
                                                    required
                                                    placeholder="brand of product..."
                                                    class="form-control "
                                                >
                                            </div>

                                            <?php
                                            if($isUpdating){
                                            $tagsArray = array_map(function ($tag) {
                                                return trim($tag->value); // trim to remove any extra spaces
                                            }, json_decode($tags));

                                        } else {
                                            $tagsArray = [];
                                        }
                                            ?>
                                            <div class="mb-3 col-lg-12 mt-5">
                                                <h4 class="mb-3 h5">Tags</h4>
                                                <input
                                                    name='tags'
                                                    value="<?php echo $isUpdating ? implode(',', $tagsArray) : '' ?>"
                                                    required
                                                    placeholder="Add tags separated by comma"
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
                                        id="editor"
                                    >
                                        <?php echo $isUpdating ? $description : '' ?>
                                    </div>
                                    <input
                                        type="text"
                                        name="description"
                                        style="display:none"
                                        id="descriptionInput"
                                    />
                                </div>

                                <!-- card -->
                                <div class="mb-6 border rounded-4">
                                    <!-- card body -->
                                    <div class=" p-6 ">
                                        <h4 class="mb-4 h5">SEO Meta Data</h4>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Meta Title</label>
                                            <input
                                                required
                                                type="text"
                                                value="<?php echo $isUpdating ? $metaTitle : '' ?>"
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
                                            ><?php echo $isUpdating ? $metaDescription : '' ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- button -->
                            </div>

                            <!--########### Side content  ##############-->
                            <div class="col-lg-4 col-12">




                                <!-- Shipping Card -->
                                <div class="mb-6 border rounded-4 ">
                                    <!-- card body -->
                                    <div class=" p-6">
                                        <!-- input -->
                                        <div class="mb-4">

                                            <label
                                                class="form-check-label"
                                                for="shipping_switch"
                                            >Shipping Configuration</label>
                                        </div>
                                        <!-- input -->
                                        <div>
                                            <div
                                                class="d-flex align-items-center justify-content-between form-check form-switch  mb-3 p-0">
                                                <label class="form-label ms-0 p-0">Free Shipping</label>
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    role="switch"
                                                    name="free_shipping"
                                                    id="shipping_switch"
                                                    <?php echo $isUpdating ? $freeShipping == true ? 'checked' : '' : '' ?>
                                                />
                                            </div>
                                            <!-- input -->
                                            <div
                                                class="mb-3"
                                                id="shipping_cost"
                                                hidden
                                            >
                                                <label class="form-label">Shipping Cost</label>
                                                <input
                                                    id="shipping_cost_switch"
                                                    name="shipping_cost"
                                                    type="number"
                                                    class="form-control"
                                                    placeholder="0"
                                                    <?php echo $isUpdating ? $shipping_cost : '' ?>
                                                />
                                            </div>

                                        </div>
                                    </div>
                                </div>





                                <div class="mb-6 border rounded-4 ">
                                    <!-- Cash on delivery  -->
                                    <div class=" p-6">
                                        <!-- input -->
                                        <div class="mb-4">
                                            <!-- 
                                            <label
                                                class="form-check-label"
                                                for="cash_on_delivery"
                                            >Cash On Delivery</label> -->
                                        </div>



                                        <!-- Refundable -->
                                        <div class="form-check form-switch mb-4 justify-content-between p-0">

                                            <label
                                                class="form-check-label p-0"
                                                for="flexSwitchStock"
                                            >Refundable</label>

                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                name="refundable"
                                                role="switch"
                                                id="refundable"
                                                checked
                                            />
                                        </div>
                                        <!-- input -->
                                        <!-- <div>
                                            <div
                                                class="d-flex align-items-center justify-content-between form-check form-switch  mb-3 p-0">
                                                <label class="form-check-label ms-0 p-0">Cash on delivery</label>
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    role="switch"
                                                    name="cash_on_delivery"
                                                    id="cash_on_delivery_switch"
                                                    checked
                                                />
                                            </div>
                                            


                                        </div> -->





                                    </div>

                                </div>





















                                <!-- card -->
                                <div class="mb-6 border rounded-4 ">
                                    <!-- card body -->
                                    <div class=" p-6">
                                        <!-- input -->
                                        <label
                                            class="form-check-label fw-bold mb-3"
                                            for="shipping_switch"
                                        >Product Specifications
                                        </label>

                                        <!-- input -->
                                        <div>
                                            <!-- <div class="mb-3">
                                                <label class="form-label">Product Code</label>
                                                <input
                                                    type="text"
                                                    name="product_code"
                                                    class="form-control"
                                                    placeholder="Enter Product Title"
                                                />
                                            </div>
                                         
                                            <div class="mb-3">
                                                <label class="form-label">Product SKU</label>
                                                <input
                                                    type="text"
                                                    name="sku"
                                                    class="form-control"
                                                    placeholder="Enter Product Title"
                                                    value=""
                                                />
                                            </div> -->


                                            <!-- input -->
                                            <div class="mb-3">
                                                <label
                                                    class="form-label fw-bold"
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
                                                value="<?php echo $isUpdating ? $regularPrice : '' ?>"
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
                                                value="<?php echo $isUpdating ? $salesPrice : '' ?>"
                                                name="sales_price"
                                                class="form-control"
                                                placeholder="$0.00"
                                            />
                                        </div>
                                    </div>
                                </div>

                                <!-- Tax Card -->
                                <div class="mb-6 border rounded-4 ">
                                    <!-- card body -->
                                    <div class=" p-6">
                                        <!-- input -->
                                        <div class="mb-4">

                                            <label
                                                class="form-check-label fw-bold"
                                                for="tax-switch"
                                            >Vat & Tax</label>
                                        </div>
                                        <!-- input -->
                                        <div>
                                            <div
                                                class="d-flex align-items-center justify-content-between form-check form-switch  mb-3 p-0">
                                                <label class="form-label ms-0 p-0">Tax</label>
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    role="switch"
                                                    name="tax"
                                                    id="tax_switch"
                                                    <?php if ($isUpdating) {
                                                        if ($tax > 0) {
                                                            echo "checked";
                                                        }
                                                    } ?>
                                                >


                                            </div>
                                            <small class="text-muted">If you won't want to charge customers tax, keep it
                                                turned off</small>
                                            <!-- input -->
                                            <div
                                                class="mb-3"
                                                id="tax_cost_container"
                                                hidden
                                            >
                                                <label class="form-label">Tax Cost</label>
                                                <input
                                                    id="tax_input"
                                                    name="tax"
                                                    type="number"
                                                    class="form-control"
                                                    placeholder="0"
                                                    value="<?php echo $isUpdating ? $tax : '' ?>"
                                                />
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-8 pb-5">
                            <input
                                type="submit"
                                class=" w-100 btn btn-primary"
                            />
                        </div>
                    </form>
                </div>


            </main>


        </div>


        <?php include_once ('footer.php'); ?>


        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

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

        <script>
        const image1 = document.getElementById('image1')
        const image2 = document.getElementById('image2')
        const image3 = document.getElementById('image3')
        const image4 = document.getElementById('image4')
        var token = "<?php echo $token ?>"
        var headers = {
            Accept: "application/json",
            Cookie: "access_token=" + token,
            Authorization: "Bearer " + token,
            'Content-Type': 'multipart/form-data'
        };
        const alertHub = new AlertHub();

        image1.addEventListener('change', function(event) {
            handleFileSelect('product_img1', event)
        });
        image2.addEventListener('change', function(event) {
            handleFileSelect('product_img2', event)
        });
        image3.addEventListener('change', function(event) {
            handleFileSelect('product_img3', event)
        });
        image4.addEventListener('change', function(event) {
            handleFileSelect('product_img4', event)
        });


        function handleFileSelect(elementName, event) {
            console.log(elementName)
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                uploadFile(selectedFile, elementName);
            }
        }

        function uploadFile(file, elementName) {

            const formData = new FormData();
            formData.append('image', file);



            // console.log(elementName)
            var imgUrlelement = document.getElementById(elementName)
            // var errorImg = document.getElementById('errorImage')


            axios.post('<?php echo $apiUrl ?>/products/upload-image', formData, {
                    headers: headers,
                })
                .then(response => {
                    // Handle the success response here
                    console.log('File uploaded successfully:', response);
                    // errorImg.hidden = true
                    const imageUrl = response.data.data.image_url;
                    console.log('Image URL:', imageUrl);
                    imgUrlelement.value = imageUrl


                })
                .catch(error => {
                    alertHub.showAlert({
                        title: "",
                        description: error + " ",
                        position: "top-right",
                        type: "danger",
                        timeout: 7,
                        closeButton: false,
                        closeButtonSize: 20,
                        animation: "fade-in",
                    });
                });
        }

        // tax variables 
        const tax_cost_container = document.getElementById('tax_cost_container')
        const tax_input = document.getElementById('tax_input')
        const tax_switch = document.getElementById('tax_switch')
        tax_switch.addEventListener('change', function() {
            if (tax_switch.checked == true) {
                tax_cost_container.hidden = false
            } else {
                tax_cost_container.hidden = true
            }
        })

        if ((tax_switch.checked == true && tax_input == "") || !tax_input > 0) {

        }




        document.addEventListener("DOMContentLoaded", function() {
            var quill = new Quill('#editor');
            var form = document.getElementById('form');
            // const editor = document.getElementById('editor');
            const descriptionInput = document.getElementById('descriptionInput');
            // const cash_on_delivery_switch = document.getElementById('cash_on_delivery_switch')
            const shipping_cost = document.getElementById('shipping_cost')
            const shipping_switch = document.getElementById("shipping_switch")
            const shipping_cost_switch = document.getElementById('shipping_cost_switch')
            const refundable = document.getElementById('refundable')



            shipping_switch.addEventListener("change", function() {
                if (shipping_switch.checked) {
                    shipping_cost.hidden = true
                } else {
                    shipping_cost.hidden = false
                }
            });


            function quillToHtml(delta) {
                var tempQuill = new Quill(document.createElement('div'));
                tempQuill.setContents(delta);
                return tempQuill.root.innerHTML;
            }

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Get the contents of the editor
                var delta = quill.getContents();

                // Convert the delta to HTML
                var html = quillToHtml(delta);

                // Now use this HTML as the value
                descriptionInput.value = html;
                console.log('submit button clicked ')
                // Manually update the hidden input with the content of the div
                // descriptionInput.value = editor.innerHTML;
                // cash_on_delivery_switch.value = cash_on_delivery_switch.checked ? 'true' : 'false'
                refundable.value = refundable.checked ? 'true' : 'false'
                if (shipping_switch.checked) {
                    shipping_switch.value = 'true'
                    shipping_cost_switch.value = 0

                } else {
                    shipping_switch.value = 'false'
                }

                // Log the FormData object directly for complete form data
                var data = new FormData(form);
                console.log(data)
                hideDialog(false)
                axios({
                        method: '<?php echo $isUpdating ? "post" : "post" ?>',
                        url: '<?php echo $isUpdating ? $API_URL . '/admin/products/update/' . $_GET['id'] : $API_URL . '/admin/products/add' ?>',
                        data: data,
                        headers: headers
                    })
                    .then(function(response) {

                        // console.log(response);

                        window.location.href = 'products.php'
                    })
                    .catch(function(error) {
                        console.log(error)
                        alertHub.showAlert({
                            title: "",
                            description: error,
                            position: "top-right",
                            type: "danger",
                            timeout: 7,
                            closeButton: false,
                            closeButtonSize: 20,
                            animation: "fade-in",
                        });
                    })
                    .finally(function() {
                        hideDialog(true)
                    })
            });
        });
        </script>

    </body>

</html>
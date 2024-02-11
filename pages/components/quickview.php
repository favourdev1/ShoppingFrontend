<!-- Modal for quick viewwing a product  -->
<div
    class="modal fade"
    id="quickViewModal"
    tabindex="-1"
    aria-hidden="true"
>
    <div class="modal-dialog modal-lg modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-body p-8">
                <div class="position-absolute top-0 end-0 me-3 mt-3">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <!-- img slide -->
                        <div
                            class="product productModal"
                            id="productModal"
                        >
                            <div
                                id="zoomedImage1"
                                class="zoom"
                                onmousemove="zoom(event)"
                            >
                                <!-- img -->
                                <img
                                    id="modal_ProductImgZoom_1"
                                    alt=""
                                />
                            </div>
                            <div>
                                <div
                                    id="zoomedImage2"
                                    class="zoom"
                                    onmousemove="zoom(event)"
                                >
                                    <!-- img -->
                                    <img
                                        id="modal_ProductImgZoom_2"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div>
                                <div
                                    id="zoomedImage3"
                                    class="zoom"
                                    onmousemove="zoom(event)"
                                >
                                    <!-- img -->
                                    <img
                                        id="modal_ProductImgZoom_3"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div>
                                <div
                                    id="zoomedImage4"
                                    class="zoom"
                                    onmousemove="zoom(event)"
                                    style=""
                                >
                                    <!-- img -->
                                    <img
                                        id="modal_ProductImgZoom_4"
                                        src=""
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                            <div
                                class="thumbnails row g-3"
                                id="productModalThumbnails"
                            >
                                <div
                                    class="col-3"
                                    class="tns-nav-active"
                                >
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img
                                            id="modal_ProductImg_1"
                                            src=""
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img
                                            id="modal_ProductImg_2"
                                            src=""
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img
                                            id="modal_ProductImg_3"
                                            src=""
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img
                                            id="modal_ProductImg_4"
                                            src=""
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ps mt- mt-lg-0">
                            <a
                                href="#!"
                                class="mb-4 d-block"
                                id="modal_ProductCategory"
                            ></a>
                            <h2
                                class="mb-1 h3 title-container"
                                style="max-height:3em!important;       display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;"
                                id="modal_ProductName"
                            ></h2>
                            <!-- <div class="mb-4">
                                        <small class="text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </small>
                                        <a
                                            href="#"
                                            class="ms-2"
                                        >(30 reviews)</a>
                                    </div> -->
                            <div class="fs-4">
                                <span
                                    class="fw-bold text-dark"
                                    id="modal_ProductSalesPrice"
                                ></span>
                                <br>
                                <span
                                    class="text-decoration-line-through text-muted"
                                    id="modal_ProductRegularPrice"
                                ></span>
                                <span><small
                                        class="fs-6 ms-2 text-danger"
                                        id="discount"
                                    ></small></span>
                            </div>
                            <!-- <hr class="my-6" /> -->
                            <!-- <div class="mb-4">
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary"
                                        >250g</button>
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary"
                                        >500g</button>
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary"
                                        >1kg</button>
                                    </div> -->
                            <div>
                                <!-- input -->
                                <!-- input -->
                                <div class="input-group input-spinner">
                                    <input
                                        type="button"
                                        value="-"
                                        id="modal_quantity_minus"
                                        class="button-minus btn btn-sm"
                                        data-field="quantity"
                                    />
                                    <input
                                        type="number"
                                        step="1"
                                        max="10"
                                        value="1"
                                        id="modal_quantity"
                                        name="quantity"
                                        class="quantity-field form-control-sm form-input"
                                    />
                                    <input
                                        type="button"
                                        value="+"
                                        id="modal_quantity_add"
                                        class="button-plus btn btn-sm"
                                        data-field="quantity"
                                    />
                                </div>
                            </div>
                            <div class="mt-3 row justify-content-start g-2 align-items-center">
                                <div class="col-lg-4 col-md-5 col-6 d-grid">
                                    <!-- button -->
                                    <!-- btn -->
                                    <button
                                        type="button"
                                        class="btn btn-primary fw-100"
                                        id="addToCartButton"
                                    >
                                        <i class="feather-icon icon-shopping-bag me-2"></i>
                                        Add to cart
                                    </button>
                                </div>
                                <div class="col-md-4 col-5">
                                    <!-- btn -->
                                    <a
                                        class="btn btn-light"
                                        href="#"
                                        data-bs-toggle="tooltip"
                                        data-bs-html="true"
                                        aria-label="Compare"
                                    ><i class="bi bi-arrow-left-right"></i></a>
                                    <a
                                        class="btn btn-light"
                                        href="#!"
                                        data-bs-toggle="tooltip"
                                        data-bs-html="true"
                                        aria-label="Wishlist"
                                    ><i class="feather-icon icon-heart"></i></a>
                                </div>
                            </div>
                            <!-- <hr class="my-6" />
                                    <div>
                                        <table class="table table-borderless">
                                            <tbody>

                                                <tr>
                                                    <td>Availability:</td>
                                                    <td id="modal_Status">In Stock</td>
                                                </tr>
                                                <tr>
                                                    <td>Type:</td>
                                                    <td id="modal_Category"></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
function showQuickView(element) {

    // Extract product details from data attribute
    const productDetails = JSON.parse(element.getAttribute('data-product-details'));


    const productId = productDetails.id
    const productName = productDetails.product_name;
    const category = productDetails.category;
    const salesPrice = productDetails.sales_price;
    const regularPrice = productDetails.regular_price;
    const productStatus = productDetails.status;

    // Get modal elements
    const modalProductNameElement = document.getElementById('modal_ProductName');
    const modalProductCategoryElement = document.getElementById('modal_ProductCategory');
    const modalProductSalesPriceElement = document.getElementById('modal_ProductSalesPrice');
    const modalProductRegularPriceElement = document.getElementById('modal_ProductRegularPrice');
    // const modalCategoryElement = document.getElementById('modal_Category');
    const modalDiscount = document.getElementById('discount')



    // const productImageElement = document.getElementById('productImage');
    const modalProductImg1Element = document.getElementById('modal_ProductImg_1');
    const modalProductImg2Element = document.getElementById('modal_ProductImg_2');
    const modalProductImg3Element = document.getElementById('modal_ProductImg_3');
    const modalProductImg4Element = document.getElementById('modal_ProductImg_4');




    // const productImageElement = document.getElementById('productImage');
    const modalProductImgZoom1Element = document.getElementById('modal_ProductImgZoom_1');
    const modalProductImgZoom2Element = document.getElementById('modal_ProductImgZoom_2');
    const modalProductImgZoom3Element = document.getElementById('modal_ProductImgZoom_3');
    const modalProductImgZoom4Element = document.getElementById('modal_ProductImgZoom_4');



    // Update modal content
    modalProductNameElement.innerText = productName;
    modalProductCategoryElement.innerText = category;
    if (regularPrice != null) {
        modalProductRegularPriceElement.innerText = formatNumber(Number(regularPrice))
    }

    if (salesPrice != null) {
        modalProductSalesPriceElement.innerText = formatNumber(Number(salesPrice))

    }


    function formatNumber(number, minimumFractionDigits = 2, maximumFractionDigits = 2) {
        if (typeof number !== 'number') {
            console.error("Invalid number" + number);
            return null;
        }

        return number.toFixed(maximumFractionDigits).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    }

    // modalCategoryElement.innerHTML = category;


    // buttons 
    const quantityInput = document.getElementById('modal_quantity');
    const quantityMinusButton = document.getElementById('modal_quantity_minus');
    const quantityAddButton = document.getElementById('modal_quantity_add');


    // Calculate discount percentage

    if (regularPrice == "" || regularPrice == null) {
        modalProductRegularPriceElement.style.display = 'none'
    } else {
        modalProductRegularPriceElement.innerText = formatNumber(Number(regularPrice));
        const discountPercentage = (calculatePercentageDiscount(regularPrice, salesPrice));
        modalDiscount.innerText = discountPercentage
    }

    // document.getElementById('modal_Category').innerHTML = productStatus

    // productImageElement.src = productDetails.product_img1;
    modalProductImg1Element.src = productDetails.product_img1;
    modalProductImg2Element.src = productDetails.product_img2;
    modalProductImg3Element.src = productDetails.product_img3;
    modalProductImg4Element.src = productDetails.product_img4;

    // update zoom image 
    modalProductImgZoom1Element.src = productDetails.product_img1;
    modalProductImgZoom2Element.src = productDetails.product_img2;
    modalProductImgZoom3Element.src = productDetails.product_img3;
    modalProductImgZoom4Element.src = productDetails.product_img4;



    modalProductImg1Element.addEventListener('click', function() {
        updateBackgroundImage(productDetails.product_img1, 1)
    })
    modalProductImg2Element.addEventListener('click', function() {
        updateBackgroundImage(productDetails.product_img2, 2)
    })
    modalProductImg3Element.addEventListener('click', function() {
        updateBackgroundImage(productDetails.product_img3, 3)
    })
    modalProductImg4Element.addEventListener('click', function() {
        updateBackgroundImage(productDetails.product_img4, 4)
    })




    quantityInput.max = productDetails.quantity_in_stock;
    quantityInput.min = 1;


    // Initialize the quantity value
    quantityInput.value = 1;
    document.getElementById('modal_quantity_minus').addEventListener('click', function() {
        reduceQuantity(quantityInput.min);
    });

    document.getElementById('modal_quantity_add').addEventListener('click', function() {
        increaseQuantity(quantityInput.max);
    });


    // Show the modal
    const modal = new bootstrap.Modal(document.getElementById('quickViewModal'));
    modal.show();

    const addToCartButton = document.getElementById('addToCartButton')
    addToCartButton.addEventListener('click', function() {
        submitModalForm(productId)
    })

}
<?php if ($isHomePath) {
    $cartPage = "pages/php/cart/store.php";
    $loginPath = "pages/signin.php";
} else {
    $cartPage = "php/cart/store.php";
    $loginPath = "signin.php";

} ?>

function submitModalForm(productId) {
    // Construct the data as an object
    var formData = new FormData();
    formData.append('product_id', productId);
    formData.append('quantity', $('#modal_quantity').val());

    console.log(formData);

    axios.post('<?php echo $cartPage ?>', formData)
        .then(response => {
            // Handle the success response
            console.log(response);
        })
        .catch(error => {
            // Handle the error
            if (error.response && error.response.status === 401) {
                window.location = "<?php echo $loginPath ?>"
            }
        });


}

function updateBackgroundImage(imageSrc, id) {
    // Update the background image dynamically
    const zoomedImage = document.getElementById('zoomedImage' + id);
    zoomedImage.style.backgroundImage = 'url(' + imageSrc + ')';
    zoomedImage.style.backgroundRepeat = 'no-repeat';;
}
</script>
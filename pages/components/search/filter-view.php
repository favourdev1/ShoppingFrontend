<aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
    <div
        class="offcanvas offcanvas-start offcanvas-collapse w-md-50"
        tabindex="-1"
        id="offcanvasCategory"
        aria-labelledby="offcanvasCategoryLabel"
    >
        <div class="offcanvas-header d-lg-none">
            <h5
                class="offcanvas-title"
                id="offcanvasCategoryLabel"
            >Filter</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
            ></button>
        </div>
        <div class="offcanvas-body ps-lg-2 pt-lg-0">
            <?php if ($searchTotalProducts > 0) { ?>
            <div
                class="mb-8 border  rounded accordion"
                id="categoriesAccordion"
            >
                <!-- Categories -->
                <h5 class="mb-3">
                    <button
                        class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#categoriesCollapse"
                        aria-expanded="true"
                        aria-controls="categoriesCollapse"
                    >
                        Categories
                    </button>
                </h5>
                <div
                    id="categoriesCollapse"
                    class="accordion-collapse collapse show"
                    aria-labelledby="categoriesHeading"
                    data-bs-parent="#categoriesAccordion"
                >
                    <div class="accordion-body">
                        <!-- nav -->
                        <ul
                            class="nav nav-category pb-0 mb-0"
                            id="categoryCollapseMenu"
                        >
                            <?php foreach ($searchCategories as $index => $category) { ?>
                            <li class="nav-item  w-100">
                                <a
                                    href="#"
                                    class="nav-link Productcategory collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#categoryFlush<?php echo $index + 1; ?>"
                                    aria-expanded="false"
                                    data-category-id='<?php echo $category['category_name']; ?>'
                                    aria-controls="categoryFlush<?php echo $index + 1; ?>"
                                >
                                    <?php echo $category['category_name']; ?>
                                    <i class="feather-icon icon-chevron-right"></i>
                                </a>

                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>


            <div>
                <div class="mb-8 border p-4 rounded">
                    <!-- price -->
                    <div class="d-flex align-items-center justify-content-between">

                        <h5 class="mb-3">Price range</h5>
                        <p
                            class="text-primary fw-bold "
                            style="cursor:pointer"
                            id="applyPricing"
                        >Apply</p>
                    </div>
                    <input
                        type="range"
                        name="pieces"
                        id="inputPieces"
                        multiple
                        min="<?= $searchPriceMin; ?>"
                        max="<?= $searchPriceMax; ?>"
                    />

                    <span
                        id="priceRange-value"
                        class="small"
                    ></span>
                </div>
            </div>


            <!-- Brands  -->
            <?php if (count($searchBrands) > 0) { ?>
            <div
                class="mb-8 border  rounded accordion"
                id="brandsAccordion"
            >
                <!-- Brands -->
                <h5 class="mb-3 fw-bold">
                    <button
                        class="accordion-button fw-bold"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#brandsCollapse"
                        aria-expanded="true"
                        aria-controls="brandsCollapse"
                    >
                        Brands
                    </button>
                </h5>
                <div
                    id="brandsCollapse"
                    class="accordion-collapse collapse show"
                    aria-labelledby="brandsHeading"
                    data-bs-parent="#brandsAccordion"
                >
                    <div class="accordion-body">
                        <?php

                            $brandsFromGet = isset($_GET['brands']) ? explode(',', $_GET['brands']) : [];

                            if ($searchTotalProducts > 0) {
                                foreach ($searchBrands as $index => $brand) {
                                    ?>
                        <div class="form-check mb-2">
                            <input
                                class="form-check-input brand"
                                type="checkbox"
                                <?php echo in_array($brand['brand'], $brandsFromGet) ? 'checked' : ''; ?>
                                value="<?php echo $brand['brand'] ?>"
                                id="Brand<?php echo $index + 1; ?>"
                            >
                            <label
                                class="form-check-label"
                                for="Brand<?php echo $index + 1; ?>"
                            ><?php echo $brand['brand'] ?></label>
                        </div>
                        <?php
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
            <?php } ?>

            <!-- </div> -->

            <!-- Shipping -->
            <div class="mb-8 border p-4 rounded ">
                <!-- price -->
                <h5 class="mb-3">Deals</h5>
                <div class="form-check mb-2">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="shipping"
                    />
                    <label
                        class="form-check-label"
                        for="shipping"
                    >Shipping</label>
                </div>
                <div class="form-check mb-2">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="cash_on_delivery"
                    />
                    <label
                        class="form-check-label"
                        for="cash_on_delivery"
                    >Cash On Delivery</label>
                </div>
            </div>




            <!-- rating -->
            <div
                class="accordion"
                id="ratingAccordion"
            >
                <div class="accordion-item">
                    <h2
                        class="accordion-header"
                        id="ratingHeading"
                    >
                        <button
                            class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#ratingCollapse"
                            aria-expanded="true"
                            aria-controls="ratingCollapse"
                        >
                            Rating
                        </button>
                    </h2>
                    <div
                        id="ratingCollapse"
                        class="accordion-collapse collapse show"
                        aria-labelledby="ratingHeading"
                        data-bs-parent="#ratingAccordion"
                    >
                        <div class="accordion-body">
                            <!-- form check -->
                            <div class="form-check mb-2">
                                <!-- input -->
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="ratingFive"
                                />
                                <label
                                    class="form-check-label"
                                    for="ratingFive"
                                >
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </label>
                            </div>
                            <!-- Add other form checks here -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="mb-8 position-relative">
               
                <div class="position-absolute p-5 py-8">
                    <h3 class="mb-0">Fresh Fruits</h3>
                    <p>Get Upto 25% Off</p>
                    <a
                        href="#"
                        class="btn btn-dark"
                    >
                        Shop Now
                        <i class="feather-icon icon-arrow-right ms-1"></i>
                    </a>
                </div>
                
                <img
                    src="../assets/images/banner/assortment-citrus-fruits.png"
                    alt=""
                    class="img-fluid rounded"
                />
           
            </div> -->
        </div>
    </div>

</aside>


<script>
document.addEventListener("DOMContentLoaded", function() {

    let queryString = ""
    let min_price = ''
    let max_price = ''
    let categoryQueryString = ''

    let brandQueryString = '';
    const brandsArray = getParamsForUrlParameter().brands;
    const BrandCheckboxes = document.querySelectorAll('.form-check-input.brand');
    const CategoryLinks = document.querySelectorAll('.nav-link.Productcategory');
    categoryQueryString = getParamsForUrlParameter().category ?? '';
    min_price = getParamsForUrlParameter().min_price
    max_price = getParamsForUrlParameter().max_price;

    if (brandsArray !== null && brandsArray[0] !== undefined) {
        brandQueryString = brandsArray[0];
    }

    // Attach an event listener to each brand checkbox
    BrandCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            updateGetParams();
        });
    });

    // Attach an event listener to each category link
    CategoryLinks.forEach(function(categoryLink) {
        categoryLink.addEventListener('click', function(event) {
            event.preventDefault();
            updateCategoryParams(categoryLink);
        });
    });



    // Function to update the URL with selected brands
    function updateGetParams() {
        const checkedBrandCheckboxes = document.querySelectorAll('.form-check-input.brand:checked');
        const selectedBrands = Array.from(checkedBrandCheckboxes).map(function(checkbox) {
            return checkbox.nextElementSibling.textContent.trim();
        });
        brandQueryString = selectedBrands.length > 0 ? "" + selectedBrands.join(',') : '';
        updateUrl();
    }

    // Function to update the URL with selected categories
    function updateCategoryParams(categoryLink) {
        const categoryId = categoryLink.getAttribute('data-category-id');
        categoryQueryString = categoryId;
        updateUrl();
    }





    function getParamsForUrlParameter() {
        const queryString = window.location.search.slice(1);
        const urlParams = new URLSearchParams(queryString);

        const brandsParam = urlParams.getAll('brands');
        const categoryParam = urlParams.get('category');
        const min_price = urlParams.get('min_price')
        const max_price = urlParams.get('max_price')
        // Check if 'brands' array is empty and set it to null
        const brands = brandsParam.length === 0 ? null : brandsParam;

        return {
            brands: brands,

            max_price: max_price,
            min_price: min_price,
            category: categoryParam === '' ? null : categoryParam
        };
    }





    OmRangeSlider.init({
        min: Math.round(<?= $searchPriceMin; ?>),
        max: Math.round(<?= $searchPriceMax; ?>),

    });

    var slider = document.getElementById('inputPieces');
    const applyPricing = document.getElementById('applyPricing')


    applyPricing.addEventListener('click', function() {

        const selectedValues = slider.value

        // Log the selected values to the console
        min_price = extractMinMaxPrices(selectedValues).min_price
        max_price = extractMinMaxPrices(selectedValues).max_price
        console.log("Selected Values:", min_price);


        updateUrl()

    })

    function extractMinMaxPrices(numbersString) {
        // Split the string into an array of strings
        var numbersArray = numbersString.split(',');

        // Convert the string values to numbers
        var min_price = parseInt(numbersArray[0]);
        var max_price = parseInt(numbersArray[1]);

        // Return an object with min_price and max_price properties
        return {
            min_price: min_price,
            max_price: max_price
        };
    }

    // Function to update the URL
    function updateUrl() {
        let searchParam = '?';
        let query = "<?php echo $_GET['query'] ?? '' ?>"
        if (brandQueryString !== "" && brandQueryString !== null) {
            brandQueryString = "brands=" + brandQueryString;
        }

        if( min_price !==null ){
            min_price  = "min_price="+min_price 
        }
        

        
        if( max_price !==null ){
            max_price  = "max_price="+max_price 
        }



        if (categoryQueryString.trim() !== "" && categoryQueryString.trim() !== null && categoryQueryString
            .trim() !== 'null') {
            categoryQueryString = "category=" + categoryQueryString;
            console.log(typeof categoryQueryString + '=>' + categoryQueryString);
        }


        console.log("category Query string =" + categoryQueryString)



        if (query !== '') {

            searchParam += "query=" + query;
            console.log('query is not empty = ' + searchParam)
        }


        if (brandQueryString !== '' && brandQueryString !== null) {
            if (searchParam == '?') {
                searchParam += brandQueryString
            } else {
                searchParam += '&' + brandQueryString;
            }
        }

        if (categoryQueryString !== '' && categoryQueryString !== null && categoryQueryString != 'null') {
            if (searchParam == '?') {
                searchParam += categoryQueryString
            } else {
                searchParam += '&' + categoryQueryString;
            }
        }


        
        if (min_price !== '' && min_price !== null) {
            if (searchParam == '?') {
                searchParam += min_price
            } else {
                searchParam += '&' + min_price;
            }
        }


        if (max_price !== '' && max_price !== null) {
            if (searchParam == '?') {
                searchParam += max_price
            } else {
                searchParam += '&' + max_price;
            }
        }

        const currentUrl = '<?php echo SEARCHPAGE ?>';

        const newUrl = currentUrl + searchParam
        // console.log("brand=" + brandQueryString)
        // console.log('category=' + categoryQueryString)
        console.log(newUrl)

        // history.replaceState(null, null, newUrl);
        window.location.href = newUrl
    }
});
</script>
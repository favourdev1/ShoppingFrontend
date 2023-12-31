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
            <div class="mb-8">
                <!-- title -->
                <h5 class="mb-3">Categories</h5>
                <!-- nav -->
                <ul
                    class="nav nav-category"
                    id="categoryCollapseMenu"
                >
                    <li class="nav-item border-bottom w-100">
                        <a
                            href="#"
                            class="nav-link collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#categoryFlushOne"
                            aria-expanded="false"
                            aria-controls="categoryFlushOne"
                        >
                            Dairy, Bread & Eggs
                            <i class="feather-icon icon-chevron-right"></i>
                        </a>

                    </li>

                </ul>
            </div>

            <!-- <div class="mb-8">
                              <h5 class="mb-3">Stores</h5>
                              <div class="my-4">
                                 
                                 <input type="search" class="form-control" placeholder="Search by store" />
                              </div>
                             
                              <div class="form-check mb-2">
                                 
                                 <input class="form-check-input" type="checkbox" value="" id="eGrocery" checked />
                                 <label class="form-check-label" for="eGrocery">E-Grocery</label>
                              </div>
                             
                              <div class="form-check mb-2">
                                 
                                 <input class="form-check-input" type="checkbox" value="" id="DealShare" />
                                 <label class="form-check-label" for="DealShare">DealShare</label>
                              </div>
                             
                              <div class="form-check mb-2">
                                 
                                 <input class="form-check-input" type="checkbox" value="" id="Dmart" />
                                 <label class="form-check-label" for="Dmart">DMart</label>
                              </div>
                             
                              <div class="form-check mb-2">
                                 
                                 <input class="form-check-input" type="checkbox" value="" id="Blinkit" />
                                 <label class="form-check-label" for="Blinkit">Blinkit</label>
                              </div>
                             
                              <div class="form-check mb-2">
                                 
                                 <input class="form-check-input" type="checkbox" value="" id="BigBasket" />
                                 <label class="form-check-label" for="BigBasket">BigBasket</label>
                              </div>
                             
                              <div class="form-check mb-2">
                                 
                                 <input class="form-check-input" type="checkbox" value="" id="StoreFront" />
                                 <label class="form-check-label" for="StoreFront">StoreFront</label>
                              </div>
                             
                              <div class="form-check mb-2">
                                 
                                 <input class="form-check-input" type="checkbox" value="" id="Spencers" />
                                 <label class="form-check-label" for="Spencers">Spencers</label>
                              </div>
                             
                              <div class="form-check mb-2">
                                 
                                 <input class="form-check-input" type="checkbox" value="" id="onlineGrocery" />
                                 <label class="form-check-label" for="onlineGrocery">Online Grocery</label>
                              </div>
                           </div> -->
            <div class="mb-8">
                <!-- price -->
                <h5 class="mb-3">Price</h5>
                <div>
                    <!-- range -->
                    <div
                        id="priceRange"
                        class="mb-3"
                    ></div>
                    <small class="text-muted">Price:</small>
                    <span
                        id="priceRange-value"
                        class="small"
                    ></span>
                </div>
            </div>


            <div class="mb-8">
                <!-- price -->
                <h5 class="mb-3">Brands</h5>
                <div class="form-check mb-2">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="Brand1"
                    />
                    <label
                        class="form-check-label"
                        for="Brand1"
                    >Brand1</label>
                </div>
                <div class="form-check mb-2">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="Brand1"
                    />
                    <label
                        class="form-check-label"
                        for="Brand1"
                    >Brand1</label>
                </div>
            </div>
        <!-- </div> -->

        <!-- Shipping -->
        <div class="mb-8">
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
        <div class="mb-8">
            <h5 class="mb-3">Rating</h5>
            <div>
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
                <!-- form check -->
                <div class="form-check mb-2">
                    <!-- input -->
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="ratingFour"
                        checked
                    />
                    <label
                        class="form-check-label"
                        for="ratingFour"
                    >
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </label>
                </div>
                <!-- form check -->
                <div class="form-check mb-2">
                    <!-- input -->
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="ratingThree"
                    />
                    <label
                        class="form-check-label"
                        for="ratingThree"
                    >
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </label>
                </div>
                <!-- form check -->
                <div class="form-check mb-2">
                    <!-- input -->
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="ratingTwo"
                    />
                    <label
                        class="form-check-label"
                        for="ratingTwo"
                    >
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </label>
                </div>
                <!-- form check -->
                <div class="form-check mb-2">
                    <!-- input -->
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="ratingOne"
                    />
                    <label
                        class="form-check-label"
                        for="ratingOne"
                    >
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-8 position-relative">
            <!-- Banner Design -->
            <!-- Banner Content -->
            <!-- <div class="position-absolute p-5 py-8">
                <h3 class="mb-0">Fresh Fruits</h3>
                <p>Get Upto 25% Off</p>
                <a
                    href="#"
                    class="btn btn-dark"
                >
                    Shop Now
                    <i class="feather-icon icon-arrow-right ms-1"></i>
                </a>
            </div> -->
            <!-- Banner Content -->
            <!-- Banner Image -->
            <!-- img -->
            <!-- <img
                src="../assets/images/banner/assortment-citrus-fruits.png"
                alt=""
                class="img-fluid rounded"
            /> -->
            <!-- Banner Image -->
        </div>
    </div>
    </div>
</aside>
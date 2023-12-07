<!DOCTYPE html>
<html lang="en">

    <?php include_once('header.php')?>

    <body>
        <!-- navbar -->
        <?php include_once('navbar.php')?>
        <!-- Modal -->
        <div
            class="modal fade"
            id="userModal"
            tabindex="-1"
            aria-labelledby="userModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-4">
                    <div class="modal-header border-0">
                        <h5
                            class="modal-title fs-3 fw-bold"
                            id="userModalLabel"
                        >Sign Up</h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <form
                            class="needs-validation"
                            novalidate
                        >
                            <div class="mb-3">
                                <label
                                    for="fullName"
                                    class="form-label"
                                >Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="fullName"
                                    placeholder="Enter Your Name"
                                    required
                                />
                                <div class="invalid-feedback">Please enter name.</div>
                            </div>
                            <div class="mb-3">
                                <label
                                    for="email"
                                    class="form-label"
                                >Email address</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Enter Email address"
                                    required
                                />
                                <div class="invalid-feedback">Please enter email.</div>
                            </div>
                            <div class="mb-3">
                                <label
                                    for="password"
                                    class="form-label"
                                >Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Enter Password"
                                    required
                                />
                                <div class="invalid-feedback">Please enter password.</div>
                                <small class="form-text">
                                    By Signup, you agree to our
                                    <a href="#!">Terms of Service</a>
                                    &
                                    <a href="#!">Privacy Policy</a>
                                </small>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-primary"
                                type="submit"
                            >Sign Up</button>
                        </form>
                    </div>
                    <div class="modal-footer border-0 justify-content-center">
                        Already have an account?
                        <a href="#">Sign in</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- OffCart Canvas -->
        <?php include_once('offcart.php')?>


        <!-- Modal -->
        <div
            class="modal fade"
            id="locationModal"
            tabindex="-1"
            aria-labelledby="locationModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-6">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5
                                    class="mb-1"
                                    id="locationModalLabel"
                                >Choose your Delivery Location</h5>
                                <p class="mb-0 small">Enter your address and we will specify the offer you area.</p>
                            </div>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="my-5">
                            <input
                                type="search"
                                class="form-control"
                                placeholder="Search your area"
                            />
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="mb-0">Select Location</h6>
                            <a
                                href="#"
                                class="btn btn-outline-gray-400 text-muted btn-sm"
                            >Clear All</a>
                        </div>
                        <div>
                            <div
                                data-simplebar
                                style="height: 300px"
                            >
                                <div class="list-group list-group-flush">
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active"
                                    >
                                        <span>Alabama</span>
                                        <span>Min:$20</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action"
                                    >
                                        <span>Alaska</span>
                                        <span>Min:$30</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action"
                                    >
                                        <span>Arizona</span>
                                        <span>Min:$50</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action"
                                    >
                                        <span>California</span>
                                        <span>Min:$29</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action"
                                    >
                                        <span>Colorado</span>
                                        <span>Min:$80</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action"
                                    >
                                        <span>Florida</span>
                                        <span>Min:$90</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action"
                                    >
                                        <span>Arizona</span>
                                        <span>Min:$50</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action"
                                    >
                                        <span>California</span>
                                        <span>Min:$29</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action"
                                    >
                                        <span>Colorado</span>
                                        <span>Min:$80</span>
                                    </a>
                                    <a
                                        href="#"
                                        class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action"
                                    >
                                        <span>Florida</span>
                                        <span>Min:$90</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../assets/js/vendors/validation.js"></script>

        <main>
            <!-- section-->
            <div class="mt-4">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-12">
                            <!-- breadcrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#!">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >Shop Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section -->
            <section class="mb-lg-14 mb-8 mt-8">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <!-- card -->
                            <div class="card py-1 border-0 mb-8">
                                <div>
                                    <h1 class="fw-bold">Shop Cart</h1>
                                    <p class="mb-0">Shopping in 382480</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="py-3">
                                <!-- alert -->
                                <div
                                    class="alert alert-danger p-2"
                                    role="alert"
                                >
                                    You’ve got FREE delivery. Start
                                    <a
                                        href="#!"
                                        class="alert-link"
                                    >checkout now!</a>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <!-- list group -->
                                    <li class="list-group-item py-3 ps-0 border-top">
                                        <!-- row -->
                                        <div class="row align-items-center">
                                            <div class="col-6 col-md-6 col-lg-7">
                                                <div class="d-flex">
                                                    <img
                                                        src="../assets/images/products/product-img-1.jpg"
                                                        alt="Ecommerce"
                                                        class="icon-shape icon-xxl"
                                                    />
                                                    <div class="ms-3">
                                                        <!-- title -->
                                                        <a
                                                            href="shop-single.html"
                                                            class="text-inherit"
                                                        >
                                                            <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                        </a>
                                                        <span><small class="text-muted">.98 / lb</small></span>
                                                        <!-- text -->
                                                        <div class="mt-2 small lh-1">
                                                            <a
                                                                href="#!"
                                                                class="text-decoration-none text-inherit"
                                                            >
                                                                <span class="me-1 align-text-bottom">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="14"
                                                                        height="14"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="feather feather-trash-2 text-danger"
                                                                    >
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                                                        ></path>
                                                                        <line
                                                                            x1="10"
                                                                            y1="11"
                                                                            x2="10"
                                                                            y2="17"
                                                                        ></line>
                                                                        <line
                                                                            x1="14"
                                                                            y1="11"
                                                                            x2="14"
                                                                            y2="17"
                                                                        ></line>
                                                                    </svg>
                                                                </span>
                                                                <span class="text-muted">Remove</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input group -->
                                            <div class="col-4 col-md-3 col-lg-3">
                                                <!-- input -->
                                                <!-- input -->
                                                <div class="input-group input-spinner">
                                                    <input
                                                        type="button"
                                                        value="-"
                                                        class="button-minus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                    <input
                                                        type="number"
                                                        step="1"
                                                        max="10"
                                                        value="1"
                                                        name="quantity"
                                                        class="quantity-field form-control-sm form-input"
                                                    />
                                                    <input
                                                        type="button"
                                                        value="+"
                                                        class="button-plus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                </div>
                                            </div>
                                            <!-- price -->
                                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                <span class="fw-bold">$5.00</span>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group -->
                                    <li class="list-group-item py-3 ps-0">
                                        <!-- row -->
                                        <div class="row align-items-center">
                                            <div class="col-6 col-md-6 col-lg-7">
                                                <div class="d-flex">
                                                    <img
                                                        src="../assets/images/products/product-img-2.jpg"
                                                        alt="Ecommerce"
                                                        class="icon-shape icon-xxl"
                                                    />
                                                    <div class="ms-3">
                                                        <a
                                                            href="shop-single.html"
                                                            class="text-inherit"
                                                        >
                                                            <h6 class="mb-0">NutriChoice Digestive</h6>
                                                        </a>
                                                        <span><small class="text-muted">250g</small></span>
                                                        <!-- text -->
                                                        <div class="mt-2 small lh-1">
                                                            <a
                                                                href="#!"
                                                                class="text-decoration-none text-inherit"
                                                            >
                                                                <span class="me-1 align-text-bottom">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="14"
                                                                        height="14"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="feather feather-trash-2 text-danger"
                                                                    >
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                                                        ></path>
                                                                        <line
                                                                            x1="10"
                                                                            y1="11"
                                                                            x2="10"
                                                                            y2="17"
                                                                        ></line>
                                                                        <line
                                                                            x1="14"
                                                                            y1="11"
                                                                            x2="14"
                                                                            y2="17"
                                                                        ></line>
                                                                    </svg>
                                                                </span>
                                                                <span class="text-muted">Remove</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- input group -->
                                            <div class="col-4 col-md-3 col-lg-3">
                                                <!-- input -->
                                                <!-- input -->
                                                <div class="input-group input-spinner">
                                                    <input
                                                        type="button"
                                                        value="-"
                                                        class="button-minus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                    <input
                                                        type="number"
                                                        step="1"
                                                        max="10"
                                                        value="1"
                                                        name="quantity"
                                                        class="quantity-field form-control-sm form-input"
                                                    />
                                                    <input
                                                        type="button"
                                                        value="+"
                                                        class="button-plus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                </div>
                                            </div>
                                            <!-- price -->
                                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                <span class="fw-bold text-danger">$20.00</span>
                                                <div class="text-decoration-line-through text-muted small">$26.00</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group -->
                                    <li class="list-group-item py-3 ps-0">
                                        <!-- row -->
                                        <div class="row align-items-center">
                                            <div class="col-6 col-md-6 col-lg-7">
                                                <div class="d-flex">
                                                    <img
                                                        src="../assets/images/products/product-img-3.jpg"
                                                        alt="Ecommerce"
                                                        class="icon-shape icon-xxl"
                                                    />
                                                    <div class="ms-3">
                                                        <!-- title -->
                                                        <a
                                                            href="shop-single.html"
                                                            class="text-inherit"
                                                        >
                                                            <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                                        </a>
                                                        <span><small class="text-muted">1 kg</small></span>
                                                        <!-- text -->
                                                        <div class="mt-2 small lh-1">
                                                            <a
                                                                href="#!"
                                                                class="text-decoration-none text-inherit"
                                                            >
                                                                <span class="me-1 align-text-bottom">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="14"
                                                                        height="14"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="feather feather-trash-2 text-danger"
                                                                    >
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                                                        ></path>
                                                                        <line
                                                                            x1="10"
                                                                            y1="11"
                                                                            x2="10"
                                                                            y2="17"
                                                                        ></line>
                                                                        <line
                                                                            x1="14"
                                                                            y1="11"
                                                                            x2="14"
                                                                            y2="17"
                                                                        ></line>
                                                                    </svg>
                                                                </span>
                                                                <span class="text-muted">Remove</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- input group -->
                                            <div class="col-4 col-md-3 col-lg-3">
                                                <!-- input -->
                                                <!-- input -->
                                                <div class="input-group input-spinner">
                                                    <input
                                                        type="button"
                                                        value="-"
                                                        class="button-minus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                    <input
                                                        type="number"
                                                        step="1"
                                                        max="10"
                                                        value="1"
                                                        name="quantity"
                                                        class="quantity-field form-control-sm form-input"
                                                    />
                                                    <input
                                                        type="button"
                                                        value="+"
                                                        class="button-plus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                </div>
                                            </div>
                                            <!-- price -->
                                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                <span class="fw-bold">$15.00</span>
                                                <div class="text-decoration-line-through text-muted small">$20.00</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group -->
                                    <li class="list-group-item py-3 ps-0">
                                        <!-- row -->
                                        <div class="row align-items-center">
                                            <div class="col-6 col-md-6 col-lg-7">
                                                <div class="d-flex">
                                                    <img
                                                        src="../assets/images/products/product-img-4.jpg"
                                                        alt="Ecommerce"
                                                        class="icon-shape icon-xxl"
                                                    />
                                                    <div class="ms-3">
                                                        <!-- title -->
                                                        <!-- title -->
                                                        <a
                                                            href="shop-single.html"
                                                            class="text-inherit"
                                                        >
                                                            <h6 class="mb-0">Onion Flavour Potato</h6>
                                                        </a>
                                                        <span><small class="text-muted">250g</small></span>
                                                        <!-- text -->
                                                        <div class="mt-2 small lh-1">
                                                            <a
                                                                href="#!"
                                                                class="text-decoration-none text-inherit"
                                                            >
                                                                <span class="me-1 align-text-bottom">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="14"
                                                                        height="14"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="feather feather-trash-2 text-danger"
                                                                    >
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                                                        ></path>
                                                                        <line
                                                                            x1="10"
                                                                            y1="11"
                                                                            x2="10"
                                                                            y2="17"
                                                                        ></line>
                                                                        <line
                                                                            x1="14"
                                                                            y1="11"
                                                                            x2="14"
                                                                            y2="17"
                                                                        ></line>
                                                                    </svg>
                                                                </span>
                                                                <span class="text-muted">Remove</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- input group -->
                                            <div class="col-4 col-md-3 col-lg-3">
                                                <!-- input -->
                                                <!-- input -->
                                                <div class="input-group input-spinner">
                                                    <input
                                                        type="button"
                                                        value="-"
                                                        class="button-minus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                    <input
                                                        type="number"
                                                        step="1"
                                                        max="10"
                                                        value="1"
                                                        name="quantity"
                                                        class="quantity-field form-control-sm form-input"
                                                    />
                                                    <input
                                                        type="button"
                                                        value="+"
                                                        class="button-plus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                </div>
                                            </div>
                                            <!-- price -->
                                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                <span class="fw-bold">$15.00</span>
                                                <div class="text-decoration-line-through text-muted small">$20.00</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group -->
                                    <li class="list-group-item py-3 ps-0 border-bottom">
                                        <!-- row -->
                                        <div class="row align-items-center">
                                            <div class="col-6 col-md-6 col-lg-7">
                                                <div class="d-flex">
                                                    <img
                                                        src="../assets/images/products/product-img-5.jpg"
                                                        alt="Ecommerce"
                                                        class="icon-shape icon-xxl"
                                                    />
                                                    <div class="ms-3">
                                                        <!-- title -->
                                                        <a
                                                            href="shop-single.html"
                                                            class="text-inherit"
                                                        >
                                                            <h6 class="mb-0">Salted Instant Popcorn</h6>
                                                        </a>
                                                        <span><small class="text-muted">100g</small></span>
                                                        <!-- text -->
                                                        <div class="mt-2 small lh-1">
                                                            <a
                                                                href="#!"
                                                                class="text-decoration-none text-inherit"
                                                            >
                                                                <span class="me-1 align-text-bottom">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="14"
                                                                        height="14"
                                                                        viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="feather feather-trash-2 text-danger"
                                                                    >
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                                                        ></path>
                                                                        <line
                                                                            x1="10"
                                                                            y1="11"
                                                                            x2="10"
                                                                            y2="17"
                                                                        ></line>
                                                                        <line
                                                                            x1="14"
                                                                            y1="11"
                                                                            x2="14"
                                                                            y2="17"
                                                                        ></line>
                                                                    </svg>
                                                                </span>
                                                                <span class="text-muted">Remove</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- input group -->
                                            <div class="col-4 col-md-3 col-lg-3">
                                                <!-- input -->
                                                <!-- input -->
                                                <div class="input-group input-spinner">
                                                    <input
                                                        type="button"
                                                        value="-"
                                                        class="button-minus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                    <input
                                                        type="number"
                                                        step="1"
                                                        max="10"
                                                        value="1"
                                                        name="quantity"
                                                        class="quantity-field form-control-sm form-input"
                                                    />
                                                    <input
                                                        type="button"
                                                        value="+"
                                                        class="button-plus btn btn-sm"
                                                        data-field="quantity"
                                                    />
                                                </div>
                                            </div>
                                            <!-- price -->
                                            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                                <span class="fw-bold">$15.00</span>
                                                <div class="text-decoration-line-through text-muted small">$25.00</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- btn -->
                                <div class="d-flex justify-content-between mt-4">
                                    <a
                                        href="#!"
                                        class="btn btn-primary"
                                    >Continue Shopping</a>
                                    <a
                                        href="#!"
                                        class="btn btn-dark"
                                    >Update Cart</a>
                                </div>
                            </div>
                        </div>

                        <!-- sidebar -->
                        <div class="col-12 col-lg-4 col-md-5">
                            <!-- card -->
                            <div class="mb-5 card mt-6">
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <h2 class="h5 mb-4">Summary</h2>
                                    <div class="card mb-2">
                                        <!-- list group -->
                                        <ul class="list-group list-group-flush">
                                            <!-- list group item -->
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Item Subtotal</div>
                                                </div>
                                                <span>$70.00</span>
                                            </li>

                                            <!-- list group item -->
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div>Service Fee</div>
                                                </div>
                                                <span>$3.00</span>
                                            </li>
                                            <!-- list group item -->
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="fw-bold">Subtotal</div>
                                                </div>
                                                <span class="fw-bold">$67.00</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-grid mb-1 mt-4">
                                        <!-- btn -->
                                        <button
                                            class="btn btn-primary btn-lg d-flex justify-content-between align-items-center"
                                            type="submit"
                                        >
                                            Go to Checkout
                                            <span class="fw-bold">$67.00</span>
                                        </button>
                                    </div>
                                    <!-- text -->
                                    <p>
                                        <small>
                                            By placing your order, you agree to be bound by the Freshcart
                                            <a href="#!">Terms of Service</a>
                                            and
                                            <a href="#!">Privacy Policy.</a>
                                        </small>
                                    </p>

                                    <!-- heading -->
                                    <div class="mt-8">
                                        <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                                        <form>
                                            <div class="mb-2">
                                                <!-- input -->
                                                <label
                                                    for="giftcard"
                                                    class="form-label sr-only"
                                                >Email address</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="giftcard"
                                                    placeholder="Promo or Gift Card"
                                                />
                                            </div>
                                            <!-- btn -->
                                            <div class="d-grid"><button
                                                    type="submit"
                                                    class="btn btn-outline-dark mb-1"
                                                >Redeem</button></div>
                                            <p class="text-muted mb-0"><small>Terms & Conditions apply</small></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row g-4 py-4">
                    <div class="col-12 col-md-12 col-lg-4">
                        <h6 class="mb-4">Categories</h6>
                        <div class="row">
                            <div class="col-6">
                                <!-- list -->
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Vegetables & Fruits</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Breakfast & instant food</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Bakery & Biscuits</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Atta, rice & dal</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Sauces & spreads</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Organic & gourmet</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Baby care</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Cleaning essentials</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Personal care</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <!-- list -->
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Dairy, bread & eggs</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Cold drinks & juices</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Tea, coffee & drinks</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Masala, oil & more</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Chicken, meat & fish</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Paan corner</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Pharma & wellness</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Home & office</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Pet care</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="row g-4">
                            <div class="col-6 col-sm-6 col-md-3">
                                <h6 class="mb-4">Get to know us</h6>
                                <!-- list -->
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Company</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >About</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#1"
                                            class="nav-link"
                                        >Blog</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Help Center</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Our Value</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <h6 class="mb-4">For Consumers</h6>
                                <ul class="nav flex-column">
                                    <!-- list -->
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Payments</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Shipping</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Product Returns</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >FAQ</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="shop-checkout.html"
                                            class="nav-link"
                                        >Shop Checkout</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <h6 class="mb-4">Become a Shopper</h6>
                                <ul class="nav flex-column">
                                    <!-- list -->
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Shopper Opportunities</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Become a Shopper</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Earnings</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Ideas & Guides</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >New Retailers</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <h6 class="mb-4">Freshcart programs</h6>
                                <ul class="nav flex-column">
                                    <!-- list -->
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Freshcart programs</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Gift Cards</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Promos & Coupons</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Freshcart Ads</a></li>
                                    <li class="nav-item mb-2"><a
                                            href="#!"
                                            class="nav-link"
                                        >Careers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top py-4">
                    <div class="row align-items-center">
                        <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item text-dark">Payment Partners</li>
                                <li class="list-inline-item">
                                    <a href="#!"><img
                                            src="../assets/images/payment/amazonpay.svg"
                                            alt=""
                                        /></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!"><img
                                            src="../assets/images/payment/american-express.svg"
                                            alt=""
                                        /></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!"><img
                                            src="../assets/images/payment/mastercard.svg"
                                            alt=""
                                        /></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!"><img
                                            src="../assets/images/payment/paypal.svg"
                                            alt=""
                                        /></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!"><img
                                            src="../assets/images/payment/visa.svg"
                                            alt=""
                                        /></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7 mt-4 mt-md-0">
                            <ul class="list-inline mb-0 text-lg-end text-center">
                                <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
                                <li class="list-inline-item ms-4">
                                    <a href="#!"><img
                                            src="../assets/images/appbutton/appstore-btn.svg"
                                            alt=""
                                            style="width: 140px"
                                        /></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#!"><img
                                            src="../assets/images/appbutton/googleplay-btn.svg"
                                            alt=""
                                            style="width: 140px"
                                        /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border-top py-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <span class="small text-muted">
                                © 2022
                                <span id="copyright">
                                    -
                                    <script>
                                    document.getElementById("copyright").appendChild(document.createTextNode(new Date()
                                        .getFullYear()));
                                    </script>
                                </span>
                                FreshCart eCommerce HTML Template. All rights reserved. Powered by
                                <a href="https://codescandy.com/">Codescandy</a>
                                .
                            </span>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
                                <li class="list-inline-item text-muted">Follow us on</li>
                                <li class="list-inline-item me-1">
                                    <a
                                        href="#!"
                                        class="btn btn-xs btn-social btn-icon"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-facebook"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li class="list-inline-item me-1">
                                    <a
                                        href="#!"
                                        class="btn btn-xs btn-social btn-icon"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-twitter"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a
                                        href="#!"
                                        class="btn btn-xs btn-social btn-icon"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-instagram"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                                            />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Javascript-->
        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>
    </body>

    <!-- Mirrored from freshcart.codescandy.com/pages/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 01:17:52 GMT -->

</html>
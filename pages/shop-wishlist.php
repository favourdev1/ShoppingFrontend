<!DOCTYPE html>
<html lang="en">

    <?php $pageName='Favourite Sosmart - Online shopping and more'?>

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

            <!-- section -->
            <section class="mt-8 mb-14">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-8">
                                <!-- heading -->
                                <h1 class="mb-1">My Wishlist</h1>
                                <p>There are 5 products in this wishlist.</p>
                            </div>
                            <div>
                                <!-- table -->
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-with-checkbox">
                                        <thead class="table-light">
                                            <tr>
                                                <th>
                                                    <!-- form check -->
                                                    <div class="form-check">
                                                        <!-- input -->
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value=""
                                                            id="checkAll"
                                                        />
                                                        <!-- label -->
                                                        <label
                                                            class="form-check-label"
                                                            for="checkAll"
                                                        ></label>
                                                    </div>
                                                </th>
                                                <th></th>
                                                <th>Product</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">
                                                    <!-- form check -->
                                                    <div class="form-check">
                                                        <!-- input -->
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value=""
                                                            id="chechboxTwo"
                                                        />
                                                        <!-- label -->
                                                        <label
                                                            class="form-check-label"
                                                            for="chechboxTwo"
                                                        ></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#"><img
                                                            src="../assets/images/products/product-img-18.jpg"
                                                            class="icon-shape icon-xxl"
                                                            alt=""
                                                        /></a>
                                                </td>
                                                <td class="align-middle">
                                                    <div>
                                                        <h5 class="fs-6 mb-0"><a
                                                                href="#"
                                                                class="text-inherit"
                                                            >Organic Banana</a></h5>
                                                        <small>$.98 / lb</small>
                                                    </div>
                                                </td>
                                                <td class="align-middle">$35.00</td>
                                                <td class="align-middle"><span class="badge bg-success">In Stock</span>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn btn-primary btn-sm">Add to Cart</div>
                                                </td>
                                                <td class="align-middle">
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="Delete"
                                                    >
                                                        <i class="feather-icon icon-trash-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <!-- form check -->
                                                    <div class="form-check">
                                                        <!-- input -->
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value=""
                                                            id="chechboxThree"
                                                        />
                                                        <!-- label -->
                                                        <label
                                                            class="form-check-label"
                                                            for="chechboxThree"
                                                        ></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#"><img
                                                            src="../assets/images/products/product-img-17.jpg"
                                                            class="icon-shape icon-xxl"
                                                            alt=""
                                                        /></a>
                                                </td>
                                                <td class="align-middle">
                                                    <div>
                                                        <h5 class="fs-6 mb-0"><a
                                                                href="#"
                                                                class="text-inherit"
                                                            >Fresh Kiwi</a></h5>
                                                        <small>4 no</small>
                                                    </div>
                                                </td>
                                                <td class="align-middle">$20.97</td>
                                                <td class="align-middle"><span class="badge bg-danger">Out of
                                                        Stock</span></td>
                                                <td class="align-middle">
                                                    <div class="btn btn-dark btn-sm">Contact us</div>
                                                </td>
                                                <td class="align-middle">
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="Delete"
                                                    >
                                                        <i class="feather-icon icon-trash-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <!-- form check -->
                                                    <div class="form-check">
                                                        <!-- input -->
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value=""
                                                            id="chechboxFour"
                                                        />
                                                        <!-- label -->
                                                        <label
                                                            class="form-check-label"
                                                            for="chechboxFour"
                                                        ></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#"><img
                                                            src="../assets/images/products/product-img-16.jpg"
                                                            class="icon-shape icon-xxl"
                                                            alt=""
                                                        /></a>
                                                </td>
                                                <td class="align-middle">
                                                    <div>
                                                        <h5 class="fs-6 mb-0"><a
                                                                href="#"
                                                                class="text-inherit"
                                                            >Golden Pineapple</a></h5>
                                                        <small>2 no</small>
                                                    </div>
                                                </td>
                                                <td class="align-middle">$35.00</td>
                                                <td class="align-middle"><span class="badge bg-success">In Stock</span>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn btn-primary btn-sm">Add to Cart</div>
                                                </td>
                                                <td class="align-middle">
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="Delete"
                                                    >
                                                        <i class="feather-icon icon-trash-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <!-- form check -->
                                                    <div class="form-check">
                                                        <!-- input -->
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value=""
                                                            id="chechboxFive"
                                                        />
                                                        <!-- label -->
                                                        <label
                                                            class="form-check-label"
                                                            for="chechboxFive"
                                                        ></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#"><img
                                                            src="../assets/images/products/product-img-19.jpg"
                                                            class="icon-shape icon-xxl"
                                                            alt=""
                                                        /></a>
                                                </td>
                                                <td class="align-middle">
                                                    <div>
                                                        <h5 class="fs-6 mb-0"><a
                                                                href="#"
                                                                class="text-inherit"
                                                            >BeatRoot</a></h5>
                                                        <small>1 kg</small>
                                                    </div>
                                                </td>
                                                <td class="align-middle">$29.00</td>
                                                <td class="align-middle"><span class="badge bg-success">In Stock</span>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn btn-primary btn-sm">Add to Cart</div>
                                                </td>
                                                <td class="align-middle">
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="Delete"
                                                    >
                                                        <i class="feather-icon icon-trash-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <!-- form check -->
                                                    <div class="form-check">
                                                        <!-- input -->
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value=""
                                                            id="chechboxSix"
                                                        />
                                                        <!-- label -->
                                                        <label
                                                            class="form-check-label"
                                                            for="chechboxSix"
                                                        ></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#"><img
                                                            src="../assets/images/products/product-img-15.jpg"
                                                            class="icon-shape icon-xxl"
                                                            alt=""
                                                        /></a>
                                                </td>
                                                <td class="align-middle">
                                                    <div>
                                                        <h5 class="fs-6 mb-0"><a
                                                                href="#"
                                                                class="text-inherit"
                                                            >Fresh Apple</a></h5>
                                                        <small>2 kg</small>
                                                    </div>
                                                </td>
                                                <td class="align-middle">$70.00</td>
                                                <td class="align-middle"><span class="badge bg-success">In Stock</span>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn btn-primary btn-sm">Add to Cart</div>
                                                </td>
                                                <td class="align-middle">
                                                    <a
                                                        href="#"
                                                        class="text-muted"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="Delete"
                                                    >
                                                        <i class="feather-icon icon-trash-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <!-- footer -->
        <?php include_once('footer.php')?>
        <!-- Javascript-->
        <!-- Libs JS -->
        <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.min.js"></script>

    </body>


</html>
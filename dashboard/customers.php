<!DOCTYPE html>
<html lang="en">



    <?php include_once('header.php') ?>

    <body>
        <!-- main -->
        <!-- navbar -->

        <?php include_once('navbar.php'); ?>
        <?php include_once('php/profile/fetchAll.php'); ?>


        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
            <?php include_once('sidebar.php') ?>

            <main class="main-content-wrapper">
                <div class="">
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                                <div>
                                    <h2>Users</h2>
                                    <!-- breacrumb -->

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-12 mb-5">
                            <div class=" h-100 rounded-4 border">
                                <div class="p-6">
                                    <div class="row justify-content-between">
                                        <div class="col-md-4 col-12">
                                            <form
                                                class="d-flex"
                                                role="search"
                                            >
                                                <input
                                                    class="form-control"
                                                    type="search"
                                                    placeholder="Search Customers"
                                                    aria-label="Search"
                                                />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive h-100">
                                        <table
                                            class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap h-100"
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
                                                    <th>Fullname</th>
                                                    <th>Email</th>
                                                    <th>admin</th>
                                                    <th>phone_number</th>
                                                    <th>Status</th>

                                                    <th>Date Created</th>

                                                    <!-- <th>Spent</th> -->

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                foreach ($users as $user) {
                                                    $status = 'active';
                                                    $usersName = $user['firstname'] . ' ' . $user['lastname'];
                                                    $id = $user['id'];
                                                    $firstname = $user['firstname'];
                                                    $lastname = $user['lastname'];
                                                    $address = $user['address'];
                                                    $country = $user['country'];
                                                    $city = $user['city'];
                                                    $phone_number = $user['phone_number'];
                                                    $profile_img = $user['profile_img'];
                                                    $is_admin = $user['is_admin']==true?'true':'false';
                                                    $email = $user['email'];
                                                    $email_verified_at = $user['email_verified_at'];
                                                    $created_at = date("d/m/Y", strtotime($user['created_at']));
                                                    $updated_at = $user['updated_at'];
                                                }
                                                ?>


                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="checkbox"
                                                                value=""
                                                                id="customerOne"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="customerOne"
                                                            ></label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img
                                                                src="../assets/images/avatar/avatar-1.jpg"
                                                                alt=""
                                                                class="avatar avatar-xs rounded-circle"
                                                            />
                                                            <div class="ms-2">
                                                                <a
                                                                    href="#"
                                                                    class="text-inherit"
                                                                ><?php echo $usersName ?></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $email ?></td>

                                                    <td><?php echo strval($is_admin) ?></td>
                                                    <td><?php echo $phone_number ?></td>
                                                    <td>
                                                        <small
                                                            class="badge  <?php echo $status == 'active' ? 'bg-light-success text-dark-success' : 'bg-light-danger text-dark-danger'; ?> "
                                                        ><?php echo ucfirst($status); ?></small>
                                                    </td>

                                                    <td><?php echo $created_at; ?></td>

                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <form>
                                                                <div class="form-check form-switch mb-4">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="checkbox"
                                                                        role="switch"
                                                                        id="flexSwitchStock"
                                                                        checked
                                                                    />

                                                                </div>
                                                            </form>
                                                        
                                                            <script>
      // With the above scripts loaded, you can call `tippy()` with a CSS
      // selector and a `content` prop:
      tippy('#flexSwitchStock', {
        content: 'disable/enable user !',
        animation: 'fade',
      });
    </script>
                                                        
                                                        </div>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="border-top d-md-flex justify-content-between align-items-center p-6">
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
                                    </div>
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

    </body>


</html>
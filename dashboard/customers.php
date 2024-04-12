<!DOCTYPE html>
<html lang="en">



<?php include_once 'header.php'; ?>

<body>
    <!-- main -->
    <!-- navbar -->
    <?php include_once('loadDialog.php') ?>

    <?php include_once 'navbar.php'; ?>
    <?php include_once 'php/profile/fetchAll.php'; ?>


    <div class="main-wrapper">
        <!-- navbar vertical -->
        <!-- navbar -->
        <?php include_once 'sidebar.php'; ?>

        <main class="main-content-wrapper">
            <div class="">
                <div class="row mb-8">
                    <div class="col-md-12">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
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
                                        <form class="d-flex" role="search">
                                            <input class="form-control" type="search" placeholder="Search Customers"
                                                aria-label="Search" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive h-100">
                                    <table
                                        class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap h-100">
                                        <thead class="bg-light">
                                            <tr>

                                                <th class="">Fullname</th>
                                                <th class="">Email</th>
                                                <th class="">admin</th>
                                                <th class="">phone_number</th>
                                                <th class="">Status</th>

                                                <th class="">Date Created</th>

                                                <!-- <th class="">Spent</th> -->

                                                <th class="">Action</th>
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
                                                $is_admin = $user['is_admin'] == true ? 'true' : 'false';
                                                $email = $user['email'];
                                                $email_verified_at = $user['email_verified_at'];
                                                $created_at = date('d/m/Y', strtotime($user['created_at']));
                                                $updated_at = $user['updated_at'];
                                            
                                            ?>


                                            <tr class="py-2">


                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../assets/images/avatar/avatar-1.jpg" alt=""
                                                            class="avatar avatar-xs rounded-circle" />
                                                        <div class="ms-2">
                                                            <a href="#"
                                                                class="text-inherit small py-0"><?php echo $usersName; ?></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="small py-0"><?php echo $email; ?></td>

                                                <td class="small py-0"><?php echo strval($is_admin); ?></td>
                                                <td class="small py-0"><?php echo $phone_number; ?></td>
                                                <td class="small py-0">
                                                    <small
                                                        class="badge  <?php echo $status == 'active' ? 'bg-light-success text-dark-success' : 'bg-light-danger text-dark-danger'; ?> "><?php echo ucfirst($status); ?></small>
                                                </td>

                                                <td class="small py-0"><?php echo $created_at; ?></td>

                                                <td class="small py-0">
                                                    <div class="d-flex align-items-center">

                                                        <div class=" ">
                                                            <?php if($is_admin == 'true') { ?>
                                                            <button class="btn btn-primary adminButton btn-sm mx-auto"
                                                                id="adminButton" data-id="<?php echo $id; ?>" data-admin-status="<?= $is_admin;?>">disable
                                                                Admin</button>
                                                            <?php } else { ?>
                                                            <button class="btn btn-danger adminButton btn-sm mx-auto"
                                                                id="adminButton"  data-admin-status="<?= $is_admin;?>" data-id="<?php echo $id; ?>">make
                                                                Admin</button>
                                                            <?php } ?>

                                                        </div>



                                                        <!-- <div class="modal d-block" style="opacity:1" id="myModal"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered ">
                                                                <div class="modal-content border ">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                           Alert</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to make this user an admin
                                                                        ?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                    </div>

                                </div>
                                </td>
                                </tr>
                                <?php } ?>

                                <script>
                                    const adminButtons = document.querySelectorAll('.adminButton');

                                    adminButtons.forEach(button => {
                                        button.addEventListener('click', makeUserAdmin);
                                    });

                                   



                                    function makeUserAdmin(event) {
                                        var headers = <?php echo json_encode($payloadRequest); ?>;
                                        const adminId = event.target.getAttribute('data-id');
                                        hideDialog(false)

                                        const myUserId = '<?php echo $userId; ?>'
                                        if (adminId === myUserId) {
                                            showAlert('You cannot modify your admin status', 'error')
                                            hideDialog(true)

                                            return
                                        }
                                        var url = ''
                                       
                                        if (this.getAttribute('data-admin-status') =='false') {
                                            
                                            url = endPoint + "/admin" + makeAdmin;
                                        } else {
                                            url = endPoint + "/admin" + removeAdmin;
                                        }
                                        
                                   
                                        console.log(url)
                                      
                                        // make user admin
                                        axios.post(url, {
                                            user_id: adminId
                                        }, {
                                            headers: headers,

                                        }).then((response) => {
                                        
                                            const resposeData = response.data
                                            if(resposeData.status == 'success'){
                                                showAlert(resposeData.message, 'success')
                                                setTimeout(() => {
                                                    location.reload();
                                                }, 3000);
                                            }else{
                                                showAlert(resposeData.message, 'error')
                                            }
                                           
                                        }).catch((err) => {

                                            showAlert('An error occured!', 'error')
                                            console.log(err)
                                        }).then(() => {
                                            hideDialog(true)

                                        });
                                    }



                                    // With the above scripts loaded, you can call `tippy()` with a CSS
                                    // selector and a `content` prop:
                                    tippy('#flexSwitchStock', {
                                        content: 'disable/enable user !',
                                        animation: 'fade',
                                    });
                                </script>

                                </tbody>
                                </table>
                            </div>

                            <!-- <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                                <span>Showing 1 to 8 of 12 entries</span>
                                <nav class="mt-2 mt-md-0">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"><a class="page-link" href="#!">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                    </ul>
                                </nav>
                            </div> -->
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

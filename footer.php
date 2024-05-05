<footer class="footer border-top">


    <div class="container border-bottom mb-5 py-5">
        <div class="d-block d-md-flex  align-items-center my-3  justify-content-between">
        <div class="col-4 col-lg-4 d-none d-md-block">

                <a href="index.html">
                    <img src="assets/images/logo/sosmart-logo.png" height="80" alt="" />
                </a>
            </div>
            <div class="col col-lg-4">
                <div>
                    <h2>
                        Latest Deals
                    </h2>
                    <p>Latest deals sent directly on your inbox </p>
                </div>
                <!-- put subscribe to our email -->
                <div class="input-group">
                    <input type="email" class="form-control" id="emailInput" name="email"
                        placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="subscribe-button">Subscribe</button>
                </div>

            </div>

        </div>


        <!-- make a modal that shows wwhen the request is successfulll -->
        <div class="modal fade   " style="background-color:#00000060" id="subscribeModal" tabindex="-1"
            aria-labelledby="subscribeModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div
                    class="modal-content shadow text-center d-flex align-items-center justify-content-center py-5 px-3">
                    <img src="assets/images/svg-graphics/email-sub.svg" width="120" height="190" alt="email svg">
                    <h3 class= "fw-bold text-center " id="subscribeModalLabel">THANK YOU</h3>
                    <p>Thank you for subscribing to our newsletter. Stay tuned for updates!</p>
                    <p id = "closeModalButton" class=" closeModal text-white bg-primary px-5 border-0 rounded-3 py-3">
                        Continue Shopping
                    </p>
                </div>
                <!-- <div class="modal-footer"> -->


                <!-- </div> -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {



            const button = document.querySelector('#subscribe-button');
            const subscribeModal = document.getElementById('subscribeModal');



            button.addEventListener('click', function(event) {
                const email = document.querySelector('#emailInput').value;
                hideDialog(false)
                axios({
                        method: 'post',
                        url: endPoint +
                            sendEmail,
                        data: {
                            email: email
                        },
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(function(response) {
                        console.log(response);
                        showModal(true)
                        hideDialog(true)
                        subscribeModal.classList.remove('fade')
                    })
                    .catch(function(error) {
                        hideDialog(true)
                      showAlert('An error occured, please try again later', 'error'+error, 5)
                       


                    });

            });

            function showModal(show) {
                if (show) {
                    subscribeModal.style.display = 'block'
                    subscribeModal.classList.remove('fade')
                } else {
                    subscribeModal.style.display = 'none'
                    subscribeModal.classList.add('fade')
                }
            }


            const closeButton = document.getElementById('closeModalButton');

            closeButton.addEventListener('click', function(event) {
                showModal(false);
            });
        });
    </script>

    </div>
    <div class="container">
        <div class="row g-4 py-4">
            <div class="col-12 col-md-12 col-lg-4">
                <h6 class="mb-4">Categories</h6>
                <div class="row">
                   
                    <div class="col-6">
                        <!-- list -->
                        <ul class="nav flex-column">

                        <?php 

                        foreach($Allcategories as $footer_categories){?>
                             <li class="nav-item mb-2"><a
                                href="pages/shop-grid.php?category=<?php echo $footer_categories['category_name'] ?>"
                                        class="nav-link"
                                    ><?php echo $footer_categories['category_name'] ?></a></li>
                         

                            <?php }?>
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
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Company</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">About</a></li>
                            <li class="nav-item mb-2"><a href="#1" class="nav-link">Blog</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3">
                        <h6 class="mb-4">For Consumers</h6>
                        <ul class="nav flex-column">
                            <!-- list -->
                           
                            <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
                            <li class="nav-item mb-2"><a href="pages/shop-checkout.php" class="nav-link">Shop
                                    Checkout</a></li>
                        </ul>
                    </div>
                   
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
                        Sosmart . 
                    </span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
                        <li class="list-inline-item text-muted">Follow us on</li>
                        <li class="list-inline-item me-1">
                            <a href="#!" class="btn btn-xs btn-social btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item me-1">
                            <a href="#!" class="btn btn-xs btn-social btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!" class="btn btn-xs btn-social btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="../assets/js/theme.min.js"></script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62f0a48c37898912e961c9f8/1g9u05hg4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
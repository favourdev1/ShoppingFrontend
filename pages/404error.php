<!DOCTYPE html>
<html lang="en">
   
   
<?php 
$pageName="Error 404 - Sosmart Online shopping and more";
include_once('header.php')
?>

   <body>
      <main>
         <!-- section -->
         <section>
            <div class="container d-flex flex-column">
               <!-- row -->
               <div class="row min-vh-100 justify-content-center align-items-center">
                  <!-- col -->
                  <div class="offset-lg-1 col-lg-10 py-8 py-xl-0">
                     <div class="mb-10 mb-xxl-0">
                        <!-- img -->
                        <a href="../index-2.html"><img src="../assets/images/logo/" alt="" /></a>
                     </div>
                     <div class="row justify-content-center align-items-center">
                        <!-- content -->
                        <div class="col-md-6">
                           <div class="mb-6 mb-lg-0">
                              <!-- <h1>Something’s wrong here...</h1> -->
                              <p class="mb-8">
                                 <?php 

                                 if(isset($_GET['error'])){
                                    echo "<h1>Error!</h1>";
                                    echo $_GET['error'];
                                 }else{
echo "<h1>Something’s wrong here...</h1>";
                                    echo "We can’t find the page you’re looking for.
                                    <br />
                                    Check out our help center or head back to home.";
                                 }

                                 ?>
                                 
                              </p>
                             
                              <!-- btn -->
                              <a href="../index.php" class="btn btn-primary ms-2">Back to home</a>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div>
                              <!-- img -->
                              <img src="../assets/images/svg-graphics/error.svg" alt="" class="img-fluid" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <!-- section -->

      <!-- Javascript-->
      <!-- Libs JS -->
      <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

      <!-- Theme JS -->
      <script src="../assets/js/theme.min.js"></script>
   </body>

<!-- Mirrored from Sosmart.codescandy.com/pages/404error.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 01:18:00 GMT -->
</html>

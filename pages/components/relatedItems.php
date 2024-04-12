<!-- section -->




<section class="my-lg-14 my-14">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <!-- heading -->
                <h3>Similar Products</h3>
            </div>
        </div>
        <!-- row -->
        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
            <!-- col -->

            <?php
            if (count($similarProducts) > 0) {
                // Loop through the categories array
                foreach ($similarProducts as $product) {
                    // Get the category id, name, slug, description, status, and created_at fields
                    $id = $product['id'];
                    $productName = $product['product_name'];
                    // $productCategory = $product['category'];
                    // $slug = $product['slug'];
                    // $description = $product['description'];
                    $status = $product['status'];
                    $created_at = $product['created_at'];
                    $salesPrice = $product['sales_price'];
                    $regularPrice = $product['regular_price'];

                    // Use the category name as the image file name
                    $productImg = empty($product['product_img1']) ? 'assets/images/products/product-img-1.jpg' : $product['product_img1'];
                    $freeShipping = $product['free_shipping'];
                    // Format the created_at date as dd/mm/yyyy
                    $date = date("d/m/Y", strtotime($created_at));
                    $percentageDiscount = number_format(calculatePercentageDiscount($regularPrice,$salesPrice),0);
                    if ($status == 'active') {
                        // Display the table row for each category
                        ?>

<?php include ("components/pages-product-card.php"); ?>

            <?php }
                }
            } ?>

        </div>
    </div>
</section>
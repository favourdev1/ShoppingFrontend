<?php

require_once '../vendor/autoload.php';
use Httpful\Request;

if (isset($_GET['id'])) {
    // Specify the product ID you want to retrieve
    $productID = $_GET['id'];

    // Make a GET request to your API endpoint for a specific product
    $response = Request::get($apiUrl . '/settings/admin-settings' )
        ->addHeaders([
            'Accept' => '*application/json*',
            'Cookie' => 'access_token=' . $token,
            'Authorization' => 'Bearer ' . $token,
        ])
        ->send();

    // Check the HTTP status code
  
    $statusCode = $response->code;


    $responseData = $response->body;

    if ($statusCode === 200) {
        // Decode the JSON response
        $product = json_decode(json_encode($responseData),true)['data'];
        // // Print or use the retrieved product data
        // echo "<pre>";

        // var_dump($product);
        // echo "</pre>";
        $isUpdating = true;
// die;
        if (count($product) > 0) {
        

            $id = $product['id'];
            $productName = $product['product_name'];
            $categoryId = $product['category_id'];
            $description = $product['description'];
            $regularPrice = $product['regular_price'];
            $brand = $product['brand'];
            $productImg1 = $product['product_img1'];
            $productImg2 = $product['product_img2'];
            $productImg3 = $product['product_img3'];
            $productImg4 = $product['product_img4'];
            $productImg5 = $product['product_img5'];
            $weight = $product['weight'];
            $quantityInStock = $product['quantity_in_stock'];
            $tags = $product['tags'];
            $refundable = $product['refundable'];
            $status = $product['status'];
            $salesPrice = $product['sales_price'];
            $metaTitle = $product['meta_title'];
            $metaDescription = $product['meta_description'];
            $createdAt = $product['created_at'];
            
        
        }
    } else {
        $errorMessage = str_replace(',', '\n', $responseData->message);
        $_SESSION['message'] = $errorMessage;
        $_SESSION['status']="error";
        // echo $errorMessage;
        header("Location: ../../products.php");
        exit();
    }
} else {
    $isUpdating = false;
}

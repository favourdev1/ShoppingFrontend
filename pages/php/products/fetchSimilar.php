<?php
require_once '../vendor/autoload.php';

use Httpful\Request;
$similarProducts=[];
// TODO find out why id is not being gotten in the next line 
$productID = $_GET['id'];

// Make a GET request to your API endpoint
// echo "<br>";
// echo $productID;
// die;
try{
$response = Request::get($apiUrl . '/products/similarproduct/'. $productID)
    ->addHeaders($payloadRequest)
    ->send();

// Check the HTTP status code
if ($response->code < 300) {
    // Decode the JSON response
    $similarProducts = json_decode(json_encode($response->body), true);
    $similarProducts = $similarProducts['data']['similarProducts'];
    // print_r($similarProducts);
    // die;
    // Output or process the products as needed
    // echo "<pre> <BR> BR>";
    // print_r($similarProducts);
    // foreach($similarProducts as $products) {
    //     print_r($products);
    // }
    // echo"</pre>";
    // die;
} else {
    // Decode the JSON error response
    $responseBody = $response->body;
    // $errorBody = json_decode($response->body, true);

    // Output the error details
    // echo "Error Status Code: {$response->code}\n";
    print_r($responseBody);
    exit;
}
}catch(\Exception $e){
    
}

?>
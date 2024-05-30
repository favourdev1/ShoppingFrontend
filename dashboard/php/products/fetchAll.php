<?php

require_once '../vendor/autoload.php';
use Httpful\Request;

// Make a GET request to your API endpoint
$response = Request::get($apiUrl . '/products')
    ->addHeaders([
        'Accept' => '*/*',
        'Cookie' => 'access_token=' . $token,
        'Authorization' => 'Bearer ' . $token,
    ])
    ->send();

// Check the HTTP status code
if ($response->code < 300) {
    // Decode the JSON response
    $allProducts = json_decode(json_encode($response->body), true);
    $allProducts = $allProducts['data']['products'];

    // Output or process the products as needed
    // echo "<pre> <BR> BR>";
    // print_r($allProducts);
    // foreach($allProducts as $products) {
    //     print_r($products);
    // }
    // echo"</pre>";
    // die;
} else {

    $newLocation = $response->headers['location'];
    echo "The API endpoint has been moved to: $newLocation\n"; 
    // Decode the JSON error response
    $errorBody = json_decode(json_encode($response->body), true);

    // Output the error details
    echo "Error Status Code: {$response->code}\n";
    echo "Error Message: {$errorBody['message']}\n";
}


?>

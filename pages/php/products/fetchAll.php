<?php


use Httpful\Request;



// Make a GET request to your API endpoint
$response = Request::get($apiUrl . '/products/')
    ->addHeaders($payloadRequest)
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
    // Decode the JSON error response
    $responseBody = $response->body;
    // $errorBody = json_decode($response->body, true);

    // Output the error details
    // echo "Error Status Code: {$response->code}\n";
   print_r($responseBody);
   exit;
}


?>

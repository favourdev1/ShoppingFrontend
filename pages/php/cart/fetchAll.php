<?php

use Httpful\Request;

$cartItems=[];

// Make a GET request to your API endpoint for a specific product
$response = Request::get($apiUrl . '/carts/')
    ->addHeaders($payloadRequest)

    ->send();

// Check the HTTP status code

$statusCode = $response->code;


$responseData = $response->body;

if ($statusCode === 200) {
    // Decode the JSON response
    $cartItems = json_decode(json_encode($responseData), true)['data'];
    // Print or use the retrieved product data
    // echo "<pre>";

    // print_r($cartItems);
    // echo "</pre>";

    // die;
    
} else {
    // $errorMessage = str_replace(',', '\n', $responseData->message);
    // $_SESSION['message'] = $errorMessage;
    // $_SESSION['status'] = "error";
    // echo $errorMessage;
    // header("Location: ../../products.php");
    // exit();
}

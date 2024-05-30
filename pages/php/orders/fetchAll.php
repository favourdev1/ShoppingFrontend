<?php

use Httpful\Request;

$orderItems=[];
echo $apiUrl . '/orders/';
// Make a GET request to your API endpoint for a specific product
$response = Request::get($apiUrl . '/orders/')
    ->addHeaders($payloadRequest)

    ->send();

// Check the HTTP status code

$statusCode = $response->code;


$responseData = $response->body;

if ($statusCode === 200) {
    // Decode the JSON response
    $orderItems = json_decode(json_encode($responseData), true)['data'];
    // Print or use the retrieved product data
    echo "<pre>";

    print_r($orderItems);

    foreach($orderItems as $order){
        print_r($order['product_id ']);
    }

    
    echo "</pre>";

    die;
    
} else {

    $newLocation = $response->headers['location'];
    echo "The API endpoint has been moved to: $newLocation\n"; 
    // $errorMessage = str_replace(',', '\n', $responseData->message);
    // $_SESSION['message'] = $errorMessage;
    // $_SESSION['status'] = "error";
    print_r($responseData);
    // header("Location: ../../products.php");
    exit();
}

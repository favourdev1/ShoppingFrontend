<?php

require_once '../vendor/autoload.php';
use Httpful\Request;

// Make a GET request to your API endpoint
$response = Request::get($apiUrl . '/category')
    ->addHeaders([
        'Accept' => '*/*',
        'Cookie' => 'access_token=' . $token,
        'Authorization' => 'Bearer ' . $token,
    ])
    ->send();

// Check the HTTP status code
if ($response->code < 300) {
    // Decode the JSON response
    $Allcategories = json_decode(json_encode($response->body), true);
    $Allcategories = $Allcategories['data']['categories'];

    // Output or process the categories as needed
    // print_r($Allcategories);
    // foreach($Allcategories as $category) {
    //     print_r($category);
    // }
} else {
    // Decode the JSON error response
    // $errorBody = json_decode(json_encode($response->body), true);

    // // Output the error details
    // echo "Error Status Code: {$response->code}\n";
    // echo "Error Message: {$errorBody['message']}\n";
}

// Additional code after the if-else block


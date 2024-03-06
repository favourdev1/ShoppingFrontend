<?php

require_once '../vendor/autoload.php';
use Httpful\Request;

// Make a GET request to your API endpoint
$response = Request::get($apiUrl . '/settings/admin-settings')
    ->addHeaders([
        'Accept' => '*/*',
        'Cookie' => 'access_token=' . $token,
        'Authorization' => 'Bearer ' . $token,
    ])
    ->send();

// Check the HTTP status code
if ($response->code < 300) {
    // Decode the JSON response
    $allAdminSettings1 = json_decode(json_encode($response->body), true)['data']['admin_settings'];
    $allAdminSettings = $allAdminSettings1;

    // Output or process the products as needed
    // echo "<pre> ";
    // print_r($allAdminSettings['id']);
    // // foreach($allAdminSettings as $products) {
    //     // print_r($products);
    // // }
    // echo"</pre>";
    // die;
} else {
    // Decode the JSON error response
    $errorBody = json_decode(json_encode($response->body), true);

    // Output the error details
    echo "Error Status Code: {$response->code}\n";
    echo "Error Message: {$errorBody['message']}\n";
}


?>

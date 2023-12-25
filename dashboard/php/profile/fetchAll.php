<?php

require_once '../vendor/autoload.php';
use Httpful\Request;


// Make a GET request to your API endpoint for a specific product
$response = Request::get($apiUrl . '/profile')
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
    $users = json_decode(json_encode($responseData),true)['data'];
    // // Print or use the retrieved product data
    // echo "<pre>";

    // foreach ($users as $user){
    //     print_r($user['firstname']);
    // }
    // echo "</pre>";

    // die;

} else {
    $errorMessage = str_replace(',', '\n', $responseData->message);
    $_SESSION['message'] = $errorMessage;
    $_SESSION['status'] = "error";
    // echo $errorMessage;
    header("Location: ../../products.php");
    exit();
}

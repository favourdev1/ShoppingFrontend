<?php

use Httpful\Request;

$apiUrl = getenv('API_URL');

// Make a GET request to your API endpoint for a specific product
$response = Request::get($apiUrl . '/profile/'.$userId)
    ->addHeaders($payloadRequest)

    ->send();

// Check the HTTP status code

$statusCode = $response->code;


$responseData = $response->body;

if ($statusCode === 200) {
    // Decode the JSON response
    $userProfile = json_decode(json_encode($responseData), true)['data'];
    // Print or use the retrieved product data
    // echo "<pre>";

    // print_r($userProfile);
    $userFirstname = ucfirst($userProfile['firstname']);
    $userLastname = ucfirst($userProfile['lastname']);
    $userEmail = ucfirst($userProfile['email']);
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

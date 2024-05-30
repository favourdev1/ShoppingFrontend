<?php


use Httpful\Request;

$Allcategories = [];


// Make a GET request to your API endpoint
$response = Request::get($apiUrl . '/category')
    ->addHeaders($payloadRequest)
    ->send();

$statusCode = $response->code;
if ($statusCode === 200) {
    // Decode the JSON response
    $Allcategoria = json_decode(json_encode($response->body), true);

    $Allcategories = $Allcategoria['data']['categories'];

    // print_r($Allcategories);
    // die;
    // Additional code after the try-catch block


} else if ($response->code === 301) {
    // The API endpoint has been moved. Print the new location.
    $newLocation = $response->headers['location'];
    // echo "The API endpoint has been moved to: $newLocation\n";

} else {
    $errorMessage = str_replace(',', '\n', $response->body->message);
    // $_SESSION['message'] = $errorMessage;
    // // $_SESSION['status'] = "error";
    // echo "kfslflskfl0";
    // echo $errorMessage;
    // header("Location: ../../products.php");
    // exit();
}

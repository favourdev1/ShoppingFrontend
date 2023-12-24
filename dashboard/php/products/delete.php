<?php
session_start();
include_once __DIR__ . '/../../php/auth.php';
require_once __DIR__ . '/../../../vendor/autoload.php';

use Httpful\Request;

$productID = $_GET['id'];

$response = Request::delete($apiUrl . '/products/delete/' . $productID)
    ->sendsJson()
    ->addHeaders([
        'Accept' => '*application/json',
        'Cookie' => 'access_token=' . $token,
        'Authorization' => 'Bearer ' . $token,
    ])
    ->send();

// Check the HTTP status code
$statusCode = $response->code;

$responseData = $response->body;
if ($statusCode === 200) {
    // Success, handle the data
    $message =  json_decode(json_encode($responseData))->message;
    $_SESSION['message'] = $message;
    $_SESSION['status'] = "success";
    // echo $message;
    header("Location: ../../products.php");

    exit();
} else {
    $errorMessage =  json_decode(json_encode($responseData))->message;
    $_SESSION['message'] = $errorMessage;
    $_SESSION['status'] = "error";
    // print_r($errorMessage);
    header("Location: ../../products.php");
    exit();
}


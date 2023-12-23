<?php

include_once __DIR__ . '/../../php/auth.php';
require_once __DIR__ . '/../../../vendor/autoload.php';
session_start();
use Httpful\Request;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize your data and headers

    $headers = [
        'Accept' => 'application/json',
        'Cookie' => 'access_token=' . $token,
        'Authorization' => 'Bearer ' . $token,
    ];

    $data = $_POST;




    $response = Request::post($apiUrl . '/products/add')
        ->sendsJson()
        ->addHeaders($headers)
        ->body(json_encode($data))
        ->send();


    $statusCode = $response->code;


    $responseData = $response->body;


    if ($statusCode >= 200 && $statusCode < 300) {
        // Success, handle the data
        $_SESSION['message'] = $errorMessage;
        $_SESSION['status']="error";
        echo $errorMessage;
        // header("Location: ../../product.php");
    
        
    } else {
        $errorMessage = str_replace(',', '\n', $responseData->message);
        $_SESSION['message'] = $errorMessage;
        $_SESSION['status']="error";
        echo $errorMessage;
        // header("Location: ../../add-product.php");
        exit();
    }


}
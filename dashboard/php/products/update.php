<?php
session_start();
include_once __DIR__ . '/../../php/auth.php';
require_once __DIR__ . '/../../../vendor/autoload.php';

use Httpful\Request;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize your data and headers

    $headers = [
        'Accept' => 'application/json',
        'Cookie' => 'access_token=' . $token,
        'Authorization' => 'Bearer ' . $token,
    ];

    $data = $_POST;

    $productID = $_POST['id'];

    $response = Request::put($API_URL . '/admin/products/' . $productID)
        ->sendsJson()
        ->addHeaders($headers)
        ->body(json_encode($data))
        ->send();


    $statusCode = $response->code;


    $responseData = $response->body;


    if ($statusCode >= 200 && $statusCode < 300) {
        // Success, handle the data
        $message = str_replace(',', '\n', $responseData->message);

        $message = json_decode(json_encode($responseData))->message;
        $_SESSION['message'] = $message;
        $_SESSION['status'] = "success";
        // header("Location: ../../products.php");
        // echo $message;

        print_r(
            json_encode(
                [
                    'status' => 'success',
                    'message' => $message
                ]
            )
        );
        // exit();
    } else {
        $errorMessage = str_replace(',', '\n', $responseData->message);
        $_SESSION['message'] = $errorMessage;
        $_SESSION['status'] = "error";


        echo $errorMessage;

        print_r(
            json_encode(
                [
                    'status' => 'error',
                    'message' => $errorMessage
                ]
            )
        );
        // echo $errorMessage;
        // header("Location: ../../add-product.php?id=".$productID);
        // exit();
    }


}
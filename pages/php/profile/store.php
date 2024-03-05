<?php
session_start();
include_once('../config.php');
include_once __DIR__ . '/../../php/auth.php';
require_once __DIR__ . '/../../../vendor/autoload.php';
use Httpful\Request;

if (empty($userId)) {
    // header("X-Redirect: ".LOGINPAGE); // Replace with the actual login page URL
    http_response_code(401); // Unauthorized status code
    exit(); // Stop further execution
}



if (isset($userId) && !empty($userId)) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Initialize your data and headers

        $headers = [
            'Accept' => 'application/json',
            'Cookie' => 'access_token=' . $token,
            'Authorization' => 'Bearer ' . $token,
        ];

        $data = $_POST;

print_r($data);
die;

        $response = Request::post($apiUrl . 'address/add/' . $userId)
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
            print_r($message);
            // exit();
        } else {
            // print_r($responseData);
            // die;
            $errorMessage = str_replace(',', '\n', $responseData->message);
            $_SESSION['message'] = $errorMessage;
            $_SESSION['status'] = "error";
            echo $errorMessage;
            // header("Location: ../../add-product.php");
            // exit();
        }


    }
}

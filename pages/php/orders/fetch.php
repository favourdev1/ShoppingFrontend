<?php

use Httpful\Request;

if (!$_GET['order_number'] || empty($_GET['order_number'])) {
    // redirect to the previos page that brought us to this one
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
$order_number = $_GET['order_number'];

// Make a GET request to your API endpoint for a specific product
$response = Request::get($apiUrl . '/orders/fetch/' . $order_number)
    ->addHeaders([
        'Accept' => '*application/json*',
        'Cookie' => 'access_token=' . $token,
        'Authorization' => 'Bearer ' . $token,
    ])
    // Pass the order number in the request body
    ->send();

// Check the HTTP status code

$statusCode = $response->code;

$responseData = $response->body;

if ($statusCode === 200) {
    // Decode the JSON response
    $dataResponse = json_decode(json_encode($responseData), true)['data'];
    $order = $dataResponse['order'];
    $adminSettings = $dataResponse['admin_settings'];
    $order_items = $dataResponse['order_items'];
    $paymentInformation = $dataResponse['payment_info'];
    // echo "<pre>";

    // var_dump($paymentInformation);
    // echo "</pre>";

    // die;
    if (count($order) > 0) {
        $orderId = $order['id'];
        $userId = $order['user_id'];
        $total_amount = $order['total_amount'];
        $tax = $order['tax'];
        $order_number = $order['order_number'];
        $order_status = $order['order_status'];
        $payment_status = $order['payment_status'];
        $shipping_charge = $order['shipping_charge'];
        $delivery_status = $order['delivery_status'];
        $status = $order['status'];
        $shipping_address = $order['shipping_address'];
        $payment_method = $order['payment_method'];
        $billing_address = $order['billing_address'];
        $email = $order['email'];
        $notes = $order['notes'];
        $created_at = $order['created_at'];
        $updated_at = $order['updated_at'];
        $delivery_date = $order['delivery_date'];
        $admin_officeAddr= $adminSettings['office_address'];
        
    }
} else {
    $errorMessage = str_replace(',', '\n', $responseData->message);
    $_SESSION['message'] = $errorMessage;
    $_SESSION['status'] = 'error';
    echo $errorMessage;
    die;
    // header('Location: ' . $_SERVER['HTTP_REFERER']);
    // exit();
}

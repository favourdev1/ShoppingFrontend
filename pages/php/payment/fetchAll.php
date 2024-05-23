<?php


use Httpful\Request;

// Make a GET request to your API endpoint
$response = Request::get($apiUrl . '/paymentmethods')
    ->addHeaders($payloadRequest)
    ->send();

// Check the HTTP status code
if ($response->code < 300) {
    // Decode the JSON response
    $allpaymentMethods = json_decode(json_encode($response->body), true);
    $allpaymentMethods = $allpaymentMethods['data']['paymentMethods'];

    // Output or process the paymentMethods as needed
    // echo "<pre> <BR> BR>";
    // print_r($allpaymentMethods);
    // foreach($allpaymentMethods as $paymentMethods) {
    //     print_r($paymentMethods);
    // }
    // echo"</pre>";
    // die;
} else {
    // Decode the JSON error response
    $responseBody = $response->body;
    // $errorBody = json_decode($response->body, true);

    // Output the error details
    // echo "Error Status Code: {$response->code}\n";
   print_r($responseBody);
   exit;
}




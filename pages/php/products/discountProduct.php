<?php


use Httpful\Request;



// Make a GET request to your API endpoint
$response = Request::get($apiUrl . '/products/discountproduct')
    ->addHeaders($payloadRequest)
    ->send();
try{
    // Check the HTTP status code
if ($response->code < 300) {
    // Decode the JSON response
    $discountProducts = json_decode(json_encode($response->body), true);
    $discountProducts = $discountProducts['data']['products'];

    // Output or process the products as needed
    // echo "<pre> <BR> BR>";
    // print_r($discountProducts);
    // foreach($discountProducts as $products) {
    //     print_r($products);
    // }
    // echo"</pre>";
    // die;
} else {
    $responseBody = $response->body;
    // $errorBody = json_decode($response->body, true);

    // Output the error details
    // echo "Error Status Code: {$response->code}\n";
   print_r($responseBody);
//    exit;
}

} catch (\Exception $e) {
    echo $e->getMessage();

}

?>

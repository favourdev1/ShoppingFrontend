<?php


use Httpful\Request;

try {
    // Make a GET request to your API endpoint
    $response = Request::get($apiUrl . '/category/')
        ->addHeaders([
            'Accept' => '*/*',
            'Cookie' => 'access_token=' . $token,
            'Authorization' => 'Bearer ' . $token,
        ])
        ->send();

    // Decode the JSON response
    $Allcategories = json_decode(json_encode($response->body), true);
    $Allcategories = $Allcategories['data']['categories'];


} catch (HttpException $e) {
    // Httpful request exception
    $statusCode = $e->getCode();
    $errorBody = json_decode($e->getBody(), true);

    // Handle specific error cases
    echo "Error Status Code: $statusCode\n";
    echo "Error Message: {$errorBody['message']}\n";

} catch (Exception $e) {
    // Handle general exceptions
    echo "Exception: " . $e->getMessage() . "\n";
}

// Additional code after the try-catch block
?>

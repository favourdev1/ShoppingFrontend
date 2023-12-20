<?php

require_once '../vendor/autoload.php'; // Include the Guzzle library

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

try {
    // Initialize Guzzle client
    $client = new Client();

    // Make a GET request to your API endpoint
    $response = $client->get($apiUrl . '/category/', [
        'headers' => [
            'Accept' => '*/*',
            'Cookie' => 'access_token=' . $token,
            'Authorization' => 'Bearer ' . $token,
        ],
    ]);

    // Decode the JSON response
    $Allcategories = json_decode($response->getBody(), true);
    $Allcategories = $Allcategories['data']['categories'];

    // Output or process the categories as needed
    // print_r($Allcategories);
    // foreach($Allcategories as $category) {
    //     print_r($category);
    // }

} catch (RequestException $e) {
    // Guzzle request exception
    if ($e->hasResponse()) {
        $statusCode = $e->getResponse()->getStatusCode();
        $errorBody = json_decode($e->getResponse()->getBody(), true);
        // Handle specific error cases
        echo "Error Status Code: $statusCode\n";
        echo "Error Message: {$errorBody['message']}\n";
    } else {
        // Handle other request exceptions
        echo "Request Exception: " . $e->getMessage() . "\n";
    }

} catch (Exception $e) {
    // Handle general exceptions
    echo "Exception: " . $e->getMessage() . "\n";
}

// Additional code after the try-catch block
?>

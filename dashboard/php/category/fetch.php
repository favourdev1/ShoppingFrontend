<?php

require_once '../vendor/autoload.php';
// Include the Guzzle library

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

// Initialize Guzzle client
$client = new Client();
if ( isset( $_GET[ 'id' ] ) ) {
    try {
        // Specify the category ID you want to retrieve

        $categoryID = $_GET[ 'id' ];

        // Make a GET request to your API endpoint for a specific category
        $response = $client->get( $apiUrl . '/category/' . $categoryID, [
            'headers' => [
                'Accept' => '*/*',
                'Cookie' => 'access_token=' . $token,
                'Authorization' => 'Bearer ' . $token,
            ],
        ] );

        // Decode the JSON response
        $category = json_decode( $response->getBody(), true )[ 'data' ]['category'];

        // Print or use the retrieved category data
        // print_r( $category );
        $isUpdating = true;
        if ( count( $category )>0 ) {
            // Loop through the categories array

            // Get the category id, name, slug, description, status, and created_at fields
            $id = $category[ 'id' ];
            $name = $category[ 'category_name' ];
            $slug = $category[ 'slug' ];
            $description = $category[ 'description' ];
            $status = $category[ 'status' ];
            $created_at = $category[ 'created_at' ];
            $categoryImg = $category[ 'category_image' ];
        }
    } catch ( RequestException $e ) {
        // Handle request exception ( e.g., network error, HTTP error )
        echo 'Error: ' . $e->getMessage();
    } catch ( \Exception $e ) {
        // Handle other exceptions
        echo 'Unexpected Error: ' . $e->getMessage();
    }

} else {
    $isUpdating = false;
}
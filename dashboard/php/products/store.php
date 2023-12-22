<?php
include_once __DIR__.'/../../php/auth.php';
require_once __DIR__.'/../../../vendor/autoload.php';
// Include the Guzzle library

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;








// Initialize Guzzle client
$client = new Client();
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    echo"<pre>";
print_r($_POST);
echo "</pre>";
die;

    // && $_SERVER[ 'REQUEST_URI' ] === '/your-server-endpoint' ) {

    try {

   
        
        $response = $client->post( $apiUrl . '/product/add/' , [
            'headers' => [
                'Accept' => 'application/json',
                'Cookie' => 'access_token=' . $token,
                'Authorization' => 'Bearer ' . $token,
            ],
            'json' => $_POST,
        ] );

        // Decode the JSON response
        $productResponse = json_decode( $response->getBody(), true );


        // header('Location: ../../categories.php?success=product Successfully updated');
        // Print or use the updated product data
        print_r( $productResponse );
    } catch ( RequestException $e ) {
        $error = 'Unexpected Error: ' . $e->getMessage();
        // header('Location: ../../add-product.php?error=Unexpected error'.$error);
        echo $error;
    } catch ( \Exception $e ) {
        $error = 'Unexpected Error: ' . $e->getMessage();
        // header('Location: ../../add-product.php?error=Unexpected error'.$error);
        echo $error;
    }
}
<?php
include_once __DIR__.'/../../php/auth.php';
require_once __DIR__.'/../../../vendor/autoload.php';
// Include the Guzzle library

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
// print_r($_POST);
// die;
// Initialize Guzzle client
$client = new Client();
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    // && $_SERVER[ 'REQUEST_URI' ] === '/your-server-endpoint' ) {

    try {

        // Specify the category ID you want to update
        $categoryID = $_POST[ 'id' ];
        
        $response = $client->put( $apiUrl . '/category/update/' . $categoryID, [
            'headers' => [
                'Accept' => '*/*',
                'Cookie' => 'access_token=' . $token,
                'Authorization' => 'Bearer ' . $token,
            ],
            'json' => $_POST,
        ] );

        // Decode the JSON response
        $updatedCategory = json_decode( $response->getBody(), true );


        header('Location: ../../categories.php?success=Category Successfully updated');
        // Print or use the updated category data
        print_r( $updatedCategory );
    } catch ( RequestException $e ) {
        $error = 'Unexpected Error: ' . $e->getMessage();
        header('Location: ../../add-category.php?error=Unexpected error'.$error.'+id='.$categoryID);
        echo $error;
    } catch ( \Exception $e ) {
        $error = 'Unexpected Error: ' . $e->getMessage();
        header('Location: ../../add-category.php?error=Unexpected error'.$error.'+id='.$categoryID);
        echo $error;
    }
}
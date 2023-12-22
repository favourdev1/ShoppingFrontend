<?php

require_once '../vendor/autoload.php';
// Include the Guzzle library

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

// Initialize Guzzle client
$client = new Client();

    try {
     

        // Make a GET request to your API endpoint for a specific category
        $response = $client->get( $apiUrl . '/logout/' , [
            'headers' => [
                'Accept' => '*/*',
                'Cookie' => 'access_token=' . $token,
                'Authorization' => 'Bearer ' . $token,
            ],
        ] );

    if($response->getStatusCode()==200){
        setcookie('userId', '', time() - 3600, '/');
        setcookie('token', '', time() - 3600, '/');
        setcookie('isAdmin', '', time() - 3600, '/');
        header('Location: pages/signin.php?error="user not logged in "');
        
        header("Location: signin.php");
    }

        
    } catch ( RequestException $e ) {
        // Handle request exception ( e.g., network error, HTTP error )
        echo 'Error: ' . $e->getMessage();
    } catch ( \Exception $e ) {
        // Handle other exceptions
        echo 'Unexpected Error: ' . $e->getMessage();
    }

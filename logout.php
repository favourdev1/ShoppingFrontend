<?php

require_once 'vendor/autoload.php';
// Include the Guzzle library

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;


$apiUrl = $API_URL; ;
$token = $_COOKIE['token']??null;
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

    // if($response->getStatusCode()==200){
        setcookie('userId', '', time() - 3600, '/');
        setcookie('token', '', time() - 3600, '/');
        setcookie('isAdmin', '', time() - 3600, '/');
     
        
        header("Location: pages/signin.php");
    // }

        
    } catch ( RequestException $e ) {
        setcookie('userId', '', time() - 3600, '/');
        setcookie('token', '', time() - 3600, '/');
        setcookie('isAdmin', '', time() - 3600, '/');
     
        
        header("Location: pages/signin.php");
    } catch ( \Exception $e ) {
      
    }

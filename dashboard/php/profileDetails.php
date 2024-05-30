<?php

ob_start(); // Start output buffering

require '../vendor/autoload.php'; // Include Composer's autoloader

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$isauthenticated = false;
if (!isset($userId) || !isset($token)) {
    header('Location: ../pages/signin.php');
    exit();
}

try {
    // Create a new Guzzle client
    $client = new Client();

    // Make a GET request to the "/products" endpoint
    $response = $client->get($apiUrl . '/profileDetails/' . $userId, [
        'headers' => [
            'Accept' => '*/*',
            'Cookie' => 'access_token=' . $token,
            'Authorization' => 'Bearer ' . $token,
        ],
    ]);

    // Check if the request was successful (status code 200)
    if ($response->getStatusCode() == 200) {
        // Process the API response
        $profileDetails = json_decode($response->getBody(), true)['data'];

        // print_r($profileDetails);
        $username = $profileDetails['firstname'] . ' ' . $profileDetails['lastname'];
        $firstname = $profileDetails['firstname'];
        $lastname = $profileDetails['lastname'];
        if (empty($profileDetails['profile_img'])) {
            $profile = '../assets/images/avatar/avatar-5.jpg';
        } else {
            $profile = $profileDetails['profile_img'];
        }

        $email = $profileDetails['email'];
        $city = $profileDetails['city'];
        $country = $profileDetails['country'];
        $address = $profileDetails['address'];
        $isauthenticated = true;
    } else {

      
    }
} catch (RequestException $e) {
    
    setcookie('userId', '', time() - 3600, '/', $_SERVER['HTTP_HOST']);
    setcookie('token', '', time() - 3600, '/', $_SERVER['HTTP_HOST']);
    setcookie('isAdmin', '', time() - 3600, '/', $_SERVER['HTTP_HOST']);
    
    
    if ($e->getResponse()->getStatusCode() == 403 || $e->getResponse()->getStatusCode() == 401) {
        header_remove(); // Remove all headers
        ob_end_clean(); // Clean (erase) the output buffer and turn off output buffering
        echo '<script type="text/javascript">';
        echo 'document.cookie = "userId=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";';
        echo 'document.cookie = "token=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";';
        echo 'document.cookie = "isAdmin=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";';
       
        echo 'window.location.href="../pages/signin.php";';
        echo '</script>';
        exit();
    }
 
}

ob_end_flush(); // Flush the output buffer and turn off output buffering
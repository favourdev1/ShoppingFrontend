<?php

require '../vendor/autoload.php'; // Include Composer's autoloader

use GuzzleHttp\Client;



// Create a new Guzzle client
$client = new Client();

// Make a GET request to the "/products" endpoint
$response = $client->get($apiUrl . '/profileDetails/'.$userId, [
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
    $username = $profileDetails['firstname']." ". $profileDetails['lastname'];
    $firstname = $profileDetails['firstname'];
    $lastname = $profileDetails['lastname'];
    if(empty($profileDetails['profile_img'])){
        $profile ='../assets/images/avatar/avatar-5.jpg';
    }else{
        $profile = $profileDetails['profile_img'];
    }
   
    $email = $profileDetails['email'];
    $city = $profileDetails['city'];
    $country=$profileDetails['country'];
    $address = $profileDetails['address']; 
   
} else {

   
    // Handle error
    echo 'Error fetching products: ' . $response->getStatusCode();
}


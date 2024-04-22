<?php

// Set predefined values for auth variables 
$token = $_COOKIE['token']??null;
$userId=$_COOKIE['userId']??null;

$isAdmin=false;


// Payload data to be sent if user is logged in 
$payloadRequest=[];





// check if user is already loggedin , if yes, alter the values 
if (isset($_COOKIE['token']) && $_COOKIE['token'] != null && isset($_COOKIE['userId']) && $_COOKIE['userId'] != null) {
    $token = $_COOKIE['token'];
    $userId = $_COOKIE['userId'];
    $isAdmin = $_COOKIE['isAdmin'];

    $payloadRequest= [
        'Accept' => 'application/json',
        'Cookie' => 'access_token=' . $token,
        'Authorization' => 'Bearer ' . $token,
    ];
}

function if_Authenticated()
{
    // Retrieve user ID and token from cookies
    $userId = $_COOKIE['userId'] ?? null;
    $token = $_COOKIE['token'] ?? null;
    // Check if either user ID or token is null
    if ($userId === null || $token === null) {
        return false;
    }

    return true;

}

function isAdmin()
{
    $isAdmin = $_COOKIE['isAdmin'] ?? null;
    if ($isAdmin == false || $isAdmin == null||$isAdmin =='false') {
        return false;
    }
    return true;
}

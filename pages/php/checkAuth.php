<?php
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
    if ($isAdmin == false || $isAdmin == null) {
        return false;
    }
    return true;
}

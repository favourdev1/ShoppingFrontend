
<?php
$apiUrl = 'http://localhost:8000/api/';
if (!isset($_COOKIE['token']) || $_COOKIE['token'] == null || !isset($_COOKIE['userId']) || $_COOKIE['userId'] == null) {

    header('Location: ../index.php');

}
if (!isset($_COOKIE['isAdmin']) || $_COOKIE['isAdmin'] == null) {

    header('Location: ../index.php');
}


// echo "<pre>";
//     print_r($_COOKIE);
//     echo "<pre>";
//     die;
if (isset($_COOKIE['token']) && $_COOKIE['token'] != null && isset($_COOKIE['userId']) && $_COOKIE['userId'] != null) {
    $token = $_COOKIE['token'];
    $userId = $_COOKIE['userId'];
    $isAdmin = $_COOKIE['isAdmin'];

}



?>
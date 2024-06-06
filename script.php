<?php
// Start output buffering
ob_start();
require_once 'vendor/autoload.php';
include_once ('env.php');

$apiUrl = $API_URL;
include_once ('pages/php/config.php');

include_once ('pages/php/checkAuth.php');


include_once ('pages/php/functions.php');

$isHomePath = true;
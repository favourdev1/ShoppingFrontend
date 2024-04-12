<?php
require_once '../vendor/autoload.php';

use Httpful\Request;
$queryVal = "query=" . (isset($_GET['query']) ? urlencode($_GET['query']) : '');
$brand = "brands=" . (isset($_GET['brands']) ? urlencode($_GET['brands']) : '');
$category = "category=" . (isset($_GET['category']) ? urlencode($_GET['category']) : '');

$category = "category=" . (isset($_GET['category']) ? urlencode($_GET['category']) : '');
$min_price  = "min_price=" . (isset($_GET['min_price']) ? urlencode($_GET['min_price']) : '');
$max_price  = "max_price=" . (isset($_GET['max_price']) ? urlencode($_GET['max_price']) : '');

$group="group=".(isset($_GET['group']) ? urlencode($_GET['group']) :'');
$searchQuery= ucfirst(str_replace('-',' ',$_GET['query']??''));

$query = '';

if($queryVal !== "query="){
    $query .="&".$queryVal;
}
if($brand !== 'brands='){
    $query .= ($query==''?'':"&").$brand;
}

if($category !== 'category='){
    
    $query .= ($query==''?'':"&").$category;
}

if($min_price   !=='min_price='){
    $query .= ($query==''?'':"&").$min_price;
}

if($max_price   !=='max_price='){
    $query .= ($query==''?'':"&").$max_price;
}

if($group !== 'group='){
    $searchQuery= ucfirst(str_replace('-',' ',$_GET['group']));
    $query .=($query ==''?'':'&').$group;
}

// echo "<BR>";

// print_r($_GET);
// echo "<BR>";
// die;

$searchProduct = [];

$searchProductData = [];
$searchProduct = [];
// $searchBrands =  $searchProductData['data']['brands'];
$searchPriceMin = 0;
$searchPriceMax = 0;
$searchCategories = [];
$searchTotalProducts = 0;
$searchBrands = [];



// Make a GET request to your API endpoint
// echo "<br>";
// echo $apiUrl . '/products/search/?' . $query;
// die;
try {
    $response = Request::get($apiUrl . '/products/search/?' . $query)
        ->addHeaders($payloadRequest)
        ->send();

    // Check the HTTP status code
    if ($response->code < 300) {
        // Decode the JSON response
        $searchProductData = json_decode(json_encode($response->body), true);
        // echo "<pre>";
        // print_r($searchProductData);
        $searchProduct = $searchProductData['data']['products'];
        // $searchBrands =  $searchProductData['data']['brands'];
        $searchPriceMin = $searchProductData['data']['price_min'];
        $searchPriceMax = $searchProductData['data']['price_max'];
        $searchCategories = $searchProductData['data']['categories'];
        $searchTotalProducts = $searchProductData['data']['products_found'];
        $searchBrands = $searchProductData['data']['brands'];
        
        // print_r($searchCategories);
        // die;
        // Output or process the products as needed
        // echo "<pre> <BR> BR>";
        // print_r($searchProduct);
        // foreach($searchProduct as $products) {
            //     print_r($products);
            // }
            // echo"</pre>";
            // die;
        // die;
    } else {
        // Decode the JSON error response
        $responseBody = $response->body;
        // $errorBody = json_decode($response->body, true);

        // Output the error details
        // echo "Error Status Code: {$response->code}\n";
        print_r($responseBody);
        exit;
    }
} catch (\Exception $e) {
    // print_r($e->getMessage());
    // die;
}

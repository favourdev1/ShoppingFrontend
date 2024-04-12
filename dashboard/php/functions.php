<?php 




function calculatePercentageDiscount($originalPrice, $salesPrice){
    if(!is_numeric($originalPrice) || !is_numeric($salesPrice)){
        $originalPrice = floatval($originalPrice);
        $salesPrice = floatval($salesPrice);
    }

    // Check if the sales price is greater than or equal to the original price
    if($salesPrice >=  $originalPrice ){
        return 0; // Return 0 discount if the sales price is not less than the original price
    }

    $discount =  $originalPrice - $salesPrice;
    $percentageDiscount = ($discount/$originalPrice)*100;
    return $percentageDiscount;
}

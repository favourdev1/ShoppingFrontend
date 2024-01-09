<?php 




function calculatePercentageDiscount($originalPrice, $salesPrice){
    if(!is_numeric($originalPrice) || !is_numeric($salesPrice)){
        $originalPrice = floatval($originalPrice);
        $salesPrice = floatval($salesPrice);

    }

    if($salesPrice >=  $originalPrice ){
        return ;
    }
  $discount =  $originalPrice  - $salesPrice;
  $percentageDiscount = ($discount/$originalPrice)*100;
  return $percentageDiscount;
}
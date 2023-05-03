<?php
    /*1) Make a function getDiscountedPrice()
2) Pass Price and Discount percentage
3) Return the discountedPrice
Formula:
discounted_price = original_price - ( (original_price * discount) / 100 )*/

function getDiscountedPrice(){
    $original_price = 2000;
    $discount = 20;
    $discounted_price = $original_price - ( ($original_price * $discount) / 100 );
    return $discounted_price;
}
echo getDiscountedPrice();
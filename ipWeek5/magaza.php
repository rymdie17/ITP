<?php
    $date = date("D");

    $price = "200";
    $discount = 0;

    if ($price > 150) {
        
        $discount += $price/5;
    }   

    if ($date == "Fri" or $date == "Sat" or $date == "Sun") {

        $discount += $price/10;
    }

    $total = $price - $discount;

    echo $total;
?>

<?php
    for($counter = 100; $counter < 1000; $counter++) {
        $number = $counter;
        $total = 0;
        while($number != 0) {
            $total += pow($number % 10, 3);
            $number /= 10;
        }
        if($counter == $total) {
            echo "$counter is special";
            echo "<br>";
        }
    }
?>
<?php
    $grade = 89;

    if($grade < 0 or $grade > 100) {
        echo "Geçerli bir not giriniz!";
    } else {
        echo "Notunuz: ";

        if($grade <= 19) {
            echo "FF";
        }
        else if($grade <= 29) {
            echo "FD";
        }
        else if($grade <= 39) {
            echo "DD";
        }
        else if($grade <= 49) {
            echo "DC";
        }
        else if($grade <= 59) {
            echo "CC";
        }
        else if($grade <= 69) {
            echo "CB";
        }
        else if($grade <= 79) {
            echo "BB";
        }
        else if($grade <= 89) {
            echo "BA";
        }
        else {
            echo "AA";
        }
    }
?>
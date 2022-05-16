<form action="" method="post"> 
    <table>
        <tr>
            <td>Enter a number</td>
            <td>:</td>
            <td><input type="text" name="num"></td>
            <td><input type="submit" name="button" value="send"></td>
        </tr>
    </table>
</form>

<?php
    Function name() {
        echo "Fatih :d";
    }

    Function matrix($name) {
        echo "Hi $name !";
    }

    echo "My name is ";
    name();

    echo "<br>";

    matrix("Kaan");

    echo "<br>";

    if(isset($_POST["button"])) {
        echo "Girdiginiz sayi: " . toText1Digit($_POST["num"]);
    }

    Function toText1Digit($number) {
        $text = "";

        switch($number) {
            case 0: $text = "sifir";
            break;

            case 1: $text = "bir";
            break;
            
            case 2: $text = "iki";
            break;
                
            case 3: $text = "uc";
            break;

            case 4: $text = "dort";
            break;

            case 5: $text = "bes";
            break;

            case 6: $text = "altı";
            break;

            case 7: $text = "yedi";
            break;

            case 8: $text = "sekiz";
            break;

            case 9: $text = "dokuz";
            break;   
        }
        return $text;
    }

    Function toText2Digit($number) {
        $text = "";

        switch($number) {
            case 0: $text = "sifir";
            break;

            case 1: $text = "on";
            break;
            
            case 2: $text = "yirmi";
            break;
                
            case 3: $text = "otuz";
            break;

            case 4: $text = "kirk";
            break;

            case 5: $text = "elli";
            break;

            case 6: $text = "altmis";
            break;

            case 7: $text = "yetmis";
            break;

            case 8: $text = "seksen";
            break;

            case 9: $text = "doksan";
            break;  
        }
        return $text;
    }

    Function toText3Digit($number) {
        $text = "";

        switch($number) {
            case 0: $text = "sifir";
            break;

            case 1: $text = "yüz";
            break;
            
            case 2: $text = toText1Digit($number) . " yüz";
            break;
                
            case 3: $text = toText1Digit($number) . " yüz";
            break;

            case 4: $text = toText1Digit($number) . " yüz";
            break;

            case 5: $text = toText1Digit($number) . " yüz";
            break;

            case 6: $text = toText1Digit($number) . " yüz";
            break;

            case 7: $text = toText1Digit($number) . " yüz";
            break;

            case 8: $text = toText1Digit($number) . " yüz";
            break;

            case 9: $text = toText1Digit($number) . " yüz";
            break;
   
        }
        return $text;
    }

    Function readNumber($number) {
        $text = "";
        $digit = 0;
        $num = 0;
        
        $copy = $number;
        while(!($copy == 0)) {
            $digit++;
            $num = $copy % 10;
            $copy /= 10;
        }


    }
?>
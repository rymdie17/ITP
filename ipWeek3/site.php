<?php
#Syntax Kuralları   

#Her satırın sonuna noktalı virgül koymak.
echo "Merhaba Dünya";
echo "<br>";
#Dosya uzantısı php olmalı.
#site.php

# HTML ile php kodları beraber kullanılabilir.
#----------------------------------------------
?>
<html>

<body>
    <?php 
        echo "Merhaba";
    ?>
</body>

</html>

<?php
#----------------------------------------------

# php de html taglerini kullanabiliriz
#----------------------------------------------
echo "<br>";
echo "<strong><em> Merhaba Dünya</em></strong>";
#----------------------------------------------  

# \ ignore işareti
#----------------------------------------------
echo "<br>";
echo "<font size = \"6\"> Katılımcılar </font>";
echo "<br>";
echo "1. Fatih ÖZKURT <br>";
echo "2. Fatih ÖZKURT <br>";
echo "3. Fatih ÖZKURT <br>";
echo "4. Fatih ÖZKURT <br>";
#----------------------------------------------

# Değişkenler
#----------------------------------------------
$degisken = "5";
$degisken2 = 5;
echo $degisken . " " . $degisken2;

$Degisken_Adi = 'YBS';

echo "<br>";
define("pi2", "3.14");
echo pi2;



?>
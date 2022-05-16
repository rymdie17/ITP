# metin girdiğimizde metin yazdiran 
# sayi girildiğinde sayi mod 2 yi yazdiran

<html>

<body>

    <form action="" method="post">
        <table>
            <tr>
                <td>Metin giriniz</td>
                <td>:</td>
                <td><input type="text" name="input"></td>
            </tr>
            <tr>
                <td>Sayi giriniz</td>
                <td>:</td>
                <td><input type="numeric" name="inputNumber"></td>
            </tr>
            <tr align="right">
                <td></td>
                <td></td>
                <td><input type="submit" name="gonder" value="Gönder"></td>
            </tr>
        </table>
    </form>

</body>

</html>

<?php
    if(isset($POST["gonder"])) {
        
    }
?>
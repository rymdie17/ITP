<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

    <form action=" " method="post">
        <table border="0">

            <tr>
                <td>Harddisk Fiyatı</td>
                <td>:</td>
                <td><input type="text" name="Harddisk"> </td>
            </tr>
            <tr>
                <td>Ekran Kartı Fiyatı</td>
                <td>:</td>
                <td><input type="text" name="EkranKarti"> </td>
            </tr>
            <tr>
                <td>Anakart Fiyatı</td>
                <td>:</td>
                <td><input type="text" name="Anakart"> </td>
            </tr>
            <tr>
                <td>Monitör Fiyatı </td>
                <td>:</td>
                <td><input type="text" name="Monitor"> </td>
            </tr>
            <tr>
                <td>Ram Fiyatı</td>
                <td>:</td>
                <td><input type="text" name="Ram"> </td>
            </tr>

            <tr align="right">
                <td></td>
                <td></td>
                <td><input type="submit" name="basiniz" value="Gönder"> </td>
            </tr>



        </table>

    </form>

    <?php
    if (isset($_POST["basiniz"])) {
        Define("iscilik_ucreti", 100);
        $asdas = 'cmdekrani';
        $Harddisk = $_POST["Harddisk"];
        $EkranKarti = $_POST["EkranKarti"];
        $Anakart = $_POST["Anakart"];
        $Monitör = $_POST["Monitor"];
        $Ram = $_POST["Ram"];

        $Toplam = iscilik_ucreti + $Harddisk + $EkranKarti + $Anakart + $Monitör + $Ram;
        echo $Toplam;
        echo $asdas;    
    }
    ?>
</body>

</html>
<html>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Enter number:</td>
                    <td><input type="text" name="value"></td>
                </tr>

                <tr align="right">
                    <td></td>
                    <td><input type="submit" name="button" value="Gönder"></td>
                </tr>
            </table>
            
        </form>
    </body>
</html>

<?php
    if(isset($_POST["button"])) 
    {
        $value = $_POST["value"];

        switch ($value) 
        {
            case (0): 
            {
                echo "SIFIR";
                break;
            }
            case (1): 
            {
                echo "BİR";
                break;
            }
            case (2): 
            {
                echo "İKİ";
                break;
            }
            case (3): 
            {
                echo "ÜÇ";
                break;
            }
            case (4): 
            {
                echo "DÖRT";
                break;
            }
            case (5): 
            {
                echo "BEŞ";
                break;
            }
            case (6): 
            {
                echo "ALTI";
                break;
            }
            case (7): 
            {
                echo "YEDİ";
                break;
            }
            case (8): 
            {
                echo "SEKİZ";
                break;
            }
            case (9): 
            {
                echo "DOKUZ";
                break;
            }
            default: 
            {
                echo "0-9 arasında giriniz!";
            }

        }
    }
?>
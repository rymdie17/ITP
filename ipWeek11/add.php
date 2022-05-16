<?php
define("MyServer", "localhost");
    define("MyUser", "root");
    define("MyPassword", "");
    define("MyDatabase", "ybs");

    function sqlConnect() {
        return mysqli_connect(MyServer, MyUser, MyPassword, MyDatabase);
    }
    
    if(sqlConnect()) echo "Connection success!"; else  echo "Connection failed!!";
    echo "<br>";

    #----------------------------------------------------------------------------------#

    $connection = sqlConnect();
    
    mysqli_query($connection, "INSERT INTO anatablo (Adi, Soyadi, EvTel, IsTel, Adresi)
     VALUES ('Nurcihan', 'Ozkurt', 31, 31, 'Canakkale')");

    echo "Task complete";
?>
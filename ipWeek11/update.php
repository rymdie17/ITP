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

    $connection = sqlConnect();  
    
    // kayıt güncelleme
    $phoneNumber=5453963688;
    mysqli_query($connection, "UPDATE anatablo SET EvTel=$phoneNumber where Adi='Nurcihan'");

    echo "Task complete";
?>
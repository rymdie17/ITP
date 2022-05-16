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
    
    // kayıt silme
    mysqli_query($connection, "DELETE FROM anatablo where Adi='Nurcihan'");
    mysqli_close($connection);

    echo "Task complete";
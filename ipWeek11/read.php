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

    // SELECT, FROM, WHERE, OR, AND, ORDER BY(ASC , DESC)
    $connection = sqlConnect();                         
    $result = mysqli_query($connection, "SELECT SiraNo ,Adi, Adresi FROM anatablo");
    # ascending(ASC) = artan(a->z)  descending(DESC) = azalan(z->a)

    while($rows = mysqli_fetch_array($result)) {
        echo $rows['SiraNo'] . " " . $rows['Adi'] . " " . $rows['Adresi']; 
        echo "<br>";
    }    
?>
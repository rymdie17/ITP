
<form action="" method="post">
    <p>Enter your name: <input type="text" name="getName"> </p>
    <p>Enter your surname: <input type="text" name="getSurname"> </p>
    <p> <input type="submit" name="nameSumbitButton" > </p>
</form>

<?php
    if(isset($_POST["nameSumbitButton"]))  {
        $name = $_POST["getName"];
        $surname = $_POST["getSurname"];
        
        echo "Welcome " . $name ." " . $surname;
    }
   
?>


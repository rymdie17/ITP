<form action="" method="post">
    <table>
        <tr>
            <td>Enter number 1</td>
            <td>: </td>
            <td><input type="text" name="num1"></td>
        </tr>

        <tr>
            <td>Enter number 2</td>
            <td>: </td>
            <td><input type="text" name="num2"></td>
        </tr>

        <tr>
            <td>Select an operation</td>
            <td>: </td>
            <td> <select name="choose">
                    <option value="0" selected="selected">please choose</option>
                    <option value="1">+</option>
                    <option value="2">-</option>
                    <option value="3">*</option>
                    <option value="4">/</option>
                </select>
            </td>
        </tr>

        <tr align="right">
            <td></td>
            <td></td>
            <td><input type="submit" name="send" value="calculate"></td>
        </tr>
    </table>
</form>

<?php
    Function calc($number1, $number2, $operation) {
        $result = 0;
        
        switch($operation) {
            case 0: echo "Please choose an operation!";
            break;

            case 1: $result = $number1 + $number2;
            break;
                        
            case 2: $result = $number1 - $number2;
            break;

            case 3: $result = $number1 * $number2;
            break;

            case 4: $result = $number1 / $number2;
            break;
        }

        return $result;
    }

    if(isset($_POST["send"])) {
        $number1 = $_POST["num1"];
        $number2 = $_POST["num2"];
        $operation = $_POST["choose"];
        
        echo "Result: " . calc($number1, $number2, $operation);
    }
    

?>
<!DOCTYPE html>
<html>
    <label> Factorial </label><br><br>
    <form method = "post">
        <label>Enter n =</label>
        <input type = "number" name = "n" required>
        <input type = "submit" value = "Calculator">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];
        if ($n<0) {
            echo "Invalid input";
        }
        else {
            if ($n == 0) {
                echo "Giai thừa của 0 là: 1";
            }
            else{
                $result = 1;
                for($i=1;$i<=$n;$i++){
                    $result *= $i;
                }
                echo "Giai thừa 1 ->" . $n . "là: " . $result; 
            }
        }
    }
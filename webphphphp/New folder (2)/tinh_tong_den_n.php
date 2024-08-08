<!DOCTYPE html>
<html>
    <form method = "post">
        <label> Sum 1-> n </label><br><br>
        <label> Enter n </label>
        <input type = "number" name = "num" required>
        <input type = "submit" value = "Calculate"><br><br>
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        if ($num < 1) {
            echo "invalid input";
        }
        else{
            $result = 0;
            for($i=1; $i<=$num; $i++){
                $result += $i;
            }
            echo "Sum= " . $result;
        }
    }
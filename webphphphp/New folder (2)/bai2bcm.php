<!DOCTYPE html>
<html>
    <form method = "post">
        <input type = "number" name = "input" required><br><br>
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];
        if ($input < 1 || $input >9) {
            echo "Invalid input";
        }
        else {
            for ($i=1; $i<=$input; $i++) {
                for ($j=1; $j<=$i; $j++) {
                    echo $j;
                }
                for ($j=$i-1; $j>=1; $j--) {
                    echo $j;
                }
                echo "<br/>";
            }

        }
    }





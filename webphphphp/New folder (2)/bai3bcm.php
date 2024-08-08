<!DOCTYPE html>
<html>
    <form method = "post">
        <label> Nhập chuỗi: </label>
        <input type = "text" name = "input" required>
        <input type = "submit" value = "Sắp xếp">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];
        $lenstr = strlen($input);
        $input = str_split($input);
        $even = [];
        $odd = [];
        $char = [];
        for($i = 0; $i < $lenstr; $i++) {
            if($input == 0){
                $even[] = 0;
            }
            else if(!((int)$input[$i])){
                $char[] = $input[$i];
            }
            else{
                $number = (int)$input[$i];
                if($number%2 == 0) {
                    $even[] = $number;
                }
                else {
                    $odd[] = $number;
                }

            }
        }
        sort($even);
        sort($odd);
        sort($char);
        $output1 = implode($even);
        $output2 = implode($odd);
        $output3 = implode($char);
        echo $output1 . $output2 . $output3;
    }

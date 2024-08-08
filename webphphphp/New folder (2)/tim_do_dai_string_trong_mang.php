<!DOCTYPE html>
<html>
    <form action = "tim_do_dai_string_trong_mang.php" method = "post">
        <input type = "text" name = "input">
        <input type = "submit" value = "submit">
</form>

<?php
if(isset($_POST["input"])){

    $input = $_POST["input"];
    $my_array = explode(" ", $input);
    $len_array = count($my_array);
    $max = '';
    $min = '';
    $lenmax = 0;
    $lenmin = strlen($my_array[0]);
    for($i=0; $i<$len_array;$i++){
        if(strlen($my_array[$i]) >= $lenmax){
            $lenmax = strlen($my_array[$i]);
            $max = $my_array[$i];
        }
        if(strlen($my_array[$i]) <= $lenmin) {
            $lenmin = strlen($my_array[$i]);
            $min = $my_array[$i];
        }
    }
    echo "minLength = " . $lenmin . ";";
    echo "<br/>";
    echo "maxLength = " . $lenmax . ";";
}
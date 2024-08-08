<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function file_signature($file){
        $read_bytes = fopen($file, 'rb');
        $byte = fread($read_bytes, 3);
        fclose($read_bytes);
        return bin2hex($byte);
    }
    function check_file($file_path){
        $file_sign = file_signature($file_path);
        $jpg = "ffd8ff";
        $png = "89504e";
        $gif = "474946";
        if($file_sign === $jpg) {
            return true;
        }
        elseif($file_sign === $png){
            return true;
        }
        elseif($file_sign === $gif){
            return true;
        }
        else{
            return false;
        }
    }
    $file_path = "uploads/";
    $file = $file_path . basename($_FILES["upload_file"]["name"]);
    $file_type = check_file($_FILES["upload_file"]["tmp_name"]);
    if($file_type){
        if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $file)){
            htmlspecialchars(basename($_FILES["upload_file"]["name"]));
            echo "<br><img src='$file' alt='Uploaded Image'>";
        }
        else{
            echo "something wrong with your file";
        }
    }
    else{
        echo "this is not a picture";
    }







}






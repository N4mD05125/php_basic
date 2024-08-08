<?php
if (!empty($_POST)) {
    $error = 0;
    if(empty($_POST['username'])){
        echo "Không được để trống username <br/>";
        $error++;
    }
    if(empty($_POST['password'])){
        echo "Không được để trống password <br/>";
        $error++;
    }
    else{
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$/', $_POST['password'])) {
            echo "Mật khẩu yếu <br/>";
        $error++;
        } 
    }
    if(empty($_POST['name'])){
        echo "Không được để trống tên <br/>";
        $error++;
    }
    if(empty($_POST['gender'])){
        echo "Không được để trống gender <br/>";
        $error++;
    }
    if(empty($_POST['dob'])){
        echo "Không được để trống dob <br/>";
        $error++;
    }
    else{
        $dob = $_POST["dob"];
        $birth = new DateTime($dob);
        $rightnow = new DateTime();
        if($birth >= $rightnow) {
            echo "Tuổi âm <br/>";
            $error++;
    }
    }
    if(empty($_POST['agree'])){
        echo "Không được để trống Agree to Terms of Services <br/>";
        $error++;
    }
if(!$error){
    echo "ok";  
    header("Location: /webphphphp/bai_tap_he/home.php");
    exit;
}
else{
    echo "Quay lại để làm lại </br>";
    echo '<a href="register.php">Quay lại</a>';
}



}
else{
    echo "Cuts";
}



?>
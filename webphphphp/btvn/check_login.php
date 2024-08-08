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
    if(!$error){
        echo "ok";
    }
    else{
        echo "Quay lại để làm lại </br>";
        echo '<a href="login.php">Quay lại</a>';
    }
}
else{
    echo "Cuts";
}



?>
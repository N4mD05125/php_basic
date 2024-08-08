<?php
$admin_name = "admin";
$admin_pass = "4297f44b13955235245b2497399d7a93";
$cookies_name_admin  = "admin";
$cookies_value_admin = "admin_value";
$user_name = "user";
$user_pass = "e10adc3949ba59abbe56e057f20f883e";
$cookies_name_user = "user";
$cookies_value_user = "user_value";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    if(isset($_POST["check"])){
        $check = 1;
    }
    else{
        $check = 0;
    }

    if($username === $admin_name && $admin_pass === md5($pass)){
        if($check){
            setcookie($cookies_name_admin, $cookies_value_admin, time() + 3600, "/");
        }
        echo "Welcome admin, how r u today?";
        echo "<br/>";
        echo "<a href= 'upload_front.php/'>Upload some image</a>";
    }
    elseif($username === $user_name && $user_pass === md5($pass)){
        if($check){
            setcookie($cookies_name_user, $cookies_value_user, time() + 3600, "/");
        }
        echo "Welcome user, how r u today?";
        echo "<br/>";
        echo "<a href= 'upload_front.php/'>Upload some image</a>";
    }
    else{
        echo "wait a minute, who r u?";
    }



}
echo "nothing";

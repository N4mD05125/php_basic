<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $pass = $_POST["password"];
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $birth = new DateTime($dob);
    $rightnow = new DateTime();
    $age = $rightnow->diff($birth)->y;
    echo "Welcome, " . $firstname . " " . $lastname . "<br/>";
    echo "Username: " . $name . "<br/>";
    echo "Password: " . md5($pass) . "<br/>";
    echo "Họ và Tên: " . $firstname . " " . $lastname . "<br/>";
    echo "Giới tính: " . ucfirst($gender) . "<br/>";
    echo "Tuổi: " . $age;
}

?>
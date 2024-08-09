<?php
$servername = "localhost";
$username = "tester";
$password = "password1234";
$dbname = "thong_tin_sinh_vien";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Deo ket noi duoc: " . $conn->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];

$sql = "INSERT INTO sinh_vien (name, phone, email, age) values ('$name', '$phone', '$email', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "Da them thong tin" . "<br/>";
    $last_id = $conn->insert_id;
    echo "ID thong tin vua them la: " . $last_id;
} else {
    echo "Lmao: " . $conn->error;
}

$conn->close();
?>

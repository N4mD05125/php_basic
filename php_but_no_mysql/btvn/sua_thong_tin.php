<?php
$servername = "localhost";
$username = "tester";
$password = "password1234";
$dbname = "thong_tin_sinh_vien";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Deo ket noi duoc: " . $conn->connect_error);
}

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];

$sql = "UPDATE sinh_vien SET name='$name', phone='$phone', email='$email', age='$age' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Da cap nhat" . "<br/>";
}
else {
    echo "Lmao: " . $conn->error;
}

$conn->close();
?>

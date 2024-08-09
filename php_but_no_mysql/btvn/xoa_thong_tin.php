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

$sql = "DELETE FROM sinh_vien WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Xoa xong roi";
}
else {
    echo "Khong xoa duoccc: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

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

$sql = "SELECT id, name, phone, email, age FROM sinh_vien WHERE id='$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "So thu tu: " . $row["id"] . "<br/>";
        echo "Ten: " . $row["name"] . "<br/>";
        echo "So dien thoai: " . $row["phone"] . "<br/>";
        echo "Dia chi email: " . $row["email"] . "<br/>";
        echo "Tuoi: " . $row["age"] . "<br/>";
    }
} 
else {
    echo "Khong tim thay thong tin";
}

$conn->close();

?>


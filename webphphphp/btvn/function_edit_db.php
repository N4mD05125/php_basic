<?php

function connectDB(){
    global $conn;
    $conn = mysqli_connect("localhost", "root", "", "testdb");
    if (mysqli_connect_errno()){
        echo "failed to connect" . mysqli_connect_error();
        exit();
    }
    return $conn;
}
function disconnectDB(){
    global $conn;
    if($conn){
        mysqli_close($conn);
    }
}
function Edit_User($id, $name, $email, $phone, $pass){
    global $conn;
    connectDB();
    $id = intval($id);
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);
    $pass = mysqli_real_escape_string($conn, $pass);
    $hashedpass = hash(sha256, $pass);
    $Edit_User = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', pass = '$hashedpass' WHERE id = $id";
    $query = mysqli_query($conn, $Edit_User);
    disconnectDB();
    return $query;
}

echo "hello";


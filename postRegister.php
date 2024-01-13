<?php
session_start();

$conn = new mysqli("localhost", "root", "", "crud - sim");
// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
    exit();
}

// Tangkap data dari form
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa keberadaan username dalam database
$query = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($query);

// Periksa keberadaan email dalam database
$query_2 = "SELECT * FROM users WHERE email='$email'";
$result_2 = $conn->query($query_2);

// var_dump($result);
if ($result_2->num_rows == 0) {
    // User ditemukan, periksa email
    $row = $result->num_rows;
    if ($row == 0) {
        header('Location: login.php');
        $insert_user = "INSERT INTO users VALUES('$username','$email','$password',0)";
        $result_user = $conn -> query($insert_user);
    } else {
        $_SESSION["invalid_credentials"] = "Username telah digunakan";
        header('Location: register.php');
    }
} else {
    $_SESSION["invalid_credentials"] = "Email telah digunakan";
    header('Location: register.php');
}

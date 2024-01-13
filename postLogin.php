<?php
session_start();

$conn = new mysqli("localhost", "root", "", "crud - sim");
// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
    exit();
}

// Tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa keberadaan username dalam database
$query = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($query);

// var_dump($result);

// Username pembayaran dan users
$username_bayar = "SELECT * FROM pembayaran WHERE username='$username'";
$result_bayar = $conn -> query($username_bayar);

if ($result->num_rows > 0) {
    // User ditemukan, periksa password
    $row = $result->fetch_assoc();
    if ($row["password"] == $password) {
        if($row["bayar"] == 1){
            $_SESSION["username"] = $row["username"];
            header('Location: Halaman2.php');
        }
        else if ($result_bayar -> num_rows > 0){
            header('Location: notification.php');
        }
        else{
            $_SESSION["username"] = $row["username"];
            header('Location: Pembayaran.php');
        }

    } else {
        $_SESSION["invalid_credentials"] = "Password Salah";
        header('Location: login.php');
    }
} else {
    $_SESSION["invalid_credentials"] = "Username Tidak ditemukan";
    header('Location: login.php');
}

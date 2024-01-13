<?php
session_start();

$conn = new mysqli("localhost", "root", "", "crud - sim");
if ($conn->connect_errno) {
   echo "Failed to connect to MySQL: " . $conn->connect_error;
   exit();
}

if (isset($_POST['hapus_sertifikat'])) {
   $sertifikatImage = $_POST['sertifikat_image'];
   $username = $_SESSION["username"];

   // Pastikan hanya pengguna yang memiliki sertifikat yang dapat menghapusnya
   $deleteQuery = "DELETE FROM sertifikat WHERE image = '$sertifikatImage' AND username = '$username'";
   $deleteResult = $conn->query($deleteQuery);

   if ($deleteResult) {
      // Hapus file gambar dari direktori
      $uploadDir = "Sertif/";
      $filePath = $uploadDir . $sertifikatImage;
      if (file_exists($filePath)) {
         unlink($filePath);  // Hapus file gambar
      }

      header("Location: halaman2.php");
   } else {
      echo "Gagal menghapus sertifikat.";
   }
} else {
   echo "Data tidak diterima.";
}
?>
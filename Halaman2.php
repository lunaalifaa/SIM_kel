<?php
$conn = new mysqli("localhost", "root", "", "crud - sim");
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}

session_start();

$username = $_SESSION["username"];
// Query Select
$selectQuery = "SELECT * FROM sertifikat WHERE username = '$username'";
$result_q = $conn->query($selectQuery);








// Cek apakah query berhasil dijalankan
if (!$result_q) {
    echo "Gagal menjalankan query SELECT.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="2.css">
  <title>Halaman 2</title>
</head>

<body>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&family=Outfit:wght@300&display=swap');
</style>

<style>

body {
  margin: 0;
  padding: 0;
  font-family: 'Arial', sans-serif;
  background-image: url('https://i.pinimg.com/564x/5a/8d/6b/5a8d6b77a99e2b0ca4882c357c26100a.jpg');
  background-size: cover;
  background-attachment: fixed; /* Fixed background */
}


.navigation-pane {
  background-color: #333;
  color: white;
  padding: 10px;
  display: flex;
  justify-content: space-between;
}

.logo h1 {
  margin: 0;
  font-size: 24px;
}

.biru {
  color: #00f; /* You can adjust the shade of blue as needed */
}

.actions button {
  background-color: #FF3300 ; /* Green color */
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
}

.actions button:hover {
  background-color: #00CCCC; /* Darker shade of green on hover */
}

.about-us {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 20px;
}

.card {
  background-color: #f0f8ff; /* AliceBlue */
  margin: 10px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Added box shadow for a 3D effect */
  text-align: center;
  transition: transform 0.3s ease-in-out; /* Added a smooth transition effect */
}

.card:hover {
  transform: scale(1.05); /* Added a slight scale effect on hover for an interactive feel */
}

.card img {
  max-width: 100%;
  height: auto;
  border-radius: 5px;
}

.card h2, .card h4 {
  margin: 10px 0;
  color: #555555; /* Green color for headers */
}

.card p {
  text-align: justify;
  margin: 2px;
}

form button {
  font-weight: bold;
  width: 150px;
  height: 30px;
  background-color: #ff0000; /* Red color for the button */
  color: white;
  text-decoration: none;
  border-radius: 20px;
  text-align: center;
  border: none;
  cursor: pointer;
}

form button:hover {
  background-color: #d60000; /* Darker shade of red on hover */
}

</style>
  
    <div class="navigation-pane">
        <div class="logo">
            <h1>Cloud<span class="biru">Cert</span></h1>
        </div>
        <div class="actions">
            <a href="formulir.php"><button>Add Certificate</button></a>
        </div>
    </div>
    <a style="text-decoration: none;" href="index.php"><h2 style="text-align: center; color : #555555; font-size:36px; font-weight: bold; margin-top: 80px;">CloudCert</h2></a>
    <section class="about-us">
      <?php while ($row = $result_q->fetch_assoc()) { ?>
        <div class="card">
          <img src="http://localhost/SIM_kel/Sertif/<?=$row["image"]?>">
          <!-- <img src="https://th.bing.com/th/id/OIP.dbYv6F46DJdYZXySZ2RE2QHaE8?rs=1&pid=ImgDetMain"> -->
          <h2 style="text-align : center;"><?=$row["nama_sertifikat"]?></h2>
          <h4 style = "text-align : center;"><?=$row["asal_instansi"]?></h4>
          <p>Tipe Sertifikat : <span style="font-weight: bold;"><?=$row["tipe_sertifikat"]?></span></p>
          <p style="text-align: justify; margin: 2px;"><?=$row["deskripsi"]?><p>
          <form method="post" action="postHapus.php">
          <input type="hidden" name="sertifikat_image" value="<?=$row["image"]?>">
          <button type="submit" name="hapus_sertifikat" style="font-weight:bold; width:150px; height:30px; background-color:red; color:white; text-decoration: none; border-radius: 20px; text-align: center; border:none;">Hapus Sertifikat</button>
          </form>
          </div>
        </div>
      <?php } ?>
      
      <!-- <div class="card">
        <img src="" alt="Nama Kedua">
        <h3>Vikri Haikal</h3>
        <p>Solok selatan</p>
      </div>
      <div class="card">
        <img src="" alt="Nama Ketiga">
        <h3>Prayuganingtyas E.S</h3>
        <p>Solo</p>
      </div>
      <div class="card">
        <img src="" alt="Nama Keempat">
        <h3>Nyoman Dyah Primasari</h3>
        <p>Bali</p>
      </div>
      <div class="card">
        <img src="" alt="Nama Kelima">
        <h3>Luna Citra Alifa</h3>
        <p>Solo</p>
      </div> -->
    </section>
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pembayaran</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
            font-family: Arial, Helvetica, sans-serif;
        }

        .verification-container {
            text-align: center;
        }

        .verified-icon {
            width: 100px; /* Sesuaikan dengan ukuran gambar verified */
            height: 100px; /* Sesuaikan dengan ukuran gambar verified */
        }

        .verification-text {
            font-size: 18px;
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="verification-container">
    <img src="https://cdn0.iconfinder.com/data/icons/simplie-essential-action/22/action_039-checkmark-check-done-verify-1024.png" alt="Verified" class="verified-icon">
    <p class="verification-text">Pembayaran anda sedang dilakukan pengecekan oleh tim kami</p>
    <a href="index.php"><button style="font-weight:bold; border-radius:10px; padding: 10px; border: none; background-color: aqua;">Klik tombol untuk kembali ke beranda</button></a>
</div>

</body>
</html>
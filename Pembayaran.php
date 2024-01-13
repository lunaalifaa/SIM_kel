<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Pembayaran</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 400px;
      text-align: center;
    }

    h2 {
      color: #333;
    }

    .payment-form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      margin: 10px 0;
      color: #555;
      font-size: 14px;
    }

    input, select {
      padding: 10px;
      margin: 5px 0 15px 0;
      width: 100%;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }

    input[type="radio"] {  
    width: unset;
    margin: 0 0.5em 0 0;
    vertical-align: middle;
    }

  </style>
</head>
<body>

  <div class="container">
    <h2>Formulir Pembayaran</h2>
    <form class="payment-form" method="POST" action="postBayar.php">

      <label for="norek">Nomor Rekening:</label>
      <input type="text" id="norek" name="norek" required>

      <label for="notelp">Nomor Telepon:</label>
      <input type="text" id="notelp" name="notelp" required>

      <label>Jenis Pembayaran:</label>
      <select name="bayar" id="bayar">
        <option value="disabled" selected disabled>Pilih Pembayaran</option>
        <option value="BCA">BCA (8670578268)</option>
        <option value="OVO">OVO (087805679929)</option>
        <option value="DANA">DANA (087805679929)</option>
        <option value="ShopeePay">ShopeePay (087805679929)</option>
    </select>


      <button type="submit">Bayar</button>
    </form>
  </div>

</body>
</html>
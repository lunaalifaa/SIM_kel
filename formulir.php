<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="formulir.css"/>
    <title>Formulir Sertifikat</title>
  </head>
  <body>
  <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background-image: url('https://i.pinimg.com/564x/5a/8d/6b/5a8d6b77a99e2b0ca4882c357c26100a.jpg');
        background-size: cover;
        background-attachment: fixed; /* Menambahkan properti ini untuk menjaga latar belakang tetap ketika menggulir */
        background-position: center; /* Menambahkan properti ini untuk memposisikan latar belakang ke tengah */
    }
</style>
    <h1 id="title">Formulir Sertifikat</h1>
    <p id="description">Isilah formulir dibawah dengan informasi yang diperlukan</p>
    <form id="survey-form" method="POST" action="postServer.php" enctype="multipart/form-data" autocomplete="off">
      <fieldset>
        <legend>Data Prestasi</legend>
        <br>
        <label class="upload">Upload Sertifikat Prestasi:</label>
        <input name="foto" id="foto-sertifikat" type="file" accept="image/*" required/>
    </label>
    <label id="nama-sertif">Nama Sertifikat<input name="nama" id="nama" type="text" placeholder="Masukan nama Sertifikat"></label>
    <label id="asal-sertif">Asal Instansi Sertifikat: <input name="asal" type="text" required placeholder="Masukan asal Instansi Sertifikat"/></label>
      </fieldset>
      <br>
      <fieldset>
        <legend>Informasi Lainnya</legend>
        <label>Tipe Sertifikat</label>
        <label class="dapatan">
          <input name="tipe" value="Perlombaan" type="radio"/> Perlombaan
          </label>
          <label>
          <input name="tipe" value="Kepanitiaan" type="radio"/> Kepanitiaan 
          </label>
          <label>
          <input name="tipe" value="Seminar/ Pelatihan" type="radio"/> Seminar/ Pelatihan
          </label>
          <label>
          <input name="tipe" value="Organisasi" type="radio"/> Organisasi
          </label>

          <label>
            Masukan Deskripsi Sertifikat
            <textarea name="deskripsi" id="bio" rows="3" cols="30" placeholder="Masukan Deskripsi Sertifikat disini..."></textarea>
          </label>
      </fieldset>
      <br>
      <button type="submit" name="simpan" id="submit">Simpan</button>
    </form>
  </body>

</html>
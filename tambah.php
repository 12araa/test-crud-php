<?php
require 'function.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'latihan.php';
          </script>";
  } else {
    "Data gagal ditambahkan!";
  };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          NIM :
          <input type="text" name="nim" autofocus required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <br>
      <li>
        <button type="submit" name="tambah">Tambah</button>
      </li>
    </ul>
  </form>


</body>

</html>
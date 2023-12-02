<?php
//koneksi ke db
$conn = mysqli_connect('localhost', 'root', '', 'crudphp');

//query isi tabel 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

//tampung ke variabel mahasiswa
$mahasiswa = $rows;



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Data Mahasiswa</title>
</head>

<body>
  <h3>Daftar Data Mahasiswa</h3>

  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>


  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>


</body>

</html>
<?php
//koneksi DB
mysqli_connect('localhost', 'root', '', '')

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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <tr>
      <td>1</td>
      <td>2301010068</td>
      <td>Radhika Prema Nanda</td>
      <td>radhikaprema34@gmail.com</td>
      <td>TI-MDI</td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
  </table>


</body>

</html>
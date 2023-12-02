<?php
require 'function.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('Data berhasil ditambahkan!');
          document.location.href = 'latihan.php';
        </script>";
} else {
  "Data gagal ditambahkan!";
}

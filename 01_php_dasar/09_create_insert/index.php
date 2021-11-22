<?php 

// menghubungkan code file functions.php ke dalam file ini
require 'functions.php';

// melakukan query data
$karyawan = query("SELECT * FROM karyawan");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    
    <h1>Daftar Karyawan</h1>
    <!-- menambahkan link 'Tambah Data Karyawan' ke halaman 1_tambah.php -->
    <a href="1_tambah.php">Tambah Data Karyawan</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Email</th>
      </tr>
      
      <!-- inisialisasi index -->
      <?php $i = 1; ?>
      <!-- mengambil setiap baris data sebagai $row dari $karyawan (data tabel dalam bentuk array) -->
      <?php foreach ( $karyawan as $row ) : ?> 

      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="">ubah</a> | 
          <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="<?= $row["nama"]; ?>" width="50px"></td>
        <td><?= $row["nik"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["usia"]; ?></td>
        <td><?= $row["email"]; ?></td>
      </tr>
      
      <!-- increment index -->
      <?php $i++; ?>
      <!-- mengakhiri foreach -->
      <?php endforeach; ?>

    </table>

  </body>
</html>
<?php
//ambil databases
require 'functions.php';
//ambil table mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
// while($mhs=mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

    <div class="navbar">
        <h1>Daftar Mahasiswa</h1>
    </div>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr style="bold">
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1;?>
    <?php foreach ($mahasiswa as $row )  : ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td>
            <img src="img/<?= $row["gambar"] ?>" width="50">
        </td>
        <td><?= $row["nim"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
    </tr>
    <?php $i++;?>
    <?php endforeach; ?>
    </table>
</body>
</html>
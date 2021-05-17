<?php 
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

//pagination



$mahasiswa = query("SELECT * FROM mahasiswa ");
//tombol cari di klik

if(isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 103px;
            left: 250px;
            z-index: -1;
            display: none;
        }

        @media print {
            .logout, .tambah, .cari, .aksi {
                display: none;
            }
        }
    </style>
</head>
<body>

    <a href="logout.php" class="logout">logout</a> | <a href="print.php" target="_blank">cetak</a>

    <h1>Ini adalah daftar Mahasiswa</h1>
    <a href="tambah.php" class="tambah">tambah mahasiswa</a>
    <br><br>

    <form action="" method="post" class="cari">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keybord pencarian...." autocomplete="off" id="keyword">
        <button typa="submit" name="cari" id="tombol-cari">Cari!</button>

        <img src="img/loader.gif" class="loader" >
    
    </form>
    <br>
    <!-- navigasi -->

    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th class="aksi">Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs ) : ?>           
        <tr>
            <td><?= $i; ?></td>
            <td class="aksi">
                <a href="ubah.php?id=<?= $mhs["id"] ?>">ubah</a> |
                <a href="hapus.php?id=<?= $mhs["id"] ?>" onclick="return confirm('yakin Anda akan menghapus?')">hapus</a>
            </td>
            <td>
                <img src="img/<?= $mhs["gambar"]; ?>" width="50">
            </td>
            <td><?= $mhs["nim"];?></td>
            <td><?= $mhs["nama"];?></td>
            <td><?= $mhs["email"];?></td>
            <td><?= $mhs["jurusan"];?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>


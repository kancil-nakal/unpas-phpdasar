<?php 
usleep(500000);
$keyword = $_GET["keyword"];
require '../functions.php';
$query = "SELECT * FROM mahasiswa
            WHERE
        nama LIKE '%$keyword%' OR 
        nim LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'
        
        ";
$mahasiswa = query($query);
?>

<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
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
            <td>
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
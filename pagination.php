<?php 
//pagination
//konfigurasi
// $jumlahDataPerHalaman = 3;
// $jumlahData = count(query("SELECT * FROM mahasiswa"));
// $jumlahHalaman = ceil($jumlahData /$jumlahDataPerHalaman);
// $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

// $awalData = ($jumlahDataPerHalaman * $halamanAktif) -$jumlahDataPerHalaman;


// $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

?>

<!-- navigasi -->

<?php if( $halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1 ;?>">&laquo;</a>
    <?php endif ?>

    <?php for($i=1; $i<=$jumlahHalaman; $i++) : ?>
        <?php if($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; "><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>" ><?= $i; ?></a>
        <?php endif ?>       
    <?php endfor; ?>

    <?php if( $halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1 ;?>">&raquo;</a>
    <?php endif ?>
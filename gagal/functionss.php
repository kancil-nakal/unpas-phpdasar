<?php 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row; 
    }
    return $rows;

   
}


function tambah($data) {
    global $conn;
    $nim = $data["nim"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO mahasiswa
                    VALUES 
                ('','$nama','$nim','$email','$jurusan','$gambar')
            "; 

    mysqli_query($conn, $query);


}

?>
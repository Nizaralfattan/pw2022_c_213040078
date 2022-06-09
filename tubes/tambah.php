<!-- PHP -->
<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "tubes_pw2022_c_213040078");

// untuk melihat tombol submit sudah dipencet atau belum
if (isset($_POST["submit"])) {


    //cek hasil data yang berhasil ditambahkan
    if (tambah($_POST) > 0) {
        echo "
           <script> 
           alert('data berhasil ditambahkan');
           document.location.href = 'index.php';
           </script>
        ";
    } else {
        echo "
           <script> 
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
           </script>
        ";
    }
}

?>
<!-- AKHIR PHP -->

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<head>
    <title>Tambah Data Rumah Sakit</title>
</head>

<body>
    <h1>Tambah Data Rumah Sakit</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama_rs">Nama Rumah Sakit : </label>
                <input type="text" name="nama_rs" id="nama_rs" required>
            </li>

            <li>
                <label for="tahun_berdiri">Tahun Berdiri : </label>
                <input type="text" name="tahun_berdiri" id="tahun_berdiri" required>
            </li>
            
            <li>
                <label for="lokasi_rs">Lokasi Rumah Sakit : </label>
                <input type="text" name="lokasi_rs" id="lokasi_rs" required>
            </li>
                
            <li>
                <label for="latarbelakang_rs">Latar Belakang : </label>
                <input type="text" name="latarbelakang_rs" id="latarbelakang_rs" required>
            </li>

            <li>
                <label for="photo_rs">Photo Rumah Sakit : </label>
                <input type="file" name="photo_rs" id="photo_rs" required>
            </li>

            <li>
                <button type="submit" name="submit">Manambahkan Data Rumah Sakit!</button>
            </li>

        </ul>

    </form>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>
<!-- AKHIR HTML -->
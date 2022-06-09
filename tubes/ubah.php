<!-- PHP -->
<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data musik berdasarkan id
$msk = query("SELECT * FROM rumahsakit WHERE id = $id")[0];


// untuk melihat tombol submit sudah dipencet atau belum
if (isset($_POST["submit"])) {


    //cek hasil data yang berhasil diubah
    if (ubah($_POST) > 0) {
        echo "
           <script> 
           alert('data berhasil diubah');
           document.location.href = 'index.php';
           </script>
        ";
    } else {
        echo "
           <script> 
            alert('data gagal diubah');
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

<head>
    <title>Ubah Data Rumah Sakit</title>
</head>

<body>
    <h1>Ubah Data Rumah Sakit</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $msk["id"]; ?>">
        <input type="hidden" name="photo_rsLama" value="<?= $r["photo_rs"]; ?>">
        <ul>
            <li>
                <label for="nama_rs">Nama Rumah Sakit : </label>
                <input type="text" name="nama_rs" id="nama_rs" required value="<?= $msk["nama_rs"]; ?>">
            </li>

            <li>
            <label for="tahun_berdiri">Tahun Berdiri : </label>
                <input type="text" name="tahun_berdiri" id="tahun_berdiri" required value="<?= $msk["tahun_berdiri"]; ?>">
            </li>

            <li>
            <label for="lokasi_rs">Lokasi Rumah Sakit : </label>
                <input type="text" name="lokasi_rs" id="lokasi_rs" required value="<?= $msk["lokasi_rs"]; ?>">
            </li>

            <li>
            <label for="latarbelakang_rs">Latar Belakang : </label>
                <input type="text" name="latarbelakang_rs" id="latarbelakang_rs" required value="<?= $msk["latarbelakang_rs"]; ?>">
            </li>

            <li>
                <label for="photo_rs">Photo Rumah Sakit : </label> <br>
                <img src="img/<?= $msk['photo_rs']; ?>" width="40"> <br>
                <input type="file" name="photo_rs" id="photo_rs">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>

        </ul>

    </form>

</body>

</html>
<!-- AKHIR HTML -->
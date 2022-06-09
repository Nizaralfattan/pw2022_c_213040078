<!-- PHP -->

<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$rumahsakit = query("SELECT * FROM rumahsakit");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $musik = cari($_POST["keyword"]);
}

?>
<!-- AKHIR PHP -->

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moch. Nizar Al Fattan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>

<body>

    <a href="Logout.php">Logout</a>

    <h1>Daftar Rumah Sakit</h1>

    <a href="tambah.php">Tambah Data Rumah Sakit</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="50" autofocus placeholder="Cari rumah sakit..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>

    </form>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">

        <!-- 1 -->

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Rumah Sakit</th>
            <th>Tahun Berdiri</th>
            <th>Lokasi Rumah Sakit</th>
            <th>Latar Belakang</th>
        </tr>

        <!-- bagian 1  -->

        <!-- bagian 2 -->
        <?php $i = 1; ?>
        <?php foreach ($rumahsakit as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');">hapus</a>
                </td>
                <td><img src="img/<?= $row["photo_rs"]; ?>" width="100"></td>
                <td><?= $row["nama_rs"]; ?></td>
                <td><?= $row["tahun_berdiri"]; ?></td>
                <td><?= $row["lokasi_rs"]; ?></td>
                <td><?= $row["latarbelakang_rs"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>

        <!-- bagian 2 -->

    </table>

</body>

</html>

<!-- TUTUP HTML  -->
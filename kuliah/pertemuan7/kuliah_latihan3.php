<?php 
$mahasiswa = [
    [
      "nama" => "Nizar Al Fattan", 
      "npm" => "213040078", 
      "email" => "nizar.213040078@mail.unpas.ac.id", 
      "jurusan" => "Teknik Infirmatika",
      "gambar" => "Nizar.jpg"
    ],
    [
      "nama" => "Adam Maulana", 
      "npm" => "213040086", 
      "email" => "adam.213040086@mail.unpas.ac.id", 
      "jurusan" => "Teknik Informatika",
      "gambar" => "Nizar1.jpg"
    ],
    [
      "nama" => "Muhammad Fauzan", 
      "npm" => "213040104", 
      "email" => "fauzan.213040104@mail.unpas.ac.id", 
      "jurusan" => "Teknik Informatika",
      "gambar" => "Nizar2.jpg"
    ]
  ];
$detail = $mahasiswa[$_GET['id']];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Detail Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Detail Mahasiswa</h1>
            <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="img/<?= $detail['gambar'] ?>" class="img-fluid rounded-start" alt="Nizar Al Fattan">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $detail['nama'] ?></h5>
                    <p class="card-text"><?= $detail['npm'] ?></p>
                    <p class="card-text"><?= $detail['email'] ?></p>
                    <p class="card-text"><?= $detail['jurusan'] ?></p>

                    <a href="kuliah_latihan2.php">Kembali</a>
                </div>
                </div>
            </div>
            </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

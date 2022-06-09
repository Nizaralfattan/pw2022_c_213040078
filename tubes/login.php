<!-- PHP -->
<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // SET SESSION
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title>Login - Daftar RS</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <img src="img/death star.jpg" width="600" class="mb-3" alt="">
        ./<h1 class="text-center">Halaman Login</h1>

    
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style:italic">username / password salah</p>
        <?php endif;  ?>
    
        <form action="" method="post" class="text-center">
    
        <div class="mb-3">
            <label for="username" class="visually-hidden">Username :</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
        </div>
        <div class="text-center mb-3">
            <label for="password" class="visually-hidden">password :</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
        </div>
        <div class="text-center mb-3">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
        <div class="text-center">
            <a href="registrasi.php" class="btn btn-primary">Registrasi</a>
        </div>
        
    
        </form>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>
<!-- AKHIR HTML -->
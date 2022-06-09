<!-- PHP -->
<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "
           <script> 
           alert('user berhasil ditambahkan!');
           </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
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

    <title>Registrasi - Daftar RS</title>
</head>

<body class="text-center">

    <h1>Halaman Registrasi</h1>
    <style>
        label {
            display: block;
        }
    </style>

    <form action="" method="post">
        <ul>
            <div>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </div>
            <div>
                <button type="submit" name="register">Register!</button>
            </div>
        </ul>

    </form>

</body>

</html>
<!-- AKHIR HTML -->
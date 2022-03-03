<?php 
// memberikan nilai parameter default pada function
// supaya tidak eror apabila user memanggil function tidak mengirim parameter 
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Nizar"); ?></h1>
</body>
</html>
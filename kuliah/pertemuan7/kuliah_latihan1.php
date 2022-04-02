<?php 
// SUPERGLOBALS
// Variabel milik PHP yang bisa kita gunakan
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET["nama"] = "Nizar";
// $_GET["email"] = "nizar.213040078@mail.unpas.ac.id";

// var_dump($_GET);
// var_dump($_POST);
if(isset($_GET["nama"])) {
    $nama = $_GET["nama"];
} else {
    $nama = 'Tidak Diketahui!';
}
?>

<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php? nama=Nizar">Nizar</a>
    </li>
    <li>
        <a href="?nama=Adam">Adam</a>
    </li>
</ul>
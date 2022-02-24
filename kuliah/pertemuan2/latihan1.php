<?php  
// KOMENTAR
// ini untuk menuliskan catatan

// VARIABEL
// tempat penyimpanan nilai
// Nilai : angka (integer), tulisan (string), boolean (true/false)
// Nama bebas, tidak boleh ada spasi
// boleh ada angka tapi di awal
$nama1 = "Nizar";
echo $nama1; 
echo "<hr>"; 

// OPERATOR 
// Aritmatika
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo (1 + 2) * 3 - 4; // kukabataku
echo "<br>";
echo 10 % 5;
echo "<hr>";

// Perbandingan 
// <, >, <=, >=, ==, !=
echo 1 < 2; // true / 1
echo "<br>";
echo 10 < 5; // false / null
echo "<br>";
echo 10 == "10"; // true
echo "<hr>";

// Identitas
// ===, !==
// mengecek nilai beserta tipe data nya
echo 10 === "10";
echo "<hr>";

// Increment / Decrement
// Penambahan / Pengurangan
// ++, --
$x = 10;
echo ++$x;
echo "<br>";
echo ++$x;
echo "<hr>";

// Concat, Penggabung String
// .
$nama_depan = "Nizar";
$nama_belakang = "Alfattan";
echo $nama_depan . " " . $nama_belakang;


?>
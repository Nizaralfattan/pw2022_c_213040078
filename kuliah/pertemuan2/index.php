<?php  
// ini adalah komentar
// ini juga komentar
/* 
ini komentar
ini juga komentar
*/

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// echo "Nizar Alfattan";

// Penulisan sintaks PHP
// 1.PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh di awali dengan angka, tapi boleh mengandung angka
// $nama = "Nizar Alfattan";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
//.
// $nama_depan = "Nizar";
// $nama_belakang = "Alfattan";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Nizar";
// $nama .= " ";
// $nama .= "Alfattan";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>
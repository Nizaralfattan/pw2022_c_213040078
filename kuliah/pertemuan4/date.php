<?php
// Date / Time

// Date
// Untuk menampilkan tanggal dengan format tertentu
// l = nama hari
// d = tanggal 
// M = nama bulan
// m = bulan dalam bentuk angka
// Y = tahun
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// detik * menit * hari * berapa hari kedepan yang ingin ditampilkan (60*60*24*2)
// + = menampilkan berapa hari kedepan
// - = menampilkan berapa hari kebelakang
// echo date("l", time()+172800);
// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik yang sudah berlalu
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun (urutannya harus sesuai)
// echo date("l", mktime(0,0,0,5,24,2003));

// strtotime
echo date("l", strtotime("24 may 2003"));

?>
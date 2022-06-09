<?php

// koneksi ke databases
$conn = mysqli_connect("localhost", "root", "", "tubes_pw2022_c_213040078");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;

    $nama_rs = htmlspecialchars($data["nama_rs"]);
    $tahun_berdiri = htmlspecialchars($data["tahun_berdiri"]);
    $lokasi_rs = htmlspecialchars($data["lokasi_rs"]);
    $latarbelakang_rs = htmlspecialchars($data["latarbelakang_rs"]);

    // UPLOAD PHOTO
    $photo_rs = upload();
    if (!$photo_rs) {
        return false;
    }

    // query insert DATA
    $query = "INSERT INTO rumahsakit
                VALUES
                ('', '$nama_rs', '$tahun_berdiri', '$lokasi_rs', '$latarbelakang_rs', '$photo_rs')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['photo_rs']['name'];
    $ukuranFile = $_FILES['photo_rs']['size'];
    $error = $_FILES['photo_rs']['error'];
    $tmpName = $_FILES['photo_rs']['tmp_name'];

    // Cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
              alert('pilih gambar terlebih dahulu!');  
            </script>";
        return false;
    }

    // untuk cek yang diupload adalah gambar.
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
              alert('yang anda upload bukan gambar!');  
            </script>";
        return false;
    }
    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
              alert('Ukuran gambar terlalu besar!');  
            </script>";
        return false;
    }

    // lolos pengecekan gambar siap diupload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM rumahsakit WHERE id = $id");
    return mysqli_affected_rows($conn);
}



function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama_rs = htmlspecialchars($data["nama_rs"]);
    $tahun_berdiri = htmlspecialchars($data["tahun_berdiri"]);
    $lokasi_rs = htmlspecialchars($data["lokasi_rs"]);
    $latarbelakang_rs = htmlspecialchars($data["latarbelakang_rs"]);
    $photo_rsLama = htmlspecialchars($data["photo_rsLama"]);

    //cek pakah user pilih gambar baru atau tidak
    if ($_FILES['photo_rs']['error'] === 4) {
        $photo_rs = $photo_rsLama;
    } else {
        $photo_rs = upload();
    }



    // query insert DATA
    $query = "UPDATE rumahsakit SET
                nama_rs = '$nama_rs',
                tahun_berdiri = '$tahun_berdiri',
                lokasi_rs = '$lokasi_rs',
                latarbelakang_rs = '$latarbelakang_rs',
                photo_rs = '$photo_rs'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM rumahsakit
                WHERE
                nama_rs LIKE '%$keyword%' OR
                tahun_berdiri LIKE '%$keyword%' OR
                lokasi_rs LIKE '%$keyword%' OR
                latarbelakang_rs LIKE '%$keyword%'
                ";
    return query($query);
}


function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user 
        WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!');
              </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan user baru ke databases
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['Level'];
    $fullname = $_POST['fullname'];

    // buat query
    $sql = "INSERT INTO kk4 (username,password,Level,fullname) VALUE ('$username', '$password', '$level', '$fullname')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>

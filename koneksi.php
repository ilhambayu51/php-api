<?php
//konfigurasi database
$host ="localhost";
$user ="root";
$password ="";
$database ="php-api";

$link = mysqli_connect($host,$user,$password,$database) or die ("koneksi gagal");
?>
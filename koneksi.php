<?php
$koneksi = mysqli_connect("localhost", "root", "", "praktikum6");
if(!$koneksi){
    die("Gagal Terhubung :".mysqli_connect_error());
}
?>
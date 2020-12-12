<?php
include "koneksi.php";
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];

$tambah = "insert into mahasiswa
values ('$nim', '$nama', '$prodi', '$angkatan')";

$hasil = mysqli_query($koneksi, $tambah);
?>
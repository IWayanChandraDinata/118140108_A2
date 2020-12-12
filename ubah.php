<?php
include 'koneksi.php';
$nim = $_POST['id'];
$update = "UPDATE mahasiswa set NIM='$nim'";
$hasil = mysqli_query($koneksi, $update);
?>
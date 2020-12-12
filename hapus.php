<?php
include 'koneksi.php';
$nim = $_POST['id'];
$hapus = "DELETE FROM mahasiswa WHERE NIM='$nim'";
$hasil = mysqli_query($koneksi, $hapus);
?>
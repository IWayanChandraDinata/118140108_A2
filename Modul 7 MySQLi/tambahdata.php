<!DOCTYPE html>
<html>
<head>
	<title>Simpan Data Mahasiswa</title>
</head>
<body>
	<?php
		$nrp = $_POST['nrp'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$id_jur = $_POST['id_jur'];

		$conn=mysqli_connect("localhost","root","") or die ("Koneksi Gagal");
		mysqli_select_db($conn, "modul7_tugas");
		echo "NRP : $nrp <br>";
		echo "Nama : $nama <br>";
		echo "Alamat : $alamat <br>";
		echo "ID Jurusan : $id_jur <br>";

		$sqlstr="insert into mahasiswa (NRP,Nama,Alamat,ID_Jur) values ('$nrp','$nama','$alamat','$id_jur')";
		$hasil=mysqli_query($conn, $sqlstr);
		echo "<br> Simpan Data Mahasiswa Berhasil!";

		mysqli_close($conn);
	?>
</body>
</html>
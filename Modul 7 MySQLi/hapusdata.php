<!DOCTYPE html>
<html>
<head>
	<title>Data Terhapus!</title>
</head>
<body>
	<?php
		$hapus=$_POST['hapusnrp'];
		$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn, "modul7_tugas");
		$hasil=mysqli_query($conn, "select mahasiswa.NRP,mahasiswa.Nama,mahasiswa.Alamat,jurusan.Nama_Jurusan from mahasiswa,jurusan WHERE mahasiswa.ID_Jur = jurusan.ID_Jur AND NRP like '%$hapus%'");
		$jumlah=mysqli_num_rows($hasil);
		echo "<br>";
		echo "<b>Data Terhapus berjumlah $jumlah </b>";
		echo "<br>";

		$urutan=1;
		while ($baris=mysqli_fetch_array($hasil)) {
			echo "Data ke-$urutan <br>";
			echo "NRP : "; echo $baris[0]; echo "<br>";
			echo "Nama : "; echo $baris[1]; echo "<br>";
			echo "Alamat : "; echo $baris[2]; echo "<br>";
			echo "Nama Jurusan : "; echo $baris[3]; echo "<br><br>";
			$urutan+=1;
		}

		$sql="delete from mahasiswa WHERE NRP like '%$hapus%'";
		if (mysqli_query($conn, $sql)) {
			echo "<b>Terhapus!</b>";
		} else {
			echo "Error";
		}
		mysqli_close($conn);
	?>
</body>
</html>
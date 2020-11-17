<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Perhitungan Harga Bet</h1>
	<form action="" method="POST">
		<label>Masukkan Nama : </label>
		<input type="text" name="nama" required=""><br>
		<label>Masukkan Warna Font : </label>
		<select name="warna">
			<option value="" hidden="">Pilih Warna</option>
			<option value="red">Merah</option>
			<option value="yellow">Kuning</option>
			<option value="green">Hijau</option>
			<option value="blue">Biru</option>
		</select><br>
		<input type="submit" name="hasil" value="Generate!"><br><br>
	</form>
	<?php
		if (isset($_POST['hasil'])) {
			function Harga($nama){
				$harga=0;
				$panjang_string = strlen($nama) - substr_count($nama, ' ');
				if ($panjang_string > 0 && $panjang_string <=10) {
					$harga = $panjang_string*300;
				}
				else if ($panjang_string > 10 && $panjang_string <=20) {
					$harga = $panjang_string*500;
				}
				else if ($panjang_string > 20){
					$harga = $panjang_string*700;
				}
				echo "Jumlah Karakter = ".$panjang_string;
				echo "<br>";
				echo "Harga Bet = ".$harga;
			}

			function Warna($nama, $warna){
				switch ($warna) {
					case "red":
						echo '<font color="'.$warna.'">'.$nama.'</font><br>';
						break;
					case "yellow":
						echo '<font color="'.$warna.'">'.$nama.'</font><br>';
						break;
					case "green":
						echo '<font color="'.$warna.'">'.$nama.'</font><br>';
						break;
					case "blue":
						echo '<font color="'.$warna.'">'.$nama.'</font><br>';
						break;
					default:
						echo '<font color="red">'.$nama.'</font><br>';
						break;
				}
			}

			$x = $_POST['nama'];
			$y = $_POST['warna'];

			Warna($x, $y);
			echo "<br>";
			Harga($x);
		}
	?>
</body>
</html>
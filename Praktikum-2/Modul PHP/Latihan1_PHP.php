<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="GET">
		<label>bilangan 1 = </label>
		<input type="text" name="bil1" required=""><br>
		<label style="color: white">---------------</label>
		<select name="operator" required="">
			<option value="" hidden="">Pilih Operator</option>
			<option value="+"> + </option>
			<option value="-"> - </option>
			<option value="*"> * </option>
			<option value="/"> / </option>
			<option value="%"> % </option>
		</select><br>
		<label>bilangan 2 = </label>
		<input type="text" name="bil2" required=""><br>
		<input type="submit" name="Hasil" value="Hasil">
		<br><br>
	</form>
	<?php
	$hasil=0;
	if (isset($_GET['Hasil'])) {
		echo "bilangan 1 = ".$_GET['bil1']; echo "<br>";
		echo "bilangan 2 = ".$_GET['bil2']; echo "<br><br>";
		echo "Berikut merupakan hasil dari setiap operasi";
		echo "<br><br>";
		switch ($_GET['operator']) {
			case '+':
				echo "PENJUMLAHAN"; echo "<br>";
				echo "Operator : ".$_GET['operator']; echo "<br>";
				$hasil = $_GET['bil1'] + $_GET['bil2'];
				echo "Hasil = "; echo $hasil;
				break;
			
			case '-':
				echo "PENGURANGAN"; echo "<br>";
				echo "Operator : ".$_GET['operator']; echo "<br>";
				$hasil = $_GET['bil1'] - $_GET['bil2'];
				echo "Hasil = "; echo $hasil;
				break;

			case '*':
				echo "PERKALIAN"; echo "<br>";
				echo "Operator : ".$_GET['operator']; echo "<br>";
				$hasil = $_GET['bil1'] * $_GET['bil2'];
				echo "Hasil = "; echo $hasil;
				break;

			case '/':
				echo "PEMBAGIAN"; echo "<br>";
				echo "Operator : ".$_GET['operator']; echo "<br>";
				$hasil = $_GET['bil1'] / $_GET['bil2'];
				echo "Hasil = "; echo $hasil;
				break;

			case '%':
				echo "MODULUS"; echo "<br>";
				echo "Operator : ".$_GET['operator']; echo "<br>";
				$hasil = $_GET['bil1'] % $_GET['bil2'];
				echo "Hasil = "; echo $hasil;
				break;
		}
	}
	?>
</body>
</html>
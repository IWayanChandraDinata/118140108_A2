<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Perhitungan Faktorial</h1>
	<form action="" method="POST">
		<label>Masukkan Bilangan : </label>
		<input type="number" name="bil"><br>
		<input type="submit" name="hasil" value="Faktorial!"><br><br>
	</form>
	<?php
		if (isset($_POST['hasil'])) {
			function faktorial($bil){
				if ($bil==1) {
					return 1;
				} else{
					return $bil*faktorial($bil-1);
				}
			}
			$x = $_POST['bil'];
			echo "Faktorial dari ".$x." adalah = ".faktorial($x);	
		}
	?>
</body>
</html>
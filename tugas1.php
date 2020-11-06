<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style-body.css">
</head>
<style>
	header{
		margin-bottom: -5px;
		overflow: hidden;
		border: 1px solid black;
	}
	footer {
		width: 784px;
		height: 100px;
		text-align: center;
		background-color: green;
		border: 1px solid black;
		display: table-cell;
	}
</style>
<body style="width: 784px; border: 1px solid black;">
	<header> <img src="https://cdn.mmos.com/wp-content/uploads/2017/04/fate-grand-order-headed-west-this-summer-banner.jpg" width="784" height="200">
	</header>
	<div class="navigasi">
		<nav>
			List Negara ASEAN
			<ul>
				<li><a href="https://id.wikipedia.org/wiki/Indonesia">Indonesia</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Malaysia">Malaysia</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Singapura">Singapura</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Filipina">Filipina</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Thailand">Thailand</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Brunei">Brunei Darussalam</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Vietnam">Vietnam</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Laos">Laos</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Myanmar">Myanmar</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Kamboja">Kamboja</a></li>
				<li><a href="https://id.wikipedia.org/wiki/Timor_Leste">Timor Leste</a></li>
			</ul>
		</nav>
		<div class="isi">
			<p> Negara adalah organisasi kekuasaan yang berdaulat dengan tata pemerintahan yang melaksanakan tata tertib atas orang-orang di daerah tertentu. Negara juga merupakan suatu wilayah yang memiliki suatu sistem atau aturan yang berlaku bagi semua individu di wilayah tersebut, dan berdiri secara independen. Syarat primer sebuah negara adalah memiliki rakyat, memiliki wilayah, dan memiliki pemerintahan yang berdaulat. Sedangkan syarat sekundernya adalah mendapat pengakuan dari negara lain.</p>

			<p>Negara terluas di dunia adalah Rusia, sedangkan yang populasinya terbanyak adalah Tiongkok. Negara yang terbaru adalah Sudan Selatan yang baru memperoleh kemerdekaannya pada tahun 2011.</p>
			<form action="" method="POST">
				<h3> Berikut form pendataan kewarganegaraan : </h3>
				<label>Nama :</label>
				<input type="text" name="nama" required=""><br><br>
				<label>Jenis Kelamin :</label>
				<input type="radio" name="gender" id="laki" value="Laki-Laki" required="">
				<label for="Laki-Laki">Laki-Laki</label>
				<input type="radio" name="gender" id="perempuan" value="Perempuan" required="">
				<label for="Perempuan">Perempuan</label><br><br>
				<label>Apa Kewarganegaraan anda :</label>
				<select name="negara" required="">
					<option value="" hidden="">Pilih Negara</option>
					<option value="Indonesia">Indonesia</option>
					<option value="Malaysia">Malaysia</option>
					<option value="Singapura">Singapura</option>
					<option value="Thailand">Thailand</option>
					<option value="Filipina">Filipina</option>
				</select><br><br>
				<input type="submit" name="submit"><br><br>
			</form>
			<?php
			if(isset($_POST['submit'])){
				echo "============================================"; echo "<br>";
				echo "Nama = ".$_POST['nama']; echo "<br>";
				echo "Jenis Kelamin = ".$_POST['gender']; echo "<br>";
				echo "Kewarganegaraan = ".$_POST['negara']; echo "<br>";
				}
			?>
		</div>
	</div>
	<footer>
		<br>
		<h2> 118140108 - I Wayan Chandra Dinata </h2>
	</footer>
</body>
</html>
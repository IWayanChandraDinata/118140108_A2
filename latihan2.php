<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	.container{
		border-radius: 5px;
	}
	footer {
		text-align: center;
	}
	textarea {
		resize: vertical;
	}
</style>
<body>
<div class="container">
	<form action="" method="POST" enctype="multipart/form-data">
		<h2>Form HTML</h2>
		<label>Nama:</label>
		<input type="text" name="nama"><br><br>
		<label>Gender:</label>
		<input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="female">
		<label for="female">Female</label><br><br>
		<label>Address:</label>
		<input type="text" name="alamat"><br><br>
		<label>Country:</label>
		<select name="country">
			<option value="" hidden="">Pilih Negara</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Singapura">Singapura</option>
		</select><br><br>
		<label>Email:</label>
		<input type="email" name="email"><br><br>
		<label>Photo:</label>
		<input type="file" name="foto" accept="image/*">
		<br><br>
		<label>Comment:</label>
		<textarea name="komen" rows="4" cols="60"></textarea>
		<input type="submit" name="submit" value="submit">
		<br><br>
	</form>
	<footer>Form Registrasi</footer>
</div>
	<?php
		if (isset($_POST['submit'])) {
			echo "====================================================================="; echo "<br>";
			echo "Nama = ".$_POST['nama']; echo "<br>";
			echo "Gender = ".$_POST['gender']; echo "<br>";
			echo "Address = ".$_POST['alamat']; echo "<br>";
			echo "Country = ".$_POST['country']; echo "<br>";
			echo "Email = ".$_POST['email']; echo "<br>";
			echo "Photo = "; echo "<br>";
			if($_FILES['foto']['tmp_name']){
				$imageData = file_get_contents($_FILES['foto']['tmp_name']);
				echo sprintf('<img src="data:image;base64,%s"  height="200" width="300">', base64_encode($imageData));
			} 
			echo "<br>";

			echo "Comment = ".$_POST['komen'];
		}
	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$data = array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
		sort($data);

		$banyak_data = count($data);
		for ($i=0; $i < $banyak_data; $i++) { 
			echo $data[$i];
			echo "<br>";
		}
	?>
</body>
</html>
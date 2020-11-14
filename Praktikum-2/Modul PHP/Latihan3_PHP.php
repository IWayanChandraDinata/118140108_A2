<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$hasil=0;
		$prima=0;
		for($i=1;$i<=50;$i++){
			for($j=1;$j<=$i;$j++){
				if($i%$j==0){
					$hasil++;
				}
			}
			if($hasil==2){
				$prima++;
			}
			$hasil=0;
		}
		echo "Terdapat ".$prima." bilangan prima dari angka 1 sampai 50";
	?>
</body>
</html>
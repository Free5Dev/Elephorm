<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php 
		//palette de couleurs independantes des navigateurs
		$couleurs=array("00","33","66","99","CC","FF");
		for($rouge=0;$rouge<6;$rouge++){
			echo"<table border='1'>";
			for($vert=0;$vert<6;$vert++){
				echo"<tr>";
				for($blue=0;$blue<6;$blue++){
					$couleursCellules=$couleurs[$rouge].$couleurs[$vert].$couleurs[$blue];
					echo"<td bgcolor='#$couleursCellules'>";
					echo $couleursCellules;
					echo"</td>";
				}
				echo"</tr>";
			}
		echo "</table>";
		}
		
		

	?>
</body>
</html>
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
		//boucle for
		for($i=5;$i>0;$i--){
			echo"Encore ".$i." Tours à faire <br/>";
		}
		echo"Fin de boucle";
	?>
	<table border="1">
		<?php 
			for($lig=5;$lig>0;$lig--){
				echo"<tr>";
				for($col=1;$col<=5;$col++){
					echo"<td>";
					echo $lig."-".$col;
					echo "</td>";
				}
				echo"</tr>";
			}
		?>
	</table>
</body>
</html>
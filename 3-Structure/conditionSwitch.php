﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php 
		//structure switch
		$lg="en";
		switch($lg){
			case"fr":
				echo"Bonjour";break;
			case"en":
				echo"hello";break;
			case"es":
				echo"Hola";break;
			case"dg":
				echo"Geuten Tag";break;
			default:
				echo"Langue Inconnue";
		}
	?>
</body>
</html>
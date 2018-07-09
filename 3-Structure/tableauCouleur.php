<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
<?php

$couleur=array("00","33","66","99","CC","FF");

for( $rouge=0 ; $rouge<6  ;   $rouge++  )
{
	echo "<table>";
	for( $bleu=0 ; $bleu<6  ;   $bleu++  )
		{
			echo "<tr>";
			for( $vert=0 ; $vert<6  ;   $vert++  )
				{
				$couleurCellule=$couleur[$rouge].$couleur[$vert].$couleur[$bleu];
				echo "<td bgcolor=#".$couleurCellule.">";
						echo $couleurCellule;
				echo "</td>";
				}
			echo "</tr>";
		}
echo "</table>";
}


echo "<pre>";
print_r($couleur);
echo "</pre>";



?>
</body>
</html>
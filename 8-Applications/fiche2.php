<?php
require_once("connexionMysql.inc.php");
$requete="SELECT a.reference, a.prix, a.description, f.intitule FROM articles AS a, familles AS f WHERE reference='".$_GET['reference']."' AND a.famillesID=f.ID ";
$resultat=mysql_query($requete);
$articles=mysql_fetch_array($resultat);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>

<table width="600" border="1" cellspacing="0" cellpadding="5">
  
 <tr>
    <td>Référence</td>
    <td><?php echo $articles['reference']; ?></td>
  </tr>
  <tr>
    <td>Prix</td>
    <td><?php echo $articles['prix']; ?></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><?php echo $articles['description']; ?></td>
  </tr>
  <tr>
    <td>Famille</td>
    <td><?php echo $articles['intitule']; ?></td>
  </tr>
</table>
<img  src="images/photoDefaut.jpg" > 

</body>
</html>
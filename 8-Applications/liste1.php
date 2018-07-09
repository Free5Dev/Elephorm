<?php
require_once("connexionMysql.inc.php");
$requete="SELECT reference,prix  FROM articles ";
$resultat=mysql_query($requete);
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
    <td>Prix</td>
  </tr>
  <?php while($articles=mysql_fetch_array($resultat))  { ?>
  <tr>
    <td><?php echo $articles['reference']; ?></td>
    <td><?php echo $articles['prix']; ?></td>
  </tr>
  <?php } ?>
</table>


</body>
</html>
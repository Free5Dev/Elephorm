<?php
require_once("connexionMysql.inc.php");
if(isset($_GET['cle']))
$requete="SELECT reference,prix  FROM articles WHERE description LIKE  '%".$_GET['cle']."%' ";
else
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

<form id="monform" name="form1" method="get" action="<?php  echo $_SERVER['PHP_SELF']; ?>">
  <p>
    <label>Recherche d'article :
      <input type="text" name="cle"  value="<?php if(isset($_GET['cle'])) echo $_GET['cle']; ?>" />
    </label>
  </p>
  <p>
    <label>
      <input type="submit" name="bouton"  value="Envoyer" />
    </label>
  </p>
</form>


<table width="600" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td>Référence</td>
    <td>Prix</td>
	<td>Voir la fiche</td>
  </tr>
  <?php while($articles=mysql_fetch_array($resultat))  { ?>
  <tr>
    <td><?php echo $articles['reference']; ?></td>
    <td><?php echo $articles['prix']; ?></td>
	<td><a href="fiche4.php?reference=<?php echo $articles['reference']; ?>" >Voir</a></td>
  </tr>
  <?php } ?>
</table>


</body>
</html>
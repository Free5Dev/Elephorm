<?php
require_once("connexionMysql.inc.php");
if(isset($_GET['famille']))
$requete="SELECT reference,prix  FROM articles WHERE famillesID=".$_GET['famille'] ;
else
$requete="SELECT reference,prix  FROM articles ";

$resultat=mysql_query($requete);
//--------------requête du menu
$requete2="SELECT ID,intitule  FROM familles ";
$resultat2=mysql_query($requete2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>

<form id="form1" name="form1" method="get" action="<?php  echo $_SERVER['PHP_SELF']; ?>">
  <label>Sélectionnez une famille :
  <select name="famille" id="famille">
  <?php while($familles=mysql_fetch_array($resultat2))  { ?>
    <option <?php  if(!isset($_GET['famille'])) $_GET['famille']=1; if($familles['ID']==$_GET['famille']) echo  "selected='selected'"; ?> value="<?php echo $familles['ID']; ?>"><?php echo $familles['intitule']; ?></option>
  <?php } ?>
  </select>
  </label>
  <label>
  <input type="submit" name="bouton" id="bouton" value="Envoyer" />
  </label>
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
	<td><a href="fiche5.php?reference=<?php echo $articles['reference']; ?>" >Voir</a></td>
  </tr>
  <?php } ?>
</table>


</body>
</html>
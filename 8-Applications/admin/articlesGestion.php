<?php
session_start();
//---Deconnexion
if(isset($_GET['logout']))
{
unset($_SESSION['code']);
}
//----Verification login
if(!isset($_SESSION['code']))
{
header("Location:../login.php");
}
?>
<?php
require_once("../connexionMysql.inc.php");
//----Requete suppression
if(isset($_GET['supp']))
{
	$requete2="DELETE FROM articles WHERE reference='".$_GET['reference']."' ";
	mysql_query($requete2);
}
//----Requete liste
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
<a href="articlesGestion.php?logout=ok" >Deconnexion</a>
<br/>
<a href="articlesAjout.php" >Ajout d'un article </a>

<table width="600" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td>Référence</td>
    <td>Modif</td>
	<td>Supp</td>
  </tr>
  <?php while($articles=mysql_fetch_array($resultat))  { ?>
  <tr>
    <td><?php echo $articles['reference']; ?></td>
    <td><a href="articlesModif.php?reference=<?php echo $articles['reference']; ?>" >Modif</a></td>
	<td><a href="articlesGestion.php?reference=<?php echo $articles['reference']; ?>&supp=ok" >Supp</a></td>
  </tr>
  <?php } ?>
</table>


</body>
</html>
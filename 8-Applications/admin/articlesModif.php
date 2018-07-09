<?php
session_start();
if(!isset($_SESSION['code']))
{
header("Location:../login.php");
}
?>
<?php
require_once("../connexionMysql.inc.php");
if(isset($_POST['bouton']))
{

if($_FILES['photo']['error']==0)
	{
		copy(  $_FILES['photo']['tmp_name'] ,  "../images/".$_FILES['photo']['name']  );
	}
if($_FILES['photo']['error']==0)
$requete="UPDATE articles SET   prix='".$_POST['prix']."' ,  description='".$_POST['description']."' ,photo='".$_FILES['photo']['name']."', famillesID='".$_POST['famillesID']."' WHERE reference='".$_POST['reference']."' " ;
else
$requete="UPDATE articles SET   prix='".$_POST['prix']."' ,  description='".$_POST['description']."' , famillesID='".$_POST['famillesID']."' WHERE reference='".$_POST['reference']."' " ;

mysql_query($requete);
header("Location:articlesGestion.php");
}
//--------------requête du menu
$requete2="SELECT ID,intitule  FROM familles ";
$resultat2=mysql_query($requete2);
//--------------requête de la fiche modif
$requete3="SELECT *  FROM articles  WHERE  reference='".$_GET['reference']."' " ;
$resultat3=mysql_query($requete3);
$article=mysql_fetch_array($resultat3);
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

<form id="monform" name="form1" method="post" enctype="multipart/form-data" action="articlesModif.php">
  <p>
    <label>Référence : <input type="hidden" name="reference" value="<?php echo $article['reference']; ?>" >
      <?php echo $article['reference']; ?>
    </label>
  </p>
  <p>
    <label>Prix :
      <input type="text" name="prix"  value="<?php echo $article['prix']; ?>" />
    </label>
  </p>
  <p>
    <label>Description :
      <input type="text" name="description"  value="<?php echo $article['description']; ?>" />
    </label>
  </p>
  <p>
    <label>Famille :
      <select name="famillesID" id="famillesID">
  <?php while($familles=mysql_fetch_array($resultat2))  { ?>
    <option <?php  if($familles['ID']==$article['famillesID']) echo  "selected='selected'"; ?> value="<?php echo $familles['ID']; ?>"><?php echo $familles['intitule']; ?></option>
  <?php } ?>
  </select>
    </label>
  </p>
  
  <img src="../images/<?php  echo $article['photo']; ?>" >
  
  <label>
  <input type="file" name="photo" id="photo" />
  </label>
    <p>
    <label>
      <input type="submit" name="bouton"  value="Envoyer" />
    </label>
  </p>
</form>

</body>
</html>
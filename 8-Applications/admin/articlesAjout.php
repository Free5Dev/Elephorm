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
	$requete="INSERT INTO articles SET reference='".$_POST['reference']."', prix='".$_POST['prix']."',  description='".$_POST['description']."', photo='".$_FILES['photo']['name']."', famillesID='".$_POST['famillesID']."' ";
else
	$requete="INSERT INTO articles SET reference='".$_POST['reference']."', prix='".$_POST['prix']."',  description='".$_POST['description']."', famillesID='".$_POST['famillesID']."' ";

	$resultat=mysql_query($requete);
header("Location:articlesGestion.php");
}
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
<a href="articlesGestion.php?logout=ok" >Deconnexion</a>
<br/>

<form id="monform" name="form1" method="post" enctype="multipart/form-data" action="articlesAjout.php">
  <p>
    <label>Référence :
      <input type="text" name="reference"  />
    </label>
  </p>
  <p>
    <label>Prix :
      <input type="text" name="prix"  />
    </label>
  </p>
  <p>
    <label>Description :
      <input type="text" name="description"  />
    </label>
  </p>
  <p>
    <label>Famille :
      <select name="famillesID" id="famillesID">
 		<?php while($familles=mysql_fetch_array($resultat2))  { ?>
    <option  value="<?php echo $familles['ID']; ?>"><?php echo $familles['intitule']; ?></option>
		<?php } ?>
   </select>
    </label>
  </p>
  
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
<?php 
  session_start();
  if(!isset($_SESSION['pseudo']) and !isset($_SESSION['password'])){
    header("Location:../login.php");
  }
  // appel de la function de connexion à la bdd
  require_once("../connexionMysql.inc.php");
  // soumission du foorm
  if(isset($_POST['btnAdd'])){
    if(!empty($_POST['reference'] and $_POST['prix'] and $_POST['designation'] and $_POST['famille']) and $_FILES['photo']['error']==0){
      copy($_FILES['photo']['tmp_name'],"../images/".$_FILES['photo']['name']);
      $reqInsert=$bdd->prepare("INSERT INTO articles SET reference=?,prix=?,designation=?,famillesID=?,photo=?");
      $reqInsert->execute(array($_POST['reference'],$_POST['prix'],$_POST['designation'],$_POST['famille'],$_FILES['photo']['name']));
      header("Location:articlesGestion.php");
    }else{
      echo"Champs vide";
    }
  }
  // requete du menu deroulant dynamique
  $reqMenu=$bdd->query("SELECT * FROM familles");
  echo"<pre>";
  print_r($_POST);
  print_r($_FILES);
  echo"</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<a href="articlesGestion.php?logout=ok">Deconnexion</a>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"><br/>
    <label for="reference">Reference</label><br/>
    <input type="text" name="reference" id="reference" value=""><br/>
    <label for="prix">Prix</label><br/>
    <input type="number" name="prix" id="prix"><br/>
    <label for="designation">Designation</label><br/>
    <input type="text" name="designation" id="designation"/><br/>
    <label for="famille">Famille</label><br/>
    <select name="famille" id="famille">
    <?php while($donneesMenu=$reqMenu->fetch()) { ?>
      <option value="<?php echo htmlspecialchars($donneesMenu['id']); ?>"><?php echo htmlspecialchars($donneesMenu['intitule']); ?></option>
    <?php } $reqMenu->closeCursor(); ?>
    </select><br/>
    <label for="photo">Télécharger Photo</label><br/>
    <input type="file" name="photo" id="photo"><br/><br/>
    <input type="submit" name="btnAdd" value="Add Articles"/>
    <input type="reset" name="btnReset" value="Reset"/>
  </form>
</body>
</html>
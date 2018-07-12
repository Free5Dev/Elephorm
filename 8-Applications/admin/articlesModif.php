<?php 
  session_start();
  if(!isset($_SESSION['pseudo']) and !isset($_SESSION['password'])){
    header("Location:../login.php");
  }
  // appel de la function de connexion à la bdd
  require_once("../connexionMysql.inc.php");
  // verification de la soumission du formulaire
  if(isset($_GET['ref'])){
    $reqSelect=$bdd->prepare("SELECT a.reference,a.prix,a.designation,a.famillesID,a.photo,f.intitule FROM articles as a, familles as f WHERE a.reference=?");
    $reqSelect->execute(array($_GET['ref']));
    $donneesSelect=$reqSelect->fetch();
  }else{
    //header("Location:articlesGestion.php");
  }
  // soumission du foorm
  if(isset($_POST['btnUpdate'])){
    if(!empty($_POST['reference'] and $_POST['prix'] and $_POST['designation'] and $_POST['famille']) and $_FILES['photo']['error']==0){
      copy($_FILES['photo']['tmp_name'],"../images/".$_FILES['photo']['name']);
      $reqUpdate=$bdd->prepare("UPDATE articles SET prix=?,designation=?,famillesID=?,photo=? WHERE reference=?");
      $reqUpdate->execute(array($_POST['prix'],$_POST['designation'],$_POST['famille'],$_FILES['photo']['name'],$_POST['reference']));
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
    <label for="reference">Reference</label>:
    <input type="hidden" name="reference" id="reference" value="<?php if(isset($_GET['ref'])) echo $donneesSelect['reference']; ?>"><?php if(isset($_GET['ref'])) echo $donneesSelect['reference']; ?><br/>
    <label for="prix">Prix</label><br/>
    <input type="number" name="prix" id="prix" value="<?php if(isset($_GET['ref'])) echo $donneesSelect['prix']; ?>"><br/>
    <label for="designation">Designation</label><br/>
    <input type="text" name="designation" id="designation" value="<?php if(isset($_GET['ref'])) echo $donneesSelect['designation']; ?>"/><br/>
    <label for="famille">Famille</label><br/>
    <select name="famille" id="famille">
    <?php while($donneesMenu=$reqMenu->fetch()) { ?>
      <option <?php if(!isset($donneesSelect['famillesID'])) $donneesSelect['famillesID']=1; if($donneesMenu['id']==$donneesSelect['famillesID']) echo "selected='selected'"; ?> value="<?php echo htmlspecialchars($donneesMenu['id']); ?>"><?php echo htmlspecialchars($donneesMenu['intitule']); ?></option>
    <?php } $reqMenu->closeCursor(); ?>
    </select><br/>
    <img src="../images/<?php if(isset($_GET['ref'])) echo $donneesSelect['photo']; ?>" alt="">
    <label for="photo">Modifier Photo</label><br/>
    <input type="file" name="photo" id="photo"><br/><br/>
    <input type="submit" name="btnUpdate" value="Update Articles"/>
    <input type="reset" name="btnReset" value="Reset"/>
  </form>
</body>
</html>
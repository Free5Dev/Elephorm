<?php 
  //verification de la soumission du button
  if(isset($_POST['btn'])){
    // verification si logi  et password ne sont pas vide
    if(!empty($_POST['pseudo'] and $_POST['password'])){
      //verfication si login et password sont correct
      if($_POST['pseudo']=="said" and $_POST['password']=='1234'){
        header("Location:pagePrivee.php");
      }else{
        echo"Erreur d'identification reasez";
      }
    }else{
      echo"Les champs sont vide";
    }
  }
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
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="pseudo">Pseudo</label><br/>
    <input type="text" name="pseudo" id="pseudo"><br/>
    <label for="password">Password</label><br/>
    <input type="password" name="password" id="password"><br/><br/>
    <input type="submit" name="btn" value="Connexion"/>
    <input type="reset" name="btnAnnuler" value="Annuler"/>
  </form>

  <?php 
    echo"<pre>";
    print_r($_POST);
    echo"</pre>";
  ?>
</body>
</html>
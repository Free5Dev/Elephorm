<?php
  session_start();  
  if(isset($_POST['btnConnexion'])){
    if(!empty($_POST['pseudo'] and $_POST['password'])){
      if($_POST['pseudo']=="said" && $_POST['password']=="1234"){
        $_SESSION['pseudo']=$_POST['pseudo'];
        $_SESSION['password']=$_POST['password'];
        header("Location:admin/articlesgestion.php");
      }else{
        echo"Error d'identification";
      }
    }else{
      echo"Champs vide";
    }
  }
  echo "<pre>";
  print_r($_POST);
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
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="pseudo">Pseudo</label><br/>
    <input type="text" name="pseudo" id="pseudo" value="" placeholder="Ex:Said"><br/>
    <label for="password">Password</label><br/>
    <input type="password" id="password" name="password" value="" placeholder="Ex:..."> <br/><br/>
    <input type="submit" value="Connexion" name="btnConnexion"/>
    <input type="reset" name="btnAnnuler" value="Annuler"/>
  </form>
</body>
</html>
<?php 
  session_start();
  if(isset($_GET['logout'])){
    unset($_SESSION['pseudo']);
    unset($_SESSION['password']);
  }
  if(!isset($_SESSION['pseudo']) and !isset($_SESSION['password'])){
    header("Location:../login.php");
  }
  
  // appel de la function de conenxion à la bdd
  require_once("../connexionMysql.inc.php");
  
  // verification de la soumission du lien supprime
  if(isset($_GET['ref']) and $_GET['supp']=="ok"){
      $reqSup=$bdd->prepare("DELETE FROM articles WHERE reference=?");
      $reqSup->execute(array($_GET['ref']));
  }
  // requegte de select dans le tableaux
  $reqSelect=$bdd->query("SELECT reference FROM articles");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page Admin</title>
</head>
<body>
  <h1>Page de gestion admin</h1>
 
  <a href="articlesAjout.php">Ajout d'articles</a>
  <a href="articlesGestion.php?logout=ok">Deconnexion</a>
  <table border="1" cellspacing="0" cellpadding="1" width="600s">
    <tr>
      <td>Reference</td>
      <td>Modification</td>
      <td>Suppression</td>
    </tr>
    <?php while($donneesSelect=$reqSelect->fetch()) { ?>
    <tr>
      <td><?php echo htmlspecialchars($donneesSelect['reference']);  ?></td>
      <td><a href="articlesModif.php?ref=<?php echo htmlspecialchars($donneesSelect['reference']);  ?>">Modification</a></td>
      <td><a href="articlesGestion.php?ref=<?php echo htmlspecialchars($donneesSelect['reference']); ?>&supp=ok">Supprime</a></td>
    </tr>
    <?php } $reqSelect=$reqSelect->fetch(); ?>
  </table>
</body>
</html>
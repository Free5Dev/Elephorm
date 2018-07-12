<?php 
  //appel de la function de connexion a la bdd
  require_once("connexionMysql.inc.php");
   // requete de selection
   $reqSelect=$bdd->query("SELECT reference, prix FROM articles ");
  // verification de l'existance de family
  if(isset($_GET['famille'])){
    $reqSelect=$bdd->prepare("SELECT reference, prix FROM articles WHERE famillesID=?");
    $reqSelect->execute(array($_GET['famille']));
  }
  //requete du men uderoulant
  $reqMenu=$bdd->query("SELECT * FROM familles"); 
 
  echo"<pre>";
  print_r($_GET);
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
  <!-- form de recherche  -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <label for="famille">search of family</label>
    <select name="famille" id="famille">
      <?php while($donneesMenu=$reqMenu->fetch()) { ?>
      <option <?php  if(!isset($_GET['famille'])) $_GET['famille']=1; if($_GET['famille']==$donneesMenu['id']) echo"selected=selected";?> value="<?php echo htmlspecialchars($donneesMenu['id']); ?>"><?php echo htmlspecialchars($donneesMenu['intitule']); ?></option>
      <?php } $reqMenu->closeCursor(); ?>
    </select>
    <input type="submit" value="Search" name="btnSearh"/>
  </form>
  <!-- table en html  -->
  <table border="1" cellspacing="0" cellpadding="1" width="600">
    <tr>
      <td>Reference</td>
      <td>Prix</td>
      <td>Voir Fiche</td>
    </tr>
    <?php while($donneesSelect=$reqSelect->fetch()) { ?>
    <tr>
      <td><?php echo htmlspecialchars($donneesSelect['reference']); ?></td>
      <td><?php echo htmlspecialchars($donneesSelect['prix']); ?></td>
      <td> <a href="fiche5.php?ref=<?php echo htmlspecialchars($donneesSelect['reference']); ?>">Details</a></td>
    </tr>
    <?php } $reqSelect->closeCursor(); ?>
  </table>
</body>
</html>
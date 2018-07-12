<?php 
  //appel de la function de connexion a la bdd
  require_once("connexionMysql.inc.php");
  // requete de selection
  $reqSelect=$bdd->query("SELECT reference, prix FROM articles ");

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
      <td> <a href="fiche3.php?ref=<?php echo htmlspecialchars($donneesSelect['reference']); ?>">Details</a></td>
    </tr>
    <?php } $reqSelect->closeCursor(); ?>
  </table>
</body>
</html>
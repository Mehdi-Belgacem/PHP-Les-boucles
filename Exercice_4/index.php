<?php 
  $number = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 3 Exercice 4</h1>
  <?php
    while ( $number <= 10 ) { ?>
      <li><?='Voici le résultat '.$number ?></li>
      <?php $number *= 1.5 ;
    }
  ?>
</body>
</html>
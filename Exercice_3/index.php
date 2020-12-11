<?php 
  $firstNumber = 100;
  $secondNumber = 7;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body><ul>
  <h1>Partie 3 Exercice 3:</h1>
  <?php
    while ( $firstNumber >= 10 ) {
      $result = $firstNumber * $secondNumber; ?>
      <li><?= 'Voici le résultat de la multiplication: ' . $result  ?></li>
      <?php $firstNumber-- ;
    }
  ?>
  </ul>
</body>
</html>
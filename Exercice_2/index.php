<?php
  $firstNumber = 0;
  $secondNumber = 50;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 3 Exercice 2:</h1>
  <?php
    while ($firstNumber <= 20) {
       $result = $firstNumber * $secondNumber; ?>
      <li><?= 'Voici le résultat de la multiplication: ' . $result ?></li>
      <?php $firstNumber++;
    }
  ?>
</body>
</html>
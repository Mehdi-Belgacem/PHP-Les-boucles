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
  <h1>Partie 3 Exercice 5</h1>
  <ul>
    <?php
      while ( $number <= 15 ) { ?>
        <li><strong>On y arrive presque.</strong></li>
        <?php $number++ ;
      }
    ?></ul>
</body>
</html>
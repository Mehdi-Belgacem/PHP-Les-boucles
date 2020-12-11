<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 3 Exercice 7</h1>
    <?php
      for ( $number = 1; $number <= 100; $number++ ) {
        if ( $number % 15 == 0 && $number != 0 ){ ?>
          <p>On tient le bon bout.</p><?php
        }
      }
    ?>
</body>
</html>
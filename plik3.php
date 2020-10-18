<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dolaczanie do pliku</title>
  </head>
  <body>
    <h3>Poczatek pliku</h3>
    <?php
      include("./3_1.php");
      include_once("./3_1.php");
      echo "<hr>Require:";
      require("./3_1.php");
      require_once("./3_1.php");
     ?>
    <h3>Koniec pliku</h3>
  </body>
</html>

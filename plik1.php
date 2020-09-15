<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zmienne</title>
  </head>
  <body>
    <?php
    $name = 'Anna';
    $surname = 'Nowak';
    echo 'Imię: $name<br>';
    echo "Imię: $name<br>";
    //konkatenacja .
    echo "Imię: $name<br>"."nazwisko: $surname<br>";
    echo 'text<br>';
    //TYPY DANYCH
    //boolean
    $prawda = true;
    $falsz = flase;
    echo $prawda;
    echo $falsz;
    echo "<br>";
    //nie stosowac polskich znakow
    $bin = 0b1011;
    $dec = 11;
    $oct = 011;
    $hex = 0x11;
    echo "<br>$bin<br>";
    echo "<br>$dec<br>";
    echo "<br>$oct<br>";
    echo "<br>$hex<br>";
    $name='Janusz';
    //skaldnia heredoc
    $text = <<<LABEL
    <hr>
    heredoc
    <hr>
  LABEL;

    echo $text;
    echo <<<L
      heredoc
      Imię: $surname
      <hr>
    L;
    //skladnia nowdoc
    echo <<<'L'
    Nowdoc<br>
    Imię: $name
    <hr>
    L;
    $city="Poznan";
    echo "nazwa zmiennej: \$city, wartosc: $city";


    ?>
  </body>
</html>

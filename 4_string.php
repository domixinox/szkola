<?php
$text=<<<J
  ZSK-ZESPOL
  SZKOL
  KOMUNIKACJI<br>
J;
  echo $text;
  echo nl2br($text);
  $name="JAnuSZ";
  //zamiana na male litery
  echo strtolower($name);
  echo "<br>";
  //zamiana na duze litery
  echo strtoupper($name);
  $name="janusz kowalSki<br>";
  echo "<br>";
  //zamiana pierwszej litery na duza
  echo ucfirst($name);
  echo "<br>";
  echo ucwords($name);
  $name=<<<I
jAnuSZ
I;
  echo ucfirst($name),'<br>';
  $lorem=<<<LOREM
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

LOREM;
  echo $lorem,"<br>";
  //ciecie
  $col= wordwrap($lorem, 40, '<hr>');
  echo $col;
  //czyszczenie buforA
  ob_clean();
  //usuwanie bialych znakow
  $name = 'Anna';
  $name1 = '  Anna ';
  echo strlen($name),"<br>"; //7
  echo mb_strlen($name),"<br>"; //6
  echo mb_strlen($name1),"<br>"; //9
  echo mb_strlen(ltrim($name1)),"<br>";
  echo mb_strlen(rtrim($name1)),"<br>";
  echo mb_strlen(trim($name1)),"<br>";
  $address = "Poznań, ul. Polna 7, tel. (61) 123-45-46";
  $search = strstr($address, "tel");
  echo $search,'<br>';
  $address = "Poznań, ul. Polna 7, tel. (61) 123-45-46";
  $search = strstr($address, "tel", true);
  echo $search,'<br>';
  $address = "Poznań, ul. Polna 7, tel. (61) 123-45-46";
  $search = stristr($address, "tel");
  echo $search,'<br>';
  //przetwarzanie ciagu znakow
  echo strstr("zsk@gmail.com",'@'),"<br>";
  echo strstr("zsk@gmail.com",64),"<br>";
  $name2="janusz";
  echo substr($name2,1),"<br>";
  echo substr(strstr("zsk@gmail.com",64),1),"<br>";
  $replace = str_replace('imie','Anna','Masz na imię: imie');
  echo "<br>$replace<br>";
  $login = 'bączek';
  $cenzura = array('ą','ę','ć','ż','ź','ł','ń');
  $replace = array('ą','ę','ć','ż','ź','ł','ń');
  $currentlogin = str_replace($cenzura,$replace,$login);
  echo<<<LOGIN
  Login: $login<br>
  Poprawny login: $currentlogin
  LOGIN;


 ?>

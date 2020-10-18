<?php
  echo'text';
  //wersja php
  echo PHP_VERSION,'<br>';
  //echo phpinfo();

  //interpolacja;
$pow=2**10;
echo $pow;
echo 'a','b'; //wyswietli a i b
echo 'a','b';//suma a oraz b, wyswietli a i b
//operatory bitwoe
$x=0b01010;
echo "<br>,$x,<br>";
$x=$x <<2;
echo "<br>$x<br>";
$x=$x >>3;
$x=1;
$y=1;
if($x===$y){
  echo '$x jest identyczna $y<br>';
}else{
  echo '$x nie jest identyczna $y<br>';
}

echo gettype($x);
echo gettype($y),'<br';
$x=10;
$y=100;
echo $x <=> $y;
//operatory rzutowania
$test1='123abc';
$test2=0;
$test3=20;
echo 'typ danych $test1: ',gettype($test1);
$test1=(int)$test1;
echo 'typ danych $test1: ',gettype($test1);
echo "<br$test1<br>";
echo 'typ danych $test1: ',gettype($test1);
$test1=(bool)$test1;
echo 'typ danych $test1: ',gettype($test1);
echo "<br$test1<br>";
//rozmiar typu intiger
echo PHP_INT_SiZE,'<br>';
$x=1;
echo is_null($x),'<br>';
$w;
echo @gettype($w); //ignorowasnie bledu


?>

<h1> IF</h1>
<?php
$valor=rand(1,120);
echo "El valor sorteado es $valor<br>";
if ($valor<=9)
{
  echo "Tiene un dígito";
}
else
{
  if ($valor<100)
  {
    echo "Tiene 2 dígitos";
  }
  else
  {
    echo "Tiene 3 dígitos";
  }
}
?>
<H1>SWITCH</H1>
<?php
    $numberRand = rand(0, 3);
    switch($numberRand)
    {
        case 0:
            echo "El numero es Cero";
            break;
        case 1:
            echo "El numero es Uno";
            break;
        case 2:
            echo "El numero es Dos";
            break;
        case 3:
            echo "El numero es Tres";
            break;
    }
?>
<h1>for</h1>
<?php
for ($i=0; $i <=100 ; $i=$i+2)
{
  echo "<br>";
  echo $i;
  $suma=$suma+$i;
}
echo "<br>";
echo "la suma de los pares es $suma";
 ?>
<h1>while</h1>
<?php
$valor=rand(1,100);
$inicio=1;
while($inicio<=$valor)
{
  echo $inicio;
  echo "<br>";
  $inicio++;
}
?>
<h1>do while</h1>
<?php
  echo "Tabla del 2 con el for";
  for ($f = 2; $f <= 20; $f = $f + 2) {
    echo $f;
    echo "-";
  } echo "<br>";
 
  echo "<br>";
  echo "Tabla del 2 con el while";
  echo "<br>";
  $f = 2;
  while ($f <= 20) {
    echo $f;
    echo "-";
    $f = $f + 2;
  }
  echo "<br>";
  echo "Tabla del 2 con el do/while";
  echo "<br>";
  $f = 2;
  do {
    echo $f;
    echo "-";
    $f = $f + 2;
  } while ($f <= 20);

  ?>

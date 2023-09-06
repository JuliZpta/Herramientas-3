<h1>FUNCIONES RANDOM</h1>

<?php
echo rand(), "\n";
echo "<br>";
echo rand(), "\n";
echo "<br>";
echo rand(5, 15), "\n";
?>

<h1> PROGRAMA ADIVINE EL NUMERO DE 1-1O</h1>

<?php

$num1 = rand(1,20);
echo $num1, "<br>";

if ($num1<=5) {
    echo "El numero es igual o menor a 5";
}else {
    echo "El numero es mayor a 5";
}

?>

<!-- 1. SOLUCIONAR LO DE LA HORA HORARIA -->
<!--        date_default_timezone_set('America/Bogota'); -->

<!-- 2. Codigos de dos funciones -->
<H1>DOS FUNCIONES</H1>
<h3>Range — Crear un array que contiene un rango de elementos</h3>

<?php
foreach (range(0, 12) as $número) {
    echo $número, " ";
}
echo "<br>";
// El parámetro step
// array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
foreach (range(0, 100, 10) as $número) {
    echo $número, " ";
}
echo "<br>";
// Empleo de las secuencias de caracteres
// array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
foreach (range('a', 'i') as $letra) {
    echo $letra, " ";
}
echo "<br>";
// array('0', '...' , '1000'); - Array con los numeros del 0 al 1000 de cien en cien
foreach (range(0,1000,100) as $nums) {
    echo $nums, " ";
}
?>

<h3>Sqrt — Raíz cuadrada</h3>
<?php

// La precisión depende de la directiva de precisión elegida
echo sqrt(9),"<br>"; // 3
echo sqrt(10),"<br>"; // 3.16227766 ...

//Raiz Cuadrada de un numero random pero la raiz debe ser mayor o igual a 8

$num = rand(1,200);
if (sqrt($num) >= 8) {
    echo "El numero es: ",$num, " y su raiz es: ",sqrt($num);
}else {
    echo "La raiz de ",$num," es menor de 10";
}
?>
<!-- 3. Juego del baloto 5 balotas del 1 al 43 y una superbalota del 1 al 16 -->
<h3>JUEGO DEL BALOTO</h3>
<?php
$balo1 = rand(1,43);
$balo2 = rand(1,43);
$balo3 = rand(1,43);
$balo4 = rand(1,43);
$balo5 = rand(1,43);
$supbalo = rand(1,16);

echo "EL BALOTO DEL DIA ES: ",$balo1," ",$balo2," ",$balo3," ",$balo4," ",$balo5,"<br>Y LA SUPERBALOTA ES: ",$supbalo;
?>
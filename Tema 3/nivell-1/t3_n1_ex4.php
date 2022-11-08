<?php
/*Exercici 4*/
$x = 2;
$y = 4;
$n = 3.5;
$m = 7.2;

echo "Per a X i Y:<br>";
echo "x: $x <br>";
echo "y: $y <br>";
echo "Suma: " . $x + $y . "<br>";
echo "Resta: " . $x - $y . "<br>";
echo "Producte: " . $x * $y, "<br>";
echo "Mòdul: " . $x % $y . "<br><br>";

echo "Per a N i M:<br>";
echo "n: " . $n . "<br>";
echo "m: " . $m . "<br>";
echo "Suma: " . $n + $m . "<br>";
echo "Resta: " . $n - $m . "<br>";
echo "Producte: " . $n * $m . "<br>";
echo "Mòdul: " . $n % $m . "<br><br>";

echo "Per a X, Y, N y M:<br>";
echo "Doble: " . (2 * $x) . ", " . 2 * $y . ", " . 2 * $n . ", " . 2 * $m . "<br>";
echo "Suma: " . ($x + $y + $n + $m) . "<br>";
echo "Producte: " . ($x * $y * $n * $m) . "<br>";
?>
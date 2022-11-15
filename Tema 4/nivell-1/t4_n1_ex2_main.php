<?php
/*Exercici 2 - main*/
include 't4_n1_ex2_class.php';

echo "<i>Instància triangle 2x4: </i><br>";
$triangle = new Triangle(2, 4);
$triangle->area();
echo "Àrea -> ";
var_dump($triangle->area);

echo "<br><br>";

echo "<i>Instància triangle 3x4: </i><br>";
$triangle = new Triangle(3, 4);
$triangle->area();
echo "Àrea -> ";
var_dump($triangle->area);

echo "<br><br>";

echo "<i>Instància rectangle 2x4: </i><br>";
$rectangle = new Rectangle(2, 4);
echo "Àrea -> ";
$rectangle->area();
var_dump($rectangle->area);

echo "<br><br>";

echo "<i>Instància rectangle 3x4: </i><br>";
$rectangle = new Rectangle(3, 4);
echo "Àrea -> ";
$rectangle->area();
var_dump($rectangle->area);

?>
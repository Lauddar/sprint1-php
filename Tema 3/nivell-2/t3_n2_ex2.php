<?php

$var = "laura";

echo "Cadena donada: $var <br>";

$tmp = $var[0];
$var[0] = $var[strlen($var)-1];
$var[strlen($var)-1] = $tmp;

echo "Cadena nova: $var";

?>
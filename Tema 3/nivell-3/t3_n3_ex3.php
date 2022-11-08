<?php

$array = array(10, 20, 30, 40, 50);
$delete = 40;
echo "Array inicial: ";
var_dump($array);

if (($position = array_search($delete, $array)) !== false) {
    unset($array[$position]);
    $array = array_values($array);

}

echo "<br>Array modificat: ";
var_dump($array);

?>
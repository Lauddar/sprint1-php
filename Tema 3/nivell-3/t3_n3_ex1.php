<?php

$str = "Hello World";
$str = str_replace(' ','', $str);
$array = str_split($str);
var_dump($array);

?>
<?php

$str = "Hello World";
$str = str_replace(' ','', $str);
$array = str_split($str);
$count = array_count_values($array);

print_r($count);

?>
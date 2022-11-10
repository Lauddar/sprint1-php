<?php
/*Exercici 1*/

function sieveOfEratosthenes($limit)
{
    $numbers = array();

    for ($i = 0; $i < $limit; $i++) {
        array_push($numbers, $i + 1);
    }

    $i = 1;

    while ($i < count($numbers)) {
        $j = $i + 1;
        while ($j < count($numbers)) {
            if (($numbers[$j] % $numbers[$i]) == 0) {
                unset($numbers[$j]);
                $numbers = array_values($numbers);
            } else {
                $j++;
            }
        }
        $i++;
    }

    return $numbers;
}

$limit = 100;
print_r(sieveOfEratosthenes($limit));

?>
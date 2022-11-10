<?php
/*Exercici 3*/
function totalChocolate($chocolates) {
    $chocolate_cost = 1.0;
    return $chocolates * $chocolate_cost;
}

function totalGum($gums) {
    $gum_cost = 0.5;
    return $gums * $gum_cost;
}

function totalCandy($candy) {
    $candy_cost = 1.5;
    return $candy * $candy_cost;
}

$chocolates = 2;
$gums = 1;
$candy = 1;

$total_cost = totalChocolate($chocolates) + totalGum($gums) +  totalCandy($candy);

echo "Total cost is: $total_cost €.";
 
?>
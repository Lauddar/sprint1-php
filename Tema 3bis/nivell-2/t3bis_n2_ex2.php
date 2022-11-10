<?php
/*Exercici 2*/
function callCost($time) {

    $cost = 0.1;

    if ($time >= 3) {
        for($i = 3;  $i <= $time; $i++) {
            $cost = $cost + 0.05;
        }
    }

    return $cost;

}

$call = 5.6;
echo "Call cost is: " . callCost($call) . " €.";

?>
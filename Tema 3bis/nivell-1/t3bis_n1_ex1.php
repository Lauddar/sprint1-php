<?php

/*Exercici 1*/
function evenOrOdd($num) {
    if (($num % 2) == 0) {
        echo "Number $num is: EVEN.";
    } else {
        echo "Number $num is: ODD.";
    }
}

$num = 23;
echo evenOrOdd($num);

?>
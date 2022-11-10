<?php
/*Exercici 6*/
function isBitten()
{
    $probability = rand(1, 100);

    if ($probability > 50) {
        return true;
    } else {
        return false;
    }
}

var_dump(isBitten());

?>
<?php
/*Exercici 1*/
function olympicYears()
{
    echo "Olympic Years: ";
    for ($i = 1960; $i <= 2016; ) {
        echo "<br> $i";
        $i = $i + 4;
    }
}

echo olympicYears();

?>
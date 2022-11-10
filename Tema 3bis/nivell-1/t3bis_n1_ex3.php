<?php
/*Exercici 3*/
function countByTwos($max) {
    echo "Count by twos until $max: ";
    for($i = 2; $i <= $max; $i++) {
        echo "<br> $i";
        $i++;
    }
}

$num = 30;
echo countByTwos($num);

?>
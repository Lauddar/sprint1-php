<?php
/*Exercici 4*/
function countByTwos($max = 10) {
    echo "Count by twos until $max: ";
    for($i = 2; $i <= $max; $i++) {
        echo "<br> $i";
        $i++;
    }
}

echo countByTwos();

?>
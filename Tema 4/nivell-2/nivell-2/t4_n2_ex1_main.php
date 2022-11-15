<?php
/*Exercici 1 - main */
include 't4_n2_ex1_classes.php';

echo "<i>Tirada de 5 daus:<i><br>";
$pokerDice = new PokerDice();
$pokerDice->throwPokerDice(5);
print_r($pokerDice->getTotalThrows());

?>
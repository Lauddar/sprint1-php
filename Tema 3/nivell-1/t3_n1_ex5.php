<?php
    /*Exercici 5*/
    $array1 = array(1, 2, 3, 4, 5);
    $array2 = array(6,7,8);

    array_push($array2, 9);

    $merged_array = array_merge($array1, $array2);
    
    echo "Array lenght: " . count($merged_array) . "<br><br>";
    
    var_dump($merged_array);
?>

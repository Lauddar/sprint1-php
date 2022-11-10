<?php
/*Exercici 5*/
function studentGrade($grade) {
    echo "Grau: ";

    switch ($grade){
        case $grade >= 60;
        printf("Primera Divisió");
        break;

        case ($grade >= 45 && $grade < 60);
        printf("Segona Divisió");
        break;

        case ($grade >= 33 && $grade < 45);
        printf("Tercera Divisió");
        break;

        default:
        printf("Reprove");
    }
}

$grade = 90;
echo studentGrade($grade);

?>
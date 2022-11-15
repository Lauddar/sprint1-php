<?php
/*Exercici 1*/
class Employee
{

    // Class attributes
    private $name;
    private $salary;

    // Class methods
    public function initialize($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function print()
    {
        echo "Nom: " . $this->name;
        if ($this->salary > 6000) {
            print_r("<br> Has de pagar impostos :(");
        } else {
            print_r("<br> No has de pagar impostos :)");
        }
    }
}

echo "<i>El sou no supera els 6.000: </i><br>";
$employee = new Employee();
$employee->initialize("Laura", 3000);
$employee->print();

echo "<br><br>";

echo "<i>El sou és 6.000: </i><br>";
$employee = new Employee();
$employee->initialize("Spiderman", 6000);
$employee->print();

echo "<br><br>";

echo "<i>El sou supera els 6.000: </i><br>";
$employee = new Employee();
$employee->initialize("Rubén", 10000);
$employee->print();

?>
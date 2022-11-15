<?php
/*Exercici 1 - Definició de classes */
class PokerDice
{
    protected $totalThrows;

    public function __construct()
    {
        $this->totalThrows = array();
    }

    public function throwPokerDice($dice)
    {
        for ($i = 0; $i < $dice; $i++) {
            $throw = new Dice();
            $throw->throw();
            array_push($this->totalThrows, $throw->shapeName());
        }
    }

    public function getTotalThrows()
    {
        return $this->totalThrows;
    }
}

class Dice
{
    private $sides;
    private $throws;

    public function __construct()
    {
        $this->sides = array("As", "K", "Q", "J", "7", "8");
        $this->throws = array();
    }

    public function throw ()
    {
        array_push($this->throws, $this->sides[rand(0, 5)]);
    }

    public function shapeName()
    {
        return $this->throws[key($this->throws)];
    }
}

?>
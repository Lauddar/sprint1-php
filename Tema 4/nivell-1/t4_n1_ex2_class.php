<?php
/*Exercici 2 - Definició classes*/
abstract class Shape
{
    // Class attributes
    protected $height;
    protected $width;
    public $area;

    // Class methods
    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    abstract public function area();
}

class Triangle extends Shape
{
    public function area()
    {
        $this->area = ($this->width * $this->height) / 2;
    }
}

class Rectangle extends Shape
{
    public function area()
    {
        $this->area = $this->width * $this->height;
    }
}



?>
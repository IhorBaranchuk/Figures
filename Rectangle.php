<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 22.07.18
 * Time: 20:17
 */
include_once "Square.php";

class Rectangle extends Square
{
    protected $name = "Прямоугольник";

    public function __construct(float $x, float $y)
    {
        if ($y <= 0) {
            exit();
        }
        parent::__construct($x, $y);

    }

    public function area($x)
    {
        $this->area = $x * $this->y;
        return $this->area;
    }

    public function perimeter()
    {
        $this->perimeter = 2 * ($this->x + $this->y);
        return $this->perimeter;
    }

    public function getInfo()
    {
        echo $this->name . "<br>Стороны: $this->x;$this->y"
            . "<br>Периметр: $this->perimeter"
            . "<br> Площадь: $this->area";
    }
}

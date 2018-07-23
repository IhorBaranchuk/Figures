<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 22.07.18
 * Time: 20:00
 */
include_once "Dot.php";
include_once "PerimeterInterface.php";
include_once "AreaInterface.php";

class Square extends Dot implements PerimeterInterface, AreaInterface
{
    protected $name = "Квадрат";
    protected $area;
    protected $perimeter;

    public function __construct(float $x, ?float $y = 0)
    {
        if ($x <= 0) {
            exit();
        }
        parent::__construct($x, $y);
        $this->perimeter();
        $this->area($x);
    }

    public function area($x)
    {
        $this->area = $x * $x;
        return $this->area;
    }

    public function perimeter()
    {
        $this->perimeter = 4 * $this->x;
        return $this->perimeter;
    }

    public function getInfo()
    {
        echo $this->name . "<br>Стороны: $this->x"
            . "<br>Периметр: $this->perimeter"
            . "<br> Площадь: $this->area";
    }
}


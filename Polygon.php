<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 22.07.18
 * Time: 20:34
 */
include_once "MultilateralAbstractFigure.php";
include_once "PerimeterInterface.php";

class Polygon extends MultilateralAbstractFigure implements PerimeterInterface
{
    protected $name = "Многоугольник";
    protected $a;
    protected $i;
    protected $perimeter;

    public function __construct(array $a)
    {
        if (count($a) < 3) {
            exit();
        }
        $this->getData($a, [0]);
        $this->perimeter();
    }

    protected function getData(array $a, array $b)
    {
        for ($this->i = 0; $this->i < count($a); $this->i++) {
            $this->a[$this->i] = $a[$this->i];
        }
    }

    public function perimeter()
    {
        $this->perimeter = array_sum($this->a);
    }

    public function getInfo()
    {
        echo $this->name . " с сторонами: ";
        for ($this->i = 0; $this->i < count($this->a); $this->i++) {
            echo $this->a[$this->i] . " ";
        }
        echo "<br> Периметр: ".$this->perimeter;
    }
}

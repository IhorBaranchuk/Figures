<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 22.07.18
 * Time: 18:17
 */
include_once "AbstractFigure.php";
 
class Dot extends AbstractFigure
{
    protected $name = "Точка";
    protected $x;
    protected $y;

    public function __construct(float $x, float $y)
    {
        $this->getData($x, $y);
    }

    function getData(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function getInfo()
    {
        echo $this->name . "<br>Координаты: $this->x;$this->y";
    }
}

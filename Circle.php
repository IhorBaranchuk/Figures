<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 22.07.18
 * Time: 19:09
 */
include_once "Dot.php";
include_once "AreaInterface.php";

class Circle extends Dot implements AreaInterface
{
    protected $name = "Круг";
    protected $area;
    protected $circumference;

    public function __construct(float $x, float $y, float $radius)
    {
        parent::__construct($x, $y);

        if ($radius < 0) {
            exit();
        }
        $this->circumference($radius);
        $this->area($radius);
    }

    protected function circumference($radius)
    {
        $this->circumference = 2 * M_PI * $radius;
        return $this->circumference;
    }

    public function area($radius)
    {
        $this->area = M_PI * $radius * $radius;
        return $this->area;
    }

    public function getInfo()
    {
        echo $this->name . "<br>Координаты Центра: $this->x;$this->y";
        echo "<br> Длина окружности: $this->circumference" . "<br> Площадь: $this->area";
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 22.07.18
 * Time: 19:48
 */
include_once "MultilateralAbstractFigure.php";

class BrokenLine extends MultilateralAbstractFigure
{
    protected $name = "Ломаная";
    protected $x;
    protected $y;
    protected $i;
    protected $line;

    public function __construct(array $x, array $y)
    {
        if (count($x) != count($y)) {
            exit();
        }
        $this->getData($x, $y);
        $this->line();
    }

   
     protected function getData(array $x, array $y)
     {
        for ($this->i = 0; $this->i < count($x); $this->i++) {
            $this->x[$this->i] = $x[$this->i];
            $this->y[$this->i] = $y[$this->i];
         }

     }

    protected function line()
    {
        for ($this->i = count($this->x); $this->i > 0; $this->i--) {
            $this->line[$this->i] = sqrt(pow($this->x[$this->i] - $this->x[--$this->i], 2)
                + pow($this->y[$this->i] - $this->y[--$this->i], 2));
        }
    }

    public function getInfo()
    {
        echo $this->name . " с координатами: ";
        for ($this->i = 0; $this->i < count($this->x); $this->i++) {
            echo $this->x[$this->i] . ";" . $this->y[$this->i] . " ";
        }
        echo "<br>Длина всех отрезков: " . array_sum($this->line);
    }
}

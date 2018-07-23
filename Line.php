<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 23.07.18
 * Time: 16:19
 */
include_once "BrokenLine.php";

class Line extends BrokenLine
{
    protected $name = "Отрезок";


    public function __construct(array $x, array $y)
    {
        if (count($x) != 2) {
            exit();
        }
        parent::__construct($x, $y);
    }

    public function getInfo()
    {
        echo $this->name . " с координатами: ";
        for ($this->i = 0; $this->i < count($this->x); $this->i++) {
            echo $this->x[$this->i] . ";" . $this->y[$this->i] . " ";
        }
        echo "<br>Длина отрезка: " . array_sum($this->line);
    }
}

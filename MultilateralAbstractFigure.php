<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 23.07.18
 * Time: 15:01
 */

abstract class MultilateralAbstractFigure
{
    abstract protected function getData(array $a,array $b);

    abstract public function getInfo();
}
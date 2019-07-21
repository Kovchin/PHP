<?php

include_once 'shape.php';

class newPoint extends Shape{

protected $x;
protected $y;

    function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function Draw(){
        echo 'Рисуем <b>Точку</b></b> <br />';
        echo 'Координаты = ' . $this->x . '; ' . $this->y . '<br />';
    }

}
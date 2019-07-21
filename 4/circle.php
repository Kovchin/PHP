<?php

include_once 'shape.php';

class Circle extends Shape
{

    private $r;

    public function __construct($x, $y, $r)
    {
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
    }

    public function Draw()
    {
        echo 'Рисуем фигуру <b>Круг</b> <br />';
        echo 'Радиусом = ' . $this->r . '<br />';
        echo 'Координаты радиуса = ' . $this->x . '; ' . $this->y . '<br />';
    }

    public function HelloCircle()
    {
        echo 'Уникальный метод класса <b>Circle->HelloCircle</b>';
    }
}

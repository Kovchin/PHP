<?php

include_once 'shape.php';

class Rectangle extends Shape
{

    private $h;
    private $w;

    function __construct($x, $y, $h, $w)
    {
        $this->x = $x;
        $this->y = $y;
        $this->h = $h;
        $this->w = $w;
    }

    function Draw()
    {
        echo 'Рисуем фигуру <b>Прямоугольник</b> <br />';
        echo 'Координаты левого верхнего угла = ' . $this->x . '; ' . $this->y . '<br />';
        echo 'Высота = ' . $this->h . '<br />';
        echo 'Ширина = ' . $this->w . '<br />';
    }

    function HelloRectangle()
    {
        echo 'Уникальный метод класса <b>Rectangle->HelloRectangle</b>';
    }
}

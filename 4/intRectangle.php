<?php

include_once 'intShape.php';

class Rectangle extends ClassShape
{
    private $h;
    private $w;

    public function __construct($x, $y, $h, $w)
    {
        $this->x = $x;
        $this->y = $y;
        $this->h = $h;
        $this->w = $w;
    }

    public function Draw()
    {
        echo '<br />Рисуем <b>Прямоугольник</b><br /> Высота = ' . $this->h . '<br /> ширина = ' . $this->w . '<br />В координатах <br /> x = ' . $this->x . '<br /> y = ' . $this->y . '<br />';
    }
}

<?php

include_once 'intShape.php';

class Circle extends ClassShape
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
        echo '<br />Рисуем <b>Круг</b><br /> с радиусом = ' . $this->r . '<br />' . 'В координатах <br /> x = ' . $this->x . '<br /> y = ' . $this->y . '<br />';
    }
}

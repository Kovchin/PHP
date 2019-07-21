<?php

abstract class Shape
{
    protected $x;
    protected $y;

    abstract public function Draw();

    public function toString()
    {
        return print_r($this, true);
    }
}

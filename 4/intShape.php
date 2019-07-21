<?php

interface IntShape
{

    public function Draw();
    public function SayHello();
}

class ClassShape implements IntShape
{
    protected $x;
    protected $y;

    public function __toString()
    {
        return print_r($this, true);
    }

    public function Draw()
    { }

    public function SayHello()
    {
        echo '<br />Привет!<br />';
    }
}

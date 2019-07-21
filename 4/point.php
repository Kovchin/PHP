<?php

class point
{
    public static $counter = 0;
    private $x = 0;
    private $y = 0;
//===============================
    public function showxy()
    {
        echo 'x = ' . $this->x . '<br />';
        echo 'y = ' . $this->y . '<br />';
    }

    public function __construct($x, $y)
    {
        self::$counter++;
        $this->x = $x;
        $this->y = $y;
    }
public function __toString()
{
    return $s =  'x = '.$this->x.'<br /> y = '.$this->y.'<br />';
}

 public function __get($name)
{
    echo 'Класс point работает только в двухмерном пространстве! <br />';
} 

public function __set($name, $value)
{
    if (!isset($this->name))
    echo 'Класс point работает только в двухмерном пространстве! <br />';
}

public function __call($name, $arguments)
{
    echo 'В классе point нет метода '.$name. ' с аргументами '.$arguments.'<br />';
}

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function __destruct()
    {
        echo 'Экземпляр класса <b>point</b> удален';
    }
}
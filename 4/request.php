<?php

class request
{

    private $data;

    public function __construct()
    {
        $this->data = $_REQUEST;
    }

    public function __get($name)
    {
        if (isset($this->data[$name])) return $this->data[$name];
        return null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __callStatic($name, $arguments)
    {
        echo 'В классе point нет метода'.$name.' с аргументом '.$arguments;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __toString()
    {
        $s = '';
        foreach ($this->data as $key => $value)
            $s .= "$key = $value; ";
        return $s;
    }

    public function __call($name, $arguments)
    {
        
    }

    public function __clone(){
        $this->a = 15;
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }
}

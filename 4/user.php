<?php
//Тестовый класс созданный для обучения
/*
Поля:

name 
email

Методы:

*/
class user
{
    private $name = 'User';
    private $email = 'default@email.ru';

    public function __construct($cname, $cemail)
    {
        $this->name = $cname;
        $this->email = $cemail;
    }

    public function show()
    {
        echo 'name = ' . $this->name . '<br />';
        echo 'email = ' . $this->email . '<br />';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function __destruct()
    {
        echo '<br />Удаляем экземпляр класса <b>User</b> <br />';
    }
}

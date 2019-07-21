<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание класса</title>
</head>

<body>
    <?php

    include '4/user.php';

    $cu1 = new user('default','default@mail.ru');
    echo '<h3>Значения по умолчанию класса User</h3> <br />';
    echo 'name = ' . $cu1->getName(). '<br />';
    echo 'email = ' . $cu1->getEmail() . '<br /> <hr>';
    $cu1->setName('test1');
    $cu1->setEmail('new@mail.ru');
    echo 'Поменяли значение поля name и email <br />';
    echo $cu1->show();
    echo '<hr> Создали еще один экземпляр класса user и задали ему имя и почту <br />';
    $cu2 = new user('default','default@mail.ru');
    $cu2->setName('Pavel');
    $cu2->setEmail('Kovchin@mail.ru');
    $cu2->show();
    ?>
    <h2>Задание</h2>
    <ul>
        <li>
            Создайте класс Point (точка).
        </li>
        <li>
            Добавьте в него 2 свойства: x и y (координаты).
        </li>
        <li>
            Создайте объект класса Point.
        </li>
        <li>
            Установите свойства x и y в значения 5 и 3 у объекта из 3-го пункта.
        </li>
        <li>
            Выведите оба свойства объекта из 3-го пункта.
        </li>
    </ul>
    <?php
    include '4/point.php';
    $point = new point(0,0);
    $point->setX = 5;
    $point->setY = 3;
    $point->showxy();
    ?>
</body>

</html>
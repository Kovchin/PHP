<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интерфейсы</title>
</head>

<body>
    <h1>Интерфейсы</h1>
    <h2>В PHP нельзя наследовать более одного класса, для обхода этого ограничения есть <b>интерфейсы</b></h2>
    <p>Объявляется интерфейс <code>interface IntShape{}</code></p>
    <p>Подключаются интерфейсы при объявлении классы при помощи ключевого слова <code>class ClassShape <b>implements</b> IntShape</code></p>
    <h3>Урок</h3>
    <p>Повторить класс shape из прошлого урока при помощи интерфейсов</p>
    <?PHP
    include_once '4/intCircle.php';
    include_once '4/intRectangle.php';
    $c = new Circle(10, 20, 5);
    $r = new Rectangle(15, 25, 10, 20);
    echo $c;
    $c->Draw();
    echo $r;
    $r->Draw();
    ?>
    <h2>Задание</h2>
    <ul>
        <li>Создайте интерфейс СanMove с методом move().</li>
        <li>Создайте интерфейс СanFly с методом fly().</li>
        <li>Создайте класс Car с реализацией интерфейса CanMove, где в методе move() будет выводиться строка «Движение автомобиля».</li>
        <li>Создайте класс Aircraft с реализацией интерфейса CanFly, где в методе fly() будет выводиться строка «Полёт самолёта».</li>
        <li>Создайте объект класса Car и вызовите метод move().</li>
        <li>Создайте объект класса Aircraft и вызовите метод fly().</li>
    </ul>
    <h2>Реализация</h2>
    <?php
    include '4/car.php';
    include '4/aircraft.php';
    $c = new Car;
    $c->Move();
    echo '<br />';
    $a = new aircraft;
    $a->Fly();
    ?>
</body>

</html>
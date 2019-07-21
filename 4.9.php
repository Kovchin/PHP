<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Абстрактный класс</title>
</head>

<body>
    <h1>Наследование и абстрактные классы</h1>
    <p>Если во время объявления класса написать <b>abstract</b> - то это создаст абстрактный класс, экземпляр которого нельзя будет создать</p>
    <p>Если мы хотим унаследовать один класс от другого (к примеру абстрактного) то стоит воспользоваться конструкцией <b>class Circle extends Shape</b></p>
    <p>Где <b>Shape</b> - класс родитель от которого наследуется <b>Circle</b></p>
    <p>Если в абстрактном классе при объявлении метода написать <b>abstract public function test()</b> - это будет обозначать что при наследовании этого класса этот метод должен быть обязательно реализован</p>
    <p>И последнее если среди потомков какого то класса есть необходимость обратиться к какому то уникальному методу или свойству присущему только этому экземпляру стоит воспользоваться следующей конструкцией
        <br />
        <code>if ($key <b>instanceof</b> Circle)<br />
                $key->HelloCircle();</p>
    </code>
    <h2>Урок</h2>
    <?php
    //Подключение библиотек
    include_once '4/circle.php';
    include_once '4/rectangle.php';
    //Создание экземпляров класов унаследованных от Shape
    $circle = new Circle(10, 20, 30);
    $rectangle = new Rectangle(100, 200, 300, 400);
    $rect = new Rectangle(50, 60, 70, 80);
    //Создаем массив с объектами классов для удобного перебора их методов
    $l = [$circle, $rectangle, $rect];
    //Вызов одинаковых методов классов унаследованных от Shape
    foreach ($l as $value) {
        $value->Draw();
    }
    //Вызов уникальных методов класса унаследованных от Shape
    foreach ($l as $key) {
        if ($key instanceof Circle)
            $key->HelloCircle();
        elseif ($key instanceof Rectangle) {
            $key->HelloRectangle();
        }
    }
    ?>
    <h2>Задание</h2>
    <ul>
        <li>
            Создайте абстрактный класс Shape с абстрактным методом draw().
        </li>
        <li>
            Сделайте класс Point со свойствами x и y (оба public) наследующим класс Shape.
        </li>
        <li>
            Попробуйте создать объект класса Point. Проанализируйте получившуюся ошибку.
        </li>
        <li>
            Реализуйте метод draw() в классе Point, выведя в нём строку: «Рисуем точку с координатами (x, y)». Разумеется, вместо x и y должны быть конкретные значения.
        </li>
        <li>
            Вызовите метод draw() у объекта класса Point и убедитесь, что всё работает правильно.
        </li>
    </ul>
    <h2>Реализация</h2>
    <?php
    include_once '4/newpoint.php';
        $p = new newPoint(757, 575);
        $p->Draw();
        echo $p->toString();
    ?>
</body>

</html>
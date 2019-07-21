<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\tabs.css">
    <script src="JS\jquery-3.4.1.min.js"></script>
    <script src="JS\show_hide.js" defer></script>
    <title>"Магические методы"</title>
</head>

<body>
    <?php
    include '4/request.php';
    include '4/point.php';
    ?>
    <h1>"Магические" методы</h1>
    <p>Магические методы начинаются с 2-ух нижних подчеркиваний <b>__</b></p>
    <ul>
        <li><b>__construct - конструктор класса</b></li>
        <li><b>__request</b> - </li>
        <li><b>__get - вызывается всегда когда идет запрос значения свойства которого не существует</b></li>
        <li><b>__set - при присвоении значения свойству</b></li>
        <li><b>__isset - проверяет наличие свойства</b></li>
        <li><b>__unset - при деинициализации свойства</b></li>
        <li><b>__toString - при попытке преобразования в строку</b></li>
        <li><b>__clone - кланирование класса</b></li>
        <li><b>__call - магическая функция что вызывается при обращении к методу не описанному в классе</b></li>
        <li><b>__sleep - сериализация объекта</b></li>
        <li><b>__wakeup - десериализация объекта</b></li>
    </ul>
    <h3>Реализация</h3>
    <?php
    $request = new request();
    echo $request->a . '<br />';
    $request->a = 767;
    echo $request->a . '<br />';
    echo isset($request->b) . '<br />';
    echo $request . '<br />';
    $r = clone $request;
    $request->a = 'new a';
    echo '$request->a = ' . $request->a . '<br />';
    echo '$r->a = ' . $r->a . '<br />';
    ?>
    <?php
    echo 'test <br />';
    $m = 'mama';
    echo '<p>' . $m . ' test</p><br /> =====================<br />';
    ?>
    <h3>Задание</h3>
    <ul>
        <li>
            Добавьте в класс Point (из предыдущего упражнения) метод __toString() и реализуйте его, вернув строку такого вида: «Точка с координатами (x, y)». Безусловно, вместо x и y должны быть конкретные значения.
        </li>
        <li>
            Создайте 3 разных объекта класса Point и выведите их через echo.
        </li>
        <li>
            Реализуйте метод __get(), в котором при обращении к несуществующему свойству z будет выведено сообщение «Класс Point работает только в двумерном пространстве».
        </li>
        <li>
            Аналогично сделайте метод __set() при попытке изменить свойств z.
        </li>
        <li>
            Так же реализуйте метод call(), в котором выведите ту же строку, что и в пункте 3, при попытке вызвать метод setZ().
        </li>
        <li>
            Создайте 1 объект класса Point и сделайте его клон. Убедитесь, что клонирование прошло успешно, попытавшись изменить свойство любого из объектов и выведя это свойство у обоих объектов. Они должны быть различны.
        </li>
    </ul>
    <h3>Реализация</h3>
    <?php
        $p1 = new point(10,20);
        $p2 = new point(30,40);
        $p3 = new point(50,60);
        echo 'Свойства класса point <br /> '.$p1.'<br />';
        echo 'Свойства класса point <br /> '.$p2.'<br />';
        echo 'Свойства класса point <br /> '.$p3.'<br />';
        echo 'get z<br />';
        $p1->z;
        echo 'set z<br />';
        $p1->z = 5;
        $p1->SetZ(5);
        $pp1 = clone $p1;
        $p1 -> setX(111);
        $p1 -> setY(222);
        echo $p1;
        echo $pp1;
    ?>
</body>

</html>
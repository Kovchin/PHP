<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пространство имен</title>
</head>

<body>
    <h1>Пространство имен</h1>
    <p>При подключении библиотек содержащих одинаковые названия классов используют "пространство имен"</p>
    <p>В коде библиотеки указать <code>namespace my\lib_a</code></p>
    <p>При вызове есть 3 способа использования</p>
    <ul>
        <li><code>$c = new my\lib_b\my_Class();</code></li>
        <li>
            <code>
                use my\lib_b\my_Class;<br />
                $c = new my_Class();
            </code>
        </li>
        <li>
            <code>
                use my\lib_b\my_Class as TTT;<br />
                $c = new TTT();
            </code>
        </li>
    </ul>
    <h2>Урок</h2>
    <?php
        include_once '4/lib_4.12/a.php';
        include_once '4/lib_4.12/b.php';
        include_once '4/lib_4.12/c.php';

        $a = new test\a\myPrint();
        $a->print();

        use test\b\myPrint as bb;
        $b = new bb;
        $b->print();

        use test\c\myPrint;
        $c = new myPrint;
        $c->print();
    ?>
    <h2>Задание</h2>
        <ul>
            <li>
                В предыдущем упражнении поместите класс Car, Aircraft, а также трейты CanMove и CanFly в отдельные файлы.
            </li>
            <li>
                Добавьте пространство имён в каждый класс и каждый трейт.
            </li>
            <li>
                В index.php подключите эти классы.
            </li>
            <li>
                Создайте объект класса Car и вызовите метод move().
            </li>
            <li>
                Создайте объект класса Aircraft и вызовите метод fly().
            </li>
        </ul>
        <p>Примечание: Для использования классов Вы можете использовать как use, так и писать полный путь. Также можно комбинировать эти способы.</p>
        <h2>Реализация</h2>
        <?php
            include_once '4/lib_4.12/c_car.php';
            include_once '4/lib_4.12/c_aircraft.php';

            use a;
            use b;

            $c = new car;
            $c->Move();
            $a = new b\aircraft;
            $a->Fly();
        ?>
</body>

</html>
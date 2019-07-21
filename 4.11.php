<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Трейты</title>
</head>

<body>
    <h1>Трейты</h1>
    <p>Трейты - это среднее между интерфейсами и классами</p>
    <p>Так же как и интерфейсы их можно наследовать больше чем один и мы не можем создавать объекты от них, а от классов они взяли возможность реализации.</p>
    <p>Описание трейта такое же как у класса только слово trait</p>
    <code>trait hello <br />
        {<br />
            public function sayHello()<br/>
            {<br/>
                echo 'Say Hello!'<br/>
            }<br/>
        }<br/>
    </code>
    <p>Подключение трейта</p>
    <code>
    include_once 'lib/hello.php';<br/>
<br />
class myClass<br />
{<br />
    use hello;<br />
}<br />
    </code>
    <p>Использование трейта</p>
    <code>
        $c = new myClass();<br />
        $c->sayHello();<br />
    </code>
    <?php
    include_once '4/lib_4.11/class_user.php';

    $user = new User();

    $user->setId('1');
    $user->setName('Pavel');

    echo $user->getId() . '<br />';
    echo $user->getName();
    ?>
    <h2>Задание</h2>
    <ul>

        <li>
            Перепишите предыдущее упражнение, только вместо интерфейсов должны быть трейты и прямо в них должна быть реализация методов move() и fly().
            <ul>
                <li>Создайте интерфейс СanMove с методом move().</li>
                <li>Создайте интерфейс СanFly с методом fly().</li>
                <li>Создайте класс Car с реализацией интерфейса CanMove, где в методе move() будет выводиться строка «Движение автомобиля».</li>
                <li>Создайте класс Aircraft с реализацией интерфейса CanFly, где в методе fly() будет выводиться строка «Полёт самолёта».</li>
                <li>Создайте объект класса Car и вызовите метод move().</li>
                <li>Создайте объект класса Aircraft и вызовите метод fly().</li>
            </ul>
        </li>
        <li>
            В классах Car и Aircraft подключите трейты, удалив при этом реализацию методов move() и fly() (поскольку теперь реализация находится в самих трейтах).
        </li>
        <li>
            Создайте объект класса Car и вызовите метод move().
        </li>
        <li>
            Создайте объект класса Aircraft и вызовите метод fly().
        </li>
    </ul>
    <h2>Реализация</h2>
    <?php

    include_once '4/lib_4.11/c_Car.php';
    include_once '4/lib_4.11/c_Aircraft.php';

    $a = new Aircraft();
    $c = new Car();

    $a->Fly();
    echo '<br />';
    $c->Move();
    ?>

    <hr>
<h2>Код</h2>
<code>
include_once '4/lib_4.11/c_Car.php'; <br>
    include_once '4/lib_4.11/c_Aircraft.php'; <br>
    <br>
    $a = new Aircraft(); <br>
    $c = new Car(); <br>
    <br>
    $a->Fly(); <br>
    echo '&lt;br /&gt;'; <br>
    $c->Move(); <br>
</code>
    <?php
    $path = '4/lib_4.11/c_Car.php';
    if (!file_exists($path)) echo 'Такого файла не существует';
    else {
        echo '<br /><h3>Текст класса Car</h3>';
        $s = file_get_contents($path);
        echo '<xmp>'.$s.'</xmp>';
    }

    $path = '4/lib_4.11/c_Aircraft.php';
    if (!file_exists($path)) echo 'Такого файла не существует';
    else {
        echo '<br /><h3>Текст класса Aircraft</h3> <br />';
        $s = file_get_contents($path);
        echo '<xmp>'.$s.'</xmp>';
    }
    $path = '4/lib_4.11/t_canFly.php';
    if (!file_exists($path)) echo 'Такого файла не существует';
    else {
        echo '<br /><h3>Текст трейта t_canFly</h3> <br />';
        $s = file_get_contents($path);
        echo '<xmp>'.$s.'</xmp>';
    }
    $path = '4/lib_4.11/t_canMove.php';
    if (!file_exists($path)) echo 'Такого файла не существует';
    else {
        echo '<br /><h3>Текст трейта t_canMove</h3> <br />';
        $s = file_get_contents($path);
        echo '<xmp>'.$s.'</xmp>';
    }

    ?>
</body>

</html>
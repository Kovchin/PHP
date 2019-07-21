<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Сериализация на почте</title>
</head>

<body>
    <h1>Сериализация объектов</h1>
    <p>Есть 2 функции позволяющие сериализовать и десериализовать объекты </p>
    <p>Это нужно что бы положить экземпляр класса в файл или базу данных для дальнейшего использования</p>
    <ul>
        <li>serialize(экземпляр класса или массив)</li>
        <li>unserialize(экземпляр класса или массив)</li>
    </ul>
    <hr>
    <h2>Урок</h2>
    <?php
    include '../php/4/serialUser.php';
    //создали экземпляр класса user
    $user = new User('Pavel', 'kovchin@mail.ru', 'mypassword');
    //вывели его при помощи магического метода to String
    echo 'Вывод класса при помощи магического метода toString <br />' . $user . '<br /> Вывод при помощи метода print_r <br />';
    print_r($user);
    echo '<br /> <hr>';
    $str = serialize($user);
    echo 'Сериализованный объект user = ' . $str;
    echo '<br /> результат вывода при помощи print_r <br />';
    print_r($str);
    echo '<hr>';
    $myFile = fopen('4/' . $user->email, 'w');
    fwrite($myFile, $str);
    fclose($myFile);
    sleep(2);
    $str = file_get_contents('4/' . $user->email);
    echo '<br />Прочитали сериализованный класс user из файла<br />' . $str . '<hr>';

    echo '<br /> И вывели его после десериализации <br />' . unserialize($str) . '<br />';
    echo 'И результат вывода print_r <br />';
    print_r(unserialize($str));
    ?>
    <h2>Задание</h2>
    <ul>
        <li>Сделайте форму с двумя полями: x и y. Также добавьте кнопки: «Сохранить» и «Загрузить».</li>
        <li>При вводе x и y и нажатии кнопки «Сохранить» должен быть создан объект класса Point, который необходимо сериализовать.</li>
        <li>При нажатии кнопки «Загрузить» в поля x и y должны быть подставлены координаты сериализованного объекта.</li>
        <li>Примечание: Обязательно выводите различные предупреждения. Например, при попытке «Загрузить» ещё не сохранённый объект или сохранить без заполненных или некорректных полей x и y. Также выводите информацию об успешном сохранении и об успешной загрузке.</li>
    </ul>
    <h2>Реализация</h2>
    <?php
    include_once '4/point.php';
    if (isset($_GET['load'])) {
        $str = '';
        $str = file_get_contents('4/4.8.txt');
        $str = unserialize($str);
        if (is_numeric($str->getX()) && is_numeric($str->getY())) {
            $x = $str->getX();
            $y = $str->getY();
        }
    }
    ?>
    <form action="#" method="get">
        <input type="number" name="x" id="" value=<?= $x ?>>
        <input type="number" name="y" id="" value=<?= $y ?>>
        <button name='save' type="submit">Сохранить</button>
        <button name='load' type="submit">Загрузить</button>
    </form>
    <?php
    if (isset($_GET['save'])) {
        //Блок исполняется если нажали кнопку сохранить
        if ((is_numeric($_GET['x'])) && (is_numeric($_GET['y']))) {
            $np = new point($_GET['x'], $_GET['y']);
            echo $np;
            $str = serialize($np);
            echo 'Вывод сериализованного класса point <br />';
            print_r($str);
            echo '<br />';
            file_put_contents('4/4.8.txt', $str);
        } else echo 'Проверьте введенные значения';
    } elseif (isset($_GET['load'])) {
        //Блок исполняется если нажали кнопку загрузить
        $str = file_get_contents('4/4.8.txt');
        $str = unserialize($str);
        echo '<br />' . ($str) . '<br />';
        print_r($str);
        echo '<br />x = ' . $str->getX();
        echo '<br />y = ' . $str->getY();
    } else echo 'Пока ничего никто не нажимал';
    echo '<pre>';
    print_r($GLOBALS);
    echo '</pre>';
    ?>
</body>

</html>
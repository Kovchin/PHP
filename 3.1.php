<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\code.css">
    <title>Математические функции</title>
</head>
<body>
    <main>
        <h1>Математические функции</h1>
        <p>В PHP очень много математических функций и константа. Рассмотрим некоторые наиболее часто используемые из них.</p>
        <h3>Константы</h3>
        <ul>
            <li><?='M_PI = '.M_PI?> - Пи</li>
            <li><?='M_E = '.M_E?> - E</li>
        </ul>
        <h3>Функции</h3>
        <ul>
            <li><?='abs(-3) = '.abs(-3)?> - Модуль числа (-3).</li>
        </ul>
        <h4>Округление</h4>
        <ul>
            <li><?='round(2.45, 1) = '.round(2.45, 1)?> - Округление 2,45 до десятых</li>
            <li><?='floor(2.45) = '.floor(2.5)?> - Отбросить дробную часть</li>
            <li><?='ceil(2.45) = '.ceil(2.5)?> - Оставить целую часть округленную вверх</li>
        </ul>
        <h4>Генератор случайных чисел</h4>
        <ul>
            <li><?='mt_rand(1, 10) = '.mt_rand(1, 10)?> - Вернуть случайное число от 1 до 10 включительно</li>
        </ul>
        <h4>min и max</h4>
        <ul>
            <li><?='min(-2, 5, 6, 5.28, -4.51, 50, 48.24) = '.min(-2, 5, 6, 5.28, -4.51, 50, 48.24)?> - Определение минимально числа</li>
            <li><?='max(-2, 5, 6, 5.28, -4.51, 50, 48.24) = '.max(-2, 5, 6, 5.28, -4.51, 50, 48.24)?> - Определение максимального числа</li>
        </ul>
        <h4>Тригонометрические функции</h4>
        <ul>
            <li><?='sin(30) = '.sin(30)?> - синус 30 радиан</li>
            <li><?='cos(30) = '.cos(30)?> - косинус 30 радиан</li>
            <li><?='tan(30) = '.tan(30)?> - тангенс 30 радиан</li>
            <li><?='(1/tan(30)) = '.(1/tan(30))?> - котангенс 30 радиан</li>
        </ul>
        <h5>И обратные им функции</h5>
        <ul>
            <li><?='asin(0.5) = '.asin(0.5)?> - арксинус 0,5 радиан</li>
            <li><?='acos(0.5) = '.acos(0.5)?> - арккосинус 0,5 радиан</li>
            <li><?='atan(0.5) = '.atan(0.5)?> - арктангенс 0,5 радиан</li>
            <li><?='M_PI/2 - atan(0.5)) = '.(M_PI/2 - atan(0.5))?> - арккотангенс 0,5 радиан</li>
        </ul>
        <h4>Перевод радианов в градусы и обратно</h4>
        <ul>
            <li><?='rad2deg(0.5) = '.rad2deg(0.5)?></li>
            <li><?='deg2rad(30) = '.deg2rad(30)?></li>
        </ul>
        <h2>Задание</h2>
        <ul>
            <li>Создайте массив с какими-то ценами, например: 50.25, 20.38, 50.78, 75.75, 50.</li>
            <li>Создайте массив с новыми ценами, где будут цены со скидкой 23%.</li>
            <li>Добавьте округление до двух цифр после запятой, чтобы не было таких цен: 58.3275.</li>
            <li>Выведите массив.</li>
            <li>Создайте форму, где пользователь должен будет ввести 2 числа.</li>
            <li>Сгенерируйте и выведите случайное число в диапазоне между числами, введёнными пользователем.</li>
        </ul>
        <?php
            $arr = [];
            for ($i = 0; $i < 10; $i++)
            $arr[] = mt_rand(0,10000)*0.01;

            echo '<pre>';
            print_r($arr);
            echo '</pre>';

            foreach ($arr as $key => $value)
                $arr[$key] = round($value  - ($value * 0.23), 2);
                echo '<h4> Новый массив но уже со скидками в 23% </h4>';
                echo '<pre>';
                    print_r($arr);
                echo '</pre>';
        ?>
        <form action="" method="get">
            <p>Минимальное значение случайного числа<input type="number" name="rndmin" id=""></p>
            <p>Максимально значение случайного числа<input type="number" name="rndmax" id=""></p>
            <input type="submit" name="startrnd" value="Сгенерировать">
        </form>

        <?php
            $x = $_GET['rndmin'];
            $y = $_GET['rndmax'];
            if ($x <= $y) 
            echo mt_rand($x, $y);
            else
            echo 'Проверьте первое число должно быть меньше второго';
        ?>
        <div class="code">
        $arr = []; <br />
            for ($i = 0; $i &lt; 10; $i++) <br />
            $arr[] = mt_rand(0,10000)*0.01; <br />
            <br />
            echo '&lt;pre&gt;'; <br />
            print_r($arr); <br />
            echo '&lt;/pre&gt;'; <br />
            <br />
            foreach ($arr as $key =&gt; $value) <br />
                $arr[$key] = round($value  - ($value * 0.23), 2); <br />
                echo '&lt;h4&gt; Новый массив но уже со скидками в 23% &lt;/h4&gt;'; <br />
                echo '&lt;pre&gt;'; <br />
                    print_r($arr); <br />
                echo '&lt;/pre&gt;'; <br />
                <br />
            $x = $_GET['rndmin']; <br />
            $y = $_GET['rndmax']; <br />
            if ($x &lt;= $y)  <br />
            echo mt_rand($x, $y); <br />
            else <br />
            echo 'Проверьте первое число должно быть меньше второго';
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/code.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Математические операции</title>
</head>
<body>
    <main>
        <h1>Простейшие математические операции</h1>
        <h2>Рассмотрим простейшие математические операции PHP</h2>
        <ul>
            <li>+ - сложение</li>
            <li>- - вычитание</li>
            <li>* - умножение</li>
            <li>/ - деление</li>
            <li>% - остаток от деления</li>
            <li>** - степень</li>
            <li>++ - инкремент</li>
            <li>-- декремент</li>
            <li>+= - увеличить на определенное число</li>
            <li>-= - уменьшение на определенное число</li>
        </ul>
        <h2>Пример</h2>
        <?php
            $x = 5;
            $y = 2;
            echo '5 + 2 = '.($x + $y).'<br>';
            echo '5 - 2 = '.($x - $y).'<br>';
            echo '5 * 2 = '.($x * $y).'<br>';
            echo '5 / 2 = '.($x / $y).'<br>';
            echo 'Остаток от деления 5 на 2 = '.($x % $y).'<br>';
            echo '5 в степени 2 = '.($x ** $y).'<br>';
            echo 'Квадратный корень из 5 = '.($x ** (1/$y)).'<br>';
            $x++;
            echo 'Инкремент 5 = '.$x.'<br>';
            $x--;
            echo 'Декремент 6 = '.$x.'<br>';
            echo 'Увеличить число x на y = '.($x += $y).'<br>';
            echo 'Уменьшить число x на y = '.($x -= $y).'<br>';
        ?>
        <div class="code">
        $x = 5; <br>
            $y = 2; <br>
            echo '5 + 2 = '.($x + $y).'&lt;br&gt;'; <br>
            echo '5 - 2 = '.($x - $y).'&lt;br&gt;'; <br>
            echo '5 * 2 = '.($x * $y).'&lt;br&gt;'; <br>
            echo '5 / 2 = '.($x / $y).'&lt;br&gt;'; <br>
            echo 'Остаток от деления 5 на 2 = '.($x % $y).'&lt;br&gt;'; <br>
            echo '5 в степени 2 = '.($x ** $y).'&lt;br&gt;'; <br>
            echo 'Квадратный корень из 5 = '.($x ** (1/$y)).'&lt;br&gt;'; <br>
            $x++; <br>
            echo 'Инкремент 5 = '.$x.'&lt;br&gt;'; <br>
            $x--; <br>
            echo 'Декремент 6 = '.$x.'&lt;br&gt;'; <br>
            echo 'Увеличить число x на y = '.($x += $y).'&lt;br&gt;'; <br>
            echo 'Уменьшить число x на y = '.($x -= $y).'&lt;br&gt;';
        </div>
    </main>
</body>
</html>
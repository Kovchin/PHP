<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Действия с переменными</title>
</head>
<body>
    <main>
        <h1>В этом уроке разбираются простейшие операции с переменными</h1>
        <ul>
            <li><b>isset</b><i>($переменная)</i> - метод проверяет наличие переменной</li>
            <li><b>unset</b><i>($переменная)</i> - освобождает память удаляя переменную</li>
            <li><b>gettype</b><i>($переменная)</i> - проверяет тип переменной</li>
            <li><b>is_numeric<i></b>($переменная)</i> - проверяет, а не числовой ли тип у переменной</li>
            <li><b>is_string</b><i>($переменная)</i> - проверяет, а не строковый ли тип у переменной</li>
            <li><b>(int)</b> <i>$переменная</i> - пытается преобразовать переменную в тип integer</li>
            <li><b>(double)</b> <i>$переменная</i> - Пытается преобразовать переменную к типу float</li>
        </ul>
        <h2>Урок</h2>
        <?php
            $x = 5;
            echo 'Существует ли переменная x = ';
            echo isset($x);
            echo '<br>';
            echo 'Существует ли переменная X = ';
            echo isset($X);
            echo '<br>';
            echo 'Переменная x типа - ';
            echo gettype($x);
            echo '<br>';
            $x = (string) $x;
            echo 'Преобразовали переменную x  в строку и проверяем ее действующий тип - ';
            echo 'br';
            $x = (double) $x;
            echo 'Преобразовали переменную x в тип double и проверяем ее тип - ';
            echo gettype($x);
            echo '<br>';
            echo 'Проверяем в числовое ли значение лежит в переменной x - ';
            echo is_numeric($x);
            echo '<br>';
            unset($x);
            echo 'Удалили переменную x и проверяем ее значение функцией <b>isset</b> - ';
            echo isset($x);
            echo '<br>';
            echo 'Поверяем а не числовое ли значение сейчас в переменной x - ';
            echo is_numeric($x);
            echo '<br> Как видим все работает :-)';
        ?>
        <h2>Код урока</h2>
        <div class="code">
            <code>
            $x = 5; <br>
            echo 'Существует ли переменная x = '; <br>
            echo isset($x); <br>
            echo '&lt;br&gt;'; <br>
            echo 'Существует ли переменная X = '; <br>
            echo isset($X); <br>
            echo '&lt;br&gt;'; <br>
            echo 'Переменная x типа - '; <br>
            echo gettype($x); <br>
            echo '&lt;br&gt;'; <br>
            $x = (string) $x; <br>
            echo 'Преобразовали переменную x  в строку и проверяем ее действующий тип - '; <br>
            echo 'br'; <br>
            $x = (double) $x; <br>
            echo 'Преобразовали переменную x в тип double и проверяем ее тип - '; <br>
            echo gettype($x); <br>
            echo '&lt;br&gt;'; <br>
            echo 'Проверяем в числовое ли значение лежит в переменной x - '; <br>
            echo is_numeric($x); <br>
            echo '&lt;br&gt;'; <br>
            unset($x); <br>
            echo 'Удалили переменную x и проверяем ее значение функцией &lt;b&gt;isset&lt;/b&gt; - '; <br>
            echo isset($x); <br>
            echo '&lt;br&gt;'; <br>
            echo 'Поверяем а не числовое ли значение сейчас в переменной x - '; <br>
            echo is_numeric($x); <br>
            echo '&lt;br&gt; Как видим все работает :-)'; <br>
            </code>
        </div>
        <h2>Задание</h2>
        <ul>
            <li>Создайте переменную x с любым значением.</li>
            <li>Выведите результат работы isset(x) и isset(y). Объясните самому себе, что делает isset().</li>
            <li>Найдите в справочнике php.net функцию проверки переменной на целое значение.</li>
            <li>Создайте целую переменную и воспользуйтесь функцией из 3-го пункта для проверки значения на целое число.</li>
        </ul>
        <h2>Реализация</h2>
        <?php
            $x = 5;
            echo 'Переменная x существует - ';
            echo isset($x);
            echo '<br>';
            echo 'Переменная y существует - ';
            echo isset($y);
            echo '<br>';
            echo 'Переменная x целое число - ';
            echo is_int($x);
            echo '<br>';
        ?>
        <h2>Код</h2>
        <div class="code">
            <code>
                $x = 5; <br>
                echo 'Переменная x существует - '; <br>
                echo isset($x); <br>
                echo '&lt;br&gt;'; <br>
                echo 'Переменная y существует - '; <br>
                echo isset($y); <br>
                echo '&lt;br&gt;'; <br>
                echo 'Переменная x целое число - '; <br>
                echo is_int($x); <br>
                echo '&lt;br&gt;'; <br>
            </code>
        </div>
    </main>
</body>
</html>
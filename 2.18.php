<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Рекурсия</title>
</head>
<body>
    <main>
    <h1>Рекурсия</h1>
        <p>Рекурсией называют многократный вызов функции самой себя.</p>
        <h2>Для примера в уроке рассмотрен вызов факториала</h2>
        <?php
            function factorial($x){
                $res;
                if ($x <= 1) return 1;
                    return $x * factorial($x-1);
                
            }
            echo "Факториал 5 = ".factorial (5);
        ?>
        <div class="code">
        function factorial($x){ <br>
                $res;<br>
                if ($x &lt;= 1) return 1;<br>
                    return $x * factorial($x-1);<br>
            }<br>
            echo "Факториал 5 = factorial (5)";
        </div>
        <h2>Задание</h2>
        <ul>
            <li>Напишите рекурсивную функцию, которая будет принимать 2 параметра: a и b - и возвращать число a в степени b.</li>
            <li>Проверьте функцию.</li>
            <li>Примечание: Ключевой строкой будет что-то типа этого: return $a * func($a, $b – 1); - то есть углубляться внутрь до тех пор, пока $b не станет равной 0. Когда это будет, возвращаем 1 и начинаем подниматься вверх вплоть до выхода.</li>
        </ul>
        <h2>Реализация</h2>
        <?php
        function stepen($a, $b)
        {
        if ($b <= 1) return $a;
            return $a * stepen($a, $b-1);
        }

        echo "2 в степени 5 = ". stepen(2,5);
        ?>
        <h2>Код</h2>
        <div class="code">
        function stepen($a, $b)<br>
        {<br>
        if ($b &lt;= 1) return $a;<br>
            return $a * stepen($a, $b-1);<br>
        }<br>
        <br>
        echo "$a в степени $b = ". stepen(2,5);
        </div>
    </main>
</body>
</html>
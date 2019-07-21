<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Отладочные функции</title>
</head>
<body>
    <main>
        <h1>Отладочные функции</h1>
        <ul>
            <li>print_r($arr,[true]);</li>
            <li>var_dump($arr);</li>
            <li>var_export($arr,[true]);</li>
            если в во время вызова функций указать вторым параметром [true] - то результат не выведется на экран, а его можно будет присвоить переменной
        </ul>
        <?php
            $arr = [1,2,[3,2,1],4,5];
            print_r($arr);
            echo '<br />';
            var_dump($arr);
            echo '<br />';
            var_export($arr);
        ?>
        <h2>Задание</h2>
        <ul>
            <li>Создайте трёхмерный ассоциативный массив.</li>
            <li>Выведите его с помощью print_r().</li>
            <li>Напишите функцию, которая будет выводить результат print_r(), но внутри тега </li>
            <li>Воспользуйтесь этой функцией, передав ей массив из 1-го пункта. Поясните, что изменилось в выводе и почему.</li>
        </ul>
        <h2>Реализация</h2>
        <?php
        $arr = [];
        $x = 0;
            for ($i = 0; $i < 3 ; $i++)
                for ($j = 0; $j < 3; $j++)
                    for ($k = 0; $k < 2; $k++)
                    {
                        $arr[$i][$j][$k] = $x;
                        $x++;
                    }
            print_r($arr);
            echo '<hr>';
            function my_prunt_r($arr)
            {
                echo '<pre>'.print_r($arr,true).'</pre>';
            }
            my_prunt_r ($arr);
        ?>
        <div class="code">
            $arr = []; <br>
            $x = 0; <br>
                for ($i = 0; $i &lt; 3 ; $i++) <br>
                    for ($j = 0; $j &lt; 3; $j++) <br>
                        for ($k = 0; $k &lt; 2; $k++) <br>
                        { <br>
                            $arr[$i][$j][$k] = $x; <br>
                            $x++; <br>
                        } <br>
                print_r($arr); <br>
                echo '&lt;hr&gt;'; <br>
                function my_prunt_r($arr) <br>
                { <br>
                    echo '&lt;pre&gt;'.print_r($arr,true).'&lt;/pre&gt;'; <br>
                } <br>
                my_prunt_r ($arr);
        </div>
    </main>
</body>
</html>
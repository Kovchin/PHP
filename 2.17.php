<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Область видимости переменных</title>
</head>
<body>
    <main>
        <h1>Область видимости переменных</h1>
            <p>Глобальные переменные это переменные объявленные в теле документа</p>
            <p>Переменные объявленные в функция в общем своем случае называют локальными</p>
            <p>Статические переменные к примеру счетчик вызова обращений к функции</p>
            Демонстрация локальных и глобальных переменных
        <div class="code">
        $x = 10; <br>

        function increment ($x){ <br>
            $x++; <br>
            $a = 8;
            echo 'x в функции = '.$x; <br>
        }       <br>
        increment($x); <br>
        echo '&lt;br&gt;Глобальная x осталась неизменной и равна '.$x; 
        echo '&lt;br&gt;Увы $a  есть только в теле функции и вызвать его в теле php кода не получится так как она локальная = '.$a;
        </div>
        <?php   
            $x = 10;

            function show_globals(){
                foreach($GLOBALS as $key => $value)
                    echo "<br> $key = $value";
            }

            function increment ($x){
                $x++;
                $a = 8;
                echo 'x в функции = '.$x;
            }      
            increment($x);
            echo '<br>Глобальная x осталась неизменной и равна '.$x;  
            echo '<br>Увы $a  есть только в теле функции и вызвать его в теле php кода не получится так как она локальная = '.$a;
        ?>
        <h2>Задание</h2>
            <ul>
                <i>Создайте две числовые переменные.</i>
                <i>Напишите функцию, которая будет брать две переменные из 1-го пункта и выводить их сумму.</i>
                <i>Вызовите эту функцию.</i>
            </ul>
        <h2>Реализация</h2>
        <?php
            $x = 10;
            $y = 15;

            function summa(){
                 global $x;
                 global $y;
                 return $x + $y;
            }
            echo 'Сумма 2-ух глобальных переменных x и y вызванных в функции неявно '.$x.' и '.$y.' = '.summa();

            show_globals();
        ?>
        <h2>Код</h2>
        <div class="code">
        $x = 10; <br>
            $y = 15; <br>
            <br>
            //Функция вывод массива GLOBAL <br>
            function show_globals(){ <br>
                foreach($GLOBALS as $key =&gt; $value) <br>
                    echo "&lt;br&gt; $key = $value"; <br>
            }<br>
            function summa(){ <br>
                 global $x; <br>
                 global $y; <br>
                 return $x + $y; <br>
            } <br>
            echo summa();<br>
            show_globals();
        </div>
    </main>
</body>
</html>
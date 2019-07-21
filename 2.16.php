<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Функции</title>
</head>
<body>
    <main>
    <h1>Функции</h1>
    функции 
    <ul>
        <li>declare (strict_types = 1) - включает режим строгой типизации данных (float не будет преобразовываться в int простым отбрасыванием дробной части)</li>
        <li>func_num_args() - возвращает количество аргументов в вызове функции</li>
        <li>func_get_arg($i) - возвращает $i-ый аргумент функции</li>
    </ul>
    <p>объявление функции</p>
    <div class="code">
        function myprint(string $s, int $count = 1) : string<br>
        { <br>
            for ($i = 0; $i < $count; $i++) <br>
            echo ($s.'&lt;br&gt;'); <br>
            return 'compleat'; <br>
        };
    </div>
    <?php

        function myprint(string $s, int $count = 1) : string
        {
            for ($i = 0; $i < $count; $i++)
            echo ($s.'<br>');
            return 'compleat';
        }; 
        myprint('hello');
    ?>
    <h2>Задание</h2>
    <ul>
        <li>Напишите функцию, которая принимает массив, а возвращает сумму его элементов. Если передан не массив, либо в нём нет элементов, либо некоторые элементы не являются числами, то должно возвращаться false.</li>
        <li>Создайте несколько массивов для последующей передачи их в функцию из 1-го пункта. Массивы должны быть такими, чтобы детально проверить написанную функцию.</li>
        <li>Передавайте все массивы и смотрите на получившийся результат. Если функция возвращает false, то выводить строку: «Некорректный массив», если идёт число, то выводить: «Сумма элементов массива равна …».</li>
    </ul>
    <h2>Реализация</h2>
    <?php
        function func_summ_arr($arr){
            if (func_check_arr($arr) == 1){
            $summ = 0;
                for ($i = 0; $i < count($arr); $i++)
                    $summ += $arr[$i];
                    echo 'Сумма элементов массива = '.$summ;
            }
        }
        function func_check_arr($arr) : int{
            if (!is_array($arr)){
                echo 'В качестве входных параметров в функцию должен быть массив чисел';
                return 0;
            }
            if(count($arr) == 0){
                echo 'В массиве должно быть больше одного элемента';
                return 0;
            }
            for ($i = 0; $i < count($arr); $i++)
                if(!is_numeric($arr[$i])){
                    echo 'Некорректный массив';
                   return 0;
                }
            return 1;
        }
        $my_arr = [1, 2, 8, 4.5];

        func_summ_arr($my_arr);
    ?>
    <h2>Код</h2>
    <div class="code">
    function func_summ_arr($arr){ <br>
            if (func_check_arr($arr) == 1){ <br>
            $summ = 0; <br>
                for ($i = 0; $i &lt; count($arr); $i++) <br>
                    $summ += $arr[$i]; <br>
                    echo 'Сумма элементов массива = '.$summ; <br>
            } <br>
        } <br>
        function func_check_arr($arr) : int{ <br>
            if (!is_array($arr)){ <br>
                echo 'В качестве входных параметров в функцию должен быть массив чисел'; <br>
                return 0; <br>
            } <br>
            if(count($arr) == 0){ <br>
                echo 'В массиве должно быть больше одного элемента'; <br>
                return 0; <br>
            } <br>
            for ($i = 0; $i &lt; count($arr); $i++) <br>
                if(!is_numeric($arr[$i])){ <br>
                    echo 'Некорректный массив'; <br>
                   return 0; <br>
                } <br>
            return 1; <br>
        } <br>
        $my_arr = [1, 2, 8, 4.5]; <br>
        <br>
        func_summ_arr($my_arr);
    </div>
    </main>
</body>
</html>
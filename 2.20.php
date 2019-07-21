<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\code.css">
    <title>Генераторы</title>
</head>
<body>
    <main>
        <h1>Генераторы</h1>
        <h2>Интересный механизм позволяющий собрать стек разных функция в конструкции похожую на массив</h2>
        <hr>
        <?php
        function gener1()
        {
            echo 'Просто вывод текста';
            yield 1;
            $a = 1;
            $b = 2; 
            echo 'Разность $a и $b = '.($a - $b);   
            yield 2;     
            echo 'Результат суммы $a и $b = '.($a + $b);
            yield 3;
            echo 'Результат умножения $a и $b = '. ($a * $b);
            yield 4;
        } 

        foreach (gener1() as $value)
        {
            echo ' - из цикла '. $value.', <br />';
        }
        ?>
        <div class="code">
        function gener1() <br />
        { <br />
            echo 'Просто вывод текста'; <br />
            yield 1; <br />
            $a = 1; <br />
            $b = 2;  <br />
            echo 'Разность $a и $b = '.($a - $b);    <br />
            yield 2;      <br />
            echo 'Результат суммы $a и $b = '.($a + $b); <br />
            yield 3; <br />
            echo 'Результат умножения $a и $b = '. ($a * $b); <br />
            yield 4; <br />
        }  <br />
        <br />
        foreach (gener1() as $value) <br />
        { <br />
            echo ' - из цикла $value, &lt;br /&gt;'; <br />
        }
        </div>
        <hr>
        <?php
        function gener2($from, $to){
            for ($i = $from ; $i < $to; $i++){
                echo $i.' - шаг генератора;';
                yield $i;}
        }
        foreach (gener2(0,10) as $value){
            echo ' Вывод удвоенного шага во время перебора генератора - '.($value * 2).'.<br />';
        }
        ?>
        <hr>
        <?php
            $arr = [1, 2, 3, 4, 5, 6];

            function function_double_Array($arr, $callback)
            {
                foreach ($arr as $value)
                yield $callback($value);
            }
            
//Gener - это не массив!!!

            $gener = function_double_Array($arr, function ($value) {return $value*2;});
            
            echo 'Тип $gener - '.gettype($gener).'!!! <br />';

            foreach ($gener as $value)
            echo "$value ; ";
        ?>
        <div class="code">
        $arr = [1, 2, 3, 4, 5, 6]; <br />
        <br />
        function function_double_Array($arr, $callback) <br />
        { <br />
            foreach ($arr as $value) <br />
            yield $callback($value); <br />
        } <br />
        <br />
        //Gener - это не массив!!! <br />
        <br />
        $gener = function_double_Array($arr, function ($value) {return $value*2;}); <br />
        <br />
        echo 'Тип $gener - '.gettype($gener).'!!! &lt;br /&gt;'; <br />
        <br />
        foreach ($gener as $value) <br />
        echo "$value ; ";
        </div>
        <?php
            $arr = ['Pavel' => 39, 'Natalya' => 38, 'Ellina' => 13, 'Sergey' => 9];

            function gener3($arr, $callback)
            {
                foreach ($arr as $key => $value)
                {
                    yield $key => $callback($value);
                }
            }

            echo '<br />';

            $gener = gener3($arr, function ($age){return ($age < 23)? 'stedent': 'worker';});

            foreach ($gener as $key => $value) echo "$key - $value <br />";
        ?>
        <div class="code">
        $arr = ['Pavel' =&gt; 39, 'Natalya' =&gt; 38, 'Ellina' =&gt; 13, 'Sergey' =&gt; 9]; <br />
        <br />
        function gener3($arr, $callback) <br />
        { <br />
            foreach ($arr as $key =&gt; $value) <br />
            { <br />
                yield $key =&gt; $callback($value); <br />
            } <br />
        } <br />
        <br />
        echo '&lt;br /&gt;'; <br />
        <br />
        $gener = gener3($arr, function ($age){return ($age &lt; 23)? 'stedent': 'worker';}); <br />
        <br />
        foreach ($gener as $key =&gt; $value) echo "$key - $value &lt;br /&gt;";
        </div>
        <hr>
        <h3>Генераторы - это отличная возможность экономить ресурсы!!!</h3>
        <hr>
        <?php
        $count = 100000;
        $arr = [];
        for ($i = 0; $i < $count; $i++)
            $arr[] = $i;
        
        $s = 0;

        foreach ($arr as $value)
        {
            $s += $value;
        }

        echo 'Сумма элементов массива = '.$s.'<br />';
        echo 'При обработке массива php задействовано '.memory_get_usage().' Мбит. памяти <br />';
        unset($arr);
        echo 'После удаления массива из памяти php стал занимать '.memory_get_usage().' Мбит. оперативной памяти сервера. <br />';
        function ememory($count){
            for ($i = 0; $i < $count; $i++) yield $i;
        }

        $s = 0;
        foreach (ememory($count) as $value)
        {
            $s += $value; 
        }
        echo 'Сумма элементов массива = '.$s.'<br />';   
        echo 'При обработке без массива php задействовано '.memory_get_usage().' Мбит. памяти <br />';
       ?>
       <div class="code">
       $count = 10000000; <br />
        $arr = []; <br />
        for ($i = 0; $i &lt; $count; $i++) <br />
            $arr[] = $i; <br />
            <br />
        $s = 0; <br />
        <br />
        foreach ($arr as $value) <br />
        { <br />
            $s += $value; <br />
        } <br />
        <br />
        echo 'Сумма элементов массива = '.$s.'&lt;br /&gt;'; <br />
        echo 'При обработке массива php задействовано '.memory_get_usage().' Мбит. памяти &lt;br /&gt;'; <br />
        unset($arr); <br />
        echo 'После удаления массива из памяти php стал занимать '.memory_get_usage().' Мбит. оперативной памяти сервера. &lt;br /&gt;'; <br />
        function ememory($count){ <br />
            for ($i = 0; $i &lt; $count; $i++) yield $i; <br />
        } <br />
        <br />
        $s = 0; <br />
        foreach (ememory($count) as $value) <br />
        { <br />
            $s += $value;  <br />
        } <br />
        echo 'Сумма элементов массива = '.$s.'&lt;br /&gt;';    <br />
        echo 'При обработке без массива php задействовано '.memory_get_usage().' Мбит. памяти &lt;br /&gt;';
        <hr>
        <h2>Задание</h2>
        <ul>
            <li>Создайте анонимную функцию и поместите её в переменную. Функция должна принимать массив и возвращать среднее значение всех элементов.</li>
            <li>Создайте функцию-генератор, принимающую двумерный массив и функцию. Эта функция на каждой итерации должна возвращать среднее значение текущего массива.</li>
            <li>Создайте двумерный массив из чисел.</li>
            <li>С помощью foreach выведите все средние значения элементов двумерного массива.</li>
        </ul>
        <h2>Реализация</h2>
        <?php
        $arr = [0,1,2,3,4,5,10];
        $ma = function ($arr)
        {
            $summ = 0;
            foreach($arr as $value)
                $summ += $value;
            return ($summ / count($arr));
        };

        echo $ma($arr).'<br />';

        function gener4($arr, $callback)
        {
            foreach ($arr as $value)
            echo $value.'; ';
            yield $callback($value);
        }

    $show = gener4($arr, function ($value){return ($value*2).'; ';});

        foreach ($show as $value)
        echo $value;

        ?>
        <h2>Код</h2>
        <div class="code">

        </div>
       </div>
    </main>
</body>
</html>
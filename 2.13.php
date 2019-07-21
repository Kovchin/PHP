<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Массивы</title>
</head>
<body>
    <main>
        <h1>Массивы</h1>
        <?php
            $arr = array(1, 5, -1, 0, 5);
            $arr = [1, 5, -1, 0, 5];
            echo "Третий элемент массива arr = $arr[2] <br>";

            for ($i = 0; $i < count($arr); $i++)
                echo "Массив arr[$i] = $arr[$i] <br>";
            
            $arr_2 = ['name' => 'Pavel', 'age' => 39];
            echo $arr_2['name'].'<hr>';

            $arr_3 = [[1, 2], [3, 5], [true, 5] , ['Всем здрасьте',654231, false]];
            echo $arr_3[3][0].'<br>';

            for ($i = 0; $i < count($arr_3); $i++){
                for($j = 0; $j < count($arr_3[$i]); $j++)
                    echo "Элемент массива [$i][$j] =". $arr_3[$i][$j].' ';
                echo '<br>';
                }
            
            $staff = [
                [
                    'name' => 'Pavel',
                    'age' => 39
                ],
                [
                    'name' => 'Natalya',
                    'age' => 38
                ],
                [
                    'name' => 'Ellina',
                    'age' => 13
                ],
                [
                    'name' =>'Sergey',
                    'age' => 10
                ]


            ];
            echo $staff[0]['name'];
        ?>
        <div class="code">
        $arr = array(1, 5, -1, 0, 5); <br>
            $arr = [1, 5, -1, 0, 5]; <br>
            echo "Третий элемент массива arr = $arr[2] &lt;br&gt;"; <br>
            <br>
            for ($i = 0; $i &lt; count($arr); $i++) <br>
            echo "Массив arr[$i] = $arr[$i] &lt;br&gt;"; <br>
            <br>
            $arr_2 = ['name' =&gt; 'Pavel', 'age' =&gt; 39]; <br>
            echo $arr_2['name'].'&lt;hr&gt;'; <br>
            <br>
            $arr_3 = [[1, 2], [3, 5], [true, 5] , ['Всем здрасьте',654231, false]]; <br>
            echo $arr_3[3][0].'&lt;br&gt;'; <br>
            <br>
            for ($i = 0; $i &lt; count($arr_3); $i++){ <br>
                for($j = 0; $j &lt; count($arr_3[$i]); $j++) <br>
                    echo "Элемент массива [$i][$j] =". $arr_3[$i][$j].' '; <br>
                echo '&lt;br&gt;'; <br>
                } <br>
                <br>
            $staff = [ <br>
                [ <br>
                    'name' =&gt; 'Pavel', <br>
                    'age' =&gt; 39 <br>
                ], <br>
                [ <br>
                    'name' =&gt; 'Natalya', <br>
                    'age' =&gt; 38 <br>
                ], <br>
                [ <br>
                    'name' =&gt; 'Ellina', <br>
                    'age' =&gt; 13 <br>
                ], <br>
                [ <br>
                    'name' =&gt;'Sergey', <br>
                    'age' =&gt; 10 <br>
                ] <br>
                <br>
            ]; <br>
            echo $staff[0]['name'];
        </div>
        <h2>Задание</h2>
            <ul>
                <li>Создайте массив из 10 различных чисел.</li>
                <li>Найдите и выведите сумму всех элементов массива из 1-го пункта, используя цикл for.</li>
                <li>Повторите пункт 2, но с использованием цикла while.</li>
            </ul>
        <h2>Реализация</h2>
        <?php
        $mass = [];
            for ($i = 0; $i < 10; $i++){
                $mass[$i] = $i*5;
            }
        //Первый способ при помощи цикла for
            $summ = 0;
        for ($i = 0; $i < count($mass); $i++){
            $summ += $mass[$i];
        }
        echo $summ.'<br>';
        //Второй способ при помощи цикла while
        $summ = 0;
        $i = 0;
        while ($i < 10){
            $summ += $mass[$i];
            $i++;
        }
        echo $summ;
        ?>
        <h2>Код</h2>
        <div class="code">
        $mass = []; <br>
            for ($i = 0; $i &lt; 10; $i++){ <br>
                $mass[$i] = $i*5; <br>
            } <br>
            <br>
            $summ = 0; <br>
        for ($i = 0; $i &lt; count($mass); $i++){ <br>
            $summ += $mass[$i]; <br>
        } <br>
        echo $summ.'&lt;br&gt;'; <br>
        $summ = 0; <br>
        $i = 0; <br>
        while ($i &lt; 10){ <br>
            $summ += $mass[$i]; <br>
            $i++; <br>
        } <br>
        echo $summ;
        </div>
    </main>
</body>
</html>
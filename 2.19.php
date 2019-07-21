<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Анонимные функции</title>
</head>
<body>
    <main>
        <h1>Анонимные функции</h1>
        <h2>Анонимные функции это функции без объявления имени функции</h2>
        <hr>

        <?php
            $hello = function ($string){
                echo $string.'<br />';
            };
            $hello ('World');
        ?>

        <div class="code">
        $hello = function ($string){ <br />
                echo $string.'&lt;br /&gt;'; <br />
            };<br />
            $hello ('World');
        </div>

        <?php
        function test($x, $func)
            {
                $arr = [];
                for ($i = 0; $i < $x; $i++)
                    $arr[] = $func($i);
                return $arr;
            }
            $arr = test(10,function($i)
                {
                    return $i * $i;
                });
            foreach ($arr as $value)
                {
                    echo $value. ', ';
                }
        ?>

        <div class="code">
        function test($x, $func) <br />
            { <br />
                $arr = []; <br />
                for ($i = 0; $i &lt; $x; $i++) <br />
                    $arr[] = $func($i); <br />
                return $arr; <br />
            } <br />
            $arr = test(10,function($i) <br />
                { <br />
                    return $i * $i; <br />
                }); <br />
            foreach ($arr as $value) <br />
                { <br />
                    echo $value. ', '; <br />
                }
        </div>
        <h2>Задание</h2>
        <ul>
            <li>Создайте анонимную функцию и поместите её в переменную. Функция должна просто возвращать сумму двух переданных параметров.</li>
            <li>Вызовите эту анонимную функцию с помощью переменной.</li>
            <li>Создайте ещё одну функцию, которая принимает массив с чётным количеством элементов в виде чисел, а также принимает вторым параметром функцию.</li>
            <li>Внутри этой функции перебирайте сразу по 2 элемента в массиве и выводите результат вызова переданной функции, передавая ей по 2 этих элемента.</li>
            <li>Вызовите функцию из 3-го пункта, передав ей массив с 4 числами, а также функцию из 1-го пункта.</li>
        </ul>
        <h2>Реализация</h2>

        <?php
            $summ = function($x, $y)
            {
                return $x + $y;
            };

            echo $summ(5, 8).'<br />';  

            function summ_array($arr, $func)
            {
                if (!is_array($arr))
                    echo "В качестве входных параметров должен быть массив";
                else if (!(count($arr)%2 == 0)){
                    echo "Вы передали массив с нечетным количеством элементов";
                    echo count($arr);
                }
                else if (!check_arr($arr))
                     echo "В качестве элементов массива должны быть числа";
                else 
                {
                    for ($i = 0; $i < (count($arr)/2); $i++)
                    {
                        echo '1-ый элемент = '.$arr[$i*2].', ';
                        echo '2-ой элемент = '.$arr[($i*2)+1].', ';
                        echo 'Результат сложения первого и второго элемента = '.$func($arr[$i*2], $arr[($i*2)+1]).'<br />';
                    }
                }
            }

            function check_arr($arr)
            {
                foreach ($arr as $value)
                    if (!is_numeric($value)) 
                        return false;
                return true;
            }

            $arr = [1, 2, 3, 4];
            summ_array($arr, $summ);
        ?>
        <div class="code">
        $summ = function($x, $y) <br />
            { <br />
                return $x + $y; <br />
            }; <br />
            <br />
            echo $summ(5, 8).'&lt;br /&gt;'; <br />  
            <br />
            function summ_array($arr, $func) <br />
            { <br />
                if (!is_array($arr)) <br />
                    echo "В качестве входных параметров должен быть массив"; <br />
                else if (!(count($arr)%2 == 0)){ <br />
                    echo "Вы передали массив с нечетным количеством элементов"; <br />
                    echo count($arr); <br />
                } <br />
                else if (!check_arr($arr)) <br />
                     echo "В качестве элементов массива должны быть числа"; <br />
                else  <br />
                { <br />
                    for ($i = 0; $i &lt; (count($arr)/2); $i++) <br />
                    { <br />
                        echo '1-ый элемент = '.$arr[$i*2].', '; <br />
                        echo '2-ой элемент = '.$arr[($i*2)+1].', '; <br />
                        echo 'Результат сложения первого и второго элемента = '.$func($arr[$i*2], $arr[($i*2)+1]).'&lt;br /&gt;'; <br />
                    } <br />
                } <br />
            } <br />
            <br />
            function check_arr($arr) <br />
            { <br />
                foreach ($arr as $value) <br />
                    if (!is_numeric($value))  <br />
                        return false; <br />
                return true; <br />
            } <br />
            <br />
            $arr = [1, 2, 3, 4]; <br />
            summ_array($arr, $summ);
        </div>
    </main>
</body>
</html>
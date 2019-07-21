<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\code.css">
    <title>Циклы while и do-while</title>
</head>
<body>
    <h1>Циклы while и do-while</h1>
    <ul>
        <li><div class="code">
            $n = 0; <br>
            while ($n < 10){ <br>
            echo "$n"; <br>
            $n++;}
            </div></li>
            <?php
               $n = 0;
               while ($n < 10){
               echo "$n <br>";
               $n++;} 
            ?>
        <li><div class="code">
            $n = 0; <br>
            do { <br>
                echo "$n &lt;br&gt;"; <br>
                $n++; <br>
            } while ($n &lt; 10);
        </div></li>
        <?php
            $n = 0;
            do {
                echo "$n <br>";
                $n++;
            } while ($n < 10);
        ?>
        <li>
            <div class="code">
                $n = 0; <br>
                while ($n < 10) : <br>
                    echo "$n &lt;br&gt;"; <br>
                    $n++; <br>
                endwhile;
            </div>
        </li>
        <?php
            $n = 0;
            while ($n < 10) :
                echo "$n <br>";
                $n++;
            endwhile;
        ?>
    </ul>
    <h2>Задание</h2>
    <ul>
        <li>Перепишите задачу из предыдущего упражнения с использованием цикла while.</li>
        <li>Вычислите и выведите сумму чётных чисел от 10 до 40. То есть найдите сумму: 10 + 12 + 14 + 16 + … + 38 + 40</li>
    </ul>
    <h2>Реализация</h2>
        <form action="2.11.php" method="get">
            <p>Введите число, факториал которого хотите узнать <input type="number" name="factorial" id=""></p>
            <button type="submit">Узнать факториал</button>
        </form>
        <hr>
        <?php
            $fac = $_GET['factorial']?? false;
            if ($fac < 0 ) echo 'Введенное число должно быть положительным';
            if ($fac == 0 ) echo 'Факториал 0 = 1';
            if (!(is_numeric($fac))) echo 'Введите любое положительное число типа integer';
            if ($fac > 0){
                $i = 1;
                $factorial = 1;
                do {
                    $factorial = $factorial * $i;
                    $i++;
                } while ($i < ($fac+1));
                echo "Факториал $fac = $factorial";
            }
            echo '<br>';
        //Второй пункт задания
        $i = 10;
        $summ = 0;
        while ($i < 41){
            $summ += $i;
            $i++;
        }
        echo  "Сумма числе от 10 до 40 равна $summ";
        ?>
    <h2>Код</h2>
    <div class="code">
        $fac = $_GET['factorial']?? false; <br>
            if ($fac &lt; 0 ) echo 'Введенное число должно быть положительным'; <br>
            if ($fac == 0 ) echo 'Факториал 0 = 1'; <br>
            if (!(is_numeric($fac))) echo 'Введите любое положительное число типа integer'; <br>
            if ($fac &gt; 0){ <br>
                $i = 1; <br>
                $factorial = 1; <br>
                do { <br>
                    $factorial = $factorial * $i; <br>
                    $i++; <br>
                } while ($i &lt; ($fac+1)); <br>
                echo "Факториал $fac = $factorial"; <br>
            } <br>
            echo '&lt;br&gt;'; <br>
        //Второй пункт задания <br>
        $i = 10; <br>
        $summ = 0; <br>
        while ($i &lt; 41){ <br>
            $summ += $i; <br>
            $i++; <br>
        } <br>
        echo  "Сумма числе от 10 до 40 равна $summ";
    </div>
</body>
</html>
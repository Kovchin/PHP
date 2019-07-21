<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\code.css">
    <title>Цикл for</title>
</head>
<body>
    <main>
    <h1>Цикл for</h1>
    <p>цикл for в PHP полностью аналогичен ему же в Java Script</p>
    <div class="code">
    for ($i=0 ; $i &lt; 10; $i++) echo '$i';
    </div>
    <h3>результат вывода предыдущего кода</h3>
    <?php
        for ($i=0 ; $i < 10; $i++) echo "$i - шаг цикла <br>";
    ?>
    <h3>стоит упомянуть про 2 оператора <span class='red'>continue</span> и <span class='red'>break</span></h3>
    <div class="code">
        for ($i=0 ; $i &lt; 10; $i++){ <br>
            if ($i = 4)  continue; <br>
            echo "$i - шаг цикла &lt;br&gt;"; <br>
            if ($i = 7) break; <br>
        } 
    </div>
    <h3>результат вывода кода</h3>
        <?php
            for ($i=0; $i < 10; $i++){
            if ($i == 4)  continue;
            echo "$i - шаг цикла <br>";
            if ($i == 7) break;
            }  
        ?>
    <h2>Задание</h2>
    <ul>
        <li>Создайте простую форму для ввода числа.</li>
        <li>Если пользователь введёт число меньше 0, то вывести строку: «Число должно быть 0 или больше 0».</li>
        <li>Если число корректное, то найдите и выведите факториал введённого числа с помощью цикла for.</li>
    </ul>
    <h2>Реализация</h2>
        <form action="2.10.php" method="get">
            <p>Введите число факториал которого хотите узнать: <input type="number" name="factorial" id=""></p>
            <button type="submit">Посчитать факториал</button>
            <hr>
            <?php
                $f = $_GET['factorial']?? false;
                if (!is_numeric($f)) echo 'Вы ввели некорректные данные в поле ввода необходимо записать число больше 0 ';
                if ($f < 0) echo 'Число должно быть положительным';
                if ($f == 0) echo 'Факториал 0 = 1';
                if ($f > 0){
                    $fact = 1;
                    for ($i = 1; $i < $f+1; $i++){
                        $fact = $fact * $i;
                    }
                echo "Факториал $f = $fact";
                }
            ?>
            <div class="code">
                $f = $_GET['factorial']?? false; <br>
                if (!is_numeric($f)) echo 'Вы ввели некорректные данные в поле ввода необходимо записать число больше 0'; <br>
                if ($f &lt; 0) echo 'Число должно быть положительным'; <br>
                if ($f == 0) echo 'Факториал 0 = 1'; <br>
                if ($f &gt; 0){ <br>
                    $fact = 1; <br>
                    for ($i = 1; $i &lt; $f+1; $i++){ <br>
                        $fact = $fact * $i; <br>
                    } <br>
                echo "Факториал $f = $fact"; <br>
                }
            </div>
        </form>
    </main>
</body>
</html>
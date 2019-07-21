<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\code.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Оператор switch-case <=></title>
</head>
<body>
    <main>
        <h1>Оператор switch-case <=></h1>
        <div class="code">
            switch (gettype($x)){ <br>
                case 'string' :  <br>
                    echo ("x = $x - это строка"); <br>
                    break; <br>
                case 'integer' :  <br>
                    echo ("x = $x - это целое число"); <br>
                    break; <br>
                case 'boolean' : <br>
                    echo ("x = $x - это буленовская переменная"); <br>
                    break; <br>
                default : echo ("x = $x - неизвестный тип данных ".gettype($x)); <br>
            }
        </div>
        <?PHP
        $x = 'hello';
            switch (gettype($x)){
                case 'string' : 
                    echo ("x = $x - это строка");
                    break;
                case 'integer' : 
                    echo ("x = $x - это целое число");
                    break;
                case 'boolean' :
                    echo ("x = $x - это буленовская переменная");
                    break;
                default : echo ("x = $x - неизвестный тип данных ".gettype($x));
            }
            echo '<br>';
        ?>
        <hr>
        <?PHP 
        $x = 5.2;
        if (gettype($x) == 'string') echo ("x = $x - это строка");
        elseif (gettype($x) == 'integer') echo ("x = $x - это целое число");
        elseif (gettype($x) == 'boolean') echo ("x = $x - это буленовская переменная");
        else echo ("x = $x - неизвестный тип данных ".gettype($x));
        echo '<br>';   
        ?>
        <h2>Рассмотрим оператор 'космический корабль' (<=>);</h2>
            <div class="code">
                switch ($a <=> $b){ <br>
                    case 0 : echo "Переменные a = $a и b = $b равны"; <br>
                    break; <br>
                    case -1: echo "Переменная a = $a меньше b = $b"; <br>
                    break; <br>
                    case 1: echo "Переменная a = $a больше b = $b"; <br>
                }
            </div>
            <?php
            $a = 3;
            $b = 2;
                switch ($a <=> $b){
                    case 0 : echo "Переменные a = $a и b = $b равны";
                    break;
                    case -1: echo "Переменная a = $a меньше b = $b";
                    break;
                    case 1: echo "Переменная a = $a больше b = $b";
                }
            ?>
            <hr>
            <h2>В PHP 7 добавили еще один вариант синтаксиса switch-case</h2>
            <ul>
                <li><span class = 'red'> { </span>заменяется на <span class = 'red'> : </span></li>
                <li><span class = 'red'> } </span>заменяется на <span class = 'red'> endswitch </span></li>
            </ul>
            <hr>
            <div class="code">
                switch ($a <=> $b) <span class = 'red'> : </span> <br>
                    case 0 : echo "Переменные a = $a и b = $b равны"; <br>
                    break; <br>
                    case -1: echo "Переменная a = $a меньше b = $b"; <br>
                    break; <br>
                    case 1: echo "Переменная a = $a больше b = $b"; <br>
                <span class = 'red'> endswitch; </span>
            </div>
            <hr>
            <h2>Задание</h2>
            <ul>
                <li>Выведите форму, куда пользователь будет вводить число.</li>
                <li>С помощью switch-case выведите строковое представление введённого числа. Например, если пользователь ввёл число 3, надо вывести «три», если 5, то надо вывести «пять».</li>
                <li>Если пользователь делает ввод числа, представления для которого у Вас нет, надо вывести строку: «Нет представления этого числа в виде строки».</li>
            </ul>
            <h2>Реализация</h2>
            <p>
                <form action="" method="get">
                    <p>Введите число от 0 - 10 <input type="number" name="input_number" id=""></p>
                    <button type="submit">Проверить</button>
                </form>
                <?php
                    $x = $_GET['input_number'];
                    if ( isset($x) ){
                        switch ($x){
                                case 0 : 
                                    echo ('Вы ввели ноль');
                                    break;
                                case 1 : 
                                    echo ('Вы ввели один');
                                    break;
                                case 2 : 
                                    echo ('Вы ввели два');
                                    break;
                                default : echo ('ХЗ что вы ввели я не писал интерпретаторов дальше двойки');
                        }
                    }
                ?>
                <hr>
                <h2>Код</h2>
                <div class="code">
                $x = $_GET['input_number']; <br>
                    if ( isset($x) ){ <br>
                        switch ($x){ <br>
                                case 0 :  <br>
                                    echo ('Вы ввели ноль'); <br>
                                    break; <br>
                                case 1 :  <br>
                                    echo ('Вы ввели один'); <br>
                                    break; <br>
                                case 2 :  <br>
                                    echo ('Вы ввели два'); <br>
                                    break; <br>
                                default : echo ('ХЗ что вы ввели я не писал интерпретаторов дальше двойки'); <br>
                        } <br>
                    }
                </div>
            </p>
    </main>
</body>
</html>
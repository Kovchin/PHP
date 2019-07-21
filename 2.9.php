<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/code.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Оператор if-else</title>
</head>
<body>
    <main>
        <h1>Оператор if-else</h1>
        <h3>варианты конструкции if-else</h3>
        $x = 7;
        <ul>
            <li><b>if($x < 10)</b> echo 'x меньше 10'; <br>
            <b>else</b> echo 'x больше либо равно 10';</li>
            <li><b>if($x < 10)</b> echo 'x меньше 10';<br>
            <b>elseif ($x > 10)</b> echo 'x больше 10';<br>
            <b>else</b> echo 'x равно 10';</li>
            <li><span class='red'>$s = ($x < 10)</span> 'Меньше 10'  <span class='red'>:</span> 'Больше либо равно 10';</li>
            <li><span class='red'>$test = $str?? false;</span> - новая конструкция в php7 если str существует то ее значение присвоится переменной test иначе false</li>
        </ul>
        <h2>Урок</h2>
        <a href="?com=add">Сложить</a>
        <a href="?com=mult">Умножить</a>
        <hr>
        <?php
            $x = 7;
            if($x < 10) echo 'x меньше 10';
            else echo 'x больше либо равно 10';
            echo '<br>';

            if ($x < 7) echo 'x меньше 7';
            elseif ($x > 7)echo 'x больше 7';
            else echo 'x = 7';
            echo '<br>';

            $a = 5;
            $b = 3;
            if ($a < $b || $b == 3)echo 'Истина';
            else echo 'Ложь';
            echo '<br>';

            if (isset($_GET['com'])) $com = $_GET['com'];
            else $com = false;
            echo "1 $com";
            echo '<br>';

            $com = isset($_GET['com'])? $_GET['com'] : false;
            echo "2 $com";
            echo '<br>';

            if(isset($_GET['com'])) $com = $_GET['com'];
            else $com = false;
            echo "3 $com";
            echo '<br>';

            $com = isset($_GET['com'])? $_GET['com'] : false;
            echo "4 $com";
            echo '<br>';

            $com = $_GET['com']?? false;
            echo "5 $com";
            echo '<br>';

            if ($com == 'add') {
                $summa = $a + $b;
                echo "$a + $b = $summa";
            }
                elseif ($com == 'mult'){
                $mult = $a * $b;
                echo "$a * $b = $mult";
                }
            else echo 'Неизвестная операция!';
        ?>
        <h2>Код</h2>
        <div class="code">
            $x = 7; <br>
            if($x &lt; 10) echo 'x меньше 10'; <br>
            else echo 'x больше либо равно 10'; <br>
            echo '&lt;br&gt;'; <br>
            <br>
            if ($x &lt; 7) echo 'x меньше 7'; <br>
            elseif ($x &gt; 7)echo 'x больше 7'; <br>
            else echo 'x = 7'; <br>
            echo '&lt;br&gt;'; <br>
            <br>
            $a = 5; <br>
            $b = 3; <br>
            if ($a &lt; $b || $b == 3)echo 'Истина'; <br>
            else echo 'Ложь'; <br>
            echo '&lt;br&gt;'; <br>
            <br>
            if (isset($_GET['com'])) $com = $_GET['com']; <br>
            else $com = false; <br>
            echo "1 $com"; <br>
            echo '&lt;br&gt;'; <br>
            <br>
            $com = isset($_GET['com'])? $_GET['com'] : false; <br>
            echo "2 $com"; <br>
            echo '&lt;br&gt;'; <br>
            <br>
            if(isset($_GET['com'])) $com = $_GET['com']; <br>
            else $com = false; <br>
            echo "3 $com"; <br>
            echo '&lt;br&gt;'; <br>
            <br>
            $com = isset($_GET['com'])? $_GET['com'] : false; <br>
            echo "4 $com"; <br>
            echo '&lt;br&gt;'; <br>
            <br>
            $com = $_GET['com']?? false; <br>
            echo "5 $com"; <br>
            echo '&lt;br&gt;'; <br>
            <br>
            if ($com == 'add') { <br>
                $summa = $a + $b; <br>
                echo "$a + $b = $summa"; <br>
            } <br>
                elseif ($com == 'mult'){ <br>
                $mult = $a * $b; <br>
                echo "$a * $b = $mult"; <br>
                } <br>
            else echo 'Неизвестная операция!';
</div>

        <h2>Задание</h2>        
        <ul>
            <li>Создайте переменную со значением в виде Вашего возраста.</li>
            <li>Выведите строку «Вам меньше 30 лет», если значение переменной меньше 30, «Вам 30 лет», если значение переменной 30 и «Вам больше 30 лет», если значение переменной больше 30.</li>
            <li>Создайте простую форму для ввода возраста.</li>
            <li>Получите из формы данные и запишите их в переменную из 1-го пункта.</li>
            <li>Выведите результат 2-го пункта для уже значения, присланного пользователем из формы. Например, если он вводит 35, должна появиться строка: «Вам больше 30 лет».</li>
        </ul>
        <h2>Реализация</h2>
        <form action="2.9.php" method="get">
            <p>Введите Ваш возраст : <input type="text" name="age" id=""></p>
            <button type="submit">Отправить</button>
        </form>
        <hr>
        <?php
            $age = 39;
            echo "Изначально переменная age = $age <br>";
            if($age < 30 ) echo 'Вам меньше 30 лет';
            elseif ($age > 30) echo 'Вам больше 30 лет';
            else echo 'Вам 30 лет';
            echo '<br>';
            $age = $_GET['age']?? false;
            echo ('Вы ввели возраст '.$age.' лет. <br>');
            if($age < 30 && is_numeric($age)) echo 'Вам меньше 30 лет';
            elseif ($age > 30 && is_numeric($age)) echo 'Вам больше 30 лет';
            elseif ($age = 30 && is_numeric($age)) echo 'Вам 30 лет';
            else echo 'Проверьте корректность введенных данных.';
        ?>
        <h2>Код</h2>
        <div class="code">
            $age = 39; <br>
            echo "Изначально переменная age = $age &lt;br&gt;"; <br>
            if($age &lt; 30 ) echo 'Вам меньше 30 лет'; <br>
            elseif ($age &gt; 30) echo 'Вам больше 30 лет'; <br>
            else echo 'Вам 30 лет'; <br>
            echo '&lt;br&gt;'; <br>
            $age = $_GET['age']?? false; <br>
            echo ('Вы ввели возраст '.$age.' лет. &lt;br&gt;'); <br>
            if($age &lt; 30 && is_numeric($age)) echo 'Вам меньше 30 лет'; <br>
            elseif ($age &gt; 30 && is_numeric($age)) echo 'Вам больше 30 лет'; <br>
            elseif ($age = 30 && is_numeric($age)) echo 'Вам 30 лет'; <br>
            else echo 'Проверьте корректность введенных данных.';<br>
        </div>
    </main>
</body>
</html>
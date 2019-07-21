<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\code.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Строковые операции</h1>
        <h2>Теория</h2>
        <ul>
            <li><b>.</b> - объединение 2-х строк</li>
            <li><b>$s[5]</b> - вывод 6-го символа в строке</li>
            <li><b>{$s}</b> - вывод строки прямо в тексте (без пробелов)</li>
            <li><b>\</b> - экранирование символа</li>
            <li><b>`команда`</b> - выполнить команду заключенную в обратные кавычки</li>
            <li><b>iconv('стартовая кодировка', 'целевая кодировка', 'строка')</b> - позволяет преобразовать строку из действующей кодировки в ожидаемую</li>
        </ul>
        <h2>Пример</h2>
        <?php
            $s_1 = 'string №1';
            $s_2 = 'string №2';
            echo $s_1.$s_2.'<br>';
            echo $s_1[5].'<br>';
            echo "Строка{$s_1}прямо в тексте <br>";
            echo "Строка \"{$s_1}\" заключенная в экранированные кавычки <br>";
            $s_3 = `date`;
            echo "Вызов команды windows date $s_3 <br>";
            echo iconv("CP866", "UTF-8", $s_3);
        ?>
        <h2>Код</h2>
        <div class="code">
            $s_1 = 'string №1'; <br>
            $s_2 = 'string №2'; <br>
            echo $s_1.$s_2.'&lt;br&gt;'; <br>
            echo $s_1[5].'&lt;br&gt;'; <br>
            echo "Строка{$s_1}прямо в тексте &lt;br&gt;"; <br>
            echo "Строка \"{$s_1}\" заключенная в экранированные кавычки &lt;br&gt;"; <br>
            $s_3 = `date`; <br>
            echo "Вызов команды windows date $s_3 &lt;br&gt;"; <br>
            echo iconv("CP866", "UTF-8", $s_3);
        </div>
        <h2>Задание</h2>
        <ul>
            <li>Создайте строковые переменные со следующими значениями: «Мой возраст» и «30 лет».</li>
            <li>Создайте третью строковую переменную со значением в виде конкатенации строк первой переменной, пробела и второй переменной из 1-го пункта.</li>
            <li>Выведите получившуюся переменную.</li>
            <li>Создайте строку, состоящую из 3-х обратных слешей (безусловно, их придётся в строке написать побольше, чтобы в итоге вывелось 3) и выведите её. Должно появиться следующее: \\\</li>
            <li>* Откройте текстовый файл в «Блокноте» или любом другом редакторе с помощью скрипта на PHP.</li>
        </ul>
        <h2>Реализация</h2>
            <?php
                $s_1 = '30 лет';
                $s_2 = 'Мой возраст';
                $s_3 = $s_2.' '.$s_1;
                echo $s_3;
                echo "<br>\\\\\\";
                echo `notepad`;
            ?>
        <h2>Код</h2>
        <div class="code">
                $s_1 = '30 лет'; <br>
                $s_2 = 'Мой возраст'; <br>
                $s_3 = $s_2.' '.$s_1; <br>
                echo $s_3; <br>
                echo "&lt;br&gt;\\\\\\"; <br>
                echo `notepad`;
        </div>
    </main>
</body>
</html>
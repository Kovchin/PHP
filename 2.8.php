<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\code.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Логические операции</title>
</head>
<body>
    <main>
        <h1>Логические операции</h1>
        <ul>
            <li><b>></b> - больше</li>
            <li><b><</b> - меньше</li>
            <li><b>==</b> - равно</li>
            <li><b>===</b> - эквивалентно</li>
            <li><b>>=</b> - больше или равно</li>
            <li><b><=</b> - меньше или равно</li>
            <li><b>!</b> - логическое НЕ</li>
            <li><b>&&</b> - логическое И</li>
            <li><b>||</b> - логическое ИЛИ</li>
            <li><b>xor</b> - исключающее ИЛИ</li>
        </ul>
        <h2>Урок</h2>
            <?php
            $x = 10;
            $y = 5;

            $b_1 = $x > 10;
            $b_2 = $y == 5;
            echo "x = $x; <br>  y = $y; <br>";
            echo "x > 10 - $b_1; <br> y = 5 - $b_2;<br>";

            $b_1 = true;
            $b_2 = false;
            echo "b_1 = $b_1; <br> b_2 = $b_2;<br>";
            echo 'Отрицание b_1 = '.(!$b_1).'<br>';
            echo 'Результат b_1 ИЛИ b_2 = '.($b_1 || $b_2).'<br>';
            echo 'Результат b_1 И b_2 = '.($b_1 && $b_2).'<br>';
            echo 'Результат b_1 ИСКЛЮЧАЮЩЕЕ ИЛИ b_2 = '.($b_1 xor $b_2).'<br>';

            $s = '10';
            echo "x = $x типа ".gettype($x).'<br>';
            echo "s = $s типа ".gettype($s).'<br>';
            echo 'x = s - '.($x == $s).'<br>';
            echo 'x эквивалентно s - '.($x === $s).'<br>';
            ?>
            <h2>Код<h2>
            <div class="code">
            $x = 10;<br>
            $y = 5;<br>
            <br>
            $b_1 = $x > 10;<br>
            $b_2 = $y == 5;<br>
            echo "x = $x; &lt;br&gt;  y = $y; &lt;br&gt;";<br>
            echo "x > 10 - $b_1; &lt;br&gt; y = 5 - $b_2;&lt;br&gt;";<br>
            <br>
            $b_1 = true;<br>
            $b_2 = false;<br>
            echo "b_1 = $b_1; &lt;br&gt; b_2 = $b_2;&lt;br&gt;";<br>
            echo 'Отрицание b_1 = '.(!$b_1).'&lt;br&gt;';<br>
            echo 'Результат b_1 ИЛИ b_2 = '.($b_1 || $b_2).'&lt;br&gt;';<br>
            echo 'Результат b_1 И b_2 = '.($b_1 && $b_2).'&lt;br&gt;';<br>
            echo 'Результат b_1 ИСКЛЮЧАЮЩЕЕ ИЛИ b_2 = '.($b_1 xor $b_2).'&lt;br&gt;';<br>
            <br>
            $s = '10';<br>
            echo "x = $x типа ".gettype($x).'&lt;br&gt;';<br>
            echo "s = $s типа ".gettype($s).'&lt;br&gt;';<br>
            echo 'x = s - '.($x == $s).'&lt;br&gt;';<br>
            echo 'x эквивалентно s - '.($x === $s).'&lt;br&gt;';
            </div>
    </main>
</body>
</html>
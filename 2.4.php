<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/code.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ссылочные переменные</title>
</head>
<body>
    <main>
        <h1>Ссылочные переменные</h1>
        <h2>Теория</h2>
        <p>Есть возможность сделать ссылку на переменную</p>
        <ul>
            <li>Жесткие ссылки</li>
            <div class="code">
                $a = 5; <br>
                $b = & $a; <br>
                echo $b //выведется 5 так как $b ссылается на ту же область памяти <br>
                $b = 7; <br>
                echo $a; //выведет 7 так как строкой выше мы поменяли область памяти что отвечает за значение $a и $b <br>
                unset($a); <br>
                echo $b //выведет 7 так как мы удалили только ссылку на область памяти $a. Однако значение в памяти осталось и сылка на нее $b все так же прекрасно работает <br>
            </div>
            <li>Символические ссылки</li>
            <div class="code">
                $a = 5; <br>
                $b = 'a'; <br>
                echo $$b; //Выведет значение 5<br>
                $$b = 10; <br>
                echo $a; //Выведет 10 <br>
                unset ($a); <br>
                echo $$b;// Ничего не вернет так как выше мы удалили переменную на которую ссылается $$b
            </div>
            <li>Ссылки на объекты</li>
            <p>В этом уроке небыли рассмотрены</p>
        </ul>
        <h2>Задание</h2>
        В этом уроке я поигрался с значениями ссылочных переменных и за одно как оказалось перевыполнил задание. :-)
        <br>
        <?php
        $a = 5;
        $b = & $a;
        echo "a = $a; <br> b = $b; <br>";
        $b = 10;
        echo "a = $a; <br> b = $b; <br>";
        unset ($a);
        echo "a = $a; <br> b = $b; <br>";
        echo '<hr>';
        $a = 5;
        $b = 'a';
        echo "a = $a; <br> b = ";
        echo $$b;
        echo '<br>';
        $$b = 10;
        echo "a = $a; <br> b = $b; <br> b = ";
        echo $$b;
        echo '<br>';
        unset ($a);
        echo "a = $a; <br> b = $b; <br> b = ";
        echo $$b;
        ?>
        <h2>Код</h2>
        <div class="code">
        $a = 5; <br>
        $b = & $a; <br>
        echo "a = $a; &lt;br&gt; b = $b; &lt;br&gt;"; <br>
        $b = 10; <br>
        echo "a = $a; &lt;br&gt; b = $b; &lt;br&gt;"; <br>
        unset ($a); <br>
        echo "a = $a; &lt;br&gt; b = $b; &lt;br&gt;"; <br>
        echo '&lt;hr&gt;'; <br>
        $a = 5; <br>
        $b = 'a'; <br>
        echo "a = $a; &lt;br&gt; b = "; <br>
        echo $$b; <br>
        echo '&lt;br&gt;'; <br>
        $$b = 10; <br>
        echo "a = $a; &lt;br&gt; b = $b; &lt;br&gt; b = "; <br>
        echo $$b; <br>
        echo '&lt;br&gt;'; <br>
        unset ($a); <br>
        echo "a = $a; &lt;br&gt; b = $b; &lt;br&gt; b = "; <br>
        echo $$b;
        </div>
    </main>
</body>
</html>
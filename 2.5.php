<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Константы</title>
</head>
<body>
    <main>
        <h1>Константы</h1>
        <h2>Теория</h2>
        <p>Соглаcно PSR стандартам в PHP принято писать имена констант большими буквами</p>
        <div class="code">
            <p>Объявление константы</p>
            <code>define('MT_CONST', 5);</code>
            <p>Функция проверяет есть ли константа (аналог функции isset() только для констант)</p>
            <code>echo defined('MY_CONST');</code>
            <p>Вызов значения константы происходит посредством простого указания ее имени</p>
            <code>echo MY_CONST;</code>
            <p>Либо еще один аналог вызова константы</p>
            <code>&lt;?=MY_CONST?&gt;</code>
        </div>
        <hr>
        <h2>Код на PHP</h2>
        <?php
            define('MY_CONST', 5);
            echo 'Проверим есть ли константа MY_CONST = ';
            echo defined('MY_CONST');
            echo '<br> Проверим значение константы MY_CONST = ';
            echo MY_CONST;
            echo '<br>';
            echo 'И еще один вариант вызова константы одной строкой';
        ?>
        <?=MY_CONST?>
        <div class="code">
        &lt;?php
            define('MY_CONST', 5); <br>
            echo 'Проверим есть ли константа MY_CONST = '; <br>
            echo defined('MY_CONST'); <br>
            echo '&lt;br&gt; Проверим значение константы MY_CONST = '; <br>
            echo MY_CONST; <br>
            echo '&lt;br&gt;'; <br>
            echo 'И еще один вариант вызова константы одной строкой'; <br>
        ?&gt;<br>
        &lt;?=MY_CONST?&gt;
        </div>
        <h2>Задание</h2>
        <ul>
            <li>Создайте константу с размером шрифта.</li>
            <li>Создайте простую HTML-страницу (обязательно с DOCTYPE и всеми базовыми HTML-тегами: html, head, body).</li>
            <li>Выведите пару абзацев текста с помощью тега &lt;p&gt;, безусловно, внутри &lt;body&gt;.</li>
            <li>Установите размер текста для тега &lt;p&gt; в теге &lt;style&gt; внутри тега &lt;head&gt;, подставив значение из константы, созданной в 1-м пункте.</li>
        </ul>
        <?php
            define('MY_COLOR','20px')
        ?>
        <p style="font-size: <?=MY_COLOR?>;">Lorem ipsum dolor sit amet.</p>
        <h2>КОД</h2>
        <div class="code">
        &lt;?php <br>
            <b>define('MY_COLOR','20px')</b><br>
        ?&gt;<br>
        &lt;p style="font-size: <b>&lt;?=MY_COLOR?&gt;</b>;"&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
        </div>
        </main>
</body>
</html>
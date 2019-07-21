<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Массив $_SERVER</title>
</head>
<body>
    <main>
        <h1>Массив $_SERVER</h1>
        <pre>
        <?php 
            print_r($_SERVER);
        ?>
        </pre>
        <h2>Задание</h2>
            <p>Выведите некоторые данные в браузер, в таком виде: «Ваш IP-адрес: …<br />Ваш браузер: …».</p>
        <?php
            echo 'Ваш IP адрес - '.$_SERVER['REMOTE_ADDR'].'<br>';
            echo 'Ваш браузер - '.$_SERVER['HTTP_USER_AGENT'].'<br>';
            echo 'Ваша системная директория - '.$_SERVER['SystemRoot'].'<br>';
        ?>
        <div class="code">
            echo 'Ваш IP адрес - '.$_SERVER['REMOTE_ADDR'].'&lt;br&gt;'; <br>
            echo 'Ваш браузер - '.$_SERVER['HTTP_USER_AGENT'].'&lt;br&gt;'; <br>
            echo 'Ваша системная директория - '.$_SERVER['SystemRoot'].'&lt;br&gt;';
        </div>
    </main>
</body>
</html>
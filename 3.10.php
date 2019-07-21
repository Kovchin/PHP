<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Запуск внешних программ</title>
</head>

<body>
    <h1>Запуск внешних программ</h1>
    <ul>
        <li>
            <div class="code">
                $execute = `dir`;
            </div>
        </li>
        <li>
            <div class="code">
                system ('dir');
            </div>
        </li>
        <li>
            <div class="code">
                execute = exec('notepad 3/3.10.txt');
            </div>
        </li>
    </ul>
    <h3>Задание: Запустить при помощи PHP текстовый файл по адресу 3/3.10.txt</h3>
    <?php
    $execute = `dir`;
    echo '<pre>';
    //echo (iconv('cp866', 'UTF-8', $execute));
    echo '</pre>';
    //system ('dir');
    
    $execute = exec('notepad 3/3.10.txt');
    ?>
    <div class="code">
        exec ('notepad 3/3.10.txt');
    </div>
</body>

</html>
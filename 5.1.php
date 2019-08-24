<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Режим вывода ошибок</title>
</head>
<body>
    <h1>Режим вывода ошибок</h1>
    <ul>
        <li>E_ERROR 1 - фатальные ошибки</li>
        <li>E_WARNING 2 - предупреждения</li>
        <li>E_PARSE 4 - ошибки парсинга (семантика кода, запятые точки и т.д.)</li>
        <li>E_NOTICE 8 - уведомления</li>
        <hr>
        <li>E_CORE_ERROR 16 - фатальная ошибка ядра</li>
        <li>E_CORE_WARNING 32 - предупреждение ядра</li>
        <hr>
        <li>E_COMPILE_ERROR 64 - фатальные ошибки компиляции</li>
        <li>E_COMPILE_WARNING 128- предупреждения компиляции</li>
        <hr>
        <li>E_USER_ERROR 256 - пользовательская критическая ошибка</li>
        <li>E_USER_WARNING 512 - пользовательское предупреждение</li>
        <li>E_USER_NOTICE 1024 - описание компиляции</li>    
        <hr>
        <li>E_STRICT 2048 - успользование устаревшей конструкции</li>
        <li>E_RECOVERABLE_ERROR 4096 - фатальная ошибка но исли мы ее описали то программа продолжит выполнение</li>
        <li>E_DEPRECATED 8192 - предпреждение что в следующей версии php эта функция не будет работать (устареет)</li>
        <li>E_USER_DEPRECATED 16384 - пользовательское предпреждение что в следующей версии php эта функция не будет работать (устареет)</li>
        <hr>
        <li>E_ALL 32767- отображать все ошибки</li>
    </ul>
    <hr>
    <p>echo E_ALL;</p>
    <?php
        echo E_ALL;
    ?>
    <hr>
    <p>error_reporting(1) - выведет только критические ошибки</p>
    <p>error_reporting(3) - выведет только критические ошибки и предупреждения (1+2 = 3)</p>
    <p>error_reporting(E_ERROR | E_WARNING) - то же самое что и выше только понятным языком</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/code.css">
    <title>Инструкции include и require</title>
</head>
<body>
    <main>
        <h1>Инструкции include и require</h1>
        <ul>
            <li>include 'filename.php';</li>
            <li>require 'filename.php';</li>
            <li>include_once 'filename.php';</li>
            <li>require_once 'filename.php';</li>
        </ul>
        <?php require_once '2/2.24_lib.php';
            hello(5);
        ?>
            <h2>Задание</h2>
            <ul>
                <li>Напишите функцию, которая будет выполнять задачу из предыдущего упражнения. То есть принимает строку, а возвращает строку без символов на чётных позициях.</li>
                <li>Поместите эту функцию в отдельный файл и отправьте этот файл в директорию lib рядом с index.php</li>
                <li>В index.php подключите этот файл и воспользуйтесь написанной функцией при обработке формы.</li>
            </ul>

        <?php
        $str = 'Hello world';
        echo $str.'<br />';
            echo get_mass($str);

        ?>

    </main> 
</body>
</html>
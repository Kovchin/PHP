<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\code.css">
    <title>Функйции для работы с DNS сервером</title>
</head>
<body>
    <h1>Функции для работы с DNS сервером</h1>
    <?php
        $ipadress = gethostbyname('google.com');
        $hostname = gethostbyaddr($ipadress);
        echo 'IP google.com = '.$ipadress.'<br />';
        echo 'И обратная операция = '.$hostname;
    ?>
    <div class="code">
    $ipadress = gethostbyname('google.com'); <br />
        $hostname = gethostbyaddr($ipadress); <br />
        echo 'IP google.com = '.$ipadress.'&lt;br /&gt;'; <br />
        echo 'И обратная операция = '.$hostname; <br />
    </div>
</body>
</html>
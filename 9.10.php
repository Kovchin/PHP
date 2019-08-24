<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Выборка данных из БД</title>
</head>
<body>
    <h1>Выдорка данных из БД</h1>
    <?php
        define ('DB_HOST', 'php');
        define ('DB_USER', 'root');
        define ('DB_PASSWORD', '');
        define ('DB_NAME', 'test');

        $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if($mysqli->connect_errno) exit('Ошибка подключения к базе данных');
        $mysqli->set_charset('utf8');

        $query = 'SELECT * FROM `first`';
        $result_set = $mysqli->query($query);

        $table = [];

        while (($row = $result_set->fetch_assoc()) != false){
            $table[] = $row;
        }

        print_r($table);

        $mysqli->close();

    ?>
</body>
</html>